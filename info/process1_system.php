<?php
	include_once('./_common.php');
$g5['title'] = 'System Procedure';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
	/* 그누보드 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /*자료실- 시스템절차 페이지 시작-YR 210616*/
    .content_wrap { /* 서브페이지 전체 레이아웃 */
        width:100%; 
        max-width:1200px;
        margin:0 auto; 
        font-size: 1.2em !important;
        font-weight: 400;
        line-height: 1.5 
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
    .sub_top_stt{
        text-align:center;
        color:#79af0d;
        font-size:2em;
        font-weight:600;
        margin-top:50px;
        padding-bottom:40px;
    }
    .sub_top_stt:after { /*밑줄선*/
        content: "";
        clear: both;
        display: block;
        width: 30px;
        margin: 50px auto 0;
        border: 1px solid #333;
    }
    .vision_type2 .stitle{
        font-size:1em;
        color:#222;
        font-weight:400;
        line-height:1.8em;
        margin-bottom:30px;
    }
    .vision_type2 .img_div{margin-bottom:50px;}
    /*인증절차 리스트*/
    .step_list{}
    .step_list li{
        overflow:hidden;
        width:100%;
        height:200px;
        padding:20px 30px;
        margin:35px 0;
        background:#f7f7f7;
        border-radius:200px;
        position:relative;
        box-shadow:1px 1px 6px 4px #f0f0f0;
        text-align: justify;
    }
    .step_list li .step_number{ /*STEP CIRCLE*/
        position:absolute;
        top:30px;
        left:20px;
        width:140px;
        height:140px;
        border-radius:50%;
        border:1px solid #f0f0f0;
        background:#fff;
        color:#0a4f81;
        font-size:1.4em;
        font-weight:500;
        line-height:140px;
        text-align:center;
    }
    .step_list .step_tt{
        font-size:1.4em;
        color:#79af0d;
        font-weight:500;
        margin-left:160px;
        margin-bottom:5px;
    }
    .step_list .step_txt{
        font-size:0.95em;
        color:#333;
        font-weight:400;
        line-height:1.6em;
        margin-left:160px;
        margin-right:10px;
    }
    
    /*인증의 확대 및 축소,정지 및 취소*/
    .vision_area{margin-bottom:80px;}
    .vision_area:last-child{margin-bottom:0px;}
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
        font-size:0.95em;
        color:#222;
        font-weight:400;
        line-height:1.5em;
    }
    .box_content_txt>li{width:100%;}
    .content_box1, .content_box2{
        width:100%;
        height:auto;
        overflow:hidden;
        display:table;
    }
    .content_box1 .title_box, .content_box2 .title_box{
        display:table-cell;
        width:30%;
        height:auto;
        vertical-align: middle;
        text-align:center;
        font-size:1.2em;
        font-weight:400;
        background:#93a2bf;
        color:#fff;
    }
    .content_box1 .text_box, .content_box2 .text_box{
        display:table-cell;
        width:70%;
        height:auto;
        padding:20px 25px;
        color:#333;
        font-weight:400;
        line-height:1.7em;
        background:#f7f7f7;
    }
    .text_box>ul:not(.text_box_first){
        width:95%;
        margin:5px 0 0 0%;
    }
    .text_box>ul li{
        font-size:0.95em;
        color:#333;
        font-weight:400;
        line-height:1.6em;
        padding:3px 0;
        width:100%;
        text-align: justify;
    }
    .text_box>p{
        font-size:1.1em;
        line-height:1.6em;
        font-weight:500;
        color:#79af0d;
        margin-top:10px;
    }
    

