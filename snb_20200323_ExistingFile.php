<div id="snb">
	<div class="wrap">
		<ul class="depth1">
			<li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a></li>
			<?php
				################################################################################################
				##### 관리자 메뉴설정을 아래와 같이 한다고 가정하에 왼쪽 메뉴 설정  (bo_table 기준으로 작업)
				################################################################################################
				##### 게시판이 아닐때 : /theme/a01/sub01/sub01.php
				##### 게시판 일때 : /bbs/board.php?bo_table=product01
				################################################################################################
			
				// 게시판이 아니고 co_id 값이 없을 때
				if($bo_table == "" && $co_id == "") {
					$url = preg_replace('/(qawrite\.php|qaview\.php)/i', 'qalist.php', $_SERVER['SCRIPT_NAME']); // 일대일상대 적용
				// 게시판일때
				}else{
					$base_url = preg_replace('/write\.php/i', 'board.php', $_SERVER['SCRIPT_NAME']);
					// 인터넷 주소창에 "&" 없는 경우 - 글목록/글등록/글수정
					if(strpos($_SERVER['QUERY_STRING'], "&") === false) {
						$url = $base_url."?".$_SERVER['QUERY_STRING'];
					// 인터넷 주소창에 "&" 있는 경우 - 글보기, 글검색
					}else{
						$query_string = preg_replace('/(w=u&)/i', '', $_SERVER['QUERY_STRING']);
						$url = $base_url."?".substr($query_string, 0, strpos($query_string, "&"));
					}
				}
			
				$sql = " select * from {$g5['menu_table']} where length(me_code) = '4' and me_link like '%".$url."%' and me_use = '1' order by me_order, me_id ";
				$query = sql_query($sql, false) ;
				$total  = sql_num_rows($query) ;
				$list = array() ;
				if($total > 0) {
					$row = sql_fetch_array($query);
					$keyword =  $row['me_code'] ;
					if(strlen($keyword) >= 2) {
						$filter_keyword = substr($keyword, 0, 2);
						$sql = " select * from {$g5['menu_table']} where me_code like '{$filter_keyword}%' and me_use = '1' order by me_order, me_code ";
						$query = sql_query($sql, false);
						$num = sql_num_rows($query);
						for($i=0; $i < $num;$i++) {
							$list[$i] = sql_fetch_array($query);
						}
					}
				}	
				
				// 메뉴 자체가 있을 경우
				if (count($list) > 0) {		
			?>
			<?php for($i=0;$i<count($list);$i++) { $class = ""; if(strpos($list[$i]['me_link'], $url) !== false) $class = " class=\"on\"";
				if ($i == 0) { ?>
			<li><?php echo $list[$i]['me_name']?> <span class="arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>
			<li>				
				<?php echo $row['me_name']?> <span class="arrow on"><i class="fa fa-chevron-circle-down" aria-hidden="true"></i></span>
				<ul>				
				<?php } else { ?>				
					<li <?php echo $class?>><a href="<?php echo $list[$i]['me_link']?>" target="_<?php echo $list[$i]['me_target']?>"><?php echo $list[$i]['me_name']?></a></li>
				<?php } } ?>
				</ul>				
			</li>
			<?php } else { ?>	
			<li class="last"><?php echo $g5['title']?> <span class="arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></span></li>
		<?php } ?>	
		</ul>
	</div>
</div>

<script>
$(function(){
	$("#snb .depth1").find("> li").click(function(){
		$(this).find("> ul").slideToggle();
	})
})
</script>