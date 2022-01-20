<?php
	include_once('./_common.php');
$g5['title'] = '시스템인증';
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>
<!----style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다. */	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:15px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:0px;}/* 메인메뉴 배경 전체 높이 TOP = 0 */
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style----->

<script src="http://code.jquery.com/jquery-latest.min.js" language="javascript"></script>
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">



<style>
	.fc_pointer {color:#1F88E5; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}


	.business_type1 {width:100%; max-width:1200px; margin:0 auto; }
	.business_type1:after{content:""; display:block; clear:both;}
	.business_type1 .con_img {width:100%; }
	.business_type1 .con_img img {width:100%; height:auto; }
	.business_type1 .txt_area {width:100%; padding:0px; padding-bottom:50px; margin-top:0px; word-break: keep-all;}
	.business_type1 .txt_area:after{content:""; display:block; clear:both;}
	.business_type1 .txt_area .txt01 { position:relative; float:left; width:50%;  }
	.business_type1 .txt_area .txt01:after { position:absolute; left:5%; top:0;  content:""; display:inline-block; width:4px; height:100%; background:#222; }
	.business_type1 .txt_area .txt01 p { padding:0; margin:0; padding-left:10%; padding-right:20px;}
	.business_type1 .txt_area .txt01 span.tit { display:block; font-size:2.2em; color:#000; font-weight:700; line-height:1.2em; margin-bottom:20px; }
	.business_type1 .txt_area .txt01 span.txt { display:block; font-size:1.15em; color:#333; font-weight:400; }
	.business_type1 .txt_area .txt02 { float:left; width:50%; }
	.business_type1 .txt_area .txt02 ul {margin:0; padding:0;}
	.business_type1 .txt_area .txt02 ul li { position:relative; font-size:1em; color:#555; font-weight:400; line-height:1.4em; list-style:none; padding-left:3%; margin-bottom:10px; }
	.business_type1 .txt_area .txt02 ul li:before {position:absolute; top:8px; left:0; content:""; display:inline-block; width:4px; height:4px; background:#555; margin-right:10px;vertical-align:middle;}
	.business_type1 .business_info { width:100%; margin-bottom:50px;}
	.business_type1 .business_info:after { content:""; display:block; clear:both;}
	.business_type1 .business_info li {float:left; overflow:hidden; position:relative; width:25%; height:450px; text-align:center; box-sizing:border-box; border-right:1px solid #fff;}
	.business_type1 .business_info li:nth-child(1) {background:url('./image/business_img1.jpg')no-repeat 50% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(2) {background:url('./image/business_img2.jpg')no-repeat 50% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(3) {background:url('./image/business_img3.jpg')no-repeat 50% 0;  background-size:cover;}
	.business_type1 .business_info li:nth-child(4) {background:url('./image/business_img4.jpg')no-repeat 50% 0;  background-size:cover; border-right:0px;}
	.business_type1 .business_info li .summary {position:absolute; width:100%; height:100%; cursor:pointer; z-index:10; transition:all .5s ease; -moz-transition:all .5s ease; -ms-transition:all .5s ease; -webkit-transition:all .5s ease; -o-transition:all .5s ease;}
	.business_type1 .business_info li .summary:after{ content:""; display:block; clear:both;}
	.business_type1 .business_info li .summary p.title {position:absolute; top:45%; width:100%;  color:#fff; font-size:1.5em; text-shadow: 0px 0px 2px #000; }
	.business_type1 .business_info li .summary p.title:after { display: block; content: ""; width:7%; height:1px; margin:10px auto; background: #eee; }
	.business_type1 .business_info li .summary span.txt { display:none;}
	.business_type1 .business_info li .summary a { display:none; }
	.business_type1 .business_info li:hover .summary, .business_type1 .business_info li.on .summary { position:absolute; width:100%; height:100%; background:rgba(0,0,0,.7); }
	.business_type1 .business_info li:hover .summary p.title, .business_type1 .business_info li.on .summary p.title { display:block; top:10%; left:5%; margin-left:0; text-align:left; text-shadow:none; }
	.business_type1 .business_info li:hover .summary p.title:after, .business_type1 .business_info li.on .summary p.title:after { display: block; content: ""; width:90%; height:1px; margin:10px 0; background: #eee; text-align:left; }
	.business_type1 .business_info li:hover .summary span.txt, .business_type1 .business_info li.on .summary span.txt { position:absolute; display:inline-block; left:5%; top:25%; width:100%; color:#fff; font-size:0.95em; text-align:left;  }
	.business_type1 .business_info li:hover .summary a, .business_type1 .business_info li.on .summary a{position:absolute; display:inline-block; left:5%; bottom:5%; width:40%; height:40px; line-height:40px; font-size:1em; color:#fff;  text-decoration:none; background:rgba(0,0,0,0);  border:1px solid #fff;  margin:20px auto; transition: 0.5s all ease;   }
	.business_type1 .business_info li:hover .summary a:hover, .business_type1 .business_info li.on .summary a:hover{color:#000; background:#fff; border:1px solid #fff;}

		
	@media screen and (max-width:992px){
		
		.content_wrap{width:100%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.business_type1 .txt_area .txt01 { width:100%; }
		.business_type1 .txt_area .txt02 { width:100%; margin-top:40px;}
		.business_type1 .txt_area .txt02 li {padding:0 5%;}
		.business_type1 .txt_area .txt02 ul li {padding-left:7%;}
		.business_type1 .txt_area .txt02 ul li:before { left:5%;  }

		.business_type1 .txt_area .txt01 span.tit  { display:inline-block; font-size:1.85em; }
		.business_type1 .txt_area .txt01 span.txt { display:inline-block; }
		.business_type1 .business_info li { width:50%; height:400px; border-top:1px solid #fff;}
		.business_type1 .business_info li:nth-child(2n){border-right:0px !important;}
		.business_type1 .business_info li:nth-child(3){border-top:1px solid #fff;}
		.business_type1 .business_info li:nth-child(4){border-top:1px solid #fff;}

	}




	@media screen and (max-width:480px){

		.business_type1 .txt_area {width:100%; padding-top:20px; }
		.business_type1 .txt_area .txt02 ul li {padding-left:9%;}
		.business_type1 .business_info li { width:100%; height:350px;}
		.business_type1 .business_info li:hover .summary span.txt { top:30%;}

	}

</style>





<div class="content_wrap">
	<section class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">OUR</span> BUSINESS</h1>
		<h2 class="sub_txt">IGC인증원의 경영시스템 사업영역를 소개합니다.</h2>
	</section>

	<section class="business_type1">	

		<div class="business_info">
			<ul>
				<li class="on">
					<div class="summary">
						<p class="title">주요사업1</p>
						<span class="txt">
							원페이지 풀반응형 DNA TECHNOLOGIES PACIFIC<br>
							이곳은 간략한 소개글이 들어갈 자리입니다.<br>
						</span>
						<a href="#none">자세히보기</a>
					</div>
				</li>
				<li>
					<div class="summary">
						<p class="title">주요사업2</p>
						<span class="txt">
							기본에 충실한 레이아웃<br>
							이곳은 간략한 소개글이 들어갈 자리입니다.<br>
						</span>
						<a href="#none">자세히보기</a>
					</div>
				</li>
				<li>
					<div class="summary">
						<p class="title">주요사업3</p>
						<span class="txt">
							모든 업종과 잘어울리는 테마<br>
							이곳은 간략한 소개글이 들어갈 자리입니다.<br>
						</span>
						<a href="#none">자세히보기</a>
					</div>
				</li>
				<li>
					<div class="summary">
						<p class="title">주요사업4</p>
						<span class="txt">
							테마상담문의<br>
							info@igcert.org<br>
						</span>
						<a href="#none">자세히보기</a>
					</div>
				</li>
			</ul>
		</div>
		<div class="txt_area">
			<div class="txt01">
				<p><span class="tit">심플하지만 다 갖춘 DNA TECHNOLOGIES PACIFIC</span></p>
				<p><span class="txt">궁금하신 사항은 언제든지 문의바랍니다.</span></p>
			</div>
			<div class="txt02">
			<ul>
				<li>경영시스템 인증</li>
				<li>(주)아이지씨인증원</li>
				<li>경영시스템인증</li>
				<li>제품전용 게시판 2종</li>
				<li>경영시스템, ISO 규격 인증기관</li>
			</ul>
			</div>
		</div>
	</section>	
</div>


<?php 

/*	

아래 스크립트에서 수정가능 이외에는 수정하지 마세요.	
business_roll_time 자동롤링시간 수정가능 : 원하시는 시간을 입력하세요.	1초=1000	3초=3000

*/?>
<script>
	var business_roll_time = 3000; /*수정가능*/
	var business_info_co = 2;
	var business_info_length = $(".business_info ul li").length;
	function tick(){		
		$('.business_info ul li').removeClass("on");
		$('.business_info ul li:nth-child('+business_info_co+')').addClass("on");		
		business_info_co++;
		if(business_info_co == (business_info_length+1)){
			business_info_co=1;	
		}
	}
	myVar = setInterval(function(){ tick () }, 3000);

	$( ".business_info ul li" ).mouseover(function(){
		$('.business_info ul li').removeClass("on");
		clearInterval(myVar);
	});
	$( ".business_info ul li" ).mouseleave(function(){
		business_info_co = 1;
		myVar = setInterval(function(){ tick () }, 3000);
	});
</script>




<script>
$(function(){ 
	var tab = $('.tab_menu ul');
	var tabMenu = tab.find('> li');
	var contents = $('.tab_con > section');
	
	tabMenu.on('click', function(){
		tabMenu.removeClass('on');
		$(this).addClass('on');
		contents.css('display', 'none');
		var i = $(this).index();
		contents.eq(i).css('display', 'block');
	});
});
</script>




<?php
include_once(G5_THEME_PATH.'/tail.php');
?>