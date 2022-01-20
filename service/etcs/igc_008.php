<?php
include_once('./_common.php');
$g5['title'] = '오시는 길';
include_once(G5_THEME_PATH.'/head.php');
?>

<div id="ctt_con" class="sub01_03">
	<!--
		* 카카오맵 - 약도서비스
		* 한 페이지 내에 약도를 2개 이상 넣을 경우에는
		* 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
	-->
	<!-- 1. 약도 노드 -->
	<div id="daumRoughmapContainer1584435077831" class="root_daum_roughmap root_daum_roughmap_landing"></div>
	
	<!-- 2. 설치 스크립트 -->
	<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
	
	<!-- 3. 실행 스크립트 -->
	<script charset="UTF-8">
		new daum.roughmap.Lander({
			"timestamp" : "1584435077831",
			"key" : "xj65",
			"mapWidth" : "",
			"mapHeight" : ""
		}).render();
	</script>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>