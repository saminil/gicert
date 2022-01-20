<?php
	include_once('./_common.php');
$g5['title'] = 'Auditor Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#1194a8 }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 33.3% }
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }    
    
    .point_b1 { font-size: 1.6em; font-weight: 500; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 600; margin-bottom: 15px }/* 본문의 강조부분 css */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(17,148,168,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #1194a8; display: inline-block; border: 2px solid #1194a8; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    
    .con_txt { width:80%; margin: 30px auto; border-top:1px solid #ddd; font-size:1rem; line-height: 1.6; color:#555; background:#f8f8f8;text-align: justify}/* 부가설명박스의 레이아웃 */
	.con_txt ul { width: 90%;margin: 0 auto;padding: 25px }/* 부가설명박스의 css */
    .con_txt ul li { margin-bottom: 10px }

    .con_img {width: 100%;text-align: center;margin: 70px auto }/* 문단에 쓰이는 이미지의 css */
    .con_img img {width: 40%;}/* 문단의 쓰이는 이미지의 크기 */
      
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
            
            $("#con1-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con2-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con3-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            
            $(target).addClass('on'); // 선택된 탭 버튼에 활성화 클래스인 on 추가
        });
    })

</script>
<!-- 탭 메뉴 구현 끝 -->
<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
	<div class="tab_menu tab01">
	    <h2>Auditor Certification Service</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Part 1</a></li>
			<li><a href="javascript:;">Part 2</a></li>
            <li><a href="javascript:;">Part 3</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <article style="display:block"><!--+++++ 컨텐츠 01 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 9001</a></li>
                    <li><a data-slide-index="1">ISO 14001</a></li>
                    <li><a data-slide-index="2">ISO 13485</a></li>
                    <li><a data-slide-index="3">ISO 45001</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con1-1" class="roll roll01 on"><!-- 4depth 컨텐츠 01-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 9001:2015 Quality Management System(QMS)</h2>
                        <p class="sub_txt">
                            GIC provides certification services such as ISO 9001 quality management system provisional auditor,  auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification Co., Ltd.), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO9001_01.jpg" alt="ISO 9001:2015 Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 9001:2015 Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 9001 is an internationally recognized standard for Quality Management Systems (QMS). This is the most used standard worldwide, and more than 11 million certificates are issued to customers in 178 countries.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Today many companies want not only to meet the needs of their customers, but also provide better products and services. They also want to remain competitive through cost reduction.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>They also want to remain competitive through cost reduction. Whether it’s a large or small business, they need a comprehensive solution to improve quality and price competitiveness, and ISO 9001 provides these companies with effective quality management processes.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Software development is different from food manufacturing or providing consulting services. However, ISO 9001 can be applied to any industry. Various organizations including manufacturing companies, software development companies, trading organizations, service organizations, police stations, professional football teams and city councils have successfully applied the ISO 9001:2015 system.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>As such, the requirements of ISO 9001 are comprehensive and can be applied to any organization, regardless of the type, size, or products and services offered. Therefore, this standard is the most widely used quality management standard worldwide.</li>
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
                                        <h3 class="point_b1">ISO 9001 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Basic requirements</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Educational background beyond secondary education</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Completion of education at an accredited educational institution and acceptance of examinations</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO9001_02.png" alt="Auditor Certification ISO 9001 Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Auditor Certification ISO 9001 Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span style="display:block;font-weight:600">※ <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span><br><br>
                                                <li>- <span class="nbsp">&nbsp;</span>Graduate Certificate and Certificate of experience</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Verification audit evaluation record</li><br><br>
                                                <span style="display:block;font-weight:600">※ <span class="nbsp">&nbsp;</span>The applicant to be assessed, knowledge and as a character, are entitled when pass the test finished and acceptable education standards are as follows.</span>
                                            </ul>
                                            <ul>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate approved by GPC that meets the requirements of educational institutions</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li><br><br>
                                                <span style="display:block;font-weight:600">※ <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-2" class="roll roll02"><!-- 4depth 컨텐츠 01-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 14001 | Environmental Management System(EMS)</h2>
                        <p class="sub_txt">
                            GIC provides certification services such as ISO 14001 environmental management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO14001_01.jpg" alt="ISO 14001:2015 Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14001:2015 Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 14001:2015 is an international standard for environmental management systems (EMS), and is a major management system standard that specifies requirements for configuring and maintaining an environmental management system. Many companies in Korea are certified for their organization's environmental management, and more than 250,000 certificates are issued worldwide.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 14001 deals with issues such as establishing, implementing, maintaining and improving environmental management systems, along with general guidelines on principles, systems and supporting technologies for environmental management systems. This controls the customer's environmental aspects, reduces environmental impact, and ensures compliance with laws and regulations.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO14001_02.jpg" alt="ISO 14001 Auditor Certification Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14001 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Basic requirements</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Secondary education or higher</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Completion of training and passing the exam at an accredited educational institution</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO14001_03.jpg" alt="ISO 14001 Auditor Certification Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14001 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Graduate Certificate and Certificate of experience</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Verification audit evaluation record</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Being the subjects for evaluation, applicants will be qualified only if they pass the knowledge and personality test.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate approved by GPC that meets the requirements of educational institutions</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate approved by GPC that meets the requirements of educational institutions</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-3" class="roll roll03"><!-- 4depth 컨텐츠 01-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 13485:2016 Medical devices — Quality management systems(MDQMS)</h2>
                        <p class="sub_txt">
                            GIC provides certification services such as ISO 13485 medical device quality management system provisional auditor, auditor, lead auditor, internal auditor, senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO13485_01.jpg" alt="ISO 13485 Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485 Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 13485 is a standard that stipulates the requirements for the quality management system of organizations that provide medical device design and development, production, installation and additional services.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>This specification can also be applied to external organizations that provide sterilization, calibration and sales services for medical devices, providing a foundation for quality management systems for medical devices and related service delivery organizations.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical devices directly affect human life and health, they need to guarantee a higher level of stability than any other product. Therefore, the medical device industry has a variety of regulations that must be met, including domestic regulatory systems, international standards and other requirements.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In order to meet the requirements of the EU Medical Device Directive, a quality system must be established, and some countries, such as Canada, require ISO 13485 certification for product sales.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 13485 Management System Certification allows medical device manufacturers to demonstrate that their organizations' systems meet comprehensive requirements for quality management systems and special requirements for medical devices.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO13485_02.jpg" alt="ISO 13485 Auditor Certification Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Basic requirements</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Secondary education or higher</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Completion of training and passing the exam at an accredited educational institution</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>ISO 13485:2016 Auditor requirements</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Education: University (4 years) graduation or higher</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Majors:  Biology, Microbiology, Chemistry, Biochemistry, Computer and Software Technology, Electrical, Electronics, Mechanical, Biological Engineering, Human Physiology, Pharmacy, Physics</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Experience:  Persons who have worked full-time for at least 4 years in medical devices and medical research fields</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Special requirements and technical competence : </span>
                                                <li>
                                                    <dl>
                                                        <dt><span class="point_b2">1. <span class="nbsp">&nbsp;</span>Basic knowledge of medical devices and an understanding of related production activities, including : </span></dt>
                                                        <dd>- <span class="nbsp">&nbsp;</span>purpose of use</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Classification of medical devices including risk analysis</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Legal regulatory framework and the role of the certification body</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Medical device risk evaluation (ISO 14971)</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Product standards related to medical device evaluation</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>ISO 13485 certification by certification body</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Knowledge of medical device business/technology</dd>
                                                    </dl><br><br>
                                                    <dl>
                                                        <dt><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Statistical analysis</span></dt>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Basic knowledge of probability and statistics according to sampling and trend analysis considering reliability and standard deviation</dd>
                                                    </dl><br><br>
                                                    <dl>
                                                        <dt><span class="point_b2">3. <span class="nbsp">&nbsp;</span>Knowledge of : </span></dt>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Sterilization technology and verification technology</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Microbiology and BIO-Burden monitoring</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Biocompatibility and validation</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Clean room operation</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Environmental monitoring and control</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Packaging technology</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Stability test</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Risk management base</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Cleaning and disinfection</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Biological evaluation of medical devices</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Clinical evaluation of medical devices</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Physical and chemical evaluation of medical devices</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Knowledge of process validation practices</dd>
                                                        <dd>- <span class="nbsp">&nbsp;</span>Software verification technology</dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO13485_03.jpg" alt="ISO 13485 Auditor Certification Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485 Auditor Certification Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Graduate Certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate of experience</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Verification audit evaluation record</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Being the subjects for evaluation, applicants will be qualified only if they pass the knowledge and personality test.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate approved by GPC that meets the requirements of educational institutions</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management System Examiner/Senior Examiner Training Course Certificate provided by a designated training institution based on ISO/IEC 17024</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-4" class="roll roll04"><!-- 4depth 컨텐츠 01-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 1</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 45001:2018 Occupational Health and safety Management Systems</h2>
                        <p class="sub_txt">
                            GIC provides certification services such as for ISO 45001 occupational health and safety management systems provisional auditor, auditor, lead auditor, internal auditor, senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO45001_01.jpg" alt="ISO 45001:2018 Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 45001:2018 Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 45001 is a occupational health and safety management systems, and the existing OHSAS 18001:2007 standard was replaced by ISO 45001 in 2018. It provides a framework for managing health and safety management responsibilities through an occupational health and safety management system compatible with ISO 9001 and 14001 management systems.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>This standard was developed for international use and enables organizations to control health and safety risks and improve performance.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 45001 is suitable for over 90,000 organizations in over 127 countries. If your organization needs to show the best practice of the safety management of those responsible for it, it will be right for you.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC grants certifications to various organizations in various fields, including government offices, manufacturing, service, food companies, and franchises.</li>
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
                                        <h3 class="point_b1">ISO 45001 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted for registration as an auditor</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate of experience and Auditor certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Auditor certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history log sheet writing</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part1_ISO45001_02.jpg" alt="ISO 45001 Auditor Certification Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 45001 Auditor Certification Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If insufficient evidence is available, additional evidence should be available.)</span>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Applicants are eligible for evaluation and are entitled to pass the Knowledge and Personality Test and are eligible for completion of the training as follows</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate approved by GPC that meets the requirements of educational institutions</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
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
        </article><!--+++++ 컨텐츠 01 종료 +++++--> 
        
