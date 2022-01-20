<?php
include_once('./_common.php');
$g5['title'] = '회사연혁';
include_once(G5_THEME_PATH.'/head.php');
?>

<div id="ctt_con" class="sub01_02">
	<div class="tab_menu">
		<ul>
			<li><a href="<? echo G5_THEME_URL ?>/sub01/sub02.php">2010 ~</a></li>
			<li class="on"><a href="<? echo G5_THEME_URL ?>/sub01/sub02_02.php">2000 ~ 2010</a></li>
			<li><a href="<? echo G5_THEME_URL ?>/sub01/sub02_03.php">~ 1999</a></li>
		</ul>
	</div>
	
	<section>
		<div class="history_slogun">
			<header>
				<h2>새로운 도약의 시대</h2>
				<p>사업 안정성 확보와 글로벌 사업 확장을 위한 기반을 마련합니다.</p>
				<img src="<? echo G5_THEME_URL ?>/img/sub01_02_img01.png"  alt=" " />
			</header>
		</div>
		<div class="history_list">
			<ul>
				<li>
					<h3>2020</h3>
					<ul>
						<li><span>2월</span> 75형 마이크로 LED 세계 최초 공개</li>
						<li><span>1월</span> 새로운 CSR 비전 '함께가요 미래로! Enabling People' 발표</li>
					</ul>
				</li>
				<li>
					<h3>2019</h3>
					<ul>
						<li>2030년까지 시스템 반도체에 133조원 투자 - 1만 5,000명 채용</li>
						<li>새로운 모바일 카테고리를 여는 '갤럭시폴드 5G' 출시</li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>