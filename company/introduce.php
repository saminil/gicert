<?php
include_once('./_common.php');
$g5['title'] = 'Introduction';
include_once(G5_THEME_PATH.'/head.php');
?>

<style>

    
/*회사안내- 회사소개 페이지 시작-YR 210614*/
    .content_wrap { /* 서브페이지 전체 레이아웃 */
        width:100%; 
        max-width:1200px;
        margin:0 auto; 
        font-size: 1.2em !important;
        font-weight: 400;
        line-height: 1.5 
    }
    .content_wrap{overflow-x:hidden;}
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
        color:#5d80c4;
        font-size:2em;
        font-weight:600;
        padding:60px 0 50px;
    }
    .sub_top_stt:after { /*밑줄선*/
        content: "";
        clear: both;
        display: block;
        width: 30px;
        margin: 50px auto 0;
        border: 1px solid #333;
}
    .vision_type1 h2{
        font-size:1em;
        color:#222;
        font-weight:400;
        line-height:1.7em; 
        text-align:justify;
        word-break:keep-all;
    }
    .company_img{
        width:50%;
        margin:60px auto 100px;
    }
    
    /*1번-5번 서비스*/
    .sec01 h3{ 
        font-size:1.3em;  
        font-weight:500; 
        letter-spacing:-1px; 
        color:#222;
        margin:30px 0 5px 0;
    }
    .gray_box{
        display:block;
        width:90%;
        margin:30px auto;
        height:auto;
        padding:30px 50px;
        background:#f8f8f8;
        border-top:1px solid #ddd;
        color:#333;
        font-size:0.95em;
        font-weight:400;
        line-height:1.7em;
        letter-spacing:-0.02em;
    }
    .gray_box p{padding:3px 0;}
    /*자세히보기 버튼*/
    .detail_btn{margin-top:30px;}
    .detail_btn a{
        display:block;
        background:#fff;
        border:1px solid #102f45;
        font-weight:500;
        color:#102f45;
        font-size:1em;
        padding:4px;
        width:130px;
        border-radius:50px;
        text-align:center;
        margin:0 auto;
        transition:all 0.3s; /*마우스 오버시 효과 YR*/
    }
    .detail_btn a:hover{
        background:#102f45;
        border:1px solid transparent;
        color:#fff;
    }
    
    /*회사개요*/
    .sec02{margin:50px 0 30px;}
    .sec02 .sec_tt, .partner_type2 .sec_tt{
        font-size:1.6em;
        font-weight:500;
        color:#222;
        margin-bottom:20px;
    }
    .company_info, .company_info2{
        width:90%;
        height:auto;
        background:#e9f0f4;
        margin:0 5% 30px;
        border-radius:5px;
        padding:25px 50px;
        box-sizing:border-box;
    }
    .company_info{margin-top:40px;}
    .sec02 ul li{
        padding:12px 12px 6px;
        color:#222;
        font-weight:400;
    }
    .sec02 ul li span{
        display:block;
        width:180px;
        font-size:1.1em;
        color:#222;
        font-weight:500;
        margin-bottom:8px;
    }
    .partner_type2{margin-bottom:30px;}
      
