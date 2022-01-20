<?php
include_once('./_common.php');
$g5['title'] = '(주)아이지씨인증원 | 공정성';
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
    } /*  출처: https://bssow.tistory.com/127    */
    
    
    table{width:100%;border: 1px solid #444444;}
    th,td{border: 1px solid #444444;margin-left:10px;font-size:0.9em;}

	table,td p {font-size:0.9em;margin-left:0px;padding-left:10px;}
    td {font-size:96%;padding-left:10px;}
    
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	.fc_pointer {color:#006699; }
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
	.vision_type1 ul li {float:left; display:inline-block; padding:30px 0; padding-bottom:15px; width:33.33333%; height:300px; text-align:center;  }
	.vision_type1 ul li:nth-child(3n) {border-right:0; }
	.vision_type1 ul li:nth-child(2n) {background-color:#f7f7f7;}
	.vision_type1 ul li .icon {display:block; width:100px; height:100px; margin:0 auto; overflow:hidden;margin-bottom:-40px;padding:20px;}
	.vision_type1 ul li .icon i {display:inline-block; font-size:2em; line-height:50px; color:#333;}
	.vision_type1 ul li p {display:block; font-size:1.85em; color:#006699; margin-top:10px;}
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
		.vision_type1 ul li { width:49.8%; border-bottom:1px solid #ddd; height:300px; border-right:1px solid #ddd;}
		.vision_type1 ul li:nth-child(3n) {border-right:1px solid #ddd;; }
		.vision_type1 ul li:nth-child(2n) {border-right:0px; }
		.vision_type1 ul li p {font-size:1.2em;}
		.vision_type1 ul li span{font-size:0.8em;}
		.vision_type1 ul li:nth-child(2n) {background-color:#fff;}
        
        /* 모바일 레이아웃 설정  */
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
            
            
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
        font-size:1.5em;
        border-style: solid; 
        border-width: 0 10px 0 10px; /* 양쪽 라인 */
        padding: 25px; 
        line-height:50%;
        border-color: DodgerBlue; 
        background-color:rgba(30, 144, 255, 0.2); 
    } /*  출처: https://bssow.tistory.com/127    */       
	}
</style>

<div class="content_wrap">
	<section class="page_title">
		<div class="txtBox02">
		   <span class="fc_pointer">공정성 선언문</span>
		</div>
		<h2 style="width:15%;"><img src="images/ICG_LOGO.png" alt="(주)아이지씨인증원 로고"></h2><br>
	</section>
	<section class="vision_type1">
		<h3 class="title" style="text-align:left;">
			<span style="font-weight:bold;color:#006699;">공정성 선언문</span>
		</h3>
		<span class="stitle"  style="text-align:left;">
		Institute of Global Certification Co., LTD.  (이하 IGC)는 인증활동에 대한 책임이 있는 법인입니다.<br>
         IGC는 인증 활동을 수행함에있어 공정성의 중요성을 충분히 이해하고 있으며, 고객 또는 잠재 고객과의 모든 거래와, 직원 또는 기타 인사가 공정하고 공정하게 유지되도록 할 것입니다.<br><br>
         공정성이 유지되고 입증 될 수 있도록 IGC는 다음 원칙이 수립하였습니다.
		</span>
		<div class="img_div" style="margin:0 auto; padding:30px;width:70%;">
		   <img src="./images/impartiality_01.jpg">
		</div>
		<ul style="height:100%;line-height:50%;">
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">01</strong></em>
				<p>공정 인증서 발행</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC 인증서는 공정성 위해요소가 없다는 것을 보증하기 위해 내부의 독립적이고 권한있는 구성원의 검토 후 발행됩니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">02</strong></em>
				<p>컨설팅 비제공</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC는 조직 또는 개인에게 경영 시스템 컨설팅이나 다른 형태의 컨설팅을 제공하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">03</strong></em>
				<p>내부심사 서비스 제공 통제</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC는 조직 또는 개인에게 내부 심사 서비스를 제공하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">04</strong></em>
				<p>고객사 및 금융사 소유 제한</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC는 인증, 경영시스템 컨설팅 또는 내부심사 서비스를 제공하는 다른 회사를 소유하지 않으며 (금융 또는 기타) 관심을 갖지 않습니다. 
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">05</strong></em>
				<p>내부 고객 관계 금지</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC는 IGC가 제공하는 인증 서비스에 영향을 미치는 것으로 판단 될 수 있는 컨설팅, 내부 심사 서비스 또는 기타 서비스를 제공하는 회사와 관계를 맺지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">06</strong></em>
				<p>정기 위험평가 수행</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC와 다른 회사 간의 제안 된 관계는 관계가 공식화되기 전에 공정성위원회의 위험 평가를 거칩니다. 회사, 조직 및 개인과의 현재 관계는 인증 프로세스의 공정성에 영향을주지 않는 관계를 보장하기 위해 정기적으로 위험을 평가합니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">07</strong></em>
				<p>공정성 위원회</p>
				<span style="margin:20px;text-align:jusitfy;">
					위험 평가는 공정성위원회에서 수행합니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">08</strong></em>
				<p>정보 기록 및 선언</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC에 고용되었거나 계약을 맺은 개인은 모든 회사와의 현재 및 과거 관계를 기록해야합니다. 잠재적인 이해 상충을 유발할 수 있는 과거나 현재의 상황은 IGC에 의해 선언되어야 합니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">09</strong></em>
				<p>동종 업무배제</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC는 경영시스템 심사에 과거 관계가 있었던 직원 또는 하도급 인원을 배정하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">10</strong></em>
				<p>공정 심사배정 기준 </p>
				<span style="margin:20px;text-align:jusitfy;">
					최소 2년 동안 관계가 없었던 경영시스템 심사에 배정될 수 있습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">11</strong></em>
				<p>위험성 평가</p>
				<span style="margin:20px;text-align:jusitfy;">
					위험 평가는 공정성위원회에서 검토 할 것입니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">12</strong></em>
				<p>시스템구축 교육 금지</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC는 시스템 구축에 대한 어떠한 교육도 제공하지 않습니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">13</strong></em>
				<p>경영시스템 컨설팅활동</p>
				<span style="margin:20px;text-align:jusitfy;">
					IGC는 경영시스템 컨설팅활동과 연계된 어떤 방식의 연결이나 판매가 없도록 보장하며 그러한 관계가 확인되면 적절한 조치를 취할 것입니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">14</strong></em>
				<p>직원 심사</p>
				<span style="margin:20px;text-align:jusitfy;">
					모든 직원은 최소한 매년 심사를 실시하여 심사를 실시 할 때 공평한 지 확인합니다.
				</span>
			</li>
			<li>
				<p><em><strong style="display:block; margin-bottom:-20px;">15</strong></em>
				<p>심사원 독립성</p>
				<span style="margin:20px;text-align:jusitfy;">
					심사원 및 인증 과정에 참여한 다른 사람들은 어떠한 압력도 가해지지 않을 것이며 심사 결과와 관련하여 특별한 결론을 내리기 위해 어떤식의 영향을 받지 않을 것입니다.
				</span>
			</li>
		</ul>
		<br>
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