/*자료실- 시스템절차 페이지 끝*/ 

    
    /* -----------------------------------------------------반응형 시작 -210622 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .step_list li{
            overflow:hidden;
            width:100%;
            height:310px;
            padding:15px 30px;
            margin:35px 0;
            background:#f7f7f7;
            border-radius:250px;
        }
        .step_list li .step_number{ /*STEP CIRCLE*/
            position:absolute;
            top:80px;
        }
        .step_list .step_tt{
            color:#79af0d;
            font-weight:500;
            margin-left:150px;
            margin-bottom:5px;
        }
        .step_list .step_txt{ /*텍스트*/
            margin-left:150px;
            margin-right:40px;
        }
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        .step_list li{
            overflow:hidden;
            width:100%;
            height:350px;
            padding:20px 20px;
            margin:35px 0;
            background:#f7f7f7;
            border-radius:20px;
            position:relative;
            box-shadow:1px 1px 6px 4px #f0f0f0;
            text-align: justify;
        }
        .step_list li .step_number{ /*STEP CIRCLE*/
            position:absolute;
            top:20px;
            left:20px;
            width:110px;
            height:110px;
            border-radius:50%;
            border:1px solid #f0f0f0;
            background:#fff;
            color:#0a4f81;
            font-weight:500;
            line-height:110px;
            text-align:center;
        }
        .step_list .step_tt{margin-left:125px;}
        .step_list .step_txt{margin-left:125px;margin-right:0px;}
    }

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .sub_top_tt{display:none;} /*탭메뉴와 중복되어서 안보이게함*/
        .step_list li{padding:25px 25px 30px;height:auto;line-height:1.6em;}
         .step_list li .step_number{ /*STEP CIRCLE*/
            position:static;
            width:50px;
            height:50px;
            margin:0 auto;
            border-radius:50%;
            border:1px solid #f0f0f0;
            background:#fff;
            color:#0a4f81;
            font-size:1.6em;
            font-weight:500;
            line-height:46px;
            text-align:center;
        }
        .step_list li .step_number>span{display:none;}
        .step_list .step_tt{margin-left:0;margin-top:10px;text-align:center;}
        .step_list .step_txt{margin-left:0;margin-top:20px;text-align:center;}
        .content_box1 .title_box, .content_box2 .title_box{display:none;}
        .content_box1 .text_box, .content_box2 .text_box{width:100%;}
        .box_title{
            color:#102f45;
            font-weight:500;
        }
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap { font-size: 1.1em !important }
        
        .sub_top_stt{
            text-align:center;
            color:#79af0d;
            font-size:1.6em;
            font-weight:600;
            margin-top:50px;
            padding-bottom:40px;
        }
        .vision_type2 .stitle{
            font-size:1.1em;
            line-height:1.7em;
        }
        .step_list li{padding:20px 20px 30px;height:auto;}
        .step_list li .step_number{ /*STEP CIRCLE*/
            width:40px;
            height:40px;
            font-size:1.4em;
            line-height:38px;
        }
        .content_box1 .title_box, .content_box2 .title_box{display:none;}
        .content_box1 .text_box, .content_box2 .text_box{width:100%;}
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) {  
        .step_list li .step_number{ /*STEP CIRCLE*/
            width:40px;
            height:40px;
            font-size:1.4em;
            line-height:38px;
        }
    }  
