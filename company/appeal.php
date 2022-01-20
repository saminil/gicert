<?php
	include_once('./_common.php');
$g5['title'] = 'appeal';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');
	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">



<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
/*회사안내- 이의제기 페이지 시작-YR 210616*/
    .content_wrap { /* 서브페이지 전체 레이아웃 */
        width:100%; 
        max-width:1200px;
        margin:0 auto; 
        font-size: 1.2em !important;
        font-weight: 400;
        line-height: 1.5;
        overflow: hidden;
    }
    .clear{ /*float 문제 해결*/
        content="";
        display:block;
        clear:both;
    }
    .sub_top_tt{
        color:#0A4F81;
        text-align:center;
        font-size:1.6em;
        font-weight:600;
        border:2px solid #f0f0f0;
        padding:22px 0;
    }
    
    /*고객게시판 글쓰기 버튼*/
    .write_qna_btn a{
        display:block;
        text-align:center;
        width:24%;
        height:56px;
        margin:20px 38% 120px;
        border:1px solid #f5f5f5;
        background:#f5f5f5;
        color:#0A4F81;
        line-height:54px;
        font-weight:500;
        border-radius: 60px;
        box-sizing:border-box;
    }
    .write_qna_btn a:hover{
        border:1px solid #0A4F81;
        background:#0A4F81;
        color:#fff;}
    .write_qna_btn a .material-icons{
        font-size:1.4em;
        vertical-align:middle;
    }
    
    /*게시판 영역 CSS 해당 페이지에서만 변경 210802 전산팀 yr*/
    .lat>.lat_title {
        font-size: 1.6em;
        color:#102f45 !important;
        font-weight: 500;
        padding-bottom:3px;
    }
    .lat li:first-child {
        border-top: 2px solid #102f45;
    }
    .claim_opinion{
        display:block;
        width:80%;
        margin-top:20px;
    }
    .lat .lt_more {
        position: absolute;
        top: 5px;
        right: 21%;
    }
    
    /*이의제기 컨텐츠*/
    .appeal_box{margin-bottom:80px;}
    .complaint_box{margin-bottom:20px;}
    .box_title{
        font-size:1.6em;
        color:#102f45;
        font-weight:500;
    }
    .bottom_line{
        display:block;
        width:100%;
        height:2px;
        background:#102f45;
        margin:10px 0 30px;
    }
    .box_content_txt{
        color:#333;
        font-weight:400;
        line-height:1.8em;
        text-align:justify;
        letter-spacing:-0.02em;
    }
    
    /*주소,이메일,전화 ul*/
    .box_content_txt ul.appeal_info{
        display:block;
        width:100%;
        height:auto;
        background:#f7f7f7;
        border-radius: 5px;
        padding:30px 20px 25px;
        text-align: justify;
    }
    .box_content_txt ul li{
        height:40px;
        vertical-align: middle;
        text-indent:10px;
    }
    .box_content_txt ul li:first-child{margin-bottom:10px;}
    .box_content_txt ul li>b{
        display:inline-block;
        width:15%;
    }
    .box_content_txt .material-icons {
        font-size: 1.4em;
        vertical-align: middle;
        color: #0A4F81;
        padding-right: 5px;
    }
    
    /*이의제기 목록 ul*/
    .box_content_txt ul.appeal_info2 li:not(:first-child){height:35px;text-indent:15px;color:#102f45;}

    

    
    /* -----------------------------------------------------반응형 시작 -210622 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .write_qna_btn a{
            line-height:52px;
            width:220px;
            height:55px;
            margin:20px auto 120px;
        }
        
        /*주소,이메일,전화 ul*/
        .box_content_txt ul li{
            height:auto;
            padding:6px 0;
            vertical-align: middle;
            text-indent:4px;
        }
        .box_content_txt ul li>b{
            display:inline-block;
            width:50%;
        }
         .box_content_txt ul li .info_detail{display:block;margin-left:35px;}
        
        /*게시판 영역 CSS 해당 페이지에서만 변경 210802 전산팀 yr*/
        .main_bbs .wrap{padding:0px;}
        .claim_opinion{display:block;width:100%;margin-top:20px;}
        .lat .lt_more {top: 5px;right: 0%;}
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        /*주소,이메일,전화 ul*/
        .box_content_txt ul li:first-child{height:auto;margin-bottom:15px;}
        .box_content_txt ul li>b{display:inline-block;width:50%;margin-bottom:2px;}
        .box_content_txt ul li .info_detail{display:block;margin-left:30px;}
        /*아이콘*/
        .box_content_txt .material-icons{padding-right:0px;}
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .sub_top_tt{display:none;} /*탭메뉴와 중복되어서 안보이게함*/
        .page_title{margin-bottom:50px;}
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
        .lat .lt_more {top: 5px !important;right: 0% !important;}
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap { font-size: 1.1em !important }
        
        .page_title img{width:20%;margin:30px 40% 0;}
        
        /*폰트사이즈 변경*/
        .box_content_txt ul li{text-indent:0px;}
        .box_content_txt ul li .info_detail{display:block;margin-left:25px;}
        .box_content_txt ul li>b{margin-left:5px;}
        
        .box_content_txt ul.appeal_info2 li:not(:first-child){height:auto;padding:6px 0;text-indent:0px;color:#102f45;}
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) {  
        .write_qna_btn a{
            width:180px;
            height:46px;
            margin:20px auto 120px;
            line-height:42px;
        }
        .page_title img{width:20%;margin:30px 40% 0;}
        .box_content_txt ul li{padding:8px 0px;}
    }  
    
/*---------------------------------------------------------------반응형 끝*/
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap animatedParent">
    <section class="page_title animated fadeInUpShort">
        <div class="sub_top_tt">Appeal</div>
	</section>


	<br>
	<section class="main_sec main_bbs animated fadeInUpShort">
	<div class="wrap">
		<!-- 일반 최근글 /theme/구매테마/skin/latest/basic/latest.skin.php -->
		<div class="claim_opinion"><?php echo latest('theme/basic', 'claim', 5, 40); ?></div>
	</div>
    </section>
    
    <!--고객게시판 글쓰기 버튼-->
    <div class="write_qna_btn animated fadeInUpShort"><a href="/bbs/write.php?bo_table=claim">Client Board&nbsp;<span class="material-icons">edit_note</span></a></div>
    
    <!--------------// appeal_box //--------------->
    
    <div class="appeal_box">
        <h2 class="box_title">1. Appeal Process</h2>
        <span class="bottom_line"></span>
        <ul class="box_content">
            <li>
                <div class="box_content_txt">
                    Any customer can appeal the GIC's certification decision.<br>
                    The Executive Director of the GIC must decide whether to accept the appeal within 30 days of being notified of the appeal.<br><br>
                    <ul class="appeal_info">
                        <li>Appeals can be submitted to the GIC's management (administrative) manager by email or at the address below.</li>
                        <li><span class="material-icons">edit</span><b>Head Office</b><span class="info_detail">904 E. Winsor Road #102, Glendale, CA 91205, U.S.A. </span></li>
                        <li><span class="material-icons">edit</span><b>Key Location</b><span class="info_detail">Rm. 502, Daeryung techno town, 638, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea </span></li>
                        <li><span class="material-icons">edit</span><b>E-Mail</b><span class="info_detail gic_email">info@gicert.org</span></li>
                        <li><span class="material-icons">edit</span><b>Tel</b><span class="info_detail">+1 213 261 0787 (USA Office)</span></li>
                        <li><span class="material-icons">edit</span><b>Fax</b><span class="info_detail">+1 213 261 0797</span></li>
                    </ul><br>
                    In order to verify and investigate the submitted appeal document, the relevant evidence must also be submitted.<br><br>
                    
                    The administration can verify appeal documents and request additional data if necessary.<br>
                    After confirming the appeal, if it is delivered to the manager of the administration department, the manager does not acknowledge the appeal or has the right to organize the appeal panel based on the appeal content.<br>
                    Adverse certification, decision on re-certification, or appeal to revocation of certification shall be processed in writing. <br>
                    Any written appeals will be reviewed and resolved as soon as possible through formal documented procedures.<br><br>

                    <ul class="appeal_info2">
                        <li>Appeals can be made in the following decisions:</li>
                        <li>a. Refusing to accept initial certification</li>
                        <li>b. Rejecting approval for maintaining certification</li>
                        <li>c. Refusing to approve upgrading certification grade</li>
                        <li>d. Decrease in certification rating</li>
                    </ul><br>
                    
                    If an appeal is accepted, the administrative manager organizes an appeal panel, and if necessary, the chairman of the appeal panel can request the applicant to attend.<br>The Appeal Panel recommends the administrative manager to take necessary measures for the satisfaction of the claimant, and the Appeal Panel recommends preventive measures to prevent recurrence of such a situation.<br>
                    The administrator makes the decision on the appeal based on the recommendation of the Appeal Panel, and the Executive Director's decision is treated as a final decision.<br>
                    The above procedure must be completed within 45 days of the complaint being filed.<br><br>

                    Objectors who disapprove of the Administrator's decision may raise an appeal to GIC representative.<br><br>

                    GIC representatives will convene a three-member Appeal Panel, which will investigate the Appeal Case and follow the relevant procedures to handle the Appeal.<br><br>

                    GIC representatives make decisions on accepting appeals based on recommendations from the Appeal Panel. In this case, the representative's decision is final.<br>
                    The above procedure will be completed within 45 days of the complaint being reported to the Representative.<br><br>

                    GIC representatives can seek advice from the appropriate experts they think are necessary.<br>
                    If the complainant is not satisfied with GIC representative's decision, the complainant may challenge the Accreditation Body.<br>
                    However, this method can be used after all appeals to GIC have been made.<br>
                    In this case, the process of filing an appeal from the accreditation body will be followed.
                </div>
            </li>
        </ul>
    </div>
    
    <!--------------// complaint_box //--------------->
    
    <div class="complaint_box">
        <h2 class="box_title">2. Complaints</h2>
        <span class="bottom_line"></span>
        <ul class="box_content">
            <li>
                <div class="box_content_txt">
                    Customer complaints are handled by the administration. The administration has authorities to receive, verify, and investigate customer complaints, as well as the decision to take corrective action on customer complaints.<br>
                    Written or verbal, internal or external customer complaints can be filed by any employee at GIC.<br>
                    Customer complaints received are registered in the complaint register operated by GPC and forwarded to the Executive Director.<br>
                    If necessary, additional information can be requested from the complainant.<br><br>

                    
                    GIC must respond to complaints by phone, interim reply or e-mail to the complainant within 24 hours.<br>
                    If possible, formal notices should be given to the person making the complaint at the end of the complaint process.<br>
                    The administrative manager will, without delay, deliver the official disposition of the GIC, including corrective and preventive measures necessary to resolve customer complaints, to the complaint applicant.<br>
                    The conclusion of the complaint must be notified to the complainant, and the complainant and the contents of the complaint must be kept confidential in accordance with the GIC complaint processing procedures.<br>
                    
                </div>
            </li>
        </ul>
    </div>
    
	
      
</div> <!----------++++++++/  div class="content_wrap" 종료  /+++++++++----------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>