<?php
	include_once('./_common.php');
$g5['title'] = '인증절차';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<!------ Existing File Codings  시작----->

<style>
	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:14px; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
	body{padding-top:0px; padding-bottom:50px;}
	ul,ol,li{margin:0;padding:0;list-style:none;}
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
</style>
<!------ Existing File Codings  종료----->


<?php
	/*
		CSS파일 로드(25~26라인)
		적용하지 않아도 됩니다.
		(주)아이지씨인증원테마가 아닌 다른 곳에 적용하신다면 
        24번 라인은 공통 상단파일 </head> 위에 적용합니다.	
	*/
?>
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
	.fc_pointer {color:#BC0000; }
	.content_wrap{width:100%; min-width:320px; max-width:1200px; margin:0 auto;}
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type2 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; }
	.vision_type2:after {display:block; visibility:hidden; clear:both; content:""}
	.vision_type2 h2.title {text-align:center; font-size:2em; font-weight:400; color:#333; line-height:1.2em; margin-bottom:40px; }
	.vision_type2 span.stitle {display:block; width:100%; text-align:center; margin:0 auto; font-size:1.1em; font-weight:400; color:#333; line-height:1.6em; margin-bottom:40px; }
	.vision_type2 .img_div img{width:100%; max-width:1200px; border-radius:85px; margin-bottom:0px}
	.vision_type2 ul {margin:0; padding:0; }
	.vision_type2 ul li {clear:both; padding:0px; margin:0; margin-bottom:30px; width:100%; border-radius:85px; border:1px solid #ddd; background-color:#fafafa; overflow:hidden;}
	.vision_type2 ul li .circle_box {display:block; float:left; width:170px; height:170px; border-radius:85px; }
	.vision_type2 ul li:nth-child(1) .circle_box {background:#6699CC; }
	.vision_type2 ul li:nth-child(2) .circle_box {background:#99CCFF; }
	.vision_type2 ul li:nth-child(3) .circle_box {background:#CCCC99; }
	.vision_type2 ul li:nth-child(4) .circle_box {background:#023059; }
	.vision_type2 ul li:nth-child(5) .circle_box {background:#7fa5dc; }
	.vision_type2 ul li:nth-child(6) .circle_box {background:#9b9740; }
    .vision_type2 ul li:nth-child(7) .circle_box {background:#6de5f2; }
    .vision_type2 ul li:nth-child(8) .circle_box {background:#cc9900; }
    .vision_type2 ul li:nth-child(9) .circle_box {background:#ff9999; }
    .vision_type2 ul li:nth-child(10) .circle_box {background:#cfa182; }
    .vision_type2 ul li:nth-child(11) .circle_box {background:#ec6d9a; }
    .vision_type2 ul li:nth-child(12) .circle_box {background:#e6bbf0; }
    .vision_type2 ul li:nth-child(13) .circle_box {background:#bdd8f4; }
	.vision_type2 ul li .circle_box .icon {display:block; position:relative; left:0; top:25%; width:100%; height:100%; text-align:center; }
	.vision_type2 ul li .circle_box .icon i {display:block; font-size:3em; color:#fff; }
	.vision_type2 ul li .circle_box .icon em {display:block; font-size:2.0em; color:#fff; font-style:normal; margin-top:10px;}
	.vision_type2 ul li .con_txt {display:block; float:left; width:70%; margin-left:50px; margin-top:30px;}
	.vision_type2 ul li .con_txt p {font-size:2.3em; color:#000; text-align:left; }
	.vision_type2 ul li .con_txt span {font-size:1.2em; color:#555; text-align:left;  line-height:1.5em;margin-bottom:15px;}
	.vision_type2 ul li.inverse_li{background-color:#fff;}
	.vision_type2 ul li.inverse_li .circle_box {float:right;}
	.vision_type2 ul li.inverse_li .con_txt {float:right; }
    
    
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->
    .vision_type5 {width:100%; min-width:320px; max-width:1200px; margin:0 auto; list-style:none;}
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
	.vision_type5 .vision_area ul li .con_txt {display:table-cell; width:70%; height:240px; padding:30px 40px;}
	.vision_type5 .vision_area ul li .con_txt span {display:block; font-size:1em; color:#333; text-align:left; line-height:1.5em; word-break:keep-all; margin-top:15px; }
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

     /* 서브페이지 컨텐츠 최상위 타이틀 배경 시작 */
    .sub_tit{ 
        background: linear-gradient( to top, #6699CC, #6699CC );
        position:relative;
        width:100%;
        height:5%;
        /*color:#023059;*/
        line-height:40px;
        padding-top:10px;
        Font-size:1.5em;
        color:#fff;
    }

    
    /* 서브페이지 2Depth 컨텐츠 내용, 이미지 위에 텍스트 올려쓰기 시작 */
    h3 {
        position: absolute; 
        left: 50%; 
        top: 10%; 
        transform: translate(-50%, -50%); 
        /*background: rgba(255,255,255,0.5)*/
        background: linear-gradient( to top, #6699FF, #6699FF); 
        padding: 10px 30px; 
        border-radius: 0px;
        width:100%;
        height:20%;
        color:#fff;
        text-align:center;  
    }  
     
    /* 목록 앞에 화살표 기호 시작  */
    .arrow {display:inline-block; background:#6699FF; position:relative;}
    .arrow:after {content:''; position:absolute; width:0; height:0; border-style:solid;}
    /*.arrow.test_4 {width:20px; height:10px;}*/
    .arrow.test_4:after {border-color:transparent transparent transparent #6699FF; top:-15px; left:-20px;border-width:10px 10px;}
    /*.arrow.test_4:after {border-width:15px 20px;} */

	@media screen and (max-width: 992px){
		
		.content_wrap{width:96%;}
		.page_title{margin-bottom:50px;}	
		.page_title h1{font-size:2em;}
		.page_title h2{font-size:1em;}
		.s_tit{font-size:1.2em;}

		.vision_type2 h2.title { font-size:1.5em; }
		.vision_type2 span.stitle{font-size:1em; width:90%;}
		.vision_type2 ul li {width:100%; margin-bottom:50px; border-radius:40px; border-bottom-left-radius:0px; border-bottom-right-radius:0px}
		.vision_type2 ul li .circle_box{float:none; width:100%;  border-radius:40px; }
		.vision_type2 ul li.inverse_li .circle_box{float:none; width:100%;  border-radius:40px; }
		.vision_type2 ul li .con_txt{float:none; width:90%; margin:0px; padding:30px 5%;}
		.vision_type2 ul li.inverse_li .con_txt{float:none; width:90%; margin:0px; padding:30px 5%;}
		.vision_type2 .img_div img{border-radius:40px;}
	}

	@media screen and (max-width: 480px){
		
		
		.vision_type2 ul li{border-radius:15px;}
		.vision_type2 ul li .circle_box{border-radius:15px; }
		.vision_type2 ul li.inverse_li .circle_box{ border-radius:15px; }
		.vision_type2 .img_div img{border-radius:15px;}
	}
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title">
		<h1 class="sub_tit"><span class="fc_pointer">제품인증 절차</span>&nbsp안내</h1>
		<h2 class="sub_txt">제품인증은 관련 국가 및 인증 종류별로 세부 인증 절차가 상이하므로, 정확한 절차는 카테고리별 안내 페이지에서 확인하실 수 있습니다.</h2>
	</div>

	<div class="vision_type2">
		<span class="stitle">(주)아이지씨인증원은 시시각각 변화하는 글로벌 교류 분야에서 좀 더 빠르고 손쉽게 접근하는 방법을 연구합니다.<br>
		상품 개발과 생산성 향상을 위해 지속적이고도 끊임없는 개선에 매진하며 품질 혁신 생산능력 향상을 통해 산업 발전에 기여하겠습니다.</span>
		<div class="img_div">
		<img src="./images/process_02_product.png">
		<span style="display:block;text-align:center;font-size:0.8rem;color:red;">*제품인증은 관련 국가 및 인증 종류별로 세부 인증 절차가 상이하므로, 정확한 절차는 카테고리별 안내 페이지에서 확인하실 수 있습니다.</span>
		</div>
		<br>
		
		<br>
		<ul>
			<li>
				<div class="circle_box"> 
					<div class="icon"><i class="fab fa-medapps"></i><em>01. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>1. 인증문의 및 제안</p>
					<span>
						<br>
						인증신청 전 인증심사에 대한 전반적인 절차 및 방법에 대하여 상담해 드리며<br>
						기업의 요청 시 인증심사기간 및 인증비용에 대한 제안서를 보내드립니다.
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>02. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>2. 신청서 접수</p>
					<span>
						<br>
						기업은 해당 제품 및 인증에 대한 신청서를 ㈜아이지씨인증원에 제출합니다.					
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>03. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>3. 계약 체결 </p>
					<span>
						<br>
						 계약서 작성을 통해 제품 인증에 대한 계약을 체결합니다.
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hand-holding-heart"></i><em>04. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>4. 관련서류 제출 </p>
					<span>
						<br>
						기업은 기술문서 등 제품에 대한 관련 서류를 ㈜아이지씨인증원에 제출합니다.
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-globe"></i><em>05. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>5. 1단계 심사(문서 심사)</p>
					<span>
						<br>
						(해당 시) 제품 인증과 관련하여 문서심사를 실시합니다.					
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-balance-scale"></i><em>06. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>6. 2단계 심사(현장 심사)</p>
					<span>
						<br>
						 (해당 시) 2단계 심사는 제품 인증 관련 규정 또는 지침에 대한 요구조건을 충족시키고 있는지에 대한 <br>실질적인 사실을 현장심사를 통하여 확인하기 위해 실시하며, <br>객관적인 사실에 의거 요구사항을 충족한다면 인증 추천을 받습니다.
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>07. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>7. 부적합 시정조치</p>
					<span>
						<br>
						심사 결과 부적합 사항은 시정조치가 수행되어야 하며,<br>
						시정조치 결과는 서면 확인 또는 현장 심사 시 확인을 통해 이루어집니다.
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>08. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>8. 인증심의</p>
					<span>
						<br>
						인증위원회를 통하여 심사의 전 과정에 대한 <br>
						적절성을 평가하여 인증등록 여부를 결정합니다.						
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hands-helping"></i><em>09. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>9. 인증서 발행</p>
					<span>
						<br>
						 인증등록이 결정되면<br>
						 인증서가 발행되어 고객에게 전달됩니다.
					</span>
				</div>
			</li>
			
			
			<li class="inverse_li">
				<div class="circle_box">
					<div class="icon"><i class="fas fa-hand-holding-heart"></i><em>10. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>10. 사후관리 심사</p>
					<span>
						<br>
						인증 등록 조직이 인증조건을 지속적으로 준수하고 있음을 검증하기 위하여 실시되면, 최초 현장심사 절차에 준하여 실시됩니다.<br>
						정기 사후관리 심사 주기는 최초 심사일로부터 매해 이루어지며, ISO국제규정 및 IAF MD 규정에 따라 정기적으로 진행되어야 합니다.<br>
						[비고] 사후 1차 심사는 이전 인증결정일로부터 12개월을 초과할 수 없다. <br><br>
					</span>
				</div>
			</li>
			
			
			<li>
				<div class="circle_box">
					<div class="icon"><i class="fas fa-globe"></i><em>11. STEP</em></div>
				</div>
				<div class="con_txt">
					<p>11. 재인증 심사</p>
					<span>
						<br>
						3년 마다 인증의 재인증을 목적으로 실히하며,<br>
						최초 인증심사와 동일한 절차에 준하여 실시합니다.						
					</span>
				</div>
			</li>
        </ul>
        </div>		
			
	<br><br><br><br>
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
		<h2 class="title">인증의 확대 및 축소</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fab fa-medapps"></i><em>인증의 확대 및 축소</em></div>
				</div>
				<div class="con_txt">
					<span>
					<h1>인증의 확대</h1>
						인증된 조직이 인증범위의 확대 또는 현장의 추가가 고려되는 경우, 인증 확대에 대한 신청을 할 수 있습니다. <br>
						신청을 접수한 인증기관은 이에 대해 검토 후, 필요한 심사활동을 실시하여 승인 여부를 결정합니다.
					</span>
					
					<span>
					<h1>인증의 축소</h1>
						인증된 조직이 인증 범위 상 명기된 특정 제품 또는 서비스를 중단하거나, 등록된 현장의 철수 또는 서비스 제공이 중단된 경우, 조직은 1개월 내로 인증기관에 통보하여야 합니다. 통보를 받은 인증기관은 이를 검토후, 필요한 심사활동을 실시하여 승인 여부를 결정합니다. 인증범위가 축소되는 경우 모든 관련 홍보물에 대한 수정도 실시가 되어야 합니다.
					</span><br>
				</div>
			</li>
		</ul>
		<!------dl>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</dd>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd>
		</dl ------>
		</div> <!----// class="vision_area" 종료----->


		<div class="vision_area">
		<h2 class="title">인증의 정지 및 취소</h2>
		<ul>
			<li>
				<div class="i_box">
					<div class="icon"><i class="fas fa-microscope"></i><em>인증의 정지 및 취소</em></div>
				</div>
				<div class="con_txt">
				    <span>
					    인증을 받은 조직은 다음 경우로 제한되는 것은 아니지만, 다음의 경우에 인증의 효력이 정지되거나 취소 될 수 있으며 인증서가 회수될 수 있습니다. 이러한 정지 또는 취소 사유가 발생시, 인증원은 해당사안에 대해 검토 후 정지 또는 취소에 대한 결정을 내립니다. 조직은 인증의 정지 또는 취소 시, 인증 상태에 대해 언급한 모든 홍보물의 사용을 중지함을 보장하여야 합니다
					</span>
					
					<span>
					   <h2>인증의 정지</h2>
						    <p>&nbsp;-정해진 기한 내에 사후관리심사가 이루어지지 않은 경우(이전 인증결정일로부터 12개월이내에 사후심사가 이루어지지 않은 경우</p>
						    <p>&nbsp;-인증유지를 위한 심사결과 인증시스템이 적용규격 요구사항을 충족시키기 위한 자원 및 조직이 없거나 인증시스템이 대부분 가동되지 않은 경우</p>
                            <p>&nbsp;-이해관계자로부터 클레임이나 사회적 물의에 의하여 인증시스템에 대한 신뢰성이 없는 경우</p>
                            <p>&nbsp;-인증제도 및 인증요구사항의 변경에 대한 인증등록조직의 대응조치가 취해지지 않은 경우</p>
                            <p>&nbsp;-현장확인심사 결과 중부적합이 발생하여 재확인심사를 실시한 결과 중부적합이 재 발생된 경우</p>
                            <p>&nbsp;-인증마크의 오용으로 시정명령을 받은 이후 1개월 이내에 관련내용이 시정되지 않은 경우</p>
                            <p>&nbsp;-인증심사비용을 3개월 이상 연체한 경우</p>
                            <p>&nbsp;-인증계약에 따른 조직의 의무사항을 준수하지 않았을 경우</p>
                            <p>&nbsp;-인증서의 적용범위를 초과하여 사용한 경우</p>
                            <p>&nbsp;-계약 또는 합의사항을 위반한 경우</p>
						    
					</span>
					<span>
					    <h2>인증의 취소</h2>
                            <p>&nbsp;-효력정지 처분에도 불구하고 3개월이 지나도록 시정조치가 이루어지지 않을 경우</p>
                            <p>&nbsp;-인증등록 조직에서 공식적으로 인증서를 반납한 경우</p>
                            <p>&nbsp;-인증범위에 포함된 제품(공정)의 생산, 활동이나 서비스가 중단된 경우</p>
                            <p>&nbsp;-인증등록 조직의 해체, 연락두절등으로 인증대상조직의 실체가 없어지거나 확인되지 않은 경우</p>
                            <p>&nbsp;-사후심사의 경우 정지 처분 후 1개월 이내에 심사가 진행되지 않을 경우</p>
					    </span>
				</div>
			</li>
		</ul>
		
		<!-----dl>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
			</dd>
			<dd>
				이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다. 이곳은 추가내용이 들어갈 자리입니다.
				이곳은 추가내용이 들어갈 자리입니다.
			</dd>
		</dl-------->
     </div> <!----class="vision_area 종료------>
     
   </div> <!--//class="vision_type2" 종료---->
   
   <!----(주)아이지씨인증원 사업영역 시작-------->
	<section class="partner_type2">
        <h2 class="con_arrow">
			<p>(주)아이지씨인증원 사업영역</p>
		</h2>
		<div class="con_box">
			<ul>
				<li><p><em><strong>01</strong></em><span>경영시스템 인증</span></p></li>
				<li><p><em><strong>02</strong></em><span>제품인증 서비스</span></p></li>
				<li><p><em><strong>03</strong></em><span>제품 시험</span></p></li>
				<li><p><em><strong>04</strong></em><span>심사자격 인증 서비스</span></p></li>
				<li><p><em><strong>05</strong></em><span>심사원 교육 및 양성</span></p></li>
			</ul>
		</div>
   </section>
   <!---------(주)아이지씨인증원 사업영역 종료 ------>
   
   
   
</div>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<!----위 코드 관련 내용 : 상단 메인메뉴 ----->