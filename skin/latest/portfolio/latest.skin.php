<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 1900;
$thumb_height = 980;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<!-- data-ratio : 이미지 비율 -->
<div class="fotorama" data-transition="slide" data-transitionduration="600" data-width="100%" data-ratio="1900/980" data-nav="thumbs" data-navposition="top" data-thumbwidth="80" data-thumbheight="80" data-arrows="false" data-click="false" data-loop="false">	
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
	
	<?php echo $img_content; ?>
	
	<?php }  ?>
	<?php if ($list_count == 0) { //게시물이 없을 때  ?>
	<p class="empty">게시물이 없습니다.</p>
	<?php }  ?>
</div>
