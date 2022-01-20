<?php
	include_once('./_common.php');
$g5['title'] = '이의제기';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
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
	/*기본CSS 여기부터는 페이지에 넣지 않습니다. 시작*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:1rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:0px;}
	ul,ol,li{margin:0px;padding-bottom:0px;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다. 종료*/
    
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
</style>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<?php
	/*
		주의사항 
		관리자모드 내용관리등 에디터로 내용을 등록하실 경우, 보안문제로 자바스크립트와 css가 필터될 수 있습니다.
		이럴 경우 공통 css 파일에 아래 style을 별도 추가하고, 내용관리 에디터의 HTML 모드로 태그를 넣으시면 됩니다.(에디터마다 HTML 모드 버튼이 있으니 HTML 모드로 넣어주세요.)
		javascript 를 사용한다면 공통하단 파일 </body> 위에 코드를 복사하여 추가 합니다.	
	
	*/
?>
<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
	.fc_pointer {color:#006699; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type5:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type5 .vision_area {width:100%; margin-bottom:80px; }
	.vision_type5 .vision_area h2.title {position:relative; font-size:1.5em; color:#000; padding-left:30px; margin-bottom:20px; }
	.vision_type5 .vision_area h2.title:before{position:absolute; top:10px; left:0; display:inline-block; content:""; width:8px; height:8px; border:4px solid #1F88E5; background:#fff; }
	.vision_type5 .vision_area ul {margin:0; padding:0; }
	.vision_type5 .vision_area ul li {clear:both; display:table; padding:0; margin:0; width:100%; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type5 .vision_area ul li .i_box {display:table-cell; width:30%; vertical-align:middle; }
	.vision_type5 .vision_area:nth-child(1) ul li .i_box {background:#005bab;}
	.vision_type5 .vision_area:nth-child(2) ul li .i_box {background:#36b1d4;}
	.vision_type5 .vision_area:nth-child(3) ul li .i_box {background:#f48025;}
	.vision_type5 .vision_area ul li .i_box .icon {display:block; position:relative; left:0; top:25%; width:100%; text-align:center; }
	.vision_type5 .vision_area ul li .i_box .icon i {display:block; font-size:5em; color:#fff; }
	.vision_type5 .vision_area ul li .i_box .icon em {display:block; font-size:1.2em; color:#fff; font-style:normal; margin-top:20px;}
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:justify; line-height:1.5em; word-break:keep-all; margin-top:15px; }
	.vision_type5 .vision_area ul li .con_txt span:first-child{ margin-top:0; }
	.vision_type5 .vision_area dl {width:95%; margin:20px auto; }
	.vision_type5 .vision_area dl dd { position:relative; font-size:1em; color:#777; padding-left:15px; margin-bottom:15px; }
	.vision_type5 .vision_area dl dd:before{ content: ""; position:absolute; top:10px; left:0;  width:4px; height:4px; background:#333;}
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
    
    .claim_opinion{display:block;width:80%;margin-top:-70px;}
    
	@media screen and (max-width:768px){
		.content_wrap{width:10%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		/*  모바일 레ㅇㅣ아웃 디자인 설정 */
        .vision_type5 .vision_area h2.title { font-size:1.5em; }
        .vision_type5 .vision_area span.stitle{font-size:1em; width:90%;}
        .vision_type5 .vision_area ul li {width:100%;}
        .vision_type5 .vision_area ul li .i_box{ display:block; width:100%; padding:10px 30px;/*0px===>50px로 수정하여 모바일에서 이밎 가로 중앙 정렬됨*/ }  
        
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
        
        .vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:auto; padding:30px 40px;}
	    .vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:justify; line-height:1.5em; word-break:keep-all; }
          
       .claim_opinion{display:block;width:100%;margin-top:20px;}
        
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
        font-size:1.2em;
        border-style: solid; 
        border-width: 0 10px 0 10px; /* 양쪽 라인 */
        padding: 25px; 
        line-height:50%;
        border-color: DodgerBlue; 
        background-color:rgba(30, 144, 255, 0.2);
        }     
      .partner_type2 .con_box{ width:100%; padding:0px 0; border-top:1px solid #000; border-bottom:1px solid #000;}   
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
    <section class="page_title">
	<div class="txtBox02">
	    <span class="fc_pointer">불만 및 이의 제기</span>
	</div>
	</section>
	<h2 style="display:block;text-align:center;">
	<hr style="display:block;height:3px;margin-top:20px;margin-bottom:30px;">
	<span style="display:block;padding-bottom:-20%;font-size:1.7em;"><a href="http://igcert.cafe24.com/bbs/write.php?bo_table=claim">고객게시판 글쓰기</a></span>
	<hr style="display:block;height:3px;margin-top:20px;margin-bottom:30px;">
	</h2>
	<br>
	<section class="main_sec main_bbs" >
	<div class="wrap">
		<!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
		<div class="claim_opinion"><?php echo latest('theme/basic', 'claim', 5, 40); ?></div>
	</div>
    </section>
	
	<hr style="display:block;height:3px;margin-top:-20px;margin-bottom:30px;">
	<div class="vision_type5">
		<div class="vision_area">
		<h2 class="title">1. 이의제기</h2>
		<ul>
			<li>
				<div class="con_txt">
                    어떤 고객이라도 IGC 의 인증결정에 대하여 이의제기를 할 수 있습니다. <br>
                    IGC의 행정부장은 이의제기가 통지된 후 30 일 이내에 수용 여부를 결정하여야 합니다.<br><br>
                    
                    <span style="color:#009acf;">
                    이의제기는 이메일 또는 아래의 주소로 IGC 의 운영(행정)관리자에게 제출하실 수 있습니다.<br><br>
                    
                    &#9919; 주소: 서울특별시 금천구 서부샛길 638 대륭테크노타운 7차 501호<br>
                    &#9919; e-mail: info@igcert.org<br>
                    &#9919; 전화:  02-6749-0701  팩스: 02-6749-0711<br><br>
                    </span>
                    
                    제출된 이의제기 문서를 검증하고 조사하기 위해,  관련된 증거 자료도 함께 제출되어야 합니다.<br><br>
                    
                    행정부는 이의제기 문서를 검증하고, 필요시 추가자료를 요청할 수 있습니다.<br>
                    이의제기에 대한 확인 후, 행정부서의 관리자에게 전달되면, 관리자는 이의제기를 인정하지 않거나, 이의제기 내용에 기반하여 어필패널을 구성할 권리를 갖고 있습니다.<br>
                    Adverse certification 이나 재인증에 대한 결정 또는 인증 취소에 대한 이의제기는 서면으로 처리되어야 합니다.  서면으로 작성된 이의제기는 공식적으로 문서화된 절차를 통해 빠른 시일 내 검토 및 해결할 것입니다.<br><br>

                    이의제기는 다음과 같은 결정으로 진행 될 수 있습니다.<br>
                    &nbsp; &nbsp; a. 최초 인증에 대한 승인 거절<br>
                    &nbsp; &nbsp; b. 인증 유지에 대한 승인 거절<br>
                    &nbsp; &nbsp; c. 인증 등급 상향 승인에 대한 거절<br>
                    &nbsp; &nbsp; d. 인증 등급 하락<br><br>

                    이의제기가 받아들여지면, 행정관리자는 어필패널을 구성하며, 필요하다면, 어필패널의장은 이의제기 신청인에게 참석을 요청 할 수 있습니다.<br>
                    어필패널은 이의제기 신청인의 만족을 위하여 행정관리자에게 필요한 조치를 하도록 권고사항을 제공하며, 어필패널은 이러한 상황의 재발을 막기 위하여 예방조치를 권고 합니다.<br>
                    행정관리자는 이러한 어필패널의 권고사항을 기반으로 이의제기에 대한 결정을 하며, 이 행정부장의 결정은 최종결정으로 처리됩니다.<br>
                    위의 절차는 이의제기가 접수된 후로부터 45일 안에 완료되어야 합니다.<br><br>
                    
                    행정관리자의 결정에 불복한 이의신청인은 IGC 대표에게 다시 이의를 제기할 수 있습니다.<br><br>
                    
                    IGC의 대표는 3명으로 구성된 어필패널을 소집하고, 어필패널은 어필케이스를 조사하고 어필을 처리하기 위한 관련절차를 따르게 됩니다.<br><br>
                    
                    IGC의 대표는 어필패널의 권고를 기반으로 어필 수용에 대한 결정을 내립니다. 이 경우, 대표의 결정은 최종적입니다.<br>
                    위 절차는 대표에게 이의제기가 보고된 이후로 45일 안에 완료됩니다.<br><br>
                    
                    IGC의 대표는 필요하다고 생각되는 적절한 전문가에게 조언을 구할 수 있습니다.<br>
                    이의신청인이 IGC 대표의 결정에 만족하지 못한다면 , 이의신청인은 Accreditation Body에 이의를 제기할 수 있습니다.<br>
                    하지만, 이 방법은 IGC 에 대한 모든 이의제기 방법을 모두 사용한 다음에 사용될 수 있습니다.<br>
                    이 경우, 인정기관의 이의신청절차를 따르게 됩니다.<br>
				</div>
			</li>
		</ul>
     </div>

     <div class="vision_area">
		<h2 class="title">2. 불만 제출</h2>
		<ul>
			<li>
				<div class="con_txt">
                   고객 불만은 행정부가 처리합니다. 행정부는 고객 불만을 접수하고, 검증하고, 조사하는 모든 권한과 그리고 고객 불만에 대한 시정조치를 할 수 있는 결정권을 가지고 있습니다.<br>
                   서면 또는 구두, 내 외부 고객 불만은 IGC의 모든 직원들에 의해서 접수 될 수 있습니다.<br>
                   접수된 고객 불만은 GPC 가 운영하는 컴플레인 레지스터에 등록되는 동시에 행정부장에게 전달됩니다.<br>
                   필요하다면 추가적인 정보를 불만 제기자에게 요청할 수 있습니다.<br><br>
 
                   IGC는 고객불만에 대해 전화, intrerim reply 또는 이메일을 통해 24시간 안에 컴플레인을 건 사람에게 답변을 보내야 합니다.<br>
                   가능하다면, 공식적인 통지는 불만 처리과정이 끝날 때, 불만제기를 한 사람에게 제공해야 합니다.<br>
                   행정관리자는 지체 없이 컴플레인 신청인에게 고객 불만을 해결하기 위해  필요한 시정 및 예방조치 등 IGC의 공식적인 처분을 전달 할 것입니다.<br>
                   컴플레인의 종결은 신청인에게 통보해야 하며, 컴플레인 신청인과 컴플레인의 내용은 IGC 컴플레인 처리 절차에 따라 기밀 유지 되어야 합니다.<br>
				</div>
			</li>
		</ul>
        <br><br>	
	    </div>
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

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
      
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>