<?php
	include_once('./_common.php');
$g5['title'] = 'Education';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#79af0d }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 33.3% }
    .tab_menu.tab02 ul li:nth-child(5) a { border-right: 1px solid rgba(0,0,0,0.5) }
        
    /* 페이지수가 많을 경우(5개 이상일 경우) 탭메뉴(4depth)의 css */
    .tab_menu.tab02 .over { display: inline-block;width: 100% }
    .tab_menu.tab02 .over li { float: left;width: calc(100%/5 + 1px); margin: -1px 0 0 -1px }
    .tab_menu.tab02 .over li.on a { border-bottom: 1px solid #333 }
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }
    
    .point_b1 { font-size: 1.6em; font-weight: 600; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 600; margin-bottom: 15px }/* 본문의 강조부분 css */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(121,175,13,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #79af0d; display: inline-block; border: 2px solid #79af0d; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    
    .con_txt { width:80%; margin: 30px auto; border-top:1px solid #ddd; font-size:1rem; line-height: 1.6; color:#555; background:#f8f8f8;text-align: justify}/* 부가설명박스의 레이아웃 */
	.con_txt ul { width: 90%;margin: 0 auto;padding: 25px }/* 부가설명박스의 css */
    .con_txt ul li { margin-bottom: 10px }

    .con_img {width: 100%;text-align: center;margin: 70px auto }/* 문단에 쓰이는 이미지의 css */
    .con_img img {width: 40%;}/* 문단의 쓰이는 이미지의 크기 */
    .con_img.horizon img {width: 80%;}/* 가로가 긴 이미지의 크기 */
      
    .page_con { width: 90%;margin: 0 auto 70px }/* 컨텐츠 부분 레이아웃 */
    
	.page_title { margin:70px auto }/* 제목 문단의 레이아웃 */
	.page_title .sub_tit { width:100%; margin:0 auto; text-align:center; font-size:1.6em; font-weight:600; }/* 소제목 css */
	.page_title .sub_tit:after { content:""; clear:both; display:block; width:30px; margin:40px auto 0; border:1px solid #000; }/* 소제목의 arrow css */
	.page_title .sub_tit2 { width:100%; margin:70px auto; text-align:center; font-size:2em; font-weight:600; }/* 대제목 css */
	.sub_txt { width: 100%;margin: 70px auto;text-align: justify }/* 본문의 레이아웃 */
    

    
    /* ------------------------ 반응형 시작 ------------------------ */   


	@media screen and (max-width:768px) {		
        .con_img img { width: 60% }
        .con_txt { width: 100% }
        .page_con { width: 100% }
        .con_txt ul { width: 100% }
	}
    
    @media screen and (max-width:640px) {	
        .con_img img { width: 100% }
        
        /* ----- 서브 전체페이지 폰트사이즈 조절 시작 20210706 전산: 이혜정 ----- */
        .tab_menu.tab02 ul li { font-size: 0.9em }
        .page_title .sub_tit2 { font-size: 1.6em; font-weight: 600; }
        .page_title .sub_tit { font-size: 1.4em }
        .content_wrap { font-size: 1.1em !important }
        .point_b1 { font-size: 1.4em }
        .point_b2 { font-size: 1em }
        .con_txt { font-size: 0.9em }
        .partner_type2 .sec_tt { font-size: 1.4em }
        .partner_type2 .con_box ul li p > span { font-size: 0.9rem }
        /* ----- 서브 전체페이지 폰트사이즈 조절 종료 20210706 전산: 이혜정 ----- */
        
       
	}

	@media all and (min-width:360px) and (max-device-width : 414px) {
        .page_con { width: 100% }
        .con_txt ul { width: 100% }
        .tab_menu.tab02 ul li a { border-right: 1px solid rgba(0,0,0,0.5) }
        .tab_menu.tab02 .over { display: inline-block;width: 100% }
        .tab_menu.tab02 .over li { float: left;width: calc(100%/2 + 1px); margin: -1px 0 0 -1px; border: 1px solid #fff }
        .tab_menu.tab02 .over li.on a { border-right: 1px solid rgba(0,0,0,0.5) }
        
	}
    
    /* ------------------------ 반응형 종료 ------------------------ */   
        
    
	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */    
    
</style>

<!-- 
    탭 메뉴 구현
    2021.06.09 
-->
<style>
    /* 화면(VIEW) 영역 기본값 및 활성화 값을 위한 CSS 설정 */
    .tab_con2 .roll{display:none !important;}
    .tab_con2 .roll.on{display:block !important;}
</style>
<script>
    $(function(){
        $(".tab_menu.tab")
        // 탭 버튼 클릭 이벤트 연동
        $(".tab_menu.tab02 li").on('click', function(e){
            // 현재 선택된 탭
            var target = $(e.currentTarget);

            // 모든 활성화 상태 초기화
            $(".tab_menu.tab02 li").removeClass('on'); // 모든 탭 버튼에 활성화 클래스인 on 삭제
            $(".tab_con2 .roll").removeClass('on'); // 모든 섹션(화면)에 활성화 클래스인 on 삭제

            // 선택된 탭 버튼과 섹션 활성화
            var index = Number(target.index()) + 1; // 현재 선택된 탭의 인덱스 (몇번째인지)
            
            $("#con5-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con6-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con8-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con9-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con10-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con11-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            
            $(target).addClass('on'); // 선택된 탭 버튼에 활성화 클래스인 on 추가
        });
    })

</script>
<!-- 탭 메뉴 구현 끝 -->
<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
	<div class="tab_menu tab01">
	    <h2>Education Service</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Quality</a></li>
			<li><a href="javascript:;">Environment</a></li>
			<li><a href="javascript:;">Health &amp; Safety</a></li>
			<li><a href="javascript:;">Medical Device</a></li>
			<li><a href="javascript:;">Food</a></li>
			<li><a href="javascript:;">Information Security</a></li>
			<li><a href="javascript:;">Risk Management</a></li>
			<li><a href="javascript:;">Transportation &amp; Energy</a></li>
			<li><a href="javascript:;">Continuity &amp; Resilience</a></li>
			<li><a href="javascript:;">Business Management</a></li>
			<li><a href="javascript:;">Social accountability &amp; Bribery management</a></li>
			<li><a href="javascript:;">Testing &amp; Calibration</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="sub_tit">Quality</h1>
                <h2 class="sub_tit2 fc_pointer">ISO 9001 Professional Training</h2>
                <p class="sub_txt">
                    Nowadays, many companies are struggling to provide better products and services, not just to meet their customer ‘s requirements, and to remain competitive through cost savings.<br><br>
                    In addition, because comprehensive solutions are needed to improve quality and price competitiveness, ISO 9001 can provide these companies with effective quality management processes.<br><br>
                    ISO 9001 can be applied to a wide variety of industries and has been successfully applied by a various organization, including manufacturers, software developers, trading and service organizations, police stations, professional football teams and city councils.<br><br>
                    The requirements of ISO 9001 are comprehensive and can apply to any organization, regardless of its shape, size, or products and services offered. Therefore, this standard is the most common quality management standard in the world.
                </p>
            </div>
            <div class="con_img">
                <img src="./image/ISO 9001_01.jpg" alt="ISO 9001 Professional Training">
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 9001_02.png" alt="The importance of ISO 9001 training">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 9001 training</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Appropriate quality management contributes to improves business and has a positive impact on investment, market share, revenue growth, revenue margins, competitive advantage and litigation avoidance.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts for effective application of ISO 9001 standards.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Therefore, the purpose of the ISO 9001 Auditor certification process is to provide the certification body with the confidence that auditor and individual certified through this program are eligible.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>The ISO 9001 training program is based on the ISO 9001 standard and is based on the audit guidance standard ISO 19011:2018.</li>
                                    </ul>
                                </div>
                            </dd>
                            <dd class="con_img">
                                <img src="./image/ISO 9001_03.jpg" alt="The importance of ISO 9001 training">
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   
        
<!--=================================================================================================================== -->

        <article><!--+++++ 컨텐츠 02 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">Environment</h1>
                <h2 class="sub_tit2 fc_pointer">ISO 14001 Professional Training</h2>
                <p class="sub_txt">
                    ISO 14001 is an international standard for the Environmental Management System (EMS), specifying the requirements for organizing and maintaining the environmental management system.<br><br>
                    Many companies are getting ISO 14001 certifications for the smooth environmental management of the organization, and more than 250,000 certificates are issued worldwide.<br><br>
                    ISO 14001 addresses issues such as the establishing, implementing, maintaining and improving of environmental management systems, along with general guidelines on principles, systems and support technologies for environmental management systems.<br><br>
                    It controls organization’s environmental aspects, reduces environmental risks and ensures compliance with laws and regulations.
                </p>
            </div>
            <div class="con_img">
                <img src="./image/ISO 14001_01.jpg" alt="ISO 14001 Professional Training">
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 14001_02.jpg" alt="The importance of ISO 14001 training">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 14001 training</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Organizations can benefit from obtaining ISO 14001 standard certification. Certification is sufficient to provide significant benefits to organizations within any industry or sector, and provides a specific basis for performing relevant sustainable practices.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts for effective application of ISO 14001 standards.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Therefore, the purpose of the ISO 14001 Auditor Certification process is to provide the certification body with the confidence that auditors and individuals certified through this program are eligible.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>The ISO 14001 training program is based on the ISO 14001 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                    </ul>
                                </div>
                            </dd>
                            <dd class="con_img">
                                <img src="./image/ISO 14001_03.jpg" alt="The importance of ISO 14001 training">
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 
        
<!--=================================================================================================================== -->
       
        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">Health &amp; Safety</h1>
                <h2 class="sub_tit2 fc_pointer">ISO 45001 Professional Training</h2>
                <p class="sub_txt">
                    ISO 45001 is an occupational safety and health management system, and the existing OHSAS 18001:2007 standard was replaced by ISO 45001 standard since March 2018.<br><br>
                    It provides a framework for managing health and safety management responsibilities through an occupational health and safety management system compatible with ISO 9001 and 14001 management systems.<br><br>
                    Effective occupational health and safety management systems also help organizations control health and safety risks and improve performance, while reducing risk to employees and other stakeholders and helping them comply with regulations.
                </p>
            </div>
            <div class="con_img">
                <img src="./image/ISO 45001_01.png" alt="ISO 45001 Professional Training">
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 45001_02.png" alt="The importance of ISO 45001 training">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 45001 training</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts for effective application of ISO 45001 standards. </li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Therefore, the purpose of the ISO 45001 Auditor Certification Process is to provide the certification body with the confidence that auditors and individuals certified through this program are eligible.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>As part of the auditor process, assessment will be conducted against requirements that reflect the key competencies, knowledge and experience that define eligibility.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>The training program is based on ISO 45001:2018, the principal standard for audit.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 03 종료 +++++--> 
 
        
<!--===========================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 04 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">Medical Device</h1>
                <h2 class="sub_tit2 fc_pointer">ISO 13485 Professional Training</h2>
                <p class="sub_txt">
                    Medical devices have a direct impact on human life and health, so they must ensure a higher level of stability than any other product. <br><br>
                    Therefore, the medical device industry has a variety of regulations that must be met, such as domestic regulatory systems, international standards, and other requirements.<br><br>
                    ISO 13485 is a standard that sets out requirements for an organization's quality management system that provides medical device design and development, production, installation and additional services.<br><br>
                    This standard can also be applied to external organizations that provide services such as sterilization, calibration, and sales to medical device organizations, providing the basis for a quality management system to organizations that provide medical devices and related services.
                </p>
            </div>
            <div class="con_img">
                <img src="./image/ISO 13485_01.jpg" alt="ISO 13485 Professional Training">
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 13485_02.jpg" alt="The importance of ISO 13485 training">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 13485 training</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts for effective application of ISO 13485 standards. </li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Therefore, the purpose of the ISO 13485 Auditor Certification Process is to provide the certification body with the confidence that auditors and individuals certified through this program are eligible.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>As part of the auditor process, assessment will be conducted against requirements that reflect the key competencies, knowledge and experience that define eligibility.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>•	The ISO 13485 training program is based on the ISO 13485 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 04 종료 +++++--> 
        
<!--============================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 05 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 22000</a></li>
                    <li><a data-slide-index="1">FSSC 22000</a></li>
                    <li><a data-slide-index="2">FDA FSMA</a></li>
                    <li><a data-slide-index="3">PCQI</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con5-1" class="roll roll01 on"><!-- 4depth 컨텐츠 05-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Food</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22000 Professional training</h2>
                        <p class="sub_txt">
                            ISO 22000 is an international standard that sets out requirements for food safety management systems to manage food safety hazards in the process of producing, manufacturing, processing, preserving, and distributing raw materials for food.<br><br>
                            This standard is a hygiene management system that secures food safety by identifying and managing important management points for identifying risk factors at each stage and focusing on managing them before end-consumer consumption.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 22000_01.jpg" alt="The importance of ISO 22000 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 22000 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO 22000 supports the achievement of a food safety management system after identifying all possible hazards in the food chain in relation to the form of processes and facilities used.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts for effective application of ISO 22000 standards. </li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Therefore, the purpose of the ISO 22000 auditor certification process is to provide the certification body with the confidence that auditors and individuals accredited through this program are eligible.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessment will be conducted against requirements that reflect the key competencies, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The ISO 22000 training program is based on the ISO 22000 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con5-2" class="roll roll02"><!-- 4depth 컨텐츠 05-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Food</h1>
                        <h2 class="sub_tit2 fc_pointer">FSSC 22000 Ver 5.0 Professional training</h2>
                        <p class="sub_txt">
                            The FSSC 22000 is a global food safety standard that provides comprehensive standards for food safety risk management based on food management system standards ISO 22000 and Pre-Requisite Program (PRP) and additional requirements.<br><br>
                            This standard provides a framework for food safety and quality responsibility management at the same time, as well as food safety management systems, as well as guidelines for storage and transportation.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FSSC 22000_01.jpg" alt="The importance of FSSC 22000 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of FSSC 22000 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>It is a course for organizations, certification bodies, consultants and others who are interested in information related to the requirements of the FSSC 22000 and want to understand how this standard can be applied in other food chain organizations.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Pre-knowledge of the FSSC 22000 is required and can demonstrate how the FSSC 22000 can be implemented within various food chain categories.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>It covers all the elements specified in ISO 19011:2018, ISO/IEC 17021-1:2015, and ISO/TS 22003:2013, with a total of 40 hours of training, including practice courses (e.g., case studies) and written exams.</li>
                                            </ul>
                                            <ul><span class="point_b2">01 Internal Auditor Course</span>
                                                <li>Designed for organizations that implement the FSSC 22000 while meeting training requirements for internal auditors. The training of the FSSC 22000 covers all the elements specified in ISO 19011:2018.</li>
                                            </ul>
                                            <ul><span class="point_b2">02 Senior Auditor Course</span>
                                                <li>This course is designed to be a senior auditor certified by a certification body. It can also be applied to organizations seeking to develop additional internal audit skills and consultants.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Introduction of Course</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>GIC provides the FSSC 22000 auditor training course through its partner IGC Certification body.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>IGC is a Training Organization body designated by the FSSC.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>FSSC accredited training course is based on the rich experience and expertise of the IGC certification body, and is the best auditor training course for prepared to acquire quality audit skills.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Benefits of Education</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>The certificate includes the FSSC 22000 mark, which can provide reliability.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>It provides confidence that it meets the requirements of the FSSC 22000 and also reflects the latest requirements of the FSSC 22000.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>In fact, it provides methods and examples of how the FSSC 22000 can be applied to organization.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Faster access to inquiries related to the FSSC 22000.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>It is possible to connect with the registration of the FSSC 22000 auditor, so it can proceed with the registration process quickly.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con5-3" class="roll roll03"><!-- 4depth 컨텐츠 05-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Food</h1>
                        <h2 class="sub_tit2 fc_pointer">FDA FSMA Professional training</h2>
                        <p class="sub_txt">
                            Under the FSMA Act, all food-related companies seeking to export to the United States have a food safety management system and have the power to recall food products that pose a risk, making food safety problem more effective.<br><br>
                            Since all countries and businesses related to the U.S. food supply chain can be subject to the FSMA, careful and thorough preparation is required to facilitate food exports to the U.S. in response to the FSMA.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA FSMA_01.jpg" alt="FSMA">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is FSMA (FOOD SAFETY MODERNIZATION ACT)?</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>FDA FSMA third-party certification is a system in which a third-party accredited certification bodies reviews food production facilities located outside the United States for compliance with FSMA regulations and issues certificates if they meet requirements.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The FSMA was enacted on January 4, 2011 by the United States Government with the aim of 'stabilizing food supply through proactive prevention and protecting public health'.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img horizon">
                                        <img src="./image/FDA FSMA_02.jpg" alt="PCQI">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is PCQI?</h3>
                                        <div class="sub_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>PCQI is a Preventive Controls Qualified Individual (PCQI). According to FSMA regulations, food manufacturers are required to establish and operate food safety plans to proactively identify, prevent and manage potential risks as well as hazard analysis.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The Food Safety Plan emphasizes that food safety prevention and management experts should be established, that preventive management care should be verified, and that relevant records should be reviewed regularly.</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">PCQI training content is as follows.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management concept training for FSMA response</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food safety plan outline</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Operating GMP and other prerequisite programs</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Biological food safety hazards</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food safety hazards in chemical, physical and economic aspects</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Pre-steps in developing a food safety plan</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Support for preparing food safety plans (data)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hazard analysis and determination of preventive control points-overview</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hazard analysis and determination of preventive control points</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food allergy support preventive management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hygiene prevention management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management of supply chain</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Verification and validation procedure</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Record storage and management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Recovery plan</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Legal outline (cGMP, risk analysis, risk-based preventive management)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con5-4" class="roll roll04"><!-- 4depth 컨텐츠 05-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Food</h1>
                        <h2 class="sub_tit2 fc_pointer">PCQI Professional training</h2>
                        <p class="sub_txt">
                            Food production facilities must have at least one PCQI expert for FDA FSMA third-party certification under the FDA FSMA Act.<br><br>
                            PCQI refers to the number of people in each enterprise establishing a Food Safety Plan, and each company can establish a Food Safety Plan and comply with FSMA law through a qualified Preventive Control Qualified Individuals.<br><br>
                            This qualification is granted to those who have obtained a Certificate after completing the Preventive Controls for Human Food (PCHF) Lead Instructor training course, which is commissioned by the Food Safety Preventive Control Alliance (FSPCA) in the United States.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/PCQI_01.jpg" alt="What is PCQI?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is PCQI?</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>PCQI is a Preventive Controls Qualified Individual (PCQI). Qualified person in PCQI (Preventive Controls Qualified individual) means an individual who has successfully completed training equivalent to a standardized curriculum that the FDA recognizes as eligible, otherwise food safety systems development and application.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The preventive control regulations stipulate that certain food safety tasks must be carried out, managed, and supervised by PCQI, so it is mandatory to hire PCQI or seek technical advice from the food facility.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>In order to qualify for PCQI, food safety workers must successfully complete the US FDA-approved standard curriculum conducted by FSPCA.</li>
                                            </ul>
                                            <ul><span class="point_b2">PCQI training content is as follows.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management concept training for FSMA response</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food safety plan outline</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Operate GMP and other prerequisite programs</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Biological food safety hazards</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food safety hazards in chemical, physical and economic aspects</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Pre-steps in developing a food safety plan</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Support for preparing food safety plans (data)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hazard analysis and determination of preventive control points-overview</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hazard analysis and determination of preventive control points</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food allergy support preventive management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hygiene prevention management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management of supply chain</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Verification and validation procedure</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Record storage and management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Recovery plan</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Legal outline (cGMP, risk analysis, risk-based preventive management)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of PCQI training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>According to preventive control regulations for food, PCQI is stated to first establish food safety plans, secondly verify preventive control, thirdly review records, and fourthly, re-analyze or manage and supervise food safety plans.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>According to preventive control regulations for food, PCQI is stated to first establish food safety plans, secondly verify preventive control, thirdly review records, and fourthly, re-analyze or manage and supervise food safety plans.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>It may be more effective to consult an external PCQI when establishing a food safety plan, or in some cases, to have two or more PCQIs establish a food safety plan.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The employment of PCQI is an essential requirement to meet the requirements for preventive control of food, and PCQI may be an employee of a facility related to that food.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>It may be more effective to consult an external PCQI when establishing a food safety plan, or in some cases, to have two or more PCQIs establish a food safety plan.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">PCQI requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">One or more persons qualified for preventive care must do or supervise the following : </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preparation of food safety plan</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Verification of preventive management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Proof of valid reason for verification conducted after the first 90 days of production of the applicable food</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Decision that verification is not required</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Record review</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Proof of valid reason that the review of the monitoring and corrective action record was not made within 7 days</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Re-analysis of food safety plan</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Decision that after 90 days after production of the applied food, re-analysis is completed appropriate to the       characteristics of preventive management and the role in the food safety system of the relevant facility, and additional preventive management can be verified.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Competency of GIC</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC provides FDA FSMA certification and related training through its partner IGC.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>IGC was accredited by the US FDA and IAS as the seventh in the world and first FDA FSMA third-party certification body in Korea.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>IGC provides training services for FSMA, PCQI, FSVP experts, and FSVP experts, with the authority to train PCQI training courses and FSVP experts (designated as Lead Instructors).</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 05 종료 +++++--> 
        
<!--=================================================================================================================== -->
   
        <article><!--+++++ 컨텐츠 06 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul class="over">
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO/IEC 20000-1</a></li>
                    <li><a data-slide-index="1">ISO/IEC 27001</a></li>
                    <li><a data-slide-index="2">ISO/IEC 27002</a></li>
                    <li><a data-slide-index="3">ISO/IEC 27005</a></li>
                    <li><a data-slide-index="4">ISO/IEC 27032</a></li>
                    <li><a data-slide-index="5">ISO/IEC 27035-1</a></li>
                    <li><a data-slide-index="6">ISO 27799</a></li>
                    <li><a data-slide-index="7">ISO/IEC 29100</a></li>
                    <li><a data-slide-index="8">ISO/IEC 38500</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con6-1" class="roll roll01 on"><!-- 4depth 컨텐츠 06-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 20000-1 Professional Training</h2>
                        <p class="sub_txt">
                            ISO/IEC 20000-1 is an international standard that specifies requirements for organizations providing information technology (IT) services to plan, establish, implement, operate, monitor, review, maintain and improve service management systems. <br><br>
                            This standard is a standardization of the British Standard, BS 15000 standard, established by the British Standards Institution (BSI) by the ISO, which includes guidance on the application of service management systems within the scope of ISO/IEC 20000-1.<br><br>
                            ISO/IEC 20000-1 enables organizations to systematically deploy existing IT service management systems.<br><br>
                            Establishing a formal framework saves time and money by improving the organization's services and processes, and prevents recurring errors and accidents.<br><br>
                            ISO/IEC 20000-1 enables organizations to give customers confidence in their IT systems and improve service quality to gain competitive advantage.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISOIEC 20000-1_01.jpg" alt="The importance of ISO/IEC 20000-1 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 20000-1 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO/IEC 20000-1 supports individuals understand the content and purpose of their requirements and manage IT service management systems based on them to improve the level of IT service management for the organization.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>ISO/IEC 20000-1 training allows the auditors to acquire the skills and knowledge needed to conduct the audits and to achieve and respond to the ITSM audits.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As part of the certification process, the assessment will be based on requirements that reflect key skills, knowledge and experience that define eligibility</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The ISO/IEC 20000-1 training program is based on the ISO/IEC 20000-1 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-2" class="roll roll02"><!-- 4depth 컨텐츠 06-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 27001:2013 Professional Training</h2>
                        <p class="sub_txt">
                            ISO/IEC 27001 is an international standard for information security management system established by the International Organization for Standardization (ISO) and the International Electrotechnical Commission (IEC) and the most authoritative international certification standard in the field of information security.<br><br>
                            This standard covers 133 items, 11 areas related to information security, including information protection policies, physical security, and information access control.<br><br>
                            ISO/IEC 27001 is a management system based on a more structured business risk approach for setting up, implementing, operating, monitoring, reviewing, maintaining and improving information security.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISOIEC 27001_01.jpg" alt="The importance of ISO/IEC 27001 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 27001 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Securing company's confidential information and personal data is not only a mandatory for all businesses, but also a legal obligation.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The purpose of the ISO/IEC 27001 Auditor Certification Program is not only to provide the knowledge needed as an auditor, but to provide the industry with relevant knowledge experts.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the key skills, knowledge and experience that define eligibility.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The ISO/IEC 27001 training program is based on the ISO/IEC 27001 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-3" class="roll roll03"><!-- 4depth 컨텐츠 06-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 27002 Professional Training</h2>
                        <p class="sub_txt">
                            ISO/IEC 27002:2013 provides guidance on the organization's information security standards and information security management practices, including the selection, implementation and management of controls that take into account the organization's information security risk environment.<br><br>
                            ISO/IEC 27002:2013 is designed to be used by organizations implementing information security management systems based on ISO/IEC 27001, implementing generally accepted information security controls, or developing their own information security management guidelines.<br><br>
                            This standard can be used as a reference for selecting control in the process of implementing an information security management system.<br><br>
                            ISO/IEC 27002:2013 can help organizations build confidence in inter-organizational activities and implement appropriate controls, including policies, processes, organizational structures, and software and hardware features.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISOIEC 27002_01.jpg" alt="The importance of ISO/IEC 27002 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 27002 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO/IEC 27002 enables individuals to understand basic guidelines to help implement, maintain and improve information security management systems within an organization.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>By acquiring the methods and skills used to implement information security controls, individuals can better manage their organization's Information Security Management System (ISMS) and respond appropriately to possible information security risks.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts for effective application of ISO/IEC 27002 standards.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Therefore, the purpose of the ISO/IEC 27002 auditor certification process is to provide credibility to certification body, businesses and industries with the confidence that auditors and individuals trained through this program are eligible.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the key skills, knowledge and experience that define eligibility.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>The ISO/IEC 27002 training program is based on the ISO/IEC 27002 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-4" class="roll roll04"><!-- 4depth 컨텐츠 06-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 27005 Professional Training</h2>
                        <p class="sub_txt">
                            ISO/IEC 27005 provides guidance on identifying organizations' requirements for information security requirements and establishing a systematic approach to information security risk management that organizations need to build effective information security management systems.<br><br>
                            This international standard supports the ISO/IEC 27001 concept and is designed to efficiently implement information security based on a risk management approach.<br><br>
                            Therefore, ISO/IEC 27005 demonstrates that organizations can identify, evaluate, analyze, evaluate, and address the various information security risks they face, helping organizations take appropriate steps to reduce or mitigate risks in advance.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img horizon">
                                        <img src="./image/ISOIEC 27005_01.jpg" alt="The importance of ISO/IEC 27005 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 27005 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts to effectively apply ISO/IEC 27005 specifications. </li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The purpose of the ISO/IEC 27005 curriculum is to provide certification sources, businesses and industries with the reliability that individuals are eligible along with certified auditors.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As part of the auditor's course, we will evaluate against requirements that reflect key competencies, knowledge and experience that define eligibility.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The training program is based on the main standard for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-5" class="roll roll05"><!-- 4depth 컨텐츠 06-5 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 27032 Professional Training</h2>
                        <p class="sub_txt">
                            Cyberspace is a complex environment in which people, software and services interact over the Internet, so it is supported by networks connected to distributed information and communication technology devices around the world wide.<br><br>
                            The lack of communication between organizations and informants in cyberspace and the gap between these domains can lead to unexpected security issues.<br><br>
                            ISO/IEC 27032 provides a policy framework that addresses the establishment of technical guidelines to integrate systems within cyberspace with reliability, cooperation, information exchange and stakeholders.<br><br>
                            ISO/IEC 27032 is a standard for highlighting the role of various security in cyberspace, including information security, network and Internet security, and critical information infrastructure protection (CIIP).<br><br>
                            ISO/IEC 27032 international standards provide technical guidance for addressing cybersecurity risks such as hacking, cyberattacks and malicious software while bridging gaps between different security domains in cyberspace.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISOIEC 27032_01.jpg" alt="The importance of ISO/IEC 27032 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 27032 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>For effective application of ISO/IEC 27032, companies and industries need qualified experts.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The purpose of the ISO/IEC 27032 curriculum is to provide accreditation bodies, businesses and industry sectors with the confidence that auditors and individuals certified through this program are eligible.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As part of the auditor process, we will evaluate against requirements that reflect the key skills, knowledge and experience that define eligibility.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The training program is based on the main standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-6" class="roll roll06"><!-- 4depth 컨텐츠 06-6 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 27035-1 Professional Training</h2>
                        <p class="sub_txt">
                            In today's business world, the occurrence of information security incidents is viewed as a risk that could seriously damage the business.<br><br>
                            Therefore, organizations must take steps to identify, evaluate and effectively manage incidents in the event of an information security incident.<br><br>
                            ISO/IEC 27035-1 Information Security Incident Management is an international standard that carries out strategic incident management plans and provides best practices and guidance for preparing for incident response.<br><br>
                            Organizations with information security incident management can manage business risks.<br><br>
                            Similarly, the ISO/IEC 27035-1 framework plays an important role in the security structure of an organization with effective information security management, incident mitigation and sustainable business process construction.<br><br>
                            ISO/IEC 27035-1 Information Security Incident Management enables individuals with comprehensive expertise to detect, report and evaluate information security incidents.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISOIEC 27035-1_01.jpg" alt="The importance of ISO/IEC 27035-1 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 27035-1 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO/IEC 27035-1 helps individuals minimize the impact of incidents within their organizations as globally recognized security professionals.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>For effective application of ISO/IEC 27035-1, companies and industries need qualified experts.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO/IEC 27035-1 curriculum is to provide certification bodies, organizations and industry sectors with the confidence that auditors and individuals certified through this program are eligible.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the auditor process, we will evaluate against requirements that reflect the key skills, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-7" class="roll roll07"><!-- 4depth 컨텐츠 06-7 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 27799 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 27799 is an international standard that provides guidance on how to best protect the confidentiality, integrity and availability of health data held by all individuals in the healthcare industry and unique operating environments.<br><br>
                            Requirements for an information security management system to help patients manage sensitive medical and personal data, such as medical and prescription records and examination results within a medical institution.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 27799_01.jpg" alt="The importance of ISO 27799 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 27799 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO 27799 training is essential for people in the relevant field because it provides basic guidance to protect personal health information.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The advantage of this standard is that it is valid in all medical institutions, regardless of size, type, or complexity.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>For the effective application of ISO 27799, companies and industries need qualified experts. </li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The purpose of the ISO 27799 curriculum is to provide certification body, businesses and industries with the confidence that auditors and individuals trained through this program are eligible.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility, which will be based on key standards for audit.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>The ISO 27799 training program is based on the ISO 27799 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd class="con_img">
                                        <img src="./image/ISO 27799_02.jpg" alt="The importance of ISO 27799 training">
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-8" class="roll roll08"><!-- 4depth 컨텐츠 06-8 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 29100 Professional training</h2>
                        <div class="sub_txt">
                            The ISO/IEC 29100 provides a high-level framework to protect Personally Identifiable Information (PII) within the Information Communication Technology System (ICT).<br><br>
                            Considering the number of techniques that handle Personally Identifiable Information (PII), it is essential for organizations to implement a privacy framework that provides guidance on how to protect PIIs.<br><br>
                            The privacy framework allows organizations to define PII-related requirements for privacy within the Information Communication Technology System (ICT).<br><br>
                            This can be done by specifying generic privacy terms, defining actors and their roles in PII processing, and referring to familiar privacy principles.<br><br>
                            Personal identification information can include confidential data for limited use only, and the main reasons organizations should protect PII are : 
                            <ul>
                                <li>&#10020; <span class="nbsp">&nbsp;</span>To protect personal privacy personally identifiable information</li>
                                <li>&#10020; <span class="nbsp">&nbsp;</span>To meet legal and regulatory requirements</li>
                                <li>&#10020; <span class="nbsp">&nbsp;</span>To fulfill corporate responsibility</li>
                                <li>&#10020; <span class="nbsp">&nbsp;</span>To increase consumer confidence</li>
                                <li>&#10020; <span class="nbsp">&nbsp;</span>To reduce security violations</li>
                            </ul>
                        </div>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISOIEC 29100_01.jpg" alt="The importance of ISO/IEC 29100 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 29100 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>This privacy framework, provided by ISO/IEC 29100, is not limited to organizations, but also applies to individuals who use ICT that requires privacy control to handle PII.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>For effective application of ISO/IEC 29100, companies and industries need qualified experts.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO/IEC 29100 curriculum is to provide credibility to certification body, business and industries with the confidence that auditors and individuals certified through this program are eligible.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The ISO/IEC 29100 training program is based on the ISO/IEC 29100 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-9" class="roll roll09"><!-- 4depth 컨텐츠 06-9 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information Security</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 38500 Professional training</h2>
                        <p class="sub_txt">
                            ISO/IEC 38500 supports management organizations that provide IT services to positively contribute to their performance.<br><br>
                            Organizations can meet ISO/IEC 38500 requirements, monitor IT usage to ensure business continuity and sustainability, and ensure proper implementation and operation of IT assets, including aligning IT with business needs.<br><br>
                            This standard also helps you gain the expertise needed to build, implement and continuously improve the framework that complies with principles and models for good IT governance established by ISO/IEC 38500.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img horizon">
                                        <img src="./image/ISOIEC 38500_01.jpg" alt="The importance of ISO/IEC 38500 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 38500 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO/IEC 38500 enables judges and individuals to understand business strategies and tailor them to their organizations.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>For effective application of ISO/IEC 38500, companies and industries need qualified experts.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO/IEC 38500 curriculum is to provide credibility to certification body, business and industries with the confidence that auditors and individuals trained through this program are eligible.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The ISO/IEC 38500 training program is based on the ISO/IEC 38500 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 06 종료 +++++--> 

<!--==============================================================================================================================================================-->

        <article><!--+++++ 컨텐츠 07 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">Risk management</h1>
                <h2 class="sub_tit2 fc_pointer">ISO 31000 Professional Training</h2>
                <p class="sub_txt">
                    Encourage organizations to develop, implement, and continuously improve frameworks aimed at integrating the overall management, strategy and planning of risk management processes, management, reporting processes, policies, values and cultures.<br><br>
                    This framework is available regardless of organization's risk type and supports your organization's financial stability and reputation protection.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO 31000_01.jpg" alt="The importance of ISO 31000 training">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 31000 training</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Risk is inherent in all activities, so ISO 31000 can help you engage in public and private, infrastructure and commerce derived from risk.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>For the effective application of ISO 31000, companies and industries need qualified experts.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO 31000 curriculum is to provide certification body, businesses and industries with the confidence that auditors and individuals trained through this program are eligible.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>The ISO 31000 training program is based on the ISO 31000 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 07 종료 +++++--> 
        
        <!--==================================================================================================-->
        
        <article><!--+++++ 컨텐츠 08 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 29001</a></li>
                    <li><a data-slide-index="1">ISO 39001</a></li>
                    <li><a data-slide-index="2">ISO 50001</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con8-1" class="roll roll01 on"><!-- 4depth 컨텐츠 08-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Transportation and Energy</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 29001 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 29001 was developed as a supplement to ISO 9001:2015 standard.<br><br>
                            This standard provides a framework for managing supply chain risks and opportunities associated with the petroleum, petrochemical and natural gas industries and for coordinating the requirements for complementary standards adopted within the industry.<br><br>
                            The goal of ISO 29001 is to develop a quality management system that prevents defects in supply chains and service providers and provides continuous improvement by emphasizing variability and waste reduction.<br><br>
                            ISO 29001 is also a standard for avoiding multiple certification audits and providing a common approach to quality management systems in the petrochemical and natural gas industries.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 29001_01.png" alt="The importance of ISO 29001 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 29001 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Given that threats from the oil and gas industries occur most frequently, qualified professionals are required in this area in relation to quality control processes.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Mishandling of harmful liquids and gases can cause serious damage to the environment as well as people.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Therefore, high levels of operational reliability are essential for the industry to ensure safety and maintenance of smooth operations.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The ISO 29001 training program is based on the ISO 29001 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con8-2" class="roll roll02"><!-- 4depth 컨텐츠 08-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Transportation, and Energy</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 39001 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 39001:2012 (RTS) is an international standard for road traffic safety management systems established by ISO/TC 241 participating countries around the world.<br><br>
                            ISO 39001 was developed to reduce deaths and serious injuries from traffic accidents, and provides for the requirements of management systems for road traffic safety in the organization.<br><br>
                            The ISO 39001 standard helps organizations reduce the rate and risk of deaths and serious injuries from road traffic accidents, while ultimately eliminating them.<br><br>
                            Road traffic safety management systems based on ISO 39001 are applicable to both public and private 
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO37301_01.jpg" alt="ISO 37301">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is ISO 39001?</h3>
                                        <p class="sub_txt">
                                            ISO 39001 can meet organizational safety and social responsibility objectives and identify ways to improve business efficiency through better management.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The targets of ISO 39001 are as follows.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Organizations seeking to improve road traffic safety performance</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Organizations seeking to establish, implement, maintain, and improve road traffic safety management systems</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Organizations seeking to establish the conformity of road traffic safety policies within the organization</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>An organization that intends to prove the conformity of the road traffic safety policy within the organization and this international standard.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO37301_02.jpg" alt="The importance of ISO 39001 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 39001 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>ISO 39001 specifies requirements for road traffic safety (RTS) management systems to help organizations interact with road traffic systems reduce the incidence of road traffic accidents related deaths and serious injuries.
                                                </li>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>In order to be competitive and capable, companies and industries need qualified experts. 
                                                </li>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>The purpose of the ISO 39001 management system assessor training course is to provide the certification body with the confidence that auditors certified through this program are eligible.
                                                </li>
                                                <li>
                                                    4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility. 
                                                </li>
                                                <li>
                                                    5. <span class="nbsp">&nbsp;</span>The ISO 39001 training program is based on the ISO 39001 standard.
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con8-3" class="roll roll03"><!-- 4depth 컨텐츠 08-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Transportation and Energy</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 50001 Professional Training</h2>
                        <p class="sub_txt">
                            This standard aims to help organizations establish the systems and processes needed to improve energy performance, including energy efficiency, utilization and usage.<br><br>
                            This standard aims to help organizations establish the systems and processes needed to improve energy performance, including energy efficiency, utilization and usage.<br><br>
                            This standard can be applied to organizations of all types and sizes, regardless of regional, cultural or social conditions, and successful implementation requires the will of all departments and functions of the customer organization, especially the CEO.<br><br>
                            Organizations can develop and implement energy policies based on these requirements and can establish goals, detailed objectives and action plans that take into account legal requirements and information related to critical energy use.<br><br>
                            Energy Management Systems (EnMS) enables organizations to demonstrate the compliance of energy management systems with the requirements of this standard by achieving their commitment to policy and performing activities necessary to improve energy performance.<br><br>
                            This standard applies to activities under the control of an organization, and its application can be tailored to meet the organization's specific requirements, including system complexity, documentation, and resources.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 50001_01.png" alt="The importance of ISO 50001 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 50001 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Effective use of energy can not only contribute to the economic benefits of the organization, but can also have a positive impact on environmental issues that are now emerging as a global hot topic.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>For the effective application of ISO 50001, companies and industries need qualified experts.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO 50001 Auditor Certification Process is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The ISO 50001 training program is based on the ISO 50001 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 08 종료 +++++-->  
         
        
<!--=================================================================================================================== -->
        

        <article><!--+++++ 컨텐츠 09 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 22301</a></li>
                    <li><a data-slide-index="1">ISO 22316</a></li>
                    <li><a data-slide-index="2">ISO/TS 22317</a></li>
                    <li><a data-slide-index="3">ISO 22320</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con9-1" class="roll roll01 on"><!-- 4depth 컨텐츠 09-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Continuity &amp; Resilience</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22301 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 22301 is a Business continuity management systems that specifies the requirements for organizations to establish documented management systems to defend, prepare, respond and recover from market risks, as well as theft, natural disasters, and ongoing improvement activities.<br><br>
                            Business continuity management systems are applicable to all industries and activities and provide organizations with a framework to understand the impact of threats and to build effective responsiveness and organizational resilience.<br><br>
                            This standard provides guidance on business continuity to continue business operations after outages, and seeks to ensure that products and services are delivered and recovered immediately in the event of outages, minimizing the impact on products and services.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 22301_01.jpg" alt="The importance of ISO 22301 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 22301 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>In the event of unanticipated incidents that may lead to business disruptions, such as terrorism and natural disasters, organizations should be able to respond effectively as planned and continue to supply products and services.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>In order to be competitive and competent, companies and industries need qualified experts.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO 22301 management system auditor certification process is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The ISO 22301 training program is based on the ISO 22301 standard, and is based on the audit guidance standard ISO 19011:2018.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd class="con_img">
                                        <img src="./image/ISO 22301_02.jpg" alt="The importance of ISO 22301 training">
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con9-2" class="roll roll02"><!-- 4depth 컨텐츠 09-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Continuity &amp; Resilience</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22316 Professional Training</h2>
                        <p class="sub_txt">
                            ‘Resilience’ is the core of a business that organizations that want to continue to prospering need to have. This international standard allows organizations to respond to problems in a more favorable position when faced with problems.<br><br>
                            This standard also includes building on traditional forms of risk management based on strong and autonomous leadership and recognizing the value and changing situations shared by members of the organization.<br><br>
                            The ISO 22316 (Security and Resilience, Organizational Resilience, Principles and Attributes) standard helps organizations ensure future businesses.<br><br>
                            This standard covers a wide range of factors that can strengthen the regulations within the organization, so it is essential for organizations to be able to accept and adapt unpredictable elements while working to achieve and realize their goals.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 22316_01.jpg" alt="The importance of ISO 22316 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 22316 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>For the effective application of ISO 22316 companies and industries need qualified experts.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The purpose of the ISO 22316 curriculum is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As part of the certification process, assessments will be conducted against requirements that reflect the core skills, knowledge and experience that define eligibility.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The ISO 22316 training program is based on the ISO 22316 standard.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con9-3" class="roll roll03"><!-- 4depth 컨텐츠 09-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Continuity &amp; Resilience</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/TS 22317 Professional Training</h2>
                        <p class="sub_txt">
                            This is a technical standard that provides organizations with detailed guidance on how to establish, implement and maintain business impact analysis (BIA) processes. <br><br>
                            While it does not provide a uniform process for performing business impact analysis, it helps organizations design BIA processes that meet their requirements.<br><br>
                            The organization cannot certify BIA with ISO/TS 22317. However, the ISO/TS 22317 standard can be used as a guideline for effective implementation of the BIA process. <br><br>
                            ISO/TS 22317 is the only standards that covers business impact analysis.<br><br>
                            Although designed to complement ISO 22301, it can be used as a standalone standard. The objective of the BIA process is to analyze the actual impact of business disruptions within the organization.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img horizon">
                                        <img src="./image/ISOTS 22317_01.jpg" alt="The importance of ISO/TS 22317 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/TS 22317 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Unanticipated business disruptions can have a profound implication, leading to loss of life, loss of property or income, or inability to provide an organization’s viable products or services.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The global economic recession has become a real fact through travel restrictions and blockades in countries caused by COVID-19, which began in December 2019, and serious economic damage to the global economy has occurred in a month. In fact, this has severely damaged many businesses, large and small, and all organizations are likely to collapse. These include technical failures, floods, utility outages, fires and terrorist attacks.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>To cope with this situation, companies and industries need qualified experts.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The purpose of the ISO/TS 22317 Examination Certification Process is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd class="con_img">
                                        <img src="./image/ISOTS 22317_02.jpg" alt="The importance of ISO/TS 22317 training">
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con9-4" class="roll roll04"><!-- 4depth 컨텐츠 09-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Continuity &amp; Resilience</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22320 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 22320 is an international standard that defines requirements related to incident response. These include water supply and food supply, health, rescue services, fuel supply and electricity, as well as standards established to minimize disasters, and to manage and respond to emergencies.<br><br>
                            ISO 22320 defines minimum requirements for effective incident response and provides the basis for command control, operational information, coordination and cooperation within incident response organizations.<br><br>
                            It also includes the organizational framework and procedures for command and control, decision support, traceability, information management and interoperability.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 22320_01.jpg" alt="The importance of ISO 22320 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 22320 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Internationally accepted standards were needed for disaster response measures and corresponding management of various disasters and accidents that could occur around the world, not only in social situations in each country and region, but also in the population.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>By enabling public and private organizations to establish and strengthen their ability to respond to all kinds of emergencies regardless of the importance of ISO 22320, they can minimize threats, confusion and damage and ensure infrastructure continuity.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>For the effective application of ISO 22320, companies and industries need qualified experts.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The purpose of the ISO 22320 curriculum is to provide the certification body, business and industry with the confidence that auditors and individuals trained through this program are eligible.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>We will evaluate against requirements that reflect the key competencies, knowledge and experience that define eligibility.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd class="con_img">
                                        <img src="./image/ISO 22320_02.jpg" alt="The importance of ISO 22320 training">
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 09 종료 +++++--> 
        
<!--=================================================================================================================== -->
        
        <article><!--+++++ 컨텐츠 10 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 13053</a></li>
                    <li><a data-slide-index="1">ISO 21500</a></li>
                    <li><a data-slide-index="2">ISO 30301</a></li>
                    <li><a data-slide-index="3">ISO 55001</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con10-1" class="roll roll01 on"><!-- 4depth 컨텐츠 10-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Business Management</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 13053 Professional Training</h2>
                        <div class="sub_txt">
                            ISO 13053 is an international standard describing the Six sigma methodology, used to further enhance the organization's business processes. Many businesses are experiencing process variations that often result in defects and errors, such as waste.<br><br>
                            The purpose of Six Sigma is to identify and significantly reduce variances by using a statistical approach to lower error rates and by using a statistical approach to improve quality performance.<br><br>
                            Six sigma methodologies can be used to improve existing processes through DMAIC (Definition, Measurement, Analysis, Improvement and Control) and DMADV (Definition, Measurement, Analysis, Design, and Verification) used to develop new services, products or processes.<br><br>
                            DMADV means that you finally reach the Six sigma standard through the steps of definition, measurement, analysis, improvement and management, with each step as follows : <br><br>
                            <div class="con_txt">
                                <ul>
                                    <li>
                                        <dl>
                                            <dt>1. <span class="nbsp">&nbsp;</span>Define :</dt>
                                            <dd>Set objectives for design activities consistent with corporate strategy and consumer requirements</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>2. <span class="nbsp">&nbsp;</span>Measure :</dt>
                                            <dd>Measure current process capability, product levels, and risk levels, and identify Critical to Qualities (CTQs).</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>3. <span class="nbsp">&nbsp;</span>Analyze :</dt>
                                            <dd>Develop design alternatives, creating high-level designs, and develop evaluating the design possibilities for choosing the best design</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>4. <span class="nbsp">&nbsp;</span>Improvement :</dt>
                                            <dd>Improve system components so that the desired process can be built</dd>
                                        </dl>
                                    </li>
                                    <li>
                                        <dl>
                                            <dt>5. <span class="nbsp">&nbsp;</span>Control :</dt>
                                            <dd>Control inputs and volatility to ensure that the improved process achieves the intended performance</dd>
                                        </dl>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 13053_01.jpg" alt="The importance of ISO 13053 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 13053 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Being able to run its practice in the profession while understanding Six sigma can differentiate itself from other professionals with knowledge of cost savings, business process improvements and increased profits.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Individuals certified for ISO 13053 are prepared to take leadership roles because they have the ability to be leaders in the workplace, as well as information about the Six sigma methodology.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>We will evaluate against requirements that reflect the key competencies, knowledge and experience that define eligibility.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con10-2" class="roll roll02"><!-- 4depth 컨텐츠 10-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Business Management</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 21500 Professional Training</h2>
                        <p class="sub_txt">
                            The ISO 21500 standard serves as a guide to project management while helping organizations successfully complete projects within budget and time constraints with minimal disruption to business operations other than project management.<br><br>
                            It also helps organizations reduce the likelihood of project failure by meeting all project management requirements.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 21500_01.jpg" alt="ISO 21500">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is ISO 21500?</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO 21500 training targets are variable.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Individuals involved in project management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Individuals and auditors seeking knowledge of the key processes in project management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Individuals who want to pursue a career in project management</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 21500 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO 21500 provides the knowledge needed to lead projects and manage teams, proving that trainees have the skills and knowledge to help them manage projects successfully.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts for effective project management.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO 21500 training course is to ensure that the competence of auditors and individuals who complete this program is competent, and to provide credibility to accredited personnel and to businesses and industries.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con10-3" class="roll roll03"><!-- 4depth 컨텐츠 10-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Business Management</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 30301 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 30301 is a standard that ultimately helps organizations achieve their mission, performance and goals through record management.<br><br>
                            The ISO 30301 standard establishes an organization's record management system to achieve its performance and goals, while at the same time presenting the necessary requirements.<br><br>
                            With regard to record management, such as the production and management of records, all members of the organization, including the management of the organization, can and can easily apply this specification.<br><br>
                            ISO 30301 International standards are applicable to all individuals interested in record management and management and who wish to contribute to achieving their organization's performance and objectives through effective record management.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 30301_01.jpg" alt="The importance of ISO 30301:2019 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 30301:2019 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>The ISO 30301 standard does not stop at “management” of records, but moves to the area of “(business) management” of records, and is a standard that ultimately supports the organization's performance and goals desired by the organization by managing records rather than simply managing records.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The purpose of the ISO 30301 curriculum is to ensure that the competence of auditors and individuals who complete this program is competent, and to provide credibility to accredited personnel and to business and industry sectors.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd class="con_img">
                                        <img src="./image/ISO 30301_02.jpg" alt="The importance of ISO 30301:2019 training">
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con10-4" class="roll roll04"><!-- 4depth 컨텐츠 10-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Business Management</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 55001 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 55001 is Asset Management System (AMS). The dictionary meaning of asset management is to coordinate an organization's finance, operations, maintenance, and other asset-related activities to realize more value from assets.<br><br>
                            It is an international standard aimed at maximizing its value by planning to manage the entire asset life cycle.<br><br>
                            ISO 55001 is also helpful for the organization's asset management itself, but it can give customers and partners credibility by forming an image of stable financial management externally.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 55001_01.jpg" alt="The importance of ISO 55001 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 55001 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>For effective asset management, companies and industries need qualified experts.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The purpose of the ISO 55001 curriculum is to ensure that the competence of auditors and individuals who complete this program is competent, and to provide credibility to accredited personnel and to businesses and industries.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 10 종료 +++++--> 
        
<!--=================================================================================================================== -->        
        
        <article><!--+++++ 컨텐츠 11 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 26000</a></li>
                    <li><a data-slide-index="1">ISO 37001</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con11-1" class="roll roll01 on"><!-- 4depth 컨텐츠 11-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Social accountability &amp; Bribery management</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 26000 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 26000:2010 is the Guidance on social responsibility published by the International Organization for Standardization (ISO) on 1 November 2010.<br><br>
                            This standard defines the responsibility of ensuring that all organizations or businesses in society benefit their society when making decisions and activities.<br><br>
                            Specifically, seven agendas, including governance, human rights, labor practices, environment, fair trade, consumer issues, community engagement and development, include relevant implementation guidelines and recommendations.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 26000_01.jpg" alt="The importance of ISO 26000 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 26000 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>ISO 26000 recognizes that compliance is a fundamental obligation of all organizations, as well as an integral part of social responsibility, and encourages them to go beyond compliance.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>For the effective application of ISO 26000, companies and industries need qualified experts.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO 26000 curriculum is to provide qualified auditors and individuals trained through this program with credibility to accrediting agencies and businesses and industries.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Assessments will be conducted according to requirements that reflect the core skills, knowledge and experience that define eligibility in the curriculum. </li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The ISO 26000 training program is based on the ISO 26000 standard.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con11-2" class="roll roll02"><!-- 4depth 컨텐츠 11-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Social accountability &amp; Bribery management</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 37001 Professional Training</h2>
                        <p class="sub_txt">
                            ISO 37001:2016 is Anti-Bribery management system requirement. It provides guidelines for establishment, implementation, maintenance, review and improvement of anti- bribery management systems. ISO 37001:2016 is a management system designed to help organizations prevent, detect and respond to bribery and come up with measures to prevent it.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO 37001_01.jpg" alt="The importance of ISO 37001 training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 37001 training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Establishing the ISO 37001 standard can lead to a positive perception of the enterprise around the world and help reduce the risk of breach of laws among stakeholders, thereby increasing confidence.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Establishing the ISO 37001 standard can lead to a positive perception of the enterprise around the world and help reduce the risk of breach of laws among stakeholders, thereby increasing confidence.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO 37001 curriculum is to ensure that the competence of auditors and individuals who complete this program is competent, and to provide credibility to accredited personnel and to business and industry sectors.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As part of the auditor process, we will evaluate against requirements that reflect the key competencies, knowledge and experience that define eligibility.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 11 종료 +++++-->  
        
<!--=================================================================================================================== -->
        
        <article><!--+++++ 컨텐츠 12 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">Testing &amp; Calibration</h1>
                <h2 class="sub_tit2 fc_pointer">ISO/IEC 17025 Professional Training</h2>
                <p class="sub_txt">
                    ISO/IEC 17025 is an international standard for General requirements for the competence of a laboratory or calibration laboratory (general requirements for the competence of test and calibration laboratories) established by the International Organization for Standardization.<br><br>
                    The ISO/IEC 17025:2017 operational practice course is designed to understand and apply the requirements of testing and calibration institutions' accreditation standards.<br><br>
                    The goal is to meet the educational requirements of test and calibration personnel through practical training through requirements commentary and case analysis, including kaldo exams, subacute guidelines, and eligibility criteria.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISOIEC 17025_01.jpg" alt="The importance of ISO/IEC 17025:2017 training">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO/IEC 17025:2017 training</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Certification documents issued by ISO/IEC 17025 accredited testing laboratories/calibrators may contain an accreditation mark and enhance reliability as an internationally accepted certificate.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Companies and industries need qualified experts.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>The purpose of the ISO/IEC 17025 curriculum is to provide accreditation agencies, businesses and industry sectors with the confidence that individuals trained through this program are eligible.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>As part of the training process, we will conduct assessments against requirements that reflect key competencies, knowledge and experience that define competence.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>The training program is based on the key standards for audit.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 12 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>