/*---------------------------------------------------------------반응형 끝*/
    
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title" style="margin-bottom:20px;">
		<img src="./images/eng_references_banner_04.png" alt="시스템절차 배너"><br><br><br>
        <div class="sub_top_tt">System Certification Process</div>
		<div class="sub_top_stt">Application and Certification Process</div>
	</div>

	<div class="vision_type2">
        <span class="stitle" style="display:block;text-align:justify"><span style="color:#102f45;font-weight:500;">GIC Certification Institute</span> is researching a faster and easier approach in the ever-changing global exchange field. We will devote ourselves to continuous and continuous improvement for product development and productivity improvement, and contribute to industrial development through quality innovation and improvement of production capacity.</span>
		<div class="img_div"><img src="../image/process_01_system_english.png" alt="인증절차"></div>
        
           <!--리스트시작-->
        <ul class="step_list">
			<li>
                <div class="step_number"><span>STEP</span> 1</div>
                <div class="step_tt"> Certification inquiry and proposal</div>
                <div class="step_txt">
                    Before applying for certification, we provide consultation on the overall procedure and method for certification audit. Upon request from the company, we will send you a proposal for the certification review period and certification fee.
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 2</div>
                <div class="step_tt">Application for certification</div>
                <div class="step_txt">
                    The contract is automatically concluded upon receipt of the certification application, and a separate contract can be issued upon request.
                </div>
			</li>
			<li>
                <div class="step_number"><span>STEP</span> 3</div>
                <div class="step_tt">Notice of Review Plan</div>
                <div class="step_txt">
                    After the certification application is confirmed, a detailed audit plan including the audit team and audit schedule is notified to the company. At this time GIC discusses the audit schedule with the company.
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 4</div>
                <div class="step_tt">Preliminary audit</div>
                <div class="step_txt">
                    The purpose is to give an opportunity to improve the system through a preliminary review prior to this review, and it is conducted only at the request of the applicant company.
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 5</div>
                <div class="step_tt">1st stage audit (document audit)</div>
                <div class="step_txt">
                    The first stage audit is an audit conducted to confirm the suitability of the management system. There are partial differences in the scope of the examination for each requested standard, and the management system documents are reviewed.
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 6</div>
                <div class="step_tt">2nd stage audit (site audit)</div>
                <div class="step_txt">
                   The second stage of the audit is to verify the actual fact that the certification application standards and the organization's management system meet all the requirements related to the scope of certification through on-site inspection. If the standards are met based on objective facts, the certification registration registration is recommended.
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 7</div>
                <div class="step_tt">Nonconformity Corrective Action</div>
                <div class="step_txt">
                    In case of nonconformity as a result of the audit, corrective action must be taken, and the result of corrective action is made through written confirmation or confirmation at the on-site audit.
                </div>
			</li>
			
			
			<li >
                <div class="step_number"><span>STEP</span> 8</div>
                <div class="step_tt"> Certification review</div>
                <div class="step_txt">
                    The certification committee determines whether to register for certification by evaluating the appropriateness of the entire audit process.	
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 9</div>
                <div class="step_tt">Certificate issuance</div>
                <div class="step_txt">
                    When certification registration is decided, a certificate is issued and delivered to the customer.
                </div>
			</li>
			
			
			<li>
                <div class="step_number"><span>STEP</span> 10</div>
                <div class="step_tt">surveillance audit</div>
                <div class="step_txt">
                    If it is conducted to verify that the certification registration organization continues to comply with the certification conditions, it is carried out in accordance with the initial on-site audit procedure.<br>
                    The regular follow-up audit cycle takes place every year from the date of the initial audit, and must be conducted regularly in accordance with ISO international regulations and IAF MD regulations.<br>
				    <SMALL>[Remarks] The first post audit cannot exceed 12 months from the date of the previous certification decision.</SMALL>
                </div>
			</li>
			<li>
                <div class="step_number"><span>STEP</span> 11</div>
                <div class="step_tt">Recertification audit</div>
                <div class="step_txt">
                    It is conducted every three years for the purpose of recertification of certification, and it is conducted according to the same procedure as the initial certification review.
                </div>
			</li>
        </ul>
        </div>
        <br><br>	
			
	<br><br><br><br>
    
    <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
            <h2 class="box_title">&bull; Expansion and reduction of certification</h2>
            <span class="bottom_line"></span>
            <ul class="box_content_txt">
                <li class="clear content_box1">
                    <div class="title_box"><span class="material-icons" style="display:block;font-size:2em;margin-bottom:10px;">open_in_full</span>Expansion and reduction</div>
                    <div class="text_box">
                        <p>Expansion of certification</p>
                        <ul>
                            <li>
                            If the certified organization is considering expanding the scope of certification or adding a site, it can apply for certification expansion.<br>
                            The certification body that has received the application reviews it and then conducts necessary audit activities to decide whether to approve it.
                            </li>
                        </ul>

                        <p>reduction of certification</p>
                        <ul>
                            <li>
                            If a certified organization ceases to provide certain products or services specified in the scope of certification, or withdraws from a registered site or services is discontinued, the organization shall notify the certification authority within one month.<br>
                            Upon receiving the notification, the certificating authority reviews it and conducts necessary audit activities to determine whether to approve it or not. If the scope of the certification is reduced, all relevant promotional materials must also be modified.
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
		</div> <!----// class="vision_area" 종료----->


		<div class="vision_area">
            <h2 class="box_title">&bull; Suspension and cancellation of certification</h2>
            <span class="bottom_line"></span>
            <ul class="box_content_txt">
                <li class="clear content_box2">
                    <div class="title_box"><span class="material-icons" style="display:block;font-size:2em;margin-bottom:10px;">block</span>Suspension and cancellation</div>
                    <div class="text_box">
                        <ul class="text_box_first">
                            <li>
                                The certified organization is not limited to the following cases, but certification may be suspended or cancelled in the following cases, and the certificate may be withdrawn. In the event of such a reason for suspension or cancellation, the Certification Authority reviews the matter and makes a decision on suspension or cancellation. The organization shall ensure that in the event of suspension or revocation of certification, the use of all promotional materials mentioned about the status of certification is suspended.
                            </li>
                        </ul>
                        <p>Suspension of certification</p>
                        <ul>
                            <li>&bull; In case the follow-up audit is not conducted within the specified time limit (if the follow-up audit is not performed within 12 months from the previous certification decision date</li>
                            <li>&bull;  In case the certification system does not have the resources and organization to meet the requirements of the applicable standard as a result of the audit for maintaining certification, or the certification system is mostly not operate.</li>
                            <li>&bull; If there is no credibility in the certification system due to a claim or social question from a stakeholder</li>
                            <li>&bull; In the event that the certification registration organization has not taken measures to respond to changes in the certification system and certification requirements</li>
                            <li>&bull; In the event that a major nonconformity occurs as a result of the on-site verification audit, and a major nonconformity occurs again as a result of the reconfirmation review</li>
                            <li>&bull; In case the related contents are not corrected within one month after receiving the corrective order due to misuse of the certification mark</li>
                            <li>&bull; In case the certification examination fee is overdue for more than 3 months</li>
                            <li>&bull; In case of failure to comply with the organization's obligations under the certification contract</li>
                            <li>&bull; When used beyond the scope of the certificate</li>
                            <li>&bull; In case of violation of contract or agreement</li>
                        </ul>

                        <p>Cancellation of certificates</p>
                        <ul>
                            <li>&bull;  In case corrective action is not taken after 3 months despite the suspension of effect</li>
                            <li>&bull; In case the certificate is officially returned by the certification registration organization</li>
                            <li>&bull; In case the production, activity or service of products (processes) included in the scope of certification is suspended</li>
                            <li>&bull; If the entity to be certified is lost or not confirmed due to the dissolution of the certification registration organization or loss of contact, etc.</li>
                            <li>&bull;  In the case of post-examination, if the review does not proceed within one month after the suspension</li>
                        </ul>
                    </div>
                </li>
            </ul>
     </div> <!----class="vision_area 종료------>
   </div> <!--//class="vision_type2" 종료---->


   
   
</div> <!--// class="content_wrap" 종료 ---->

<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<!----위 코드 관련 내용 : 상단 메인메뉴 ----->