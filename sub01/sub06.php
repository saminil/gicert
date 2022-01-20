<?php
include_once('./_common.php');
$g5['title'] = '오시는 길';
include_once(G5_THEME_PATH.'/head.php');
?>
<?php
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

<div class="txtBox02">
	<span class="fc_pointer">(주)아이지씨인증원 약도</span>
</div>
<br><br>

<div id="ctt_con" class="sub01_03">
	<p>
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 본사 주소</span> : 서울특별시 금천구 서부샛길 638, 대륭테크노타운7차 501호 <br>
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 전&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;화</span> : +82 2 6749 0701<br><br>
            
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 대중&nbsp; 교통</span><br>   
             &nbsp; &nbsp; 지하철 1호선: 가산디지털단지역 7번 출구(도보 12분)<br>
	         &nbsp; &nbsp; 지하철 7호선 : 가산디지털단지역 6번 출구(도보 12분) <br><br>
        <span style="font-weight:bold;color:#1f2558;"> &#10020; 승용차</span> : 주차 가능(무료 1시간) 
     </p>	
        
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	 <span style="display:block;text-align:center;">&#10057; &#10057; &#10057; </span>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">
         
    <h2>         
	  <img src="/img/location_IGC_00.gif" alt="(주)아이지씨인증원 찾아오기 지도(약도)" style="display:block;margin:0 auto;">
	</h2>      
        
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	 <span style="display:block;text-align:center;">&#10057; &#10057; &#10057; </span>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">                              
                                                            
                                                                                                                
    <span style="font-weight:bold;color:#1f2558;"> &#10020; 카카오 지도 보기(지도 이동, 확대&축소 기능)</span>
	<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:10px;margin-top:0px;width:100%;">     
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

<hr style="border-top: 1px dotted #999999;display:block;margin-bottom:2px;margin-top:50px;width:100%;">
	 <span style="display:block;text-align:center;">&#10057; &#10057; &#10057; </span>
    <hr style="border-top: 1px dotted #999999;display:block;margin-bottom:50px;margin-top:2px;width:100%;">  

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

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>