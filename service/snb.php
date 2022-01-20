<div id="snb" class="left_snb">
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
    <h2><?php echo $list[$i]['me_name']?></h2>
	<ul>
    <?php } else { ?>
    	<li <?php echo $class?>><a href="<?php echo $list[$i]['me_link']?>" target="_<?php echo $list[$i]['me_target']?>"><?php echo $list[$i]['me_name']?></a></li>
    <?php } } ?>
	</ul>
<?php } else { ?>
	
<?php } ?>
</div>

<div class="left_cs">
	<h2>CS Center</h2>
	<p class="tel">Tel. 02-6749-0723</p>
	<p class="time"><i class="fa fa-clock-o" aria-hidden="true"></i> AM 9:00 ~ PM 6:00</p>
	<p class="info">토,일,공휴일은 휴무입니다.</p>
	<dl>
		<dt><i class="fa fa-fax" aria-hidden="true"></i></dt>
		<dd>02.6749.0711</dd>
		<dt><i class="fa fa-envelope-o" aria-hidden="true"></i></dt>
		<dd>info@igcert.org</dd>
	</dl>
	<ul class="banner">
		<li><a href="/bbs/board.php?bo_table=qa"><i class="fa fa-comments-o" aria-hidden="true"></i> 묻고답하기</a></li>
		<li><a href="/bbs/qalist.php"><i class="fa fa-user-o" aria-hidden="true"></i> 1:1상담</a></li>
	</ul>
</div>