<?php
	include_once('./_common.php');
$g5['title'] = 'IGC Business Model';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<?php 
	/*	
		기본 css(11~15라인)
		기본 css 는 적용하지 않습니다. 
	*/ 
?>
<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:0px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


<style>
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:100%; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	
	.vision_type4 {width:100%; min-width:320px;  margin:0 auto; }
	.vision_type4:after{content:""; clear:both; display:block;}
	.vision_type4 h2.title {text-align:center; font-size:2em; font-weight:400; color:#333; line-height:1.2em; margin-bottom:40px; }
	.vision_type4 h2.title i{color:#aaa;}

	.vision_type4 .vision_area { width:100%; padding:0;  text-align: center; margin-top:50px; overflow:hidden;}
	.vision_type4 .vision_area::after {content:'';display:table; clear:both;}
    .vision_type4 .vision_area li {display:inline-block; padding:0; margin-left:-20px;}
    .vision_type4 .vision_area li:first-child {margin-left: 0;} 
    .vision_type4 .vision_area .i_box {position:relative; display:inline-block; padding-top:30%; width:15rem; height:15rem; text-align:center; background:rgba(43,129,208,0.9); border-radius:100%; box-sizing: border-box;}
    .vision_type4 .vision_area li:nth-child(2n) .i_box {background: rgba(137,137,137,0.65);}
	.vision_type4 .vision_area .i_box i {display: inline-block; padding:0; margin:0; font-size:3em; color:#fff;}
    .vision_type4 .vision_area .i_box strong {display:block; margin-top:10%; font-size:2em; color:#fff; font-weight:500; letter-spacing:-0.03em;}	

	.vision_type4 .con_bg{ width:100%; max-width:100%; margin:60px auto; background:#fcfcfc;}
    .vision_type4 .con_txt { width:100%; max-width:1200px; margin:60px auto; }
	.vision_type4 .con_txt:after{ content:""; display:block; clear:both;}
	.vision_type4 .con_box { float:left; width:49.5%; height:150px; ; margin:25px 0; text-align:left; overflow:hidden; border-right:1px solid #ddd; }
	.vision_type4 .con_box:nth-child(2n){border-right:0px;}
	.vision_type4 .con_box:after{ content:""; display:block; clear:both;}
	.vision_type4 .con_box .icon { float:left; width:15%; text-align:center; }
	.vision_type4 .con_box .icon i {width:50px; height:50px; line-height:50px; text-align:center; color:#8BCE7B; font-size:2em; }
	.vision_type4 .con_box .info { float:left; width:80%;}
	.vision_type4 .con_box .info .txt_tit { font-size:1.5em; }
	.vision_type4 .con_box .info .txt_list { font-size:1em; color:#777; line-height:1.6em; margin-top:20px; }


	@media screen and (max-width: 992px){

		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}

		.vision_type4 h2.title { font-size:1.5em; }
		.vision_type4 span.stitle{font-size:1em; width:90%;}

	}

	@media screen and (max-width: 768px){

		.vision_type4 .vision_area li {float:left; width:50%; padding:0; margin:0; margin-bottom:5%; }
		.vision_type4 .vision_area li:nth-child(even) {margin-left: 0;} 
		.vision_type4 .vision_area li:last-child {margin-bottom:0;}
		.vision_type4 .vision_area .i_box {  padding-top:25%; }
		.vision_type4 .vision_area .i_box strong { font-size:2em;}

		.vision_type4 .con_box { float:left; width:100%; height:auto; padding-bottom:50px; padding-left:0px;  border-bottom:1px solid #ddd; border-right:0px;}
		.vision_type4 .con_box:last-child { border-bottom:0;}
	
	}


	@media screen and (max-width: 480px) {		
		
		.vision_type4 h2.title br{ display:inline !important; }
		.vision_type4 .vision_area li { width:100%; }
		.vision_type4 .vision_area .i_box {padding-top:12%; width:12rem; height:12rem; }
		.vision_type4 .vision_area .i_box strong { font-size:1.5em;}

	}



</style>

<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">VALUE</span> (주)아이지씨인증원 </h1>
		<h2 class="sub_txt">고객님의 기업 가치를 소중히 여기는 </h2>
	</section>

	<section class="vision_type4">
		<h2 class="title">
			<sup><i class="fas fa-quote-left"></i></sup> &nbsp;(주)아이지씨인증원의 목표와 핵심가치, <br style="display:none;">IGC Credo&nbsp; <sup><i class="fas fa-quote-right"></sup></i>
		</h2>

		<ul class="vision_area">
			<li>
				<span class="i_box">
					<i class="fas fa-globe-asia"></i>
					<strong>미래지향</strong>
				</span>
			</li>
			<li>
				<span class="i_box">
					<i class="far fa-lightbulb"></i>
					<strong>도전혁신</strong>
				</span>
			</li>
			<li>
				<span class="i_box">
					<i class="fas fa-seedling"></i>
					<strong>사회책임</strong>
				</span>
			</li>
			<li>
				<span class="i_box">
					<i class="fas fa-assistive-listening-systems"></i>
					<strong>소통화합</strong> 
				</span>
			</li>
		</ul> 


		<div class="con_bg">
			<div class="con_txt">
				<div class="con_box">
					<div class="icon"><i class="fas fa-globe-asia"></i></div>
					<div class="info">
						<h2 class="txt_tit">미래지향</h2>
						<p class="txt_list">이곳은 간단한 설명글이 들어갈 자리입니다.<br>이곳은 간단한 설명글이 들어갈 자리입니다. 이곳은 간단한 설명글이 들어갈 자리입니다. </p>
					</div>
				</div>

				<div class="con_box">
					<div class="icon"><i class="far fa-lightbulb"></i></div>
					<div class="info">
						<h2 class="txt_tit">도전혁신</h2>
						<p class="txt_list">이곳은 간단한 설명글이 들어갈 자리입니다. <br>이곳은 간단한 설명글이 들어갈 자리입니다. 이곳은 간단한 설명글이 들어갈 자리입니다.</p>
					</div>
				</div>

				<div class="con_box">
					<div class="icon"><i class="fas fa-seedling"></i></div>
					<div class="info">
						<h2 class="txt_tit">사회책임</h2>
						<p class="txt_list">이곳은 간단한 설명글이 들어갈 자리입니다. <br>이곳은 간단한 설명글이 들어갈 자리입니다. 이곳은 간단한 설명글이 들어갈 자리입니다. </p>
					</div>
				</div>

				<div class="con_box">
					<div class="icon"><i class="fas fa-assistive-listening-systems"></i></div>
					<div class="info">
						<h2 class="txt_tit">소통화합</h2>
						<p class="txt_list">이곳은 간단한 설명글이 들어갈 자리입니다.<br> 이곳은 간단한 설명글이 들어갈 자리입니다. 이곳은 간단한 설명글이 들어갈 자리입니다. </p>
					</div>
				</div>
			</div>
		</div>

	</section>	
	
</div>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>