<?php
	include_once('./_common.php');
$g5['title'] = 'Product Procedure';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
 /*자료실- 제품절차 페이지 시작-YR 210616*/
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
        margin-bottom:60px;
        display:block;
        text-align:justify;
    }
    .img_div img{width:94%;margin:0 3%;}
    .img_div span{
        display:block;
        text-align:center;
        font-size:0.85em;
        color:#f89834;
        margin-top:10px;
    }
    /*인증절차 리스트*/
    .step_list{margin:60px 0;}
    .step_list li{
        overflow:hidden;
        width:100%;
        height:220px;
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
        color:#222;
        font-weight:400;
        line-height:1.6em;
        margin-left:160px;
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
        margin:5px 0 0 3%;
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
        margin-top:15px;
    }
    
   
    
/*자료실- 제품절차 페이지 끝*/
    



    
    /* -----------------------------------------------------반응형 시작 -210622 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .step_list li{
            overflow:hidden;
            width:100%;
            height:290px;
            padding:20px 30px;
            margin:35px 0;
            background:#f7f7f7;
            border-radius:250px;
        }
        .step_list li .step_number{ /*STEP CIRCLE*/
            position:absolute;
            top:55px;
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
            height:360px;
            padding:15px 20px;
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
            line-height:48px;
            text-align:center;
        }
        .step_list li .step_number>span{display:none;}
        .step_list .step_tt{margin-left:0;margin-top:10px;text-align:center;}
        .step_list .step_txt{margin-left:0;margin-top:20px;text-align:center;}
        .content_box1 .title_box, .content_box2 .title_box{display:none;}
        .content_box1 .text_box, .content_box2 .text_box{width:100%;}
        .vision_type2 .img_div>span{font-size:0.7em;}
        .box_title{
            font-size:1.4em;
            color:#102f45;
            font-weight:500;
        }
    }

    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap { font-size: 1.1em !important }
        
        .sub_top_stt{
            font-size:1.6em;
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
        .vision_type2 .stitle{
            margin-bottom:40px;
        }
        .vision_type2 .img_div{width:100%;margin:0%;}
        .vision_type2 .img_div>span{display:none;}
    }  
/*---------------------------------------------------------------반응형 끝*/

    
	
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>


