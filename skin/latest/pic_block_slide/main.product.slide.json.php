<?php
	include_once('../../../../../common.php');
	include_once(G5_LIB_PATH.'/thumbnail.lib.php');
	add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
	$thumb_width = 500;
	$thumb_height = 400;
	$list_count = (is_array($list) && $list) ? count($list) : 0;
	// $cache_time 캐시 갱신시간
	function main_slide($skin_dir='', $bo_table, $rows=10, $subject_len=40, $cache_time=1, $options='')
	{
		global $g5;
		
		list($bo_table, $category) = explode("|", $bo_table);
		if($category) {
			$categories = explode(",", $category);
			$where = " AND ca_name IN('".implode("', '", $categories)."')";
		}
		if (!$skin_dir) $skin_dir = 'basic';

		if(preg_match('#^theme/(.+)$#', $skin_dir, $match)) {
			if (G5_IS_MOBILE) {
				$latest_skin_path = G5_THEME_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
				if(!is_dir($latest_skin_path))
					$latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
				$latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
			} else {
				$latest_skin_path = G5_THEME_PATH.'/'.G5_SKIN_DIR.'/latest/'.$match[1];
				$latest_skin_url = str_replace(G5_PATH, G5_URL, $latest_skin_path);
			}
			$skin_dir = $match[1];
		} else {
			if(G5_IS_MOBILE) {
				$latest_skin_path = G5_MOBILE_PATH.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
				$latest_skin_url  = G5_MOBILE_URL.'/'.G5_SKIN_DIR.'/latest/'.$skin_dir;
			} else {
				$latest_skin_path = G5_SKIN_PATH.'/latest/'.$skin_dir;
				$latest_skin_url  = G5_SKIN_URL.'/latest/'.$skin_dir;
			}
		}
		
		$list = array();
		$board = get_board_db($bo_table, true);
		$bo_subject = get_text($board['bo_subject']);
		$tmp_write_table = $g5['write_prefix'] . $bo_table; // 게시판 테이블 전체이름
		$sql = " select * from {$tmp_write_table} where wr_is_comment = 0".$where." order by wr_num limit 0, {$rows} ";
		$result = sql_query($sql);
		for ($i=0; $row = sql_fetch_array($result); $i++) {
			try {
				unset($row['wr_password']);     //패스워드 저장 안함( 아예 삭제 )
			} catch (Exception $e) {
			}
			$row['wr_email'] = '';              //이메일 저장 안함
			if (strstr($row['wr_option'], 'secret')){           // 비밀글일 경우 내용, 링크, 파일 저장 안함
				$row['wr_content'] = $row['wr_link1'] = $row['wr_link2'] = '';
				$row['file'] = array('count'=>0);
			}
			$list[$i] = get_list($row, $board, $latest_skin_url, $subject_len);
			$list[$i]['first_file_thumb'] = (isset($row['wr_file']) && $row['wr_file']) ? get_board_file_db($bo_table, $row['wr_id'], 'bf_file, bf_content', "and bf_type between '1' and '3'", true) : array('bf_file'=>'', 'bf_content'=>'');
			$list[$i]['bo_table'] = $bo_table;
			// 썸네일 추가
			if($options && is_string($options)) {
				$options_arr = explode(',', $options);
				$thumb_width = $options_arr[0];
				$thumb_height = $options_arr[1];
				$thumb = get_list_thumbnail($bo_table, $row['wr_id'], $thumb_width, $thumb_height, false, true);
				// 이미지 썸네일
				if($thumb['src']) {
					$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
					$list[$i]['img_thumbnail'] = '<a href="'.$list[$i]['href'].'" class="lt_img">'.$img_content.'</a>';
				// } else {
				//     $img_content = '<img src="'. G5_IMG_URL.'/no_img.png'.'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'" class="no_img">';
				}
			}
		}
		g5_latest_cache_data($bo_table, $list);
		if(G5_USE_CACHE) {
			$caches = array(
				'list' => $list,
				'bo_subject' => sql_escape_string($bo_subject),
			);
			g5_set_cache($cache_file_name, $caches, 3600 * $cache_time);
		}
		

		return $list;
	}
	$list = main_slide('theme/pic_block_slide', $bo_table."|".$ca_name, 20, 23);
	$thumb_width = 500;
	$thumb_height = 400;
	$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
<ul>
<?php
for ($i=0; $i<$list_count; $i++) {
	$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
	if($thumb['src']) {
		$img = $thumb['src'];
	} else {
		$img = G5_IMG_URL.'/no_img.png';
		$thumb['alt'] = '이미지가 없습니다.';
	}
	$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
?>
	<li class="galley_li">
		<a href="<?php echo $list[$i]['href'] ?>" class="lt_img"><?php echo $img_content; ?></a>
		<?php
		if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

		echo "<div class=\"lt_name\"><a href=\"".$list[$i]['href']."\"> ";
		if ($list[$i]['is_notice'])
		echo "<strong>".$list[$i]['subject']."</strong>";
		else
		echo $list[$i]['subject'];
		echo "</a></div>";		
		?>		
		<div class="lt_info">
		<span class="lt_nick"><?php echo $list[$i]['name'] ?></span>
		<span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>              
		</div>
	</li>
<?php 
}  
?>
</ul>