/*회사안내- 회사소개 페이지 종료*/     
    

    
/* -----------------------------------------------------반응형 시작 -210622 yr*/  
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .sub_top_tt{width:100%;}
        .company_info, .company_info2{
            width:94%;
            height:auto;
            background:#e9f0f4;
            margin:0 3% 30px;
            border-radius:5px;
            padding:25px 5%;
            box-sizing:border-box;
        }
        .company_info{margin-top:40px;}
    }


    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        .sub_top_tt{width:100%;}
        .gray_box{
            display:block;
            width:94%;
            margin:30px 3%;
            height:auto;
            padding:30px 6%;
        }
        .company_info, .company_info2{
            width:94%;
            height:auto;
            background:#e9f0f4;
            margin:0 3% 30px;
            border-radius:5px;
            padding:20px 6%;
        }
        .company_info{margin-top:40px;}
        .sec02 ul>li>span{
            display:block;
            width:500px;
            margin-bottom:10px;
        }
    }

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .sub_top_tt{display:none;} /*탭메뉴와 중복되어서 안보이게함*/
        .gray_box{
            display:block;
            width:100%;
            margin:30px 0%;
            height:auto;
            padding:30px 6%;
        }
        /*회사개요*/
        .company_info, .company_info2{
            width:100%;
            height:auto;
            background:#e9f0f4;
            margin:0 0% 30px;
            border-radius:5px;
            padding:20px 6%;
        }
        .company_info{margin-top:40px;}
        .sec02 ul>li>span{
            display:block;
            width:500px;
            margin-bottom:6px;
        }
        /*자세히보기 버튼*/
        .detail_btn{margin:30px 0 10px;}
        .detail_btn a{width:120px;}
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) {
        .content_wrap { font-size: 1.1em !important }
        
        .sub_top_tt{width:100%;}
        .sub_top_stt{font-size:1.6em;}
        .company_img{ /*이미지 100%로 변경*/
            width:80%;
            margin-left:10%;
            margin-right:10%;
        }
        /*gray box*/
        .gray_box{
            display:block;
            width:100%;
            margin:30px auto;
            height:auto;
            padding:30px 6%;
            background:#f8f8f8;
            border-top:1px solid #ddd;
            color:#333;
            font-weight:400;
            line-height:1.7em;
            letter-spacing:-0.02em;
        }
        .gray_box .gray_box_fisrt{
            padding-bottom:12px;
        }
        .gray_box span{
            display:block;
        }
        /*자세히보기 버튼*/
        .detail_btn{margin:30px 0 0px;}
        .detail_btn a{width:120px;}
        /*회사개요*/
        .sec02 ul>li>span{
            display:block;
            width:500px;
            margin-bottom:6px;
        }
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) { 
        .sub_top_tt{width:100%;}
        
        /*회사개요*/
         .company_info, .company_info2{
            padding:20px 4%;
        }
    }  
            
/*---------------------------------------------------------------반응형 끝*/
    
*/
    
    
</style>



