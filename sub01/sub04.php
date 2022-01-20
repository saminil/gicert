<?php
include_once('./_common.php');
$g5['title'] = '회사로고 & 인증 마크';
include_once(G5_THEME_PATH.'/head.php');
?>
<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:0px;}
	ul,ol,li{margin:0px;padding-bottom:0px;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
        /* 신규 테이블 삽입   */
    table{width:80%;min-width:240px;border: 1px solid #444444;overflow-x: auto;}
    th,td{border: 1px solid #444444;font-size:100%;padding:20px;}

    /*상세페이지 타이틀 박스 txtBox02 */
    .txtBox02 { 
        /*border-width: 2px; */
        padding: 0px; 
        margin:0px;
        word-break: break-all; 
        width:100%;
        text-align:center;
        float:none;
        border-radius:10px;
        /*background-color:#3399ff;*/
        font-size:2.2em;
        border-style: solid; 
        border-width: 0 10px 0 10px; /* 양쪽 라인 */
        padding: 25px; 
        line-height:50%;
        border-color: DodgerBlue; 
        background-color:rgba(30, 144, 255, 0.2); 
    }
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    td {font-size:96%;padding-left:10px;}

    /*ci 형태규정부터 시작*/
    .ci_box{
        /*
        width:100%;
        height:250px; 
        */
       max-width: 100%;
       height: auto !important;
    }
    
    .ci_box .cibox_01 {
        float:left;
        width:auto;
        /*height:650px;*/
        text-align:justify;
        padding:10px;
    }
    .ci_box .cibox_02 {
        width:auto;
        height:100%;
        text-align:justify;
        padding:10px;
        padding-top:20px;
        float:none;
    }
    
    /*ci 색상 규정 시작*/
    .ci_box{
        /*
        width:100%;
        height:250px; 
        */
       max-width: 100%;
       height: auto !important;
    }
    
    .ci_box .cibox1 {
        float:left;
        width:auto;
        /*height:650px;*/
        text-align:justify;
        padding:10px;
    }
    .ci_box .cibox2 {
        width:auto;
        height:100%;
        text-align:justify;
        padding:10px;
        padding-top:20px;
        float:none;
        width:300px;height:90px;float:left;background-color:#1428a0;margin:7px;padding:5px;color:#ffffff;padding-left:20px;
    }
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#1f2558; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type1 {width:100%; min-width:320px;  margin:0 auto; }
	.vision_type1:after{content:""; clear:both; display:block;}
	.vision_type1 h2.title {text-align:center; font-size:2em; font-weight:400; color:#333; line-height:1.2em; margin-bottom:40px; }
	.vision_type1 span.stitle {display:block; width:100%; text-align:center; margin:0 auto; font-size:1.1em; font-weight:400; color:#666; line-height:1.6em; margin-bottom:40px; }
	.vision_type1 .img_div img{width:100%; max-width:1200px;}
	.vision_type1 ul {margin:0; border:1px solid #ddd; overflow:hidden;}
    
	.vision_type1 ul li {float:left; display:inline-block; padding:30px 0; padding-bottom:15px; width:20%; height:200px; text-align:center; margin:20px; border-bottom:1px solid #ddd; border-right:0px solid #ddd;}
    
	.vision_type1 ul li:nth-child(3n) {border-right:1; }
	.vision_type1 ul li:nth-child(2n) {background-color:#f7f7f7;}
	.vision_type1 ul li .icon {display:block; width:100px; height:100px; margin:0 auto; overflow:hidden;margin-bottom:-40px;padding:20px;}
	.vision_type1 ul li .icon i {display:inline-block; font-size:2em; line-height:50px; color:#333;}
	.vision_type1 ul li p {display:block; font-size:1.0em; color:#1b7958; margin-top:-10px;}
	.vision_type1 ul li span { display:block; font-size:1em; color:#555; margin-top:10px; line-height:1.5em;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    .bg1, .bg2, .bg3, .bg4, .bg5, .bg6, .bg7, .bg8, .bg9, .bg10, .bg11, .bg12, .bg13, .bg14, .bg15, .bg16 {width:10%;height:auto;background-color:#ffffff;display:block;}/* */
    
    ul .bg1{background-image:url('images/ISO-9001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg2{background-image:url('images/ISO-14001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg3{background-image:url('images/ISO-13485.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg4{background-image:url('images/OHS-18001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg5{background-image:url('images/ISO-45001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg6{background-image:url('images/ISO-22000.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg7{background-image:url('images/FSSC-22000.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg8{background-image:url('images/ISO-IEC-20000.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg9{background-image:url('images/ISO-27001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg10{background-image:url('images/ISO-21001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg11{background-image:url('images/ISO-22301.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg12{background-image:url('images/ISO-22716.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg13{background-image:url('images/ISO-37001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg14{background-image:url('images/ISO-50001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg15{background-image:url('images/ISO-IEC-27001.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    ul .bg16{background-image:url('images/ISO-IEC-27701.png');background-size:contain; background-position:center;background-repeat:no-repeat;}
    
    a li p{display:block;margin-top:-80px;}

    /* (주)아이지씨인증원 사업영역 시작  */	
	.partner_type2 .con_arrow{ width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto;}
	.partner_type2 .con_arrow p{position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span{  position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555;}
	.partner_type2 .con_arrow > p:before{position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg);}
	.partner_type2 .con_box{ width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000;}
	.partner_type2 .con_box:after{content:""; display:block; clear:both;}
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p{display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span{display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em{ width:30px; }
	.partner_type2 .con_box ul li p > em > strong{display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500;}
	.partner_type2 .con_box ul li p > span{font-size:1em; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px;}
    /* (주)아이지씨인증원 사업영역 종료  */
    
	@media screen and (max-width: 768px){

		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.vision_type1 h2.title { font-size:1.5em; }
		.vision_type1 span.stitle{font-size:1em; width:90%;}
		.vision_type1 ul{border-bottom:0px;}
		.vision_type1 ul li { width:49.8%; border-bottom:1px solid #ddd; height:160px; border-right:0px solid #ddd;}
		.vision_type1 ul li:nth-child(3n) {border-right:1px solid #ddd;; }
		.vision_type1 ul li:nth-child(2n) {border-right:0px; }
		.vision_type1 ul li p {font-size:0.8em;margin-top:-180px;}
		.vision_type1 ul li span{font-size:0.8em;}
		.vision_type1 ul li:nth-child(2n) {background-color:#fff;}

        /* 모바일 레이아웃 설정  */
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
        
         /* 3) 색상 규정 모바일 형태 셋팅  */
        .cibox2{margin-left:25px;}
        .color01{}
        .color02{}
        .color03{}      
        
        /* 인증 마크 다운로드 목록 Mobile Settings */
        .Logo_mark {display:inline-block;margin:0 auto;}
        .vision_type1 ul li {display:inline-block; padding:50px 0; padding-bottom:15px; width:35%; height:60px; text-align:center; margin:20px; border-bottom:1px solid #ddd; border-right:0px solid #ddd;}
        .vision_type1 ul li p{margin-top: -65px;;}
	} 
</style>

<div class="content_wrap">
	<section class="page_title">
		<div class="txtBox02">
		   <span class="fc_pointer">01. IGC로고(CI)</span>
		</div>
		<br><br>
		 <h2 style="width:15%; margin-bottom:-50px;margin-top:-30px;margin-bottom:-30px;"><img src="images/ICG_LOGO.png" alt="(주)아이지씨인증원 로고"></h2>
	</section>
	<section class="vision_type1">
	<ul style="padding:20px;">
		<h3 class="title" style="text-align:left;">
			<span style="font-weight:bold;color:#1f2558;padding:20px;">1) Corporate Identity(CI)</span>
		</h3><br>
		<span class="stitle"  style="text-align:left;">
          워드마크의 디자인은 유연성과 단순함을 강조하고 있으며, 우주와 세계 무대를 상징하는 원을 정직하게 처리하여, 혁신적이면서도 균형적인 이미지를 나타내고자 했습니다. 또 I자와 G자, C자를 원 안에 질서 있게 위치하는 부문을 통해 내부와 외부를 소통하게 함으로써 세계와 호흡하고 인류사회에 이바지하려는 의지를 담았습니다. 영문 로고 디자인은 기술주의와 인문주의를 통합한 고객지향 의지, 글로벌 기업의 이미지를 현대적인 감각으로 표현한 것입니다.
		</span>
		<div class="img_div" style="margin:0 auto; padding:30px;width:33%;margin-bottom:30px;">
		   <img src="./images/IGC_LOGO_02.png">
		</div>
   </ul>
   <br>
      <ul>		
		<div class="ci_box">
            <div class="cibox_01" style="font-size:1.2em;color:#1f2558;padding:20px;">2) 형태규정</div>
            <div style="clear:both;"></div>
            <div class="cibox_02">
               <strong>A) 기본형 워드마크</strong><br>
                기본형 워드마크는 orb와 문자가 결합된 형태이며, 문자 부분이 배경 안에 내재하는 조형적 특징을 가지고 있다.<br>
                따라서, 적용 시 최적의 적용 조건을 유지할 수 있도록 적용 공간에 대한 계획이 선행되어야 한다.<br><br>
                <h2>
		          <img src="./images/img_mark_base.jpg" alt="#">
		       </h2>
            </div>  <!-------class="cibox_02" End -------->
            <br>
            <div style="clear:both;"></div>
            <div class="cibox_02">
               <strong>B) 활용형 워터마크</strong><br>
               영상, 인터넷 및 옥외매체에 사용되는 워드마크로서 인쇄매체에서의 사용은 금한다.<br>
               타원과 문자 부분이 분리된 형태로 입체 표현이 용이하며 배경 공간의 제약을 최소화한 형태이다.<br>   
                <h2>
		          <img src="./images/img_mark_use.jpg" alt="#">
		       </h2>
            </div >  <!-------class="cibox_02" End -------->
            
            <br>
            <div style="clear:both;"></div>
            <div class="cibox_02">
               <strong>C) IGC 인증원의 로고</strong><br>
               IGC 인증원의 로고는 인증마크가 아니며, 고객에 의해 사용될 수 없습니다.<br>
                <h2>
		          <img src="./images/img_mark_latest.jpg" alt="(주)아이지씨인증원 로고">
		       </h2>
            </div >  <!-------class="cibox_02" End -------->
            <br>
            <div style="display:block;text-align:center;font-size:0.8em;">
            <a style="display:block;color:#ff6699;" class="btn" href="/data/file/IGC-LOGO_TheLatestLOGOs.zip" download> IGC인증원 로고 AI(일러스트) 다운로드 </a>
            </div>
            <br><br>
            <div style="clear:both;"></div>
		</div>
      </ul>
      <br><br>
      <ul>		
		<div class="ci_box1">
            <div class="cibox1" style="font-size:1.2em;color:#1f2558;padding:20px;">3) 색상 규정</div>
            <div style="clear:both;"></div>  
            <div class="cibox2">
                <div class="color01" style="width:300px;height:90px;float:left;background-color:#1428a0;margin:7px;padding:5px;color:#ffffff;padding-left:20px;">
                Process Color<br>
                C100 M80 Y0 K0<br>
                모든 인쇄매체 및 제작물<br>
                </div>
                <div class="color02" style="width:300px;height:90px;float:left;background-color:#0265ac;margin:7px;padding:5px;color:#ffffff;padding-left:20px;">
                Pantone Color<br>
                Pantone 286C<br>
                모든 인쇄매체 및 제작물<br>
                </div>   
                <div class="color03" style="width:300px;float:left;height:90px;background-color:#034ea2;margin:7px;padding:5px;color:#ffffff;padding-left:20px;">
                RGB Color<br>
                R20 / G40 / B160<br>
                영상, Website 등, 화면용<br>
                </div>
            </div>  <!-------class="cibox_02" End -------->
            <br><br>
            <div style="clear:both;"></div>
		</div>
      </ul>
      <br>
	</section>	
	<br><br>
	<section class="vision_type1">
	<div class="txtBox02">
	  <span class="fc_pointer">02. 품질인증 마크</span>
	</div>
	<br><br>
	<ul style="padding:20px;">
	<span style="line-height:30px;">
	<p style="font-weight:bold;color:red;">&#10024; 인증마크 사용 시 주의사항</p><br>
	IGC로부터 인증받은 고객은 하기 규정에 따라 인증마크와 인정마크를 올바르게 사용하여야 합니다.<br><br>
           &#10017;  인증서가 유효한 상태에서만 인증마크와 인정마크를 사용할 수 있습니다.<br>
           &#10017;  인증받은 인증범위 내에서만 인증마크와 인정마크를 사용할 수 있습니다. <br>
           &#10017;  IGC 인증원이 마치 제품을 인증했거나 프로세스를 인증한 것처럼 보이는 느낌을 주는 방식으로 표기되는 인증마크와 인정마크의 사용은 절대 불가합니다.<br>  
           &#10017;  IGC가 제공하는 방식외에 인증마크와 인정마크는 사용할 수 없습니다.<br> 
           &#10017;  인증에 관해서 오해를 일으키는 표현은 할 수 없습니다. <br>
           &#10017;  인증이 정지되거나 취소될 경우에는 인증을 언급하는 표식이 있는 광고는 일체 할 수 없습니다.<br>
           &#10017;  인증조건이 축소될 경우에는 모든 광고를 수정해야 합니다.<br> 
           &#10017;  IGC 인증원 시스템이 불명예를 받거나 공공의 불신을 받을 수 있을 것 같은 방식으로 인증마크와 인정마크를 사용할 수 없습니다.<br> 
           &#10017;  인정마크와 인증마크는 항상 같이 표식이 되어야 합니다.
   </span>
   </ul>        
 <br><br>
 
 <p style="display:block; text-align:center;color:#f53d3d;font-size:1.3em;">[ 인증 마크 다운로드 목록] </p>
<p style="display:block; text-align:center;color:#f53d3d;"> 아래 해당 인증마크를 클릭하시면 파일을 다운로드 받으실 수 있습니다.<br>
<br>
  <ul class="Logo_mark">
            <a href="/data/file/02_ISO 14001.zip">
			<li class="bg1">
				<p>ISO 9001 마크</p>
			</li>
			</a>
			<a href="/data/file/03_ISO 13485.zip">
			<li class="bg2">
				<p>ISO 14001 마크</p>
			</li>
			</a>
			<a href="/data/file/01_ISO 9001.zip">
			<li class="bg3">
				<p>ISO 13485 마크</p>
            </li>
			</a>
			<a href="/data/file/04_OHS 18001.zip">
			<li class="bg4">
				<p>OHS 18001 마크</p>
            </li>
			</a>	
			<a href="/data/file/05_ISO 45001.zip">
			<li class="bg5">
				<p> ISO 45001 마크</p>
            </li>
			</a>
			<a href="/data/file/06_ISO 22000.zip">
			<li class="bg6">
				<p>ISO 22000 마크</p>
            </li>
			</a>
			<a href="/data/file/07_FSSC 22000.zip">
			<li class="bg7">
				<p>FSSC 22000 마크</p>
            </li>
			</a>			
			<a href="/data/file/08_ISO-IEC 20000.zip">
			<li class="bg8">
				<p>ISO/IEC 20000 마크</p>
            </li>
            </a>
			<a href="/data/file/09_ISO 27001.zip">
            <!--<li class="bg9">
				<p>ISO 27001 마크</p>
            </li> -->
			</a>
			<a href="/data/file/10_ISO 21001.zip">
			<li class="bg10">
				<p>ISO 21001 마크</p>
            </li>
			</a>
			<a href="/data/file/11_ISO 22301.zip">
			<li class="bg11">
				<p> ISO 22301 마크</p>
            </li>
			</a>
			<a href="/data/file/12_ISO 22716.zip">
			<li class="bg12">
				<p>ISO 22716 마크</p>
            </li>
			</a>
			<a href="/data/file/13_ISO 37001.zip">
			<li class="bg13">
				<p>ISO 37001 마크</p>
			</li>
            </a>
			<a href="/data/file/14_ISO 50001.zip">
			<li class="bg14">
				<p>ISO 50001 마크</p>
			</li>
            </a>
			<a href="/data/file/15_ISO-IEC 27001.zip">
			<li class="bg15">
				<p> ISO/IEC 27001 마크</p>
			</li>
            </a>
		</ul>
   </section>
    <br><br>
    
<!----(주)아이지씨인증원 사업영역 시작-------->
<section class="partner_type2">
        <h2 class="con_arrow">
	<p>우리가 제공하는 관련 서비스</p>
        </h2>
        <div class="con_box">
          <ul>
          	<li><p><em><strong>01</strong></em><span>시스템 인증</span></p></li>
          	<li><p><em><strong>02</strong></em><span>시험</span></p></li>
          	<li><p><em><strong>03</strong></em><span>전문인력 양성 교육</span></p></li>
          	<li><p><em><strong>04</strong></em><span>제품 인증</span></p></li>
          	<li><p><em><strong>05</strong></em><span>심사원 인증</span></p></li>
          	<li><p><em><strong>06</strong></em><span>연수기관 지정</span></p></li>
          </ul>
        </div>
</section>
<!---------(주)아이지씨인증원 사업영역 종료 ------>   
</div>

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>