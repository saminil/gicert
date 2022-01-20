<?php
	include_once('./_common.php');
$g5['title'] = 'Testing';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#e22551 }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 33.3% }
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }
    
    .point_b1 { font-size: 1.6em; font-weight: 600; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 600; margin-bottom: 15px }/* 본문의 강조부분 css */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(226,37,81,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #e22551; display: inline-block; border: 2px solid #e22551; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    
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
            
            $("#con5-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            
            $(target).addClass('on'); // 선택된 탭 버튼에 활성화 클래스인 on 추가
        });
    })
</script>
<!-- 탭 메뉴 구현 끝 -->
<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
	<div class="tab_menu tab01">
	    <h2>Testing Service</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Medical Device</a></li>
			<li><a href="javascript:;">Machinery</a></li>
			<li><a href="javascript:;">Electrical Testing</a></li>
			<li><a href="javascript:;">Building Materials</a></li>
			<li><a href="javascript:;">Biological Test</a></li>
			<li><a href="javascript:;">Chemical Analysis</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="sub_tit">Test</h1>
                <h2 class="sub_tit2 fc_pointer">Medical Device Test</h2>
                <p class="sub_txt">
                    All medical devices must be taken for electrical safety test. Although many designers/ manufacturers are apt to mistakenly believe that first-class items, or products with low risk ratings, do not require permission and therefore do not have to comply with the electrical safety regulations, they must also meet the electrical safety requirements.<br><br>
                    Most users think it's a good idea to make it mandatory to electrical safety test before launching the product. The standard for that electrical safety test is IEC 60601-1, which we know very well. Regulators in all countries around the world now require demonstrate suitability by the third edition of the IEC 60601-1 standard.<br><br>
                    The important point is that, by adding the concept of risk in the third edition, it is no longer a test that can be found to be suitable by simply performing the test method as in the past.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/MD_01.jpg" alt="IEC 60601-1 Safety Test">
                            </dt>
                            <dd>
                                <h3 class="point_b1">IEC 60601-1 Safety Test</h3>
                                <div class="con_txt">
                                    <ul>
                                        Electrical medical device test is based on product safety requirements to demonstrate basic safety and essential performance, with equipment complying with IEC/EN 60601 safety standards for electronic medical device product approval.<br><br>
                                        All medical devices typically require approved laboratory test results and are controlled by strict local approval procedures. With respect to electrical medical devices, these requirements should be documented internationally in accordance with the criteria of IEC 60601 standard specifications.<br><br>
                                        Now, IEC 60601-1 3rd edition is the basis for the approval process of electrical medical devices in most regulatory systems around the world. Due to the same requirements as the European Union's EN 60601 standard specification, IEC define a suitability about the Medical Device Directive (MDD) 93/42/EEC.<br><br>
                                        Our testing laboratory provides generally accepted testing methods, test limits, and test levels for the evaluation of electrical medical devices in European and international standards, and provides all product safety tests according to the 60601-1 series of standards specification.
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/MD_02.jpg" alt="GIC’s Competency">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC’s Competency</h3>
                                <div class="con_txt">
                                    <ul>
                                        GIC cooperates with IGC LAB to provide electrical medical device testing services. IGC LAB performs a test according to the IEC/EN 60601 safety standard for electrical medical devices and can issue test reports to IEC international standards that can be used to obtain product safety certification for electrical medical devices.
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   

        <article><!--+++++ 컨텐츠 02 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">Test</h1>
                <h2 class="sub_tit2 fc_pointer">Machinery Safety</h2>
                <p class="sub_txt">
                    Many types of products require mechanical safety testing to be exported or imported to other major markets such as the European Union, the United States, etc. Mechanical breakdowns can cause injury or death to the user, so the importance has been highlighted for ensuring the user's safety.<br><br>
                    Machinery manufacturers shall conduct a risk assessment together to determine the health and safety requirements applicable to the machinery. It is important to reduce risk and eliminate risk factors through protective and preventive measures.<br><br>
                    Mechanical safety tests include an assessment of the shape and design of the product, whether it could cause injury to the user, and whether the user's body parts have been trapped, tightened or dislodged.<br><br>
                    It also structurally evaluates the strength and durability of the product in its general use environment, and includes testing of specific product characteristics. Safety testing should also be included for key components such as screws and hinges used in finished products.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/machine_01.jpg" alt="CE Machinery Directive(2006/42/EEC)">
                            </dt>
                            <dd>
                                <h3 class="point_b1">CE Machinery Directive(2006/42/EEC)</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>Composition of CE Machinery Directive (2006/42/EEC)</span>
                                                <li>
                                                    <dl>
                                                        <dt>Guidelines for preparation and general explanations and caution Text: A provision for the application of guidelines, legal obligations or authority to the Member Countries;</dt><br>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Annex I : Essential Health and Safety Requirements for Design and Manufacturing</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Annex II : Matters concerning the Declaration of Conformity</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Annex III : Matters concerning CE – Marking</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Annex IV : List of machinery that must be taken in the EU type test by the Notified Body</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Annex V : Declaration of Conformity and Technical Wave</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Annex VI : EU Type Test</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Annex VII : Notified Body Criteria</dd>
                                                    </dl>
                                                    
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    <ul>
                                        <li>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>The key requirement of CE Machinery Directive (2006/42/EEC)</span>
                                                <li>
                                                    <p>
                                                        The CE Machinery Directive (2006/42/EEC) documents whether the machine is being used safely and correctly warns the user if any remaining risks remain, and the documentation requirements that the manufacturer must comply with are in the essential health and safety requirements of Annex I of the MD.
                                                    </p>
                                                    <div class="con_img">
                                                        <img src="./image/machine_02.jpg" alt="The key requirement of CE Machinery Directive">
                                                    </div>
                                                    <dl>
                                                        <dt>Required requirements include : </dt><br>
                                                        <dd>1. <span class="nbsp">&nbsp;</span>Principles on safety, design to facilitate handling, ergonomic, control system, protection by mechanical hazards, electrical and other energy temperatures, other risks such as fire and explosion, and noise emissions, common to all types of machines, vibration, radiation and hazardous materials, maintenance, cleaning, and information display and warning.</dd>
                                                        <dd>2. <span class="nbsp">&nbsp;</span>Requirements applicable to certain classes of machinery, such as food, cosmetics, and medicines</dd>
                                                        <dd>3. <span class="nbsp">&nbsp;</span>Requirements for offsetting the risk of machine mobility</dd>
                                                        <dd>4. <span class="nbsp">&nbsp;</span>Requirements to offset the risk of lift operations</dd>
                                                        <dd>5. <span class="nbsp">&nbsp;</span>Requirements for underground work machines</dd>
                                                        <dd>6. <span class="nbsp">&nbsp;</span>Requirements for mechanical lift personnel</dd>
                                                    </dl><br><br>
                                                    <dl>
                                                        <dt>The required preparation documents are as follows : </dt><br>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Manual: User's Manual, Service Manual (Experts only)</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Parts List (Copy of Certificate for Approval Parts: CoC, AoC, DoC, Type Approval Certificates) </dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Catalogs: Finished Products and Major Parts</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Drawings: Products, Assembly Plots, and Major Parts Assembly Plots</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Hydraulic, pneumatic, and Data related electric.</dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    <ul>
                                        <li>
                                            <ul><span class="point_b2">3. <span class="nbsp">&nbsp;</span>Certification procedure</span>
                                                <li>
                                                    <dl>
                                                        <dt>There are four ways as follows : </dt><br>
                                                        <dd>
                                                            1. <span class="nbsp">&nbsp;</span>High-risk machinery described in Annex 4.<br>
                                                            Accreditation through the Certified Body (NB)
                                                        </dd>
                                                        <dd>
                                                            2. <span class="nbsp">&nbsp;</span>General machinery other than Annex 4 (Annex II A)<br>
                                                            Acquired by self-compliance declaration (affixed a CE mark as proof of conformity with the finished product)
                                                        </dd>
                                                        <dd>
                                                            3. <span class="nbsp">&nbsp;</span>Declaration of self-compliance with respect to Machine Parts (Annex II B)<br>
                                                            Acquired by self-compliance declaration (affixed a CE mark as proof of conformity with the finished product)
                                                        </dd>
                                                        <dd>
                                                            4. <span class="nbsp">&nbsp;</span>Declaration of self-compliance with safety components (Annex II C)<br>
                                                            Acquired by self-compliance declaration (affixed a CE mark as proof of conformity with the finished product)
                                                        </dd><br>
                                                        <dd>
                                                            Note: In the case of B) and C), by writing a self-compliance declaration and storing the relevant technical documents to declare compliance with the specification, but CE marks cannot be affixed to the product or packaging.
                                                        </dd>
                                                    </dl>
                                                </li>
                                            </ul>
                                        </li>
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
                                <h3 class="point_b1">Introduction of IGC’s Testing Laboratory</h3>
                                <div class="sub_txt">
                                    GIC is cooperated with IGC LAB.  IGC LAB is a testing laboratories who are ISO/IEC 17025-accredited by the U.S. accreditation body, IAS, and can issue a machinery test reports.<br><br>
                                    <span class="point_b2"><a href="http://info@igcert.org" class="link">&#10020; Contact : info@igcert.org</a></span>
                                </div>
                                <div class="con_txt">
                                    <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>IGC's Testing laboratories have the following equipment : </span>
                                        <li>
                                            <dl>
                                                <dt class="fc_pointer">1. <span class="nbsp">&nbsp;</span>All-purpose material tester UTM</dt>
                                                <dd>
                                                    Most commonly used for static testing in tensile or compression mode, also known as push-pull tester. Tensile, compression, shear, flexion, scale off, tear, cycle, and bending tests can be performed.
                                                    <ul>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Measurement items: tensile, compression, banding strength, flexural strength, breaking strength, etc.</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Capacity (N): 10KN (1 ton)</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Resolution: 1/100,000</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Test speed: 1~500mm/min</li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <dl>
                                                <dt class="fc_pointer">2. <span class="nbsp">&nbsp;</span>Thermal Shock Tester</dt>
                                                <dd>
                                                    The thermal shock test is a test that assesses how the product is affected by sudden temperature changes. The test starts at room temperature and repeats the prescribed number of cycles, which are exposed for a relatively short period of time at very low (or high) temperatures and very high (or low) temperatures before returning to room temperature.<br><br>
                                                    After finishing the last cycle, perform a visual inspection on Case, Lead/Terminal, etc. or check the normal condition of marking to magnify. If it is difficult to verify or if damage is found in Case, Terminal, etc., it is judged as Failure.
                                                    <ul>
                                                        <li>
                                                            <dl>
                                                                <dt>&#10020; <span class="nbsp">&nbsp;</span>Equipment specification</dt>
                                                                <dd><span class="nbsp">&nbsp;</span>- <span class="nbsp">&nbsp;</span>Sample Basket: 350x350x350mm</dd>
                                                                <dd><span class="nbsp">&nbsp;</span>- <span class="nbsp">&nbsp;</span>Temp Tange: -40℃ ~ 125℃</dd>
                                                            </dl>
                                                        </li>
                                                        <li><dl>
                                                                <dt>&#10020; <span class="nbsp">&nbsp;</span>Application specification</dt>
                                                                <dd><span class="nbsp">&nbsp;</span>- <span class="nbsp">&nbsp;</span>IEC 60068 2-14 Test N: Change of temperature</dd>
                                                            </dl>
                                                        </li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                        <li>
                                            <div class="con_img">
                                                <img src="./image/machine_03.jpg" alt="Thermo-hygrostat">
                                            </div>
                                            <dl>
                                                <dt class="fc_pointer">3. <span class="nbsp">&nbsp;</span>Thermo-hygrostat</dt>
                                                <dd>
                                                    Equipment that can check durability of parts and equipment in high temperature and high humidity environment.
                                                    <ul>
                                                        <li>
                                                            <dl>
                                                                <dt>&#10020; <span class="nbsp">&nbsp;</span>Thermo-hygrostat specifications</dt>
                                                                <dd><span class="nbsp">&nbsp;</span>- <span class="nbsp">&nbsp;</span>Temperature: -40°C to 150°C</dd>
                                                                <dd><span class="nbsp">&nbsp;</span>- <span class="nbsp">&nbsp;</span>Humidity: 30 to 98%</dd>
                                                                <dd><span class="nbsp">&nbsp;</span>- <span class="nbsp">&nbsp;</span>Chamber Size: 500x500x500mm</dd>
                                                            </dl>
                                                        </li>
                                                        <li><dl>
                                                                <dt>&#10020; <span class="nbsp">&nbsp;</span>Application specification</dt>
                                                                <dd><span class="nbsp">&nbsp;</span>- <span class="nbsp">&nbsp;</span>IEC 60068 2-78 (Damp Heat Test)</dd>
                                                            </dl>
                                                        </li>
                                                    </ul>
                                                </dd>
                                            </dl>
                                        </li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">Test</h1>
                <h2 class="sub_tit2 fc_pointer">Electrical Safety</h2>
                <p class="sub_txt">
                    Demonstrating the safety of products that use electricity is essential for entering all markets around the world.<br><br>
                    To enter one of the world's largest markets in Europe, electric/electronic manufacturers must demonstrate the safety of their products in order to enter the market.<br><br>
                    Many electrical and electronic products imported and sold in Europe must comply with the requirements of the Low Voltage Directive.<br><br>
                    The CE marking product is deemed to comply with the requirements of the Low Voltage Directive and other applicable Directive (EMC Directives, etc.) and is legally accessible to the EC Member Market.
                </p>
            </div>
            <div class="con_img">
                <img src="./image/elec_01.jpg" alt="Electrical Safety">
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/elec_02.jpg" alt="What is Low Voltage Directive (LVD)?">
                            </dt>
                            <dd>
                                <h3 class="point_b1">What is Low Voltage Directive (LVD)?</h3>
                                <div class="con_txt">
                                    <ul>
                                        Low Voltage Directive (LVD) is intended for electrical equipment designed and used as voltage specifications between 50-1000 volts for AC and 75-1500 volts for DC.<br><br>
                                        As with most other EU Directives, the Low Voltage Directive provides a broad set of goals for electrical safety (required requirements) with detailed technical specification sbe specified in published technical standards. Manufacturers can test the key requirements of the instructions and compliance with the technical specifications of the relevant standards, demonstrate compliance with the declaration of conformity, and attach CE marks to the product.<br><br>
                                        Safety standards generally refer to Electrical Safety, which are considered as application requirements for verifying and ensuring safety by testing and inspecting hazards<br><br>
                                        in the field of electrical product certification. This is to prevent human and property injury or loss from hazards (Hazard) that may arise in predictable or unforeseen circumstances. Electrical parts used in certain categories of electrical and finished products, such as medical devices, are excluded from the scope of the Low Voltage Directive.<br><br>
                                        A revised version of the Low Voltage Directive 2014/35/EU was issued in February 2014, and has been applied on electrical products since April 2016 by force. IGC’s Testing Laboratories are issuing test reports in accordance with 2014/35/EU guidelines.
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/elec_03.jpg" alt="Electromagnetic Compatibility Directive">
                            </dt>
                            <dd>
                                <h3 class="point_b1">What is Electromagnetic Compatibility Directive (EMC)?</h3>
                                <div class="con_txt">
                                    <ul>
                                        The Electromagnetic Compatibility Directive (EMC) is a guideline for evaluating the electromagnetic compatibility of electronic devices and certifying suitability by testing whether electromagnetic obstacles are appropriate level object to equipment that can generate electromagnetic waves through immunity tests about electromagnetic interference from the outside.<br><br>
                                        As the industry advances, the use of Electric electron equipment has increased dramatically, which has increased the likelihood of malfunctioning caused by electromagnetic waves and problem with function of system as devices are used in limited space. As a result, it has become essential to test whether the device complies with the acceptable range of electromagnetic interference to the surrounding environment and is not affected by electromagnetic waves by other products.
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
                <h1 class="sub_tit">Test</h1>
                <h2 class="sub_tit2 fc_pointer">Building Materials Certification</h2>
                <p class="sub_txt">
                    In the highly competitive building materials industry, manufacturers and suppliers must balance the quality and price of their products, comply with domestic and international building standards and laws to avoid legal risks and reduce construction air to prevent project delays at the same time.
                </p>
            </div>
            <div class="con_img">
                <img src="./image/building_materials_01.jpg" alt="Building Materials Certification">
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/building_materials_02.jpg" alt="building material certification test">
                            </dt>
                            <dd>
                                <h3 class="point_b1">What is the building material certification test?</h3>
                                <div class="con_txt">
                                    <ul>
                                        Under CPR (Construction products regulation (EU) No305/2013), building materials manufacturers must apply CE marks to products applied to European Standard (EN) or European Technical Assessment (ETA).<br><br>
                                        Building materials certification test means any product that constitutes a permanent part of a building, including a building and civil engineering work.<br><br>
                                        Building materials include ventilation structural facilities, plastic flue, ceiling radiant heating and cooling panels, doors, window-related products and insulation materials, flooring, cement, mortar, tile, adhesives, revolving doors, fire detector, docks, valves and caps, pipes, water leakage prevention facilities, tanks, wood, aggregates and fillings, structural bearings, geotextile, etc. building and public works purposes.
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/building_materials_03.jpg" alt="Types of testing for building materials certification">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Types of testing for building materials certification</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Wall test and certification</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Roof body and walking deck test</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Testing and certification of internal surface materials</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Plumbing product test</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Weatherproof and sealant tests</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Window and door test</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/building_materials_04.jpg" alt="Importance of building materials certification">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Importance of building materials certification</h3>
                                <div class="con_txt">
                                    <ul>
                                        All building products within the European Economic Zone (EEA) must comply with EU building material regulations. The Act stipulates that all products traded or sold in Europe shall attach a CE mark when the product has a European harmonization standard.<br><br>
                                        This CE mark does not necessarily mean that the product is suitable for all end uses, but indicates that the product is consistent with the Performance Declaration (DoP) when manufactured by the manufacturer.<br><br>
                                        Also, architectural products with CE marks can be traded throughout the EEA.
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
                    <li class="on"><a data-slide-index="0">Food Biological Test</a></li>
                    <li><a data-slide-index="1">Sanitation Test</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con5-1" class="roll roll01 on"><!-- 4depth 컨텐츠 05-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Biological test</h1>
                        <h2 class="sub_tit2 fc_pointer">Food Biological Test</h2>
                        <p class="sub_txt">
                            Because the FDA's food safety requirements vary from food to food, manufacturers should carefully identify the FDA's requirements and analyze hazards. To analyze these hazards, you need to go through the steps to identify biological, chemical, and physical hazards.
                        </p>
                    </div>
                    <div class="con_img">
                        <img src="./image/bio_test_01.jpg" alt="Food Biological Test">
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/bio_test_02.jpg" alt="ISO/IEC 17025 accreditation testing body">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 17025 accreditation testing body</h3>
                                        <p class="sub_txt">
                                            IAS, a U.S. testing laboratory accreditation body, has published a Guideline that refers to the requirements for food testing laboratory accreditation, which requests the use of U.S. national standards and international authorized standards for the testing standards used to accredited and obtain an accreditation in accordance with ISO/IEC 17025. AOAC, BAM, etc. are used for this.<br><br>
                                            GIC cooperates with IGC LAB. IGC LAB has achieved ISO/IEC 17025 accreditation based on AOAC and BAM, providing a more reliable testing service.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Test item</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>E. coli</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>E. coli / Total Coliform Counts</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Salmonella Sp.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Listeria Sp. / Listeria monocytogenes</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Staphylococcus aureus</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Aerobic Plate Counts</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Yeast and Mold</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Bacillus cereus</li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dd class="con_img">
                                        <img src="./image/bio_test_03.jpg" alt="Test item">
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con5-2" class="roll roll02"><!-- 4depth 컨텐츠 05-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Biological test</h1>
                        <h2 class="sub_tit2 fc_pointer">Sanitation Test</h2>
                        <p class="sub_txt">
                            Foreign companies exporting food to the United States must demonstrate that they operate food safety systems in accordance with the requirements of the FDA Food Safety Modernization Act (FSMA). This includes the requirement that 'Food production facilities that wish to be FSMA certified should conduct on-site sanitary tests at FDA or ISO/IEC 17025 accredited testing laboratories'.<br><br>
                            The U.S. FDA inspection team checks the methods, microbiological inspection methods, frequency, etc. of the environment swab test when conducting due diligence, so exporters should conduct sanitary tests. Through sanitary tests provided by IGC LAB, an ISO/IEC 17025 accreditation testing laboratory, can be prepared for this and demonstrate compliance with U.S. FDA regulations.
                        </p>
                    </div>
                    <div class="con_img">
                        <img src="./image/sani_test_01.jpg" alt="Sanitation Test">
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/sani_test_02.jpg" alt="Importance of Sanitary test">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Importance of Sanitary test</h3>
                                        <div class="con_txt">
                                            <ul>
                                                The Food Modern Eye Telephone Act (FSMA) in force in earnest, which was enacted in the U.S. in 2011, emphasizes the management of biological hazards especially, among those that affect food. FSMA applies HARPC (HARPC) to all food manufacturers that to be subject.<br><br>
                                                To identify and prevent potential risks to food supply, the HARPC takes a different approach from the existing GMP and HACCP, particularly highlighting the management of biological hazards in the food manufacturing process.<br><br>
                                                In addition, FSMA preventive management requirements stipulate allergy-causing substances management and sanitary control, which requires thorough preparation for sanitary testing.
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/sani_test_03.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC cooperates with IGC LAB. Through this cooperation, GIC can provide a variety of services to help customers enter into overseas markets.<br><br>
                                                A report issued by IGC LAB is a report of a testing body accredited from IAS, an accreditation body for which ILAC and MRA are established, and may be used anywhere in the world.
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
   
        <article><!--+++++ 컨텐츠 06 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">Chemical analysis</h1>
                <h2 class="sub_tit2 fc_pointer">Food Nutrition Analysis</h2>
                <p class="sub_txt">
                    In May 2016, the U.S. FDA published its final federal bill, "Food Labeling: Revision of the Nutrition and Supplement Facts Labels," which amended the labeling rule to mark updated nutritional information in the nutrition components tables of food and dietary supplements to help consumer’s eating habits.<br><br>
                    Both food and dietary supplement manufacturers that are required to labeling nutrition components tables in their products are subject to obey the all relevant regulations.<br><br>
                    In case of nutrition analysis tests during food testing for enter into the US market, require the use of the AOAC method if there is an AOAC verification method.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/chemical_01.jpg" alt="nutritive components / heavy metals test">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Test item – nutritive components / heavy metals test</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Calories / Calories from fat / Carbohydrates / Other carbohydrates</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Fat (crude) / Total fat-sum of fatty acids</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Dietary Fiber (include soluble, insoluble fiber)</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Sugar – Total</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Added sugar</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Cholesterol</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Moisture</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Protein (crude)</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin A IU</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin-B1 Thiamin</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin-B2 Riboflavin</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin-B3 Niacin</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin-B5 Pantothenic Acid</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin-B6</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin C</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin D IU</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Vitamin E IU</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Total fat-sum of fatty acids</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Calcium / Copper / Iron / Magnesium / Phosphorus / Potassium / sodium / zinc</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Selenium / Cadmium / Arsenic / Lead</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/chemical_02.jpg" alt="U.S. Food nutritive components Indication Regulations">
                            </dt>
                            <dd>
                                <h3 class="point_b1">U.S. Food nutritive components Indication Regulations</h3>
                                <p class="sub_txt">
                                    The nutrition analysis table form has been changed newly in 23 years since 1993.<br><br>
                                    Mandatory application about food manufacturers will begin on July 26, 2018, but companies with annual sales of less than $10 million will be mandatory applied from one year later.<br><br>
                                    The most notable feature of the newly changed nutrition analysis table form is the large and bold mark of calorie content, serving size, and how many servings it is packed so that consumers can see it well.<br><br>
                                    Besides, the added sugar content in addition to natural sugars and account for the percentage of this ingredient is recommended daily calorie intake (2,000 calories) are specified separately.<br><br>
                                    The FDA found it difficult to maintain the daily intake acceptable standards, 2,000 calories or less if the calories from the extra sugar intake exceed 10% of the total calories because results of studies show that about 13% of the calories average daily intake of Americans is from extra sugar.<br><br>
                                    On the other hand, the percentage of fat components content displayed highlighting in the label has decreased, active reflecting recent results of studies that show that calories and sugar intake are the main causes of chronic diseases such as obesity and heart disease rather than fat intake itself now. Also, the 'calories from fat' item was excluded and required to the total fat, saturated fat, and trans-fat were marked separately as now.<br><br>
                                    Moreover, instead of marked the vitamin D and Potassium, which increase the risk of occurring chronic disease in new nutritive components table if lacking, marked the vitamin A and vitamin C content is eliminated. The FDA explained that it is rare for Americans to lack vitamin A and C, while lacking intake of vitamin D and potassium. However, manufacturers can autonomously display vitamin A and C contents, and calcium and iron contents are displayed as they are now.<br><br>
                                    Nutritive components table regulation applies to almost all packaged foods, but excludes some meat and poultry under the jurisdiction of the Department of Agriculture.
                                </p>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 06 종료 +++++--> 
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>