<!--=================================================================================================================== -->

        <article><!--+++++ 컨텐츠 02 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO/IEC 20000-1</a></li>
                    <li><a data-slide-index="1">ISO/IEC 27001</a></li>
                    <li><a data-slide-index="2">ISO 22716</a></li>
                    <li><a data-slide-index="3">ISO 50001</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con2-1" class="roll roll01 on"><!-- 4depth 컨텐츠 02-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 20000-1:2018<br> IT Service Management System</h2>
                        <p class="sub_txt">
                            GIC provides certification services such as ISO/IEC 20000-1 IT Service management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISOIEC20000-1_01.jpg" alt="ISO/IEC 20000-1:2018 Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1:2018 Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO/IEC 20000 specifies requirements for service providers to plan, establish, implement, operate, monitor, review, maintain and improve SMS and is the first international specification for service management.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>This standard contains two key parts that enable service providers to identify how to develop the quality of service they provide to their customers.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Part 1 specifies the requirements for the development and implementation of a service management system, Part 2 contains guidance on the application of service management systems within the scope of ISO/IEC 20000-1.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Although the IT Infrastructure Library (ITIL) describes best practices that require ISO/IEC 20000-1 specifications and can achieve the same quality of service, ISO/IEC 20000-1 enables authentication for the entire enterprise against ITL certification, which usually applies to individuals.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISOIEC20000-1_02.jpg" alt="ISO/IEC 20000-1 Auditor Certification Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted for registration as an auditor</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate of graduation and Certificate of Career</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Auditor certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history log sheet writing</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISOIEC20000-1_03.jpg" alt="ISO/IEC 20000-1 Auditor Certification Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1 Auditor Certification Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Applicants are eligible for evaluation and are entitled to pass the Knowledge and Personality Test and are eligible for completion of the training as follows</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate approved by GPC that meets the requirements of educational institutions</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con2-2" class="roll roll02"><!-- 4depth 컨텐츠 02-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO/IEC 27001:2013 Information Security Management System(ISMS)</h2>
                        <p class="sub_txt">
                            GIC provides certification services such as ISO/IEC 27001 (Information security management system, ISMS) provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISOIEC27001_01.jpg" alt="ISO/IEC 27001:2013 Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001:2013 Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO/IEC 27001 is an international standard for information security management system established by the International Organization for Standardization (ISO) and the International Electrotechnical Commission (IEC) and the most authoritative international certification standard in the field of information security.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>It covers 133 items in 11 areas related to information security such as information protection policy, physical security, and information access control etc.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO/IEC 27001 consists of 10 items and 14 control items (refer to ISO/IEC 27002 for control items) of organizational environment, leadership, planning, support, operation, performance evaluation, and improvement. The requirements of this standard have been formulated to be general and applicable to any organization, regardless of its type, size or characteristics.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISOIEC27001_02.jpg" alt="ISO/IEC 27001 Auditor Certification Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted for registration as an auditor</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate of graduation and Certificate of Career</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Auditor certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history log sheet writing</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISOIEC27001_03.jpg" alt="ISO/IEC 27001 Auditor Certification Exam">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001 Auditor Certification Exam</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>When applying for an auditor, the acceptable training completion criteria are as follows.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con2-3" class="roll roll03"><!-- 4depth 컨텐츠 02-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22716:2007 Cosmetics — Good Manufacturing Practices(GMP)</h2>
                        <p class="sub_txt">
                            GIC provides certification services for ISO 22716 CGMP provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISO22716_01.jpg" alt="ISO 22716:2007 Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22716:2007 Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22716 specification aims to provide a Good Manufacturing Practices (GMP) guide for cosmetics. Also, this guideline is prepared considering the specific needs of cosmetics manufacturing.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22716 provides organized and practical advice on the management of factors affecting product quality.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22716 is becoming a prerequisite for cosmetic exports. In particular, the EU regulation of new cosmetics in Europe requires cosmetic manufacturers to comply with the harmonized standard, which is ISO 22716.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISO22716_02.jpg" alt="ISO 22716 Auditor Certification Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22716 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted for registration as an auditor</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate of experience</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Auditor certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history log sheet writing</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISO22716_03.jpg" alt="ISO 22716 Auditor Certification Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22716 Auditor Certification Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Applicants are eligible for evaluation and are entitled to pass the Knowledge and Personality Test and are eligible for completion of the training as follows.</span>
                                                <li>- <span class="nbsp">&nbsp;</span>A certificate of completion of a management system examination or senior examination course approved by the GPC meeting the requirements of an educational institution</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con2-4" class="roll roll04"><!-- 4depth 컨텐츠 02-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 2</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 50001:2018 Energy management systems(EnMS)</h2>
                        <p class="sub_txt">
                            GIC provides certification services such as for ISO 50001:2018 energy management system provisional auditor, auditor, lead auditor, internal auditor, and senior auditor based on cooperation with GPC (Global Personnel Certification), an accredited personal certification body based on ISO/IEC 17024.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISO50001_01.jpg" alt="ISO 50001:2018 Certification overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 50001:2018 Certification overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>'ISO 50001' is an international standard for energy management systems that went into effect in June 2011 by the International Organization for Standardization (ISO), and stipulates processes and requirements for energy efficiency and reduction.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Efficient energy management is emerging as an important issue due to the prolonged high oil price system and responding to changes in the international energy environment.Due to the demands and needs of these industries, the demand for ISO 50001 certification is constantly increasing, and accordingly, the demand of experts and auditors for ISO 50001 is also increasing.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Based on these requirements, the organization can develop and implement an energy policy, and can establish goals, targets and action plans that take into account legal requirements and information related to the use of critical energy</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Energy Management Systems (EnMS) helps organizations achieve their commitment to policy and demonstrate the system's compliance with the requirements of this standard by performing the activities needed to improve energy performance.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>This standard applies to activities under the control of an organization, and its application can be tailored to the specific needs of the organization, including system complexity, degree of documentation and resources</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISO50001_02.jpg" alt="ISO 50001 Auditor certification requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 50001 Auditor certification requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted for registration as an auditor</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate of graduation and Certificate of Career</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Auditor certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history log sheet writing</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part2_ISO50001_03.jpg" alt="ISO 50001 Auditor certification procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 50001 Auditor certification procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Applicants are eligible for evaluation and are entitled to pass the Knowledge and Personality Test and are eligible for completion of the training as follows</span>
                                                <li>- <span class="nbsp">&nbsp;</span>A certificate of completion of a management system examination or senior examination course approved by the GPC meeting the requirements of an educational institution</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
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
        </article><!--+++++ 컨텐츠 02 종료 +++++-->
        