<div class="content_wrap">
	<section data-sequence="300">
        <div class="paragraph animatedParent" data-id="1" style="text-align:justify;">
            <div class="animated fadeInUpShort vision_type1">
                <div class="sub_top_tt">Introduction</div> 
                <div class="sub_top_stt"> Global Inter Certification </div>
                <h2>
                    <span style="color:#102f45;font-weight:500;">GIC</span> is an international Management System Certification Body accredited from IAS. GIC also, though a cooperation of other partners, provides a product certification, auditor training, auditor registration, testing under the concept of one stop.<br>
                    Based on global competitiveness, We can help to improve your management systems and advance into overseas markets and enhance your competitiveness. <br>
                    It is the following services we provide:
                </h2>
                <div class="animated fadeInUpShort" data-id="2">
                    <p class="company_img"><img src="./images/GIC_ci.png" alt="(주)지아이씨인증원 로고 이미지"></p>
                </div>
            </div>
        </div>
    </section>
	
	<hr style="display:block;height:1px;margin-top:-20px;margin-bottom:40px;">
    
	<!--------------// sec 01 //-------------->
	<section class="sec01 paragraph animatedParent" data-sequence="300">
        <div class="animated fadeInRightShort" data-id="1" style="text-align:justify;display:block;width:100%;margin-top:-40px;">
            <hr style="display:block;height:1px;margin-top:0px;">
            <h3>1. Management System Certification Services</h3>
            <div class="gray_box" style="display:block";>
                <p class="gray_box_fisrt">ISO 9001 <span>(Quality Management System)</span></p>
                <p class="gray_box_fisrt">ISO 14001 <span>(Environmental Management System)</span></p>
                <p class="gray_box_fisrt">ISO 13485 <span>(Medical Device Quality Management System)</span></p>
                <p class="gray_box_fisrt">ISO/IEC 27001 <span>(Information Security Management System)</span></p>
                <p class="gray_box_fisrt">ISO 45001 <span>(Occupational Health and safety Management Systems)</span></p>
                <p class="gray_box_fisrt">ISO 37001 <span>(Anti-Bribery Management System)</span></p>
                <p class="gray_box_fisrt">ISO 37301 <span>(Compliance Management Systems)</span></p>
                <p class="gray_box_fisrt">ISO 22000 <span>(Food Safety Management System)</span></p>
                <p class="gray_box_fisrt">FSSC 22000 <span>(Food Safety System Certification)</span></p>
                <p class="gray_box_fisrt">ISO 22716 <span>(Cosmetics-Good Manufacturing Practice)</span></p>
                <p class="gray_box_fisrt">ISO 21001 <span>(Educational Institution Management System)</span></p>
                <div class="detail_btn"><a href="../service/01_system.php">  &#43; Detail </a></div>
            </div>
            <hr style="display:block;height:1px;margin-top:35px;">
            <h3>2. Product Certification Services</h3>
            <div class="gray_box">
               GIC provides product certification services in various fields to companies which want to export products to Europe based on their accumulated experience over many years. In the case of medical devices (CE product certification service), we quickly respond to the reinforced MDR requirements to support customers' smooth entry into overseas markets. GIC provides the most competitive product certification services by establishing cooperative relationships with leading overseas product certification organizations.<br>
                GIC Certification Center operates FDA DESIGNATED OFFICE directly managed in California, USA, and is successfully carrying out FDA projects of customers through smooth communication with FDA Officers by deploying professional personnel.
                <br><br>
                <span style="font-weight:600;color:#5878A8;margin-bottom:5px;display:inline-block;">Certification Content</span> <br>
                GOST, EAC, FCE &amp; SID, OTC, CPNP
                <div class="detail_btn"><a href="../service/02_product.php">   &#43; Detail </a></div>
            </div>
            <br>

            <hr style="display:block;height:1px;margin-top:-20px;">
            <h3>3. Product Testing Services</h3>
            <div class="gray_box">
                <span style="font-weight:600;color:#5878A8;margin-bottom:5px;display:inline-block;">&bull; IGC LAB’s Global Competitiveness</span><br>
                   GIC has cooperated with IGC (Institute of Global Certification Co., Ltd.) IGC LAB has obtained accreditation for testing in various fields from IAS, an accreditation body in the United States, in order to support customers' products entering overseas markets (TL-799/TL-832).<br>
                    The IGC test report is a report that has been accredited by the IAS, the accreditation body where ILAC and MRA are signed, so it can be used anywhere in the world.<br>
                <div class="detail_btn"><a href="../service/03_testing.php">   &#43; Detail </a></div>
            </div>
            <br>

           <hr style="display:block;height:1px;margin-top:-20px;">
            <h3>4. Personnel Certification Services</h3>
            <div class="gray_box">
                GIC can provide ISO Management System auditors and professional manpower certification services through cooperation with GPC recognized by IAS, which has signed the IAF MLA for personal certification. 
                <br><br>
                <span style="display:block;font-size:1.0em;font-weight:600;color:#0A4F81;text-align:center;">
                GIC supports the acquisition of auditor qualification through cooperation with GPC.
                </span>
                <div class="detail_btn"><a href="../service/04_edu.php">  &#43; Detail  </a></div>
            </div>
            <br>

            <hr style="display:block;height:1px;margin-top:-20px;">
            <h3>5. Auditor Training Services</h3>
            <div class="gray_box">
               In addition to certification of audit qualifications, GPC has signed an MLA with IPC, a member of the IAF Association, to provide services with approval of the authority to designate a training institution for training auditors.
                <br><br>
                <span style="font-size:1.0em;color:#0A4F81;font-weight:600;text-align:center;display:block;">Completion of training and certification through GPC is a globally recognized and trusted service.</span>
                <div class="detail_btn"><a href="../service/05_aduits.php">  &#43; Detail </a></div>
            </div>
        </div>
    </section>
    
    <!--------------// sec 02 //-------------->
	<section class="sec02 animatedParent" data-sequence="300">
		<h2 class="sec_tt animated fadeInRightShort" data-id="1">Company Overview</h2>
        <hr style="display:block;width:100%;height:1px;padding:0 50 50 90;background:#333;">
        <div class="animated fadeInRightShort" data-id="2">
            <ul class="company_info">
                <li><span>Head Office</span>  904 E. Winsor Road #102, Glendale, CA 91205, U.S.A.</li>
                <li><span>Tel</span> +1 213 261 0787</li>
                <li><span>E-mail</span> <a href="mailto: info@gicert.org" title="Send email" class="gic_email">info@gicert.org</a></li>
            </ul>
            <ul class="company_info2">
                <li><span>Key Location</span> Rm. 502, Daeryung techno town, 638, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea</li>
                <li><span>Tel / Fax</span> +82 2 6749 1185 / +82 2 6749 0711</li>
                <li><span>E-mail</span><a href="mailto: info@gicert.org" title="Send email" class="gic_email">info@gicert.org</a></li>
            </ul>
        </div>
	</section>
    


</div> <!--------------// class="content_wrap" 종료 //--------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>