<!-- /* 내용관리등 에디터로 입력할 경우 여기서부터 */ -->
<div class="content_wrap">
	<div class="page_title" style="margin-bottom:20px;">
	<img src="./images/eng_references_banner_05.png" alt="제품절차 배너"><br><br><br>
        <div class="sub_top_tt">Product Certification Procedure</div>
        <div class="sub_top_stt">Product Certification Procedure</div>
	</div>

	<div class="vision_type2">
		<span class="stitle">
            Product certification varies from country to country and type of certification, so you can check the exact procedure on the information page by category. GIC studies faster and easier access to global exchanges that change from time to time.
        </span>
		<div class="img_div">
            <img src="../image/process_02_product_english.png" alt="인증절차">
            <span>*Product certification varies from country to country and type of certification, so you can check the exact procedure on the information page by category.</span>
		</div>
           <!--리스트시작-->
        <!--리스트시작-->
		<ul class="step_list">
			<li>
                <div class="step_number"><span>STEP</span> 1</div>
                <div class="step_tt"> Certification Inquiry and Proposal</div>
                <div class="step_txt">
                   We will discuss the overall procedures and methods of the certification audit before applying for certification and send you a proposal for the certification audit period and audit expenses upon request from the company.
                </div>
			</li>
            <li>
                <div class="step_number"><span>STEP</span> 2</div>
                <div class="step_tt">Application Registration</div>
                <div class="step_txt">
                   The company submits application for the product and certification to the GIC.
                </div>
			</li>
            <li>
                <div class="step_number"><span>STEP</span> 3</div>
                <div class="step_tt">Conclusion of Contract</div>
                <div class="step_txt">
                    By writing contract, you conclude a contract for product certification.
                </div>
			</li>
			<li>
                <div class="step_number"><span>STEP</span> 4</div>
                <div class="step_tt">Submit Related Documents</div>
                <div class="step_txt">
                    The company submits related documents about the product, such as technical documents, to the GIC.
                </div>
			</li>
            <li>
                <div class="step_number"><span>STEP</span> 5</div>
                <div class="step_tt">1 Stage Audit(Documentation Audit)</div>
                <div class="step_txt">
                    (if applicable)Documentation audit is carried out regarding product certification.	
                </div>
			</li>
			<li>
                <div class="step_number"><span>STEP</span> 6</div>
                <div class="step_tt">2 Stage Audit(On-site Audit)</div>
                <div class="step_txt">
                    (if applicable)The 2 stage audit is to ensure that the actual facts of whether the requirements for product certification regulations or guidelines are met through on-site audit, and certification recommendations will be obtained if the requirements are met based on objective facts.
                </div>
			</li>
			<li>
                <div class="step_number"><span>STEP</span> 7</div>
                <div class="step_tt">Non-conformity Corrective Action</div>
                <div class="step_txt">
                    Corrective action shall be taken for nonconformities as a result of the audit, result of corrective action is made through written confirmation or on-site audit.
                </div>
			</li>
            <li >
                <div class="step_number"><span>STEP</span> 8</div>
                <div class="step_tt">Certification Review</div>
                <div class="step_txt">
                    Determination whether to register for certification by evaluating the appropriateness of the entire process of audit of the entire process of audit through the certification committee.	
                </div>
			</li>
            <li>
                <div class="step_number"><span>STEP</span> 9</div>
                <div class="step_tt">Certificate Issue</div>
                <div class="step_txt">
                    Once the certification registration is decided, the certificate is issued and delivered to the client.
                </div>
			</li>
			<li>
                <div class="step_number"><span>STEP</span> 10</div>
                <div class="step_tt">Surveillance Audit</div>
                <div class="step_txt">
                    If the certification registration organization is to verify that the certification conditions are continuously complied with, it shall be carried out in accordance with the initial on-site audit procedure.<br>
                    Periodic surveillance audit cycles take place every year from the date of initial audit and shall be carried out regularly in accordance with ISO international regulations and IAF MD regulations.<br>
				    <SMALL>[Reference] The 1st surveillance audit shall not exceed 12 months from the date of determination of prior certification.</SMALL>
                </div>
			</li>
            <li>
                <div class="step_number"><span>STEP</span> 11</div>
                <div class="step_tt">Recertification Audit</div>
                <div class="step_txt">
                    The certification is re-certified every 3 years and is carried out in accordance with the same procedure as the initial certification audit.
                </div>
			</li>
        </ul>
        </div>		
			
	<br><br>
    
   <!---//인증의 확대와 축소, 인증의 정지 및 취소 시작 ----->			
	<div class="vision_type5">
	
		<div class="vision_area">
            <h2 class="box_title">&bull; Extending and Reducing Certification</h2>
            <span class="bottom_line"></span>
            <ul class="box_content_txt">
                <li class="clear content_box1">
                    <div class="title_box"><span class="material-icons" style="display:block;font-size:2em;margin-bottom:10px;">open_in_full</span>Extending and Reducing</div>
                    <div class="text_box">
                        <p>Extension of Certification</p>
                        <ul>
                            <li>
                            If a certified organization considers extending its scope of certification or adding sites, it may apply for an extension of certification.<br>
                            Upon receipt of the application, the certification institute reviews it and carries out necessary audit activities to determine whether to approve the application.
                            </li>
                        </ul>

                        <p>Reduce of Certification</p>
                        <ul>
                            <li>
                            If a certified organization ceases to provide certain products or services specified in the scope of certification, or withdraws from a registered site or services is discounted, the organization shall notify the certification institute within one month. Upon receiving the notification, the certification institute reviews it and carries out necessary audit activities to determine whether to approve it or not. If the scope of the certification is reduced, all relevant promotional materials must also be modified.
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
		</div> <!----// class="vision_area" 종료----->


		<div class="vision_area">
            <h2 class="box_title">&bull; Suspending and Canceling Certification</h2>
            <span class="bottom_line"></span>
            <ul class="box_content_txt">
                <li class="clear content_box2">
                    <div class="title_box"><span class="material-icons" style="display:block;font-size:2em;margin-bottom:10px;">block</span>Suspending and Canceling</div>
                    <div class="text_box">
                        <ul class="text_box_first">
                            <li>
                                Certified organizations are not limited to the following cases, but effectiveness of audit may be suspended or canceled and the certification may be revoked. In the event of such a suspension or cancellation, the certification institute reviews the case and makes a decision on the suspension or cancellation. The organization shall ensure that, upon suspension or cancellation of certification, all promotional materials referred to in the status of certification are discounted.
                            </li>
                        </ul>
                        <p>Suspension of Certification</p>
                        <ul>
                            <li>&bull; Where surveillance audit has not been carried out within the set period(where surveillance audit has not been carried out within 12 months from the date of the previous certification decision)</li>
                            <li>&bull; As a result of the audit to maintain certification, the certification system does not have resources or organizations to meet the requirements of the application standards, or most of the certification system are not in operation</li>
                            <li>&bull; Where there is no reliability of the certification system by claim or social inquiry from interested parties</li>
                            <li>&bull; In the event that the certification registration organization has not taken countermeasures against changes in the certification system and certification requirements</li>
                            <li>&bull; In the case of re-occurrence of major nonconformity even though the major nonconformity has been reconfirmation as a result of the on-site audit</li>
                            <li>&bull; Where the relevant details are not corrected within 1 month after receiving the correction order due to misuse of the certification mark</li>
                            <li>&bull; In case of overdue certification audit expenses by more than 3 months</li>
                            <li>&bull; Failure to comply with the organization’s obligations under the certification contract</li>
                            <li>&bull; In case the certificate is used in excess of the scope of the certificate</li>
                            <li>&bull; In case of breach of contract or agreement</li>
                        </ul>

                        <p>Cancellation of Certification</p>
                        <ul>
                            <li>&bull; If corrective action is not taken for 3 months despite suspension of validity</li>
                            <li>&bull; The certification registration organization officially returned the certificate</li>
                            <li>&bull; The production, activity, or service of a product(process) within the scope of certification is discontinued.</li>
                            <li>&bull; Where the organization subject to certification is lost or has not been confirmed due to the vanish of the certification registration organization, loss of contract, etc.</li>
                            <li>&bull; In the case of surveillance audit, if the audit is not carried out within 1 month after the suspension</li>
                        </ul>
                    </div>
                </li>
            </ul>
     </div> <!----class="vision_area 종료------>
   </div> <!--//class="vision_type2" 종료---->
   
   
</div> <!--// class="content_wrap" 종료 //---->

<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
<!----위 코드 관련 내용 : 상단 메인메뉴 ----->