<!--=================================================================================================================== -->
       
        <article><!--+++++ 컨텐츠 03 시작 +++++-->
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
                <section style="display:block" id="con3-1" class="roll roll01 on"><!-- 4depth 컨텐츠 03-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">ISO 22000:2018 Food Safety Management Systems (FSMS)</h2>
                        <p class="sub_txt">
                            Based on cooperation with GPC (Global Personal Certification), an accredited personal certification body based on ISO/IEC 17024, GIC provides certification services such as ISO 22000 Food Safety Management System Provisional auditor, Auditor, Lead auditor and Senior auditor.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_ISO22000_01.jpg" alt="FSSC 22000 Certificate Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 Certificate Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The ISO 22000 standard incorporates the principles and application stages of the HACCP system developed by the International Food Standards Commission.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The standard also requires identification and evaluation of all possible hazards in the food chain, including those that may be associated with the form of processes and facilities of use.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Therefore, ISO 22000 helps identify the need for management among identified hazards and provides a means for documentation.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_ISO22000_02.jpg" alt="ISO 22000 Auditor Certification Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 Auditor Certification Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted for registration as an auditor</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate of graduation and Certificate of Career</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Auditor certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Education certificate</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Audit history log sheet writing</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_ISO22000_03.jpg" alt="ISO 22000 Auditor Certification Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000 Auditor Certification Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>The applicant decides the grade of the examiner to apply for, completes the application, and submits the documentary evidence for the credentials. (If there is not enough evidence, it must be possible to prove it through additional evidence.)</span>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Applicants are eligible for evaluation and are entitled to pass the Knowledge and Personality Test and are eligible for completion of the training as follows</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate approved by GPC that meets the requirements of educational institutions</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Management system auditor or lead auditor training course completion certificate provided by an educational training institution designated by an accredited institution based on ISO/IEC 17024</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>The certification is valid for 3 years from the date of issue, and maintenance fees must be paid annually in accordance with the certified cycle, and additional requirements must be met at the 3rd year in the renewal cycle.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con3-2" class="roll roll02"><!-- 4depth 컨텐츠 03-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">FSSC 22000 Version 5 | Food Safety System(FSSC)</h2>
                        <p class="sub_txt">
                            Based on cooperation with IGC, GIC provides FSSC auditor certification services. IGC is an educational institution registered as the official Training Organization of FSSC and provides FSSC 22000 auditor registration service.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FSSC22000_01.jpg" alt="FSSC 22000 Version 5 Certificate Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSSC 22000 Version 5 Certificate Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The FSSC 22000 (Food Safety System Certification) standard is a food safety standard approved by the Global Food Safety Initiative (GFSI), which has the most influence on food manufacturers, to introduce a food safety certification system suitable for the overall food industry.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>As the world's population grows, there is an increasing demand for cheap, safe and quality food. To meet these needs, FSSC 22000 provides the food industry with a reliable food safety platform.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000, as a combination of Sector Prerequisite Programs (PRPs) based on ISO 22000 for manufacturer of different food products and ingredients in different sectors, and additional FSSC 22000 requirements, is applicable to all food manufacturers regardless of size, complexity and location. In addition, transportation and storage at the production site are included in the scope of certification.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FSSC22000_03.jpg" alt="FSSC 22000 Auditor Qualification Process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSSC 22000 Auditor Qualification Process</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>Working experience</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food production or manufacturing, retail and food inspection or food-related laws Career in charge of quality assurance in progress or equivalent areas</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Experience in food or related industries, including at least 2 years of full-time work experience related to food safety functions.</li>
                                            </ul>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Education</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food-related or life science degree, or</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>at least a food-related or life sciences higher education course</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>successful completion of an equivalent course</li>
                                            </ul>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>Education training</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSMS or QMS lead auditor course-at least 40 hours including exam</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>HACCP training-minimum 16 hours including exam</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22000 standard-at least 8 hours including exam (if the lead auditor course does not include parts about the ISO 22000 standard)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food defense training (including exam) covering methods of food defense risk assessment and possible mitigation measures.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food fraud education and training (including exam) covering methods of assessing food fraud vulnerability and possible mitigation measures.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Standards-All requirements related to the scheme (including tests): ISO/TS 22003 (Annex C), ISO 19011 and ISO/IEC 17021-1 (standards applicable to the certification body audit process, including exam)</li>
                                            </ul>
                                            <ul><span class="point_b2">4. <span class="nbsp">&nbsp;</span>Others</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Audit: At least 10 days of audit experience and 5 ISO 22000 audits</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>or GFSI's accredited scheme audit related to a specific industry, including at least one FSSC 22000 audit</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GFSI exam: All auditors must pass the GFSI exam within the deadline set by the foundation. New auditors are required to pass the GFSI exam before becoming eligible for FSSC 22000.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Category I related: basic packaging certification, packaging technology degree</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Or higher-level certifications and certifications in food technology, food hygiene or related sciences, or basic certifications in food technology, food safety/sanitation or related sciences, and training (minimum 30 hours) of the World Packaging Association and the Certification for packaging technology that meets the requirements specified by the World Packaging Association</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000-Quality: Auditors qualified to ISO/IEC 17021-1 with respect to ISO 9001 certification accreditation under the ISO/TS 22003 category and ISO 9001 food sector code.</li>
                                            </ul>
                                            <ul><span class="point_b2">5. <span class="nbsp">&nbsp;</span>Auditor’s Initial evaluation and Approval</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 witness screening of auditors to confirm that competence has been achieved</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>All FSSC 22000 auditors (including auditors during training) must be registered on the portal according to Foundation guidelines.</li>
                                            </ul>
                                            <ul><span class="point_b2">6. <span class="nbsp">&nbsp;</span>Granting scope of certification for sub-classification (first and expanded) </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>After receiving the initial auditor qualification, the auditor must be granted/approved for each category. The certification body shall demonstrate that the auditor satisfies the following requirements in order to assign the category code to the auditor.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In relation to a new category (post-farm gate only except for food chain category A) to be granted as a trainee or as an auditor under the supervision of an auditor who has 6 months working experience in the subclass or qualified for the subclass, 5 audits of recognized by GFSI schemes.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>At least one of the five audits must be an FSSC 22000 audit (post or renewal audit phase 2). If an advisory service is used to demonstrate working experience, the total number of consulting days must be added to the six-month working experience.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Demonstrate specific eligibility for sub-classification</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Satisfy the certification body's own qualification criteria for sub-classification</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FSSC22000_04.jpg" alt="Education provided">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Education provided</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>Understanding FSSC 22000</span>
                                                <li>This course is intended for organizations, certification bodies, consultants, and those who are interested in a general knowledge of FSSC 22000 requirements and understand how they can be applied to other food chain organizations.</li>
                                            </ul>
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 Implementation</span>
                                                <li>shows how FSSC 22000 can be implemented within various food chain categories for organizations, consultants and others based on the process above.</li>
                                            </ul>
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 Internal Auditor Course</span>
                                                <li>designed for organizations implementing FSSC 22000 to meet the training requirements of internal auditors. Training covers all elements specified in ISO 19011:2018.</li>
                                            </ul>
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>FSSC 22000 Senior Auditor Course</span>
                                                <li>This course is held for those who wish to register as a lead auditor. It can also be applied to internal auditors and consultants. The composition of the training covers FSSC 22000 requirements, ISO 19011: 2018, ISO / IEC 17021-1: 2015 and ISO / TS 22003: 2013 and includes practice courses (e.g. Case study) and written exams. The total training time is 40 hours.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con3-3" class="roll roll03"><!-- 4depth 컨텐츠 03-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">FDA FSMA<br> Food Safety Modernization Act</h2>
                        <p class="sub_txt">
                            GIC cooperates with IGC, a management certification Body. IGC is 7th in the world and the first in Korea to be accreditation as an FDA FSMA third-party certification body by the US FDA and IAS, providing auditor registration services.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FDAFSMA_01.jpg" alt="FDA FSMA Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA FSMA Certification Overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>On January 04, 2011, the U.S. government enacted the Food Safety Modernization Act (FSMA) to ensure the stability of food supply and protect public health through proactive prevention. With the enactment of the FSMA, the FDA can focus on preventing food safety issues.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FSMA applies to facilities that manufacture, process, package or store food or feed. Also, companies that send food to the United States, such as producers, US importers, shippers, recipients, shippers, and transporters, must comply with FSMA.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Therefore, according to FSMA, companies need to establish a food safety system that includes preventivemanagement based on hazard analysis and prepare a documented food safety plan</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FDAFSMA_02.jpg" alt="The Importance of FSMA Auditor Certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The Importance of FSMA Auditor Certification</h3>
                                        <div class="con_txt">
                                            <ul>
                                                The United States is an important export destination for Korea and is a very important food export market. Therefore, the FSMA third-party certification serves as an opportunity for food companies to expand their exports to the US.<br><br>
                                                Therefore, FSMA auditor certification is required in order to conduct an audit by an accredited third party to ensure compliance with the regulations required by FSMA.
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FDAFSMA_03.jpg" alt="FSMA Auditor Training Course">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSMA Auditor Training Course</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Based on cooperation with IGC certification Body, GIC provides FSMA training course. Contents of IGC's FSMA Third Party Certified Auditor Training Course</span>
                                                <li>- <span class="nbsp">&nbsp;</span>FDA FSMA Third-Party Certification Program</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Auditor Acceptance Criteria</li>
                                                <li>- <span class="nbsp">&nbsp;</span>FSMA Third-Party Certification Audit Checklist</li>
                                                <li>- <span class="nbsp">&nbsp;</span>FSMA Human Food Category Characteristics and application method</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Low Acid and Acidified Foods</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Fisheries/Seafood Products</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Fruit or Vegetable Juices, Other Beverages Including Water</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Starch Products</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Food Additives</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Nuts and Edible Seed Products</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con3-4" class="roll roll04"><!-- 4depth 컨텐츠 03-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Part 3</h1>
                        <h2 class="sub_tit2 fc_pointer">PCQI | Preventive Controls Qualified Individual</h2>
                        <p class="sub_txt">
                            Companies that export food to the United States must appoint a Food Safety Preventive Controls Professional (PCQI: Preventive Controls Qualified Individual) based on FSMA requirements to operate the HARPC (Hazard Analysis and Risk-based Preventive Controls).<br><br>
                            According to FSMA regulations, food manufacturers are required to establish and operate a food safety plan to prevent and manage potential risks in advance as well as traditional hazard analysis.<br><br>
                            Also, a food safety plan must be established and preventive management by a preventive management expert. Should be validated and related records are required to be reviewed regularly.<br><br>
                            PCQI certification must be issued through FSPCA after successful completion of a training course approved by The Food Safety Preventive Controls Alliance (FSPCA).
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FCQI_01.jpg" alt="What is a PCQI?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is a PCQI?</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>Preventive Controls Qualified Individual</span>
                                                <li>Have successfully completed education on the development and application of preventive controls based on equal risk in accordance with a standardized curriculum, at least accreditation by the FDA as appropriate, Otherwise, it means a qualified person through job experience to develop and apply a food safety system.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FCQI_02.jpg" alt="PCQI's responsibility">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PCQI's responsibility</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2 fc_pointer">&#10020; <span class="nbsp">&nbsp;</span>The supporting documents to be submitted with the application are as follows.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Preparation of food safety plan</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Validation of preventive measures</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Record review</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Re-analysis of food safety plan</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Supervise or conduct other food-appropriate activities</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FCQI_03.jpg" alt="Practitioners who will be involved in food safety production with training conditions for PCQI">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Practitioners who will be involved in food safety production with training conditions for PCQI</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Vice President of Food Safety</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Maintenance manager</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Production supervisor and manager</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hygiene supervisor</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Quality Assurance Officer and Manager</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Safety manager</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Education supervisor</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Technical Director</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Packaging supervisor and manager</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Legal and Regulatory Officer</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/part3_FCQI_04.jpg" alt="Contents of PCAI training">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Contents of PCQI training</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management concept training for FSMA response</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food safety plan overview</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Operating GMP and other prerequisite programs</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Biological food safety hazards</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food safety hazards in terms of chemical, physical and economic aspects.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Pre-stage for the development of a food safety plan.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Support for the preparation of the Food Safety Plan.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hazard Analysis and Determination of Preventive Control Points-Outline</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hazard analysis and determination of preventive control points</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Preventive management of food allergy support</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hygiene Prevention Management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Supply Chain Prevention Management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Verification and validation procedure</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Record storage and management</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Recovery plan</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Overview of the law (GMP, risk analysis, risk-based preventive management)</li>
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
        </article><!--+++++ 컨텐츠 03 종료 +++++-->
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>