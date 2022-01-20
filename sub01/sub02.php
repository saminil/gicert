<?php
include_once('./_common.php');
$g5['title'] = '(주)아이지씨인증원 | 행동강령';
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
        padding: 0px; 
        margin:0px;
        word-break: break-all; 
        width:100%;
        text-align:center;
        float:none;
        border-radius:10px;
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
    }
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#006699;; }
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
	.vision_type1 ul li {float:left; display:inline-block; padding:30px 0; padding-bottom:15px; width:33.33333%; height:250px; text-align:center;  }
	.vision_type1 ul li:nth-child(3n) {border-right:0; }
	.vision_type1 ul li:nth-child(2n) {background-color:#f7f7f7;}
	.vision_type1 ul li .icon {display:block; width:100px; height:100px; margin:0 auto; overflow:hidden;margin-bottom:-40px;padding:20px;}
	.vision_type1 ul li .icon i {display:inline-block; font-size:2em; line-height:50px; color:#333;}
	.vision_type1 ul li p {display:block; font-size:1.85em; color:#BC0000; margin-top:10px;}
	.vision_type1 ul li span { display:block; font-size:1em; color:#555; margin-top:10px; line-height:1.5em;}
	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
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

	@media screen and (max-width: 992px){

		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}
		.vision_type1 h2.title { font-size:1.5em; }
		.vision_type1 span.stitle{font-size:1em; width:90%;}
		.vision_type1 ul{border-bottom:0px;}
		.vision_type1 ul li { width:49.8%; border-bottom:1px solid #ddd; height:220px; border-right:1px solid #ddd;}
		.vision_type1 ul li:nth-child(3n) {border-right:1px solid #ddd;; }
		.vision_type1 ul li:nth-child(2n) {border-right:0px; }
		.vision_type1 ul li p {font-size:1.2em;}
		.vision_type1 ul li span{font-size:0.8em;}
		.vision_type1 ul li:nth-child(2n) {background-color:#fff;}
        
        
        /* 모바일 레이아웃 설정  */
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
    
        .txtBox02 { 
        padding: 0px; 
        margin:0px;
        word-break: break-all; 
        width:100%;
        text-align:center;
        float:none;
        border-radius:10px;
        /*background-color:#3399ff;*/
        font-size:1.5em;
        border-style: solid; 
        border-width: 0 10px 0 10px; /* 양쪽 라인 */
        padding: 25px; 
        line-height:50%;
        border-color: DodgerBlue; 
        background-color:rgba(30, 144, 255, 0.2); 
        }     
	}
</style>

<div class="content_wrap">
	<section class="page_title">
		<div class="txtBox02">
		   <span class="fc_pointer">행동강령</span>
		</div>
		<h2 style="width:15%;"><img src="images/ICG_LOGO.png" alt="(주)아이지씨인증원 로고"></h2><br>
	</section>
	<section class="vision_type1">
		<h3 class="title" style="text-align:left;">
			<span style="font-weight:bold;color:DodgerBlue;font-size:1.5rem;">IGC인증원의 목표와 핵심 가치</span>
		</h3>
		<span class="stitle"  style="text-align:left;">IGC인증원는 시시각각 변화하는 글로벌 산업 분야에서 좀 더 빠르고 확실한 접근하는 방법을 모색하고,
		상품 개발과 생산성 향상을 위해 지속적이고도 끊임없는 개선에 매진하며, 품질 혁신 생산능력 향상을 통해 고객님의 성공적인 글로벌 비즈니스에 기여합니다.</span>
		<div class="img_div" style="margin:0 auto; padding:30px;width:70%;">
		   <img src="./images/impartiality_02.jpg">
		</div>
		<ul style="height:100%;line-height:50%;">
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">01</strong></em>
				<p>공정 심사전문가</p>
				<span style="margin:20px;text-align:jusitfy;">
					전문적이고 정확하며 공정한 방식으로 활동을 수행합니다. 항상 최고의 전문 기술과 판단력을 심사에 적용합니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">02</strong></em>
				<p>전문역량 개발</p>
				<span style="margin:20px;text-align:jusitfy;">
					모든 심사원은 지속적으로 자신의 전문 역량을 개발하고 올바른 심사를 위해 최상의 상태를 유지합니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">03</strong></em>
				<p>이해상충관계 지양</p>
				<span style="margin:20px;text-align:jusitfy;">
					이해 관계가 상충되는 고용 또는 양도를 피합니다. 
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">04</strong></em>
				<p>규정 엄수</p>
				<span style="margin:20px;text-align:jusitfy;">
					인증 기관의 평판, 이익 및 신용에 대한 불법적인 방법으로 행동하지 않습니다. 
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">05</strong></em>
				<p>고객 정보보안</p>
				<span style="margin:20px;text-align:jusitfy;">
					피청구인과 감사 기관이 서면으로 승인한 경우를 제외하고는 심사 과정에서 얻은 결과, 정보 또는 그 일부를 공개하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">06</strong></em>
				<p>금품수수 금지</p>
				<span style="margin:20px;text-align:jusitfy;">
					피심사조직, 직원 또는 기타 이해 관계자로부터 커미션, 선물 또는 기타 혜택을 받지 않습니다. 
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">07</strong></em>
				<p>무결성 정보</p>
				<span style="margin:20px;text-align:jusitfy;">
					심사 또는 심사 프로세스의 무결성을 손상시킬 수있는 허위 또는 조작된 정보를 의도적으로 전달하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">08</strong></em>
				<p>고객만족</p>
				<span style="margin:20px;text-align:jusitfy;">
					피심사조직에 대한 부당하고 비합리적인 비판을 게시하거나 전달하지 않습니다. 
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">09</strong></em>
				<p>협력의무</p>
				<span style="margin:20px;text-align:jusitfy;">
					본 행동강령을 위반해서는 안되며 이 규범의 위반이 의심될 경우 발생하는 공식적인 조사에 전적으로 협력합니다.
				</span>
			</li>
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