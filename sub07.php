<?php
include_once('./_common.php');
$g5['title'] = '(주)아이지씨인증원 | 사이트맵';
include_once(G5_THEME_PATH.'/head.php');
?>
<style>

	/*기본CSS 여기부터는 페이지에 넣지 않습니다.*/	
    
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:0.9rem; color:#333; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
    
	body{padding-top:0px; padding-bottom:0px;}
    
	ul,ol,li{margin:0px;padding-bottom:0px;list-style:none;}
    
	/*기본CSS 여기까지는 페이지에 넣지 않습니다.*/
    
        /* 신규 테이블 삽입   */
    table{width:100%;min-width:240px;border: 1px solid #444444;overflow-x: auto;}
    
    .table_big { 
        border-color:#ff3366;
        width: 85%;
        height: auto;
    }
    
    th,td{border: 1px solid #444444;font-size:100%;padding:5px;margin-top:-10px;}
    
    .sitemap1 {
        border: 1px solid blue;
        padding:20px;
        padding-top: 20px;
        padding-bottom:20px;
        
    }

    
    
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
	.vision_type1 ul li {float:left; display:inline-block; padding:30px 0; padding-bottom:15px; width:33.33333%; height:250px; text-align:center;  }
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
		.vision_type1 ul li { width:49.8%; border-bottom:1px solid #ddd; height:220px; border-right:1px solid #ddd;}
		.vision_type1 ul li:nth-child(3n) {border-right:1px solid #ddd;; }
		.vision_type1 ul li:nth-child(2n) {border-right:0px; }
		.vision_type1 ul li p {font-size:1.2em;}
		.vision_type1 ul li span{font-size:0.8em;}
		.vision_type1 ul li:nth-child(2n) {background-color:#fff;}
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; } /* 모바일 레이아웃 설정  */
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
		   <span class="fc_pointer">사이트맵 | SiteMap</span>
            <br><br>
		   <h5>www.igcert.org</h5>
		</div>
	</section>

	<section class="vision_type1">
          <div class="sitemap1">
             <span style="display:block;text-align:right;color:#27adec;">&#10046;메뉴를 클릭하시면 관련내용을 확인하실 수 있습니다.</span>
             
             <table border="2" cellpadding="0" cellspacing="0">
               <col width="131">
               <col width="128">
               <col width="158">
               <col width="108" span="4">
               <tr>
                 <td width="122" height="22" align="center" bgcolor="ccffff" data-sheets-value="{'1':2,'2':'회사소개'}"><strong><a href="/theme/rt_igcert/sub01/sub01.php">회사소개</a></strong></td>
                   <td colspan="3" align="center" bgcolor="ccffff"><strong><a href="/theme/rt_igcert/manage/igc_006.php">제공서비스</a></strong></td>
                   <td width="138" align="center" bgcolor="ccffff"><strong><a href="/bbs/board.php?bo_table=notice">자료실</a></strong></td>
                   <td width="128" align="center" bgcolor="ccffff"><strong><a href="/bbs/board.php?bo_table=free">뉴스</a></strong></td>
                   <td width="123" align="center" bgcolor="ccffff"><strong><a href="/bbs/board.php?bo_table=gallery">인재채용</a></strong></td>
               </tr>
               <tr>
                   <td width="122" data-sheets-value="{'1':2,'2':'회사소개'}"><a href="/theme/rt_igcert/sub01/sub01.php">회사소</a>개</td>
                   <td rowspan="21" width="104"><div><a href="/theme/rt_igcert/manage/igc_006.php">경영 시스템 인증</a></div></td>
                   <td width="132" data-sheets-value="{'1':2,'2':'품질 경영'}"><a href="/theme/rt_igcert/manage/igc_006_ISO9001.php">품질 경영</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 9001'}"><a href="/theme/rt_igcert/manage/igc_006_ISO9001.php">ISO    9001</a></td>
                   <td><a href="/bbs/board.php?bo_table=notice">자료파일</a></td>
                   <td><a href="/bbs/board.php?bo_table=free">뉴스</a></td>
                   <td><a href="/bbs/board.php?bo_table=gallery">인재채용</a></td>
               </tr>
               <tr>
                   <td width="122" data-sheets-value="{'1':2,'2':'행동강령'}"><a href="/theme/rt_igcert/sub01/sub02.php">행동강령</a></td>
                   <td width="132" data-sheets-value="{'1':2,'2':'환경'}"><a href="/theme/rt_igcert/manage/igc_007_ISO14001.php">환경</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 14001'}"><a href="/theme/rt_igcert/manage/igc_007_ISO14001.php">ISO    14001</a></td>
                 <!------------IGC Global Partner 시작---------->
                  <td width="138" data-sheets-value="{'1':2,'2':'IGC Global Partner'}"><a href="/bbs/board.php?bo_table=igcglobal">IGC Global Partner</a></td>
                 <!------------IGC Global Partner 시작----------> 
             
               </tr>
               <tr>
                   <td width="122" data-sheets-value="{'1':2,'2':'공정성'}"><a href="/theme/rt_igcert/sub01/sub03.php">공정성</a></td>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'보건 및 안전'}"><div><a href="/theme/rt_igcert/manage/igc_008_OHSAS18001.php">보건 및 안전</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'OHSAS 18001'}"><a href="/theme/rt_igcert/manage/igc_008_OHSAS18001.php">OHSAS    18001</a></td>
                <td width="138" data-sheets-value="{'1':2,'2':'인증절차'}"><a href="/theme/rt_igcert/sub01/process.php">인증절차</a></td>
             
               </tr>
               <tr>
                 <td width="122" data-sheets-value="{'1':2,'2':'인증로고&마크'}"><a href="/theme/rt_igcert/sub01/sub04.php">인증로고&amp;마크</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 45001'}"><a href="/theme/rt_igcert/manage/igc_009_ISO45001.php">ISO    45001</a></td>
                 <!------------사이트맵(전체메뉴) 시작---------->
                  <td width="138" data-sheets-value="{'1':2,'2':'사이트맵(전체메뉴)'}"><a href="/theme/rt_igcert/sub07.php">사이트맵(전체메뉴)</a></td>
                 <!------------사이트맵(전체메뉴) 종료---------->
               </tr>
               <tr>
                   <td width="122" data-sheets-value="{'1':2,'2':'이의제기'}"><a href="/theme/rt_igcert/sub01/sub05.php">이의제기</a></td>
                 <td rowspan="4" width="132" data-sheets-value="{'1':2,'2':'보건 및 의료기기'}"><div><a href="/theme/rt_igcert/manage/igc_010_ISO13485.php">보건 및 의료기기</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 13485'}"><a href="/theme/rt_igcert/manage/igc_010_ISO13485.php">ISO    13485</a></td>
               </tr>
               <tr>
                   <td width="122" data-sheets-value="{'1':2,'2':'오시는 길'}"><a href="/theme/rt_igcert/sub01/sub06.php">오시는    길</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'MDSAP'}" data-sheets-note="기초 컨첸츠 제공 없음"><a href="#">MDSAP</a></td>
               </tr>
               <tr>
                 <td></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 15378'}"><a href="/theme/rt_igcert/manage/igc_012_ISO15378.php">ISO    15378</a></td>
               </tr>
               <tr>
                   <td align="center" bgcolor="#ccffff"><strong><a href="/bbs/content.php?co_id=privacy">기타</a></strong></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 14155'}"><a href="#/theme/rt_igcert/manage/igc_013_ISO14155.php">ISO    14155</a></td>
               </tr>
               <tr>
                   <td><a href="/bbs/content.php?co_id=privacy">개인정보처리방침</a></td>
                 <td rowspan="4" width="132" data-sheets-value="{'1':2,'2':'식품'}"><div><a href="/theme/rt_igcert/manage/igc_014_ISO22000.php">식품</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22000'}"><a href="/theme/rt_igcert/manage/igc_014_ISO22000.php">ISO    22000</a></td>
               </tr>
               <tr>
                   <td><a href="/bbs/content.php?co_id=provision">서비스이용약관</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'FSSC 22000'}"><a href="/theme/rt_igcert/manage/igc_014_ISO22000.php">FSSC    22000</a></td>
               </tr>
               <tr>
                   <td><a href="/bbs/board.php?bo_table=qa">묻고답하기</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'FDA FSMA'}"><a href="/theme/rt_igcert/manage/igc_014_ISO22000.php">FDA    FSMA</a></td>
               </tr>
               <tr>
                   <td><a href="/bbs/qalist.php">1:1상담</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'Global HACCP'}"><a href="/theme/rt_igcert/manage/igc_014_ISO22000.php">Global    HACCP</a></td>
               </tr>
               <tr>
                   <td><a href="/bbs/search.php">통합검색</a></td>
                   <td width="132" data-sheets-value="{'1':2,'2':'에너지 경영'}"><a href="/theme/rt_igcert/manage/igc_018_ISO50001.php">에너지 경영</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 50001'}"><a href="/theme/rt_igcert/manage/igc_018_ISO50001.php">ISO    50001</a></td>
               </tr>
               <tr>
                   <td><a href="/bbs/register.php">회원가입 페이지</a></td>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'정보 보안'}"><div><a href="/theme/rt_igcert/manage/igc_019_ISO27001.php">정보 보안</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 27001'}"><a href="/theme/rt_igcert/manage/igc_019_ISO27001.php">ISO    27001</a></td>
               </tr>
               <tr>
                   <td><a href="/bbs/login.php">로그인 페이지</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 20000-1'}"><a href="/theme/rt_igcert/manage/igc_020_ISO20000-1.php">ISO    20000-1</a></td>
               </tr>
               <tr>
                   <td><a href="/theme/rt_igcert/sub01/sub07.php">사이트맵</a></td>
                   <td width="132" data-sheets-value="{'1':2,'2':'부패 방지'}"><a href="/theme/rt_igcert/manage/igc_021ISO37001.php">부패 방지</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 37001'}"><a href="/theme/rt_igcert/manage/igc_021ISO37001.php">ISO    37001</a></td>
               </tr>
               <tr>
                   <td rowspan="99">　</td>
                   <td width="132" data-sheets-value="{'1':2,'2':'교육'}"><a href="/theme/rt_igcert/manage/igc_022_ISO21001.php">교육</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 21001'}"><a href="/theme/rt_igcert/manage/igc_022_ISO21001.php">ISO    21001</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'비즈니스'}"><a href="/theme/rt_igcert/manage/igc_023_ISO22301.php">비즈니스</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22301'}"><a href="/theme/rt_igcert/manage/igc_023_ISO22301.php">ISO    22301</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'화장품'}"><a href="/theme/rt_igcert/manage/igc_024_ISO22716.php">화장품</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22716'}"><a href="/theme/rt_igcert/manage/igc_024_ISO22716.php">ISO    22716</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'고객 만족'}"><a href="/theme/rt_igcert/manage/igc_025_ISO10002_10004.php">고객    만족</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 10002/10004'}"><a href="/theme/rt_igcert/manage/igc_025_ISO10002_10004.php">ISO    10002/10004</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'사회적 책임'}"><a href="/theme/rt_igcert/manage/igc_026_SA8000.php">사회적    책임</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'SA 8000'}"><a href="/theme/rt_igcert/manage/igc_026_SA8000.php">SA    8000</a></td>
               </tr>
               <tr>
                 <td rowspan="7" width="104" data-sheets-value="{'1':2,'2':'시험'}"><div><a href="/theme/rt_igcert/medical/igc_026.php">시험</a></div></td>
                   <td width="132" data-sheets-value="{'1':2,'2':'전기전자'}"><a href="/theme/rt_igcert/medical/igc_026-1.php">전기전자</a></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'전기안전'}"><a href="/theme/rt_igcert/medical/igc_026-1.php">전기안전</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'기계'}"><a href="/theme/rt_igcert/medical/igc_027-2.php">기계</a></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'기계안전'}"><a href="/theme/rt_igcert/medical/igc_027-2.php">기계안전</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'의료기기'}"><a href="/theme/rt_igcert/medical/igc_028-3.php">의료기기</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'의료기기 인증시험'}"><a href="/theme/rt_igcert/medical/igc_028-3.php">의료기기    인증시험</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'화학분석'}"><a href="/theme/rt_igcert/medical/igc_029.php">화학분석</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'식품 영양분석'}"><a href="/theme/rt_igcert/medical/igc_029.php">식품    영양분석</a></td>
               </tr>
               <tr>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'생물학적 시험'}"><div><a href="/theme/rt_igcert/medical/igc_030-4.php">생물학적 시험</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'식품 영양분석'}"><a href="/theme/rt_igcert/medical/igc_030-4.php">식품    영양분석</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'Sanitation test'}"><a href="/theme/rt_igcert/medical/igc_030-4.php">Sanitation    test</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'건축자재'}"><a href="/theme/rt_igcert/medical/igc_036.php">건축자재</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'건축자재 인증시험'}"><a href="/theme/rt_igcert/medical/igc_036.php">건축자재    인증시험</a></td>
               </tr>
               <tr>
                 <td rowspan="36" width="104" data-sheets-value="{'1':2,'2':'교육 '}"><div><a href="/theme/rt_igcert/edu1/igc_033.php">교육</a></div></td>
                   <td width="132" data-sheets-value="{'1':2,'2':'품질'}"><a href="/theme/rt_igcert/edu1/igc_033_ISO9001.php">품질</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 9001'}"><a href="/theme/rt_igcert/edu1/igc_033_ISO9001.php">ISO    9001</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'환경'}"><a href="/theme/rt_igcert/edu1/igc_034_ISO14001.php">환경</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 14001'}"><a href="/theme/rt_igcert/edu1/igc_034_ISO14001.php">ISO    14001</a></td>
               </tr>
               <tr>
                   <td width="132" data-sheets-value="{'1':2,'2':'의료기기'}"><a href="/theme/rt_igcert/edu1/igc_035_ISO13485.php">의료기기</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 13485'}"><a href="/theme/rt_igcert/edu1/igc_035_ISO13485.php">ISO    13485</a></td>
               </tr>
               <tr>
                 <td rowspan="4" width="132" data-sheets-value="{'1':2,'2':'식품'}"><div><a href="/theme/rt_igcert/edu1/igc_036_ISO22000.php">식품</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22000'}"><a href="/theme/rt_igcert/edu1/igc_036_ISO22000.php">ISO    22000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'FSSC 22000'}"><a href="/theme/rt_igcert/edu1/igc_037_FSSC22000.php">FSSC    22000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'FDA FSMA'}"><a href="/theme/rt_igcert/edu1/igc_038-12_FDA-FSMA.php">FDA    FSMA</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'FSPCA 승인 PCQI 양성과정'}"><a href="/theme/rt_igcert/edu1/igc_039-13_FSPCA-PCQL.php">FSPCA    승인 PCQI 양성과정</a></td>
               </tr>
               <tr>
                 <td width="132" data-sheets-value="{'1':2,'2':'보건 및 안전'}"><a href="/theme/rt_igcert/edu1/igc_040-14_OHSAS18001.php">보건    및 안전</a></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'OHSAS 18001'}"><a href="/theme/rt_igcert/edu1/igc_040-14_OHSAS18001.php">OHSAS    18001</a></td>
               </tr>
               <tr>
                 <td rowspan="4" width="132" data-sheets-value="{'1':2,'2':'정보보안'}"><div><a href="/theme/rt_igcert/edu1/igc_041-15_ISO-IEC27002.php">정보보안</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 27002'}"><a href="/theme/rt_igcert/edu1/igc_041-15_ISO-IEC27002.php">ISO/IEC    27002</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 27005'}"><a href="/theme/rt_igcert/edu1/igc_042_ISO-IEC27005.php">ISO/IEC    27005</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 27799'}"><a href="/theme/rt_igcert/edu1/igc_043_ISO27799.php">ISO    27799</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 27001'}"><a href="/theme/rt_igcert/edu1/igc_044_ISO27001.php">ISO    27001</a></td>
               </tr>
               <tr>
                 <td rowspan="3" width="132" data-sheets-value="{'1':2,'2':'건강,안전및환경'}"><div><a href="/theme/rt_igcert/edu1/igc_045_ISO20121.php">건강,안전및환경</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 20121'}"><a href="/theme/rt_igcert/edu1/igc_045_ISO20121.php">ISO    20121</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 26000'}"><a href="/theme/rt_igcert/edu1/igc_046_ISO26000.php">ISO    26000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 45001'}"><a href="/theme/rt_igcert/edu1/igc_047_ISO45001.php">ISO    45001</a></td>
               </tr>
               <tr>
                 <td rowspan="4" width="132" data-sheets-value="{'1':2,'2':'품질경영시스템'}"><div><a href="/theme/rt_igcert/edu1/igc_048_ISO13053.php">품질경영시스템</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 13053'}"><a href="/theme/rt_igcert/edu1/igc_048_ISO13053.php">ISO    13053</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 17025'}"><a href="/theme/rt_igcert/edu1/igc_049_ISO-IEC17025.php">ISO/IEC    17025</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 30301'}"><a href="/theme/rt_igcert/edu1/igc_050_ISO30301.php">ISO    30301</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 21500'}"><a href="/theme/rt_igcert/edu1/igc_051_ISO%2021500.php">ISO    21500</a></td>
               </tr>
               <tr>
                 <td rowspan="4" width="132" data-sheets-value="{'1':2,'2':'경영, 위험 및 규정 준수'}"><div><a href="/theme/rt_igcert/edu1/igc_052_ISO31000.php">경영, 위험 및 규정 준수</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 31000'}"><a href="/theme/rt_igcert/edu1/igc_052_ISO31000.php">ISO    31000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 38500'}"><a href="/theme/rt_igcert/edu1/igc_053_ISO-IEC38500.php">ISO/IEC    38500</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 29100'}"><a href="/theme/rt_igcert/edu1/igc_054_ISO-IEC29100.php">ISO/IEC    29100</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 37001'}"><a href="/theme/rt_igcert/edu1/igc_055_ISO37001.php">ISO    37001</a></td>
               </tr>
               <tr>
                 <td rowspan="3" width="132" data-sheets-value="{'1':2,'2':'교통, 통신 및 에너지'}"><div><a href="/theme/rt_igcert/edu1/igc_056_ISO-TS29001.php">교통, 통신 및 에너지</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/TS 29001'}"><a href="/theme/rt_igcert/edu1/igc_056_ISO-TS29001.php">ISO/TS    29001</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 50001'}"><a href="/theme/rt_igcert/edu1/igc_057_ISO50001.php">ISO    50001</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 39001'}"><a href="/theme/rt_igcert/edu1/igc_058_ISO39001.php">ISO    39001</a></td>
               </tr>
               <tr>
                 <td rowspan="5" width="132" data-sheets-value="{'1':2,'2':'연속성, 복원력 및 복구'}"><div><a href="/theme/rt_igcert/edu1/igc_059_ISO28000.php">연속성, 복원력 및 복구</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 28000'}"><a href="/theme/rt_igcert/edu1/igc_059_ISO28000.php">ISO    28000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22301'}"><a href="/theme/rt_igcert/edu1/igc_060_ISO22301.php">ISO    22301</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22320'}"><a href="/theme/rt_igcert/edu1/igc_061_ISO22320.php">ISO    22320</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22316'}"><a href="/theme/rt_igcert/edu1/igc_062_ISO22316.php">ISO    22316</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22317'}"><a href="/theme/rt_igcert/edu1/igc_063_ISO22317.php">ISO    22317</a></td>
               </tr>
               <tr>
                 <td rowspan="3" width="132" data-sheets-value="{'1':2,'2':'IT 보안'}"><div><a href="/theme/rt_igcert/edu1/igc_064_ISO-IEC27032.php">IT 보안</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 27032'}"><a href="/theme/rt_igcert/edu1/igc_064_ISO-IEC27032.php">ISO/IEC    27032</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 27034'}"><a href="/theme/rt_igcert/edu1/igc_065_ISO-IEC27034.php">ISO/IEC    27034</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/IEC 27035'}"><a href="/theme/rt_igcert/edu1/igc_066_ISO-IEC27035.php">ISO/IEC    27035</a></td>
               </tr>
               <tr>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'서비스관리'}"><div><a href="/theme/rt_igcert/edu1/igc_067_ISO-ICE2020000.php">서비스관리</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO/ICE 20000'}"><a href="/theme/rt_igcert/edu1/igc_067_ISO-ICE2020000.php">ISO/ICE    20000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 55001'}"><a href="/theme/rt_igcert/edu1/igc_068_ISO55001.php">ISO    55001</a></td>
               </tr>
               <tr>
                   <td rowspan="36" width="104"><div><a href="http://igcert.cafe24.com/theme/rt_igcert/product/igc_069.php">제품 인증</a></div></td>
                 <td rowspan="10" width="132" data-sheets-value="{'1':2,'2':'유럽 제품인증'}"><div><a href="/theme/rt_igcert/product/igc_069_CEMDD.php">유럽 제품인증</a></div></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'CE MDD'}"><a href="/theme/rt_igcert/product/igc_069_CEMDD.php">CE MDD</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'CE MDR'}"><a href="/theme/rt_igcert/product/igc_070_CEMDR.php">CE    MDR</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'임상평가'}"><a href="/theme/rt_igcert/product/igc_071_01.php">임상평가</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'CE IVD/IVDR'}"><a href="/theme/rt_igcert/product/igc_072_CE-IVD-IVDR.php">CE    IVD/IVDR</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'CE LVD/EMC'}"><a href="/theme/rt_igcert/product/igc_073_CE-LVD-EMC.php">CE    LVD/EMC</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'CE Machinery'}"><a href="/theme/rt_igcert/product/igc_074_CE-Machinery.php">CE    Machinery</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'PED'}"><a href="/theme/rt_igcert/product/igc_075_PED.php">PED</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'SPVD'}"><a href="/theme/rt_igcert/product/igc_076_SPVD.php">SPVD</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'Hot-water boiler'}"><a href="/theme/rt_igcert/product/igc_077_Hot-water-boiler.php">Hot-water    boiler</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'Gas Appliance'}"><a href="/theme/rt_igcert/product/igc_078_Gas-Appliance.php">Gas    Appliance</a></td>
               </tr>
               <tr>
                 <td rowspan="5" width="132" data-sheets-value="{'1':2,'2':'유라시아 제품인증'}"><div><a href="/theme/rt_igcert/product/igc_079_EAC-Certification.php">유라시아 제품인증</a></div></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'EAC 인증'}"><a href="/theme/rt_igcert/product/igc_079_EAC-Certification.php">EAC 인증</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'의료기기'}"><a href="/theme/rt_igcert/product/igc_080_01.php">의료기기</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'식품'}"><a href="/theme/rt_igcert/product/igc_081_01.php">식품</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'화장품'}"><a href="/theme/rt_igcert/product/igc_082_01.php">화장품</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'의약품'}"><a href="/theme/rt_igcert/product/igc_083_01.php">의약품</a></td>
               </tr>
               <tr>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'러시아 제품인증'}"><div><a href="/theme/rt_igcert/product/igc_084_GOST-R.php">러시아 제품인증</a></div></td>
              <td width="143" data-sheets-value="{'1':2,'2':'GOST-R'}"><a href="/theme/rt_igcert/product/igc_084_GOST-R.php">GOST-R</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'의료기기 러시아 등록'}"><a href="/theme/rt_igcert/product/igc_085_01.php">의료기기    러시아 등록</a></td>
               </tr>
               <tr>
                 <td rowspan="8" width="132" data-sheets-value="{'1':2,'2':'미주 제품인증'}"><div><a href="/theme/rt_igcert/product/igc_086_FDA.php">미주 제품인증</a></div></td>
              <td width="143" data-sheets-value="{'1':2,'2':'FDA'}"><a href="/theme/rt_igcert/product/igc_086_FDA.php">FDA</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'의료기기'}"><a href="/theme/rt_igcert/product/igc_087_01.php">의료기기</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'전자 및 방사선 장치'}"><a href="/theme/rt_igcert/product/igc_088_01.php">전자    및 방사선 장치</a></td>
               </tr>
               <tr>
                 <td width="143">　</td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'의약품'}"><a href="/theme/rt_igcert/product/igc_089_01.php">의약품</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'식음료품'}"><a href="/theme/rt_igcert/product/igc_090_01.php">식음료품</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'건강 보조 식품'}"><a href="/theme/rt_igcert/product/igc_091_01.php">건강    보조 식품</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'화장품'}"><a href="/theme/rt_igcert/product/igc_092_01.php">화장품</a></td>
               </tr>
               <tr>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'중국 제품인증'}"><div><a href="/theme/rt_igcert/product/igc_093_CFDA.php">중국 제품인증</a></div></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'CFDA'}"><a href="/theme/rt_igcert/product/igc_093_CFDA.php">CFDA</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'식품 위생 등록'}"><a href="/theme/rt_igcert/product/igc_094_01.php">식품    위생 등록</a></td>
               </tr>
               <tr>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'동남아시아 제품인증'}"><div><a href="/theme/rt_igcert/product/igc_095_01.php">동남아시아 제품인증</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'태국 의료기기 등록'}"><a href="/theme/rt_igcert/product/igc_095_01.php">태국    의료기기 등록</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'대만 의료기기 등록'}"><a href="/theme/rt_igcert/product/igc_096_01.php">대만    의료기기 등록</a></td>
               </tr>
               <tr>
                 <td rowspan="4" width="132" data-sheets-value="{'1':2,'2':'Vegan 인증'}"><div><a href="/theme/rt_igcert/product/igc_097_VeganSociety.php">Vegan 인증</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'Vegan Society 소개'}"><a href="/theme/rt_igcert/product/igc_097_VeganSociety.php">Vegan    Society 소개</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'식품'}"><a href="/theme/rt_igcert/product/igc_098_01.php">식품</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'화장품'}"><a href="/theme/rt_igcert/product/igc_099_01.php">화장품</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'Restaurant'}" data-sheets-note="Restaurant"><a href="/theme/rt_igcert/product/igc_100.php">Restaurant</a></td>
               </tr>
               <tr>
                 <td width="132" data-sheets-value="{'1':2,'2':'HALAL 인증'}"><a href="/theme/rt_igcert/product/igc_101_HALAL.php">HALAL    인증</a></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'HALAL'}"><a href="/theme/rt_igcert/product/igc_101_HALAL.php">HALAL</a></td>
               </tr>
               <tr>
                 <td rowspan="2" width="132" data-sheets-value="{'1':2,'2':'화장품 인증'}"><div><a href="/theme/rt_igcert/product/igc_102_EWG.php">화장품 인증</a></div></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'EWG'}"><a href="/theme/rt_igcert/product/igc_102_EWG.php">EWG</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'CPNP'}"><a href="/theme/rt_igcert/product/igc_103_CPNP.php">CPNP</a></td>
               </tr>
               <tr>
                 <td rowspan="12" width="104" data-sheets-value="{'1':2,'2':'심사원 인증'}"><div><a href="/theme/rt_igcert/aduits/igc_104.php">심사원 인증</a></div></td>
                 <td rowspan="12" width="132" data-sheets-value="{'1':2,'2':'심사원 인증'}"><div><a href="/theme/rt_igcert/aduits/igc_104.php">심사원 인증</a></div></td>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 9001'}"><a href="/theme/rt_igcert/aduits/igc_104_ISO9001.php">ISO    9001</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 14001'}"><a href="/theme/rt_igcert/aduits/igc_105_ISO14001.php">ISO    14001</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 13485'}"><a href="/theme/rt_igcert/aduits/igc_106_ISO13485.php">ISO    13485</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22000'}"><a href="/theme/rt_igcert/aduits/igc_107_ISO22000.php">ISO    22000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 27001'}"><a href="/theme/rt_igcert/aduits/igc_108_ISO27001.php">ISO    27001</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'OHSAS 18001'}"><a href="/theme/rt_igcert/aduits/igc_109_OHSAS18001.php">OHSAS    18001</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 22716'}"><a href="/theme/rt_igcert/aduits/igc_110_ISO22716.php">ISO    22716</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 50001'}"><a href="/theme/rt_igcert/aduits/igc_111_ISO50001.php">ISO    50001</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'ISO 20000'}"><a href="/theme/rt_igcert/aduits/igc_112_ISO20000.php">ISO    20000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'FSSC 22000'}"><a href="/theme/rt_igcert/aduits/igc_113_FSSC22000.php">FSSC    22000</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'FDA FSMA'}"><a href="/theme/rt_igcert/aduits/igc_114_FDAFSMA.php">FDA    FSMA</a></td>
               </tr>
               <tr>
                   <td width="143" data-sheets-value="{'1':2,'2':'PCQI'}"><a href="/theme/rt_igcert/aduits/igc_115_PCQI.php">PCQI</a></td>
               </tr>
               <tr>
                 <td rowspan="3" width="104" data-sheets-value="{'1':2,'2':'연수기관'}"><div><a href="/theme/rt_igcert/global/igc_105.php">연수기관</a></div></td>
                 <td rowspan="3" width="132" data-sheets-value="{'1':2,'2':'연수기관'}"><div><a href="/theme/rt_igcert/global/igc_105.php">연수기관</a></div></td>
                   <td width="143" data-sheets-value="{'1':2,'2':'개요'}"><a href="/theme/rt_igcert/global/igc_116_012.php">개요</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'연수시관 지정 절차'}"><a href="/theme/rt_igcert/global/igc_117_01.php">연수시관    지정 절차</a></td>
               </tr>
               <tr>
                 <td width="143" data-sheets-value="{'1':2,'2':'연수기관 시험 감독관'}"><a href="/theme/rt_igcert/global/igc_118_01.php">연수기관    시험 감독관</a></td>
               </tr>
          </table>
        </div>
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
				<li><p><em><strong>01</strong></em><span>시스템인증</span></p></li>
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