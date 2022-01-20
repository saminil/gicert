<?php
	include_once('./_common.php');
$g5['title'] = 'Product Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#f0584a }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 33.3% }
    .tab_menu.tab02 ul li:nth-child(5) a { border-right: 1px solid rgba(0,0,0,0.5) }
    
    /* 페이지수가 많을 경우(5개 이상일 경우) 탭메뉴(4depth)의 css */
    .tab_menu.tab02 .over { display: inline-block;width: 100% }
    .tab_menu.tab02 .over li { float: left;width: calc(100%/5 + 1px); margin: -1px 0 0 -1px}
    .tab_menu.tab02 .over li.on a { border-bottom: 1px solid #333 }
    .tab_menu.tab02 ul li a.over { font-size: 0.75rem;padding: 11px 0 }
    
    /* HALAL인증(컨텐츠 08) 페이지에 대한 css */
    .circle_li{width: 100%; margin: 0 auto}
    .circle_box{float: left;width: 20%;margin: 0 auto}
    .circle_txt{float: left;width: 80%;margin: 0 auto;box-shadow: 0 4px 6px 0 rgb(0 0 0 / 25%);padding: 20px; margin-bottom: 30px;position: relative}
    .circle_txt::before{content: '';width: 20px;height: 20px; background:url(../service/image/con_sec_arrow.png)no-repeat;position: absolute;}
    .icon{display: block;width: 60px;height: 60px;line-height: 55px;text-align: center;font-size: 1.6em;border-radius: 50%;color: #fff;position: relative;margin-left: 60px;margin-top: 20px}
    
    .con_sec li:nth-child(1) .icon{background: #005bab}
    .con_sec li:nth-child(2) .icon{background: #36b1d4}
    .con_sec li:nth-child(3) .icon{background: #f48025}
    .con_sec li:nth-child(4) .icon{background: #005bab}
    .con_sec li:nth-child(5) .icon{background: #36b1d4}
    .con_sec li:nth-child(6) .icon{background: #005bab}
    .con_sec li:nth-child(7) .icon{background: #36b1d4}
    .con_sec li:nth-child(8) .icon{background: #36b1d4}
    
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }
    
    .point_b1 { font-size: 1.6em; font-weight: 600; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 600; margin-bottom: 15px }/* 본문의 강조부분 css */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(240,88,74,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #f0584a; display: inline-block; border: 2px solid #f0584a; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    .txt_arrow { display: inline-block;width:4px; height: 0.85rem;background: #222 }
    
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
    
    
    @media screen and (max-width:1024px) {
        .icon { margin-left: 30px }
        .tab_menu.tab02 ul li a.over { padding: 2px 0 }
    }

	@media screen and (max-width:768px) {		
        .con_img img { width: 60% }
        .con_txt { width: 100% }
        .page_con { width: 100% }
        .con_txt ul { width: 100% }
        .tab_menu.tab02 ul li a.over { font-size: 0.7rem; padding: 4px 0 }
        
	}
    
    @media screen and (max-width:640px) {	
        .con_img img { width: 100% }
        .icon { margin-left: 0 }
        
        /* ----- 서브 전체페이지 폰트사이즈 조절 시작 20210706 전산: 이혜정 ----- */
        .tab_menu.tab02 .over li a { font-size: 0.75em }
        .tab_menu.tab02 ul li a.over { font-size: 0.65rem; }
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
        .icon { width: 50px;height: 50px;line-height: 45px;text-align: center;font-size: 1.4em;margin-top: 30px }
        
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
            $("#con4-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con5-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con6-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con7-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con9-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            
            $(target).addClass('on'); // 선택된 탭 버튼에 활성화 클래스인 on 추가
        });
    })
</script>
<!-- 탭 메뉴 구현 끝 -->

<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
	<div class="tab_menu tab01">
	    <h2>Product Certification Services</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Europe</a></li>
			<li><a href="javascript:;">Eurasia</a></li>
			<li><a href="javascript:;">Russia</a></li>
			<li><a href="javascript:;">America</a></li>
			<li><a href="javascript:;">China</a></li>
			<li><a href="javascript:;">Southeast</a></li>
			<li><a href="javascript:;">Vegan and Non-GMO</a></li>
			<li><a href="javascript:;">HALAL</a></li>
			<li><a href="javascript:;">Cosmetic</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block"><!--+++++ 컨텐츠 01 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul class="over">
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">CE MDD</a></li>
                    <li><a data-slide-index="1">CE MDR</a></li>
                    <li><a data-slide-index="2">Clinical Evaluation</a></li>
                    <li><a data-slide-index="3">CE IVD/IVDR</a></li>
                    <li><a data-slide-index="4">CE LVD/EMC</a></li>
                    <li><a data-slide-index="5">CE Machinery</a></li>
                    <li><a data-slide-index="6">CE PED</a></li>
                    <li><a data-slide-index="7">CE SPVD</a></li>
                    <li><a data-slide-index="8">Hot-water Boiler</a></li>
                    <li><a data-slide-index="9">Gas Appliance</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con1-1" class="roll roll01 on"><!-- 4depth 컨텐츠 01-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">CE MDD | Medical Device</h2>
                        <p class="sub_txt">
                            The medical Device Directive is intended to harmonize the legislation on medical devices within the European Union. Legally, in order to sell Medical devices to the European Market, manufacturers must comply with the requirements of the Medical Device Directive. The applicant’s product and quality system must be evaluated, and the manufacturer must affix the CE mark before selling the products.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ce_mdd_01.jpg" alt="Applicable Items">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Applicable Items</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The Medical Device Directive is applicable to devices according to the definition of ‘medical device’. A medical device is a machine, device, equipment, material, or other article used alone or in combination that contains software intended for human use as intended by the manufacturer.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Is applicable to diagnosis, prevention, monitoring, treatment or alleviation, diagnosis, monitoring, treatment of disease or alleviation or compensation for injury or disability, investigation, replacement or modification of anatomical or physiological processes, control or concepts. It also refers to something that does not achieve its intended primary action in or on the human body by pharmacological, immunological or metabolic means, but can help its function by such means.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ce_mdd_02.jpg" alt="Qualification Assessment Process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Qualification Assessment Process</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>classification</span>
                                                <li>
                                                    <span style="display:block">Annex IX of the Medical Device Directive(93/42/EEC) provides 18 rules for classifying medical devices. Under these rules, medical devices are classified according to their intended purpose.</span>
                                                    <ul>
                                                        <li>1. <span class="nbsp">&nbsp;</span>Rule 1 ~ 4 : Non-invasive device</li>
                                                        <li>2. <span class="nbsp">&nbsp;</span>Rule 5 ~ 8 : Invasive device</li>
                                                        <li>3. <span class="nbsp">&nbsp;</span>Rule 9 ~ 12 : Active device</li>
                                                        <li>4. <span class="nbsp">&nbsp;</span>Rule 13 ~ 18 : Special Law</li>
                                                    </ul>
                                                    <span style="display:block">Medical device risk assessment to patients and users are identified and classified according to the above 18 rules. The eligibility assessment process is based on the identified risk values. If the risk value is higher, the eligibility requirements get more stringent.</span><br>
                                                    <span style="display:block">Class I medical devices follow the evaluation procedures in Annex VII.</span>
                                                </li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Procedure of Class I Including measurement function</span>
                                                <li>
                                                    <span style="display:block">Manufacturer’s option : </span>
                                                    <ul>
                                                        <li>1. <span class="nbsp">&nbsp;</span>Qualification and technological documentation of competence to meet metrological requirements for each or statistically selected ample in accordance with Annex VII section 3 and Annex IV</li>
                                                        <li>2. <span class="nbsp">&nbsp;</span>Evaluation and technical documentation of product quality system in accordance with Annex VII section 3 and Annex V which is related to statistical requirements.</li>
                                                        <li>3. <span class="nbsp">&nbsp;</span>Quality assessment and technical documentation of medical devices in accordance with Annex VII section 3 and Annex VI associated with statistical requirements.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Procedure of Class I (including sterilization)</span>
                                                <li>
                                                    <span style="display:block">Manufacturer’s option : </span>
                                                    <ul>
                                                        <li>1. <span class="nbsp">&nbsp;</span>Evaluation and technical documentation of product quality systems in accordance with Annex VII section 3 and annex V associated with sterile conditions.</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Procedure of Class IIa Medical device</span>
                                                <li>
                                                    <span style="display:block">Manufacturer’s option : </span>
                                                    <ul>
                                                        <li>1. <span class="nbsp">&nbsp;</span>Qualification and technical documentation of each or statistically selected sample according to Annex VII Section 3 and Annex IV Section 8.</li>
                                                        <li>2. <span class="nbsp">&nbsp;</span>Evaluation and technical documentation of the product quality system in accordance with Annex VII section 3 and Annex V section 6(examined at the manufacturer’s site).</li>
                                                        <li>3. <span class="nbsp">&nbsp;</span>Evaluation and technical documentation of medical device quality in accordance with Annex VII Section 3 and Annex VI Section 6(examined at on-site audit).</li>
                                                        <li>4. <span class="nbsp">&nbsp;</span>Evaluation and technical documentation where the overall quality system has been audited at the manufacturer’s site in accordance with Annex VII section3 and Annex II (Development evaluation excluded according to section 4)</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Procedure of Class IIb Medical Device</span>
                                                <li>
                                                    <span style="display:block">Manufacturer’s option : </span>
                                                    <ul>
                                                        <li>1. <span class="nbsp">&nbsp;</span>Qualification, type examination and technical documentation for each manufactured product in accordance to Annex III Section 3: Samples selected statistically(randomly) according to Annex IV or validated by Section 5.</li>
                                                        <li>2. <span class="nbsp">&nbsp;</span>Evaluation, type examination and technical documentation of manufacturing quality system in accordance with Annex III Section 3 and Annex V(examined at onsite audit)</li>
                                                        <li>3. <span class="nbsp">&nbsp;</span>Technical documentation of evaluation and type examination of medical device in accordance with Annex III Section 3 and Annex VI(examined at manufacturer’s onsite audit)</li>
                                                        <li>4. <span class="nbsp">&nbsp;</span>Technical documentation of the evaluation of all quality systems that have been audited on site of the manufacturer in accordance with Annex II Section 3.2 and Annex II (excluding development evaluation by Section 4)</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                    <dl>
                                        <dt class="con_img">
                                            <img src="./image/ISO45001_01.jpg" alt="Conformity assessment procedure">
                                            <span class="point_b2" style="text-align: center">Conformity assessment procedure</span>
                                        </dt>
                                        <dd>
                                            <div class="con_txt">
                                                <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Procedure of Class III Medical device</span>
                                                    <li>
                                                        <span style="display:block">Manufacturer’s option : </span>
                                                        <ul>
                                                            <li>1. <span class="nbsp">&nbsp;</span>Evaluation of all quality systems according to Annex II Section 3.2 and Annex II(examined at the manufacturer’s on site audit) and technical documentation of the description of the development according to Section 4.2.</li>
                                                            <li>2. <span class="nbsp">&nbsp;</span>Annex III Section 3 and Qualification, Type examination and technical documentation for each manufactured device: Verification shall be made by Section 5 for statistically (randomly) selected samples in accordance with Annex IV Section 6.</li>
                                                            <li>3. <span class="nbsp">&nbsp;</span>Technical documentation of Evaluation, type examination of the product quality system(examined at the manufacturer’s onsite audit) in accordance with Annex III Section 3 and Annex V Section 3.2</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </dd>
                                    </dl>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ce_mdd_03.jpg" alt="End of the MDD">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">End of the MDD</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>The European Medical Device Directive MDD(93/42/EEC) will be completely replaced by MDR from 26 May 2020. After that, it is not possible to apply for CE certification to MDD, and the new medical device must meet the MDR (2017/745/EU) requirements.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>However, if the MDD conformity assessment has been completed and the certificate has been issued before the time of compulsory application, the product can be shipped(exported) to European jurisdiction with the validity of the certificate recognized up to May 27, 2024.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>You may check the above materials officially issued by the European Authority.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ce_mdd_04.jpg" alt="CE / MDD Service">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">CE / MDD Service</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>GIC has a partnership with IGC. IGC is currently working on a CE/MDD project in cooperation with 3 Notified Body (referred to as NB) organizations.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Because of this, you can apply without exception of almost all scopes from Class I to Class III.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>We will not spare any support to obtain your CE/MDD certification based on the experience accumulated through numerous projects.</li>
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
                        <h1 class="sub_tit">Information of European product certification </h1>
                        <h2 class="sub_tit2 fc_pointer">CE MDR | Medical Device</h2>
                        <p class="sub_txt">
                            <span style="display: block;font-weight: 600">What is CE Marking ?</span><br>
                            The medical Device Regulation is intended to harmonize the legislation on medical devices within the European Union. Legally, in order to sell Medical devices to the European Market, manufacturers must comply with the requirements of the Medical Device Regulation(MDR) after enforcement in 2020. The applicant’s product and quality system must be evaluated, and the manufacturer must affix the CE mark before selling the products.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ce_mdr_01.jpg" alt="MDR overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">MDR overview</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Applicable standards : Regulation (EU) 2017/745 of the European Parliament and of the Council of 5 Ap</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Legal content : Council Directive 93/42/EEC (MDD) + Council Directive 90/385/EEC (AIMD)</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Effective Date : May 25, 2017</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Compulsory application date : May 26, 2020, after the MDR takes effect a grace period of 3 years</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Purpose : To create a safer, more effective and innovative medical device market in Europe.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>MDD certificate final validity date: May 26, 2024 (sale until May 27, 2025)</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Changed from Directive to Regulation. Regulation change more frequently than Directives and are more compulsion.</li>
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
                                        <h3 class="point_b1">Major Revision Contents</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Strong control of health authorities over the Notified Body(NB): Reinforcement of sub-contractor management</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Introduction and application Common Specification for each product in addition to the harmonized standard.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Strengthening the responsibility of economic operators [Manufacturer, Importer, Distributor, Authorized Representative]</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>NB’s strong control over manufacturers</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Expansion of clinical evaluation of Pre/Post Market and management of all clinical investigations, and reinforcement of market surveillance (Vigilance &amp; PMS) after marketing by manufacturers</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Establishment of computer system based on EUDAMED(European database on medical devices): product registration, UDI, economic operator registration, NB and certificate, clinical research, Vigilance &amp; PMS, market research (health authorities)</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Improvement and introduction of UDI System : sequential introduction from Class III. Currently it’s compatible with FDD, subject to change.</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>MDCG(Medical Device Coordination Group) : A medical device coordination group composed of independent expert within the health authority. Evaluate NB, Manage Class III, Consult clinical evaluation and investigate conformity assessment in detail for Class III implantable &amp; Class IIb active device product.</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Class I reusable surgical instrument : Like Class I sterilization/measuring devices, subject to NB review → only for reprocessing processes such as washing/cleaning process</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Implant Card : Doctor, manufacturer, patient, serial number, etc.</li>
                                                <li>11. <span class="nbsp">&nbsp;</span>Person Responsible for Regulatory Compliance) : Common matter for manufacturer and EU representive a person who has more than one year of quality &amp; RA work experience, and four-year college degree or higher, responsible for the release of technical documents and products.</li>
                                                <li>12. <span class="nbsp">&nbsp;</span>Application of MDR to products that do not belong to the definition of medical devices  → Fillers, ties, and laser surgery devices(waxing, cosmetic purposes)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ce_mdr_02.jpg" alt="Content to be included in the TCF(Technical Document)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Content to be included in the TCF(Technical Document)</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Completion of GSPR(General Safety and Performance Requirements) Check List of MDR Annex 1</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Biological Safety Assessment Report (ISO10993-1:2018)</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Risk Management Plan (ISO14971:2019)</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Risk Management Report</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Usability Validation Plan (IEC62366-1:2015)</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Usability Validation Report</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Clinical Evaluation Plan (MEDDEV 2.7/1 :2016</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Clinical Literature Search Protocol</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Clinical Literature Search Report</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Adverse Event Search Report</li>
                                                <li>11. <span class="nbsp">&nbsp;</span>Clinical Evaluation Report</li>
                                                <li>12. <span class="nbsp">&nbsp;</span>Prepare Process (Sterilization, Cleaning, Packaging, Clean Room) Validation Report</li>
                                                <li>13. <span class="nbsp">&nbsp;</span>Software Validation Plan</li>
                                                <li>14. <span class="nbsp">&nbsp;</span>Software Validation Report</li>
                                                <li>15. <span class="nbsp">&nbsp;</span>Product drawing and schematic drawing</li>
                                                <li>16. <span class="nbsp">&nbsp;</span>Manufacturing flow chart</li>
                                                <li>17. <span class="nbsp">&nbsp;</span>User Manual (Instructions for use)</li>
                                                <li>18. <span class="nbsp">&nbsp;</span>List of used materials(important components), etc.</li>
                                                <li>19. <span class="nbsp">&nbsp;</span>Product Label</li>
                                                <li>20. <span class="nbsp">&nbsp;</span>Annual upload of SSCP(Summary of safety and clinical performance) : Implantable and Class III Article 32</li>
                                                <li>21. <span class="nbsp">&nbsp;</span>Regularly update PSUR(Periodic Safety Update Report) : Class IIa, IIb, III product Article 86</li>
                                                <li>22. <span class="nbsp">&nbsp;</span>DOC (Declaration of Conformity)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ce_mdr_03.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is contributing to the continuous development of customers by accurately evaluating the suitability of product certifications through the technology and expertise accumulated over the years.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In addition, GIC provides various certification related services in the medical device field.</li>
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
                        <h1 class="sub_tit">Introduction of European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Clinical Evaluation</h2>
                        <p class="sub_txt">
                            Clinical evaluation is the process of collecting and evaluating clinical data related to medical devices to verify safety, effectiveness and performance, and to demonstrate conformity to relevant regulatory requirements.<br><br>
                            Clinical evaluation is a process conducted throughout the life cycle of a medical device, it should be conducted in the process of developing a medical device to approve data for manufacturers to study and obtaining new information about the device’s safety, effectiveness and performance.<br><br>
                            Medical device manufacturers shall meet the requirements of ISO 14155 standard when conducting clinical trials in order to prove the safety and effectiveness of the product according to the purpose of use.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/clinical_01.jpg" alt="MDR and Clinical Evaluation">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">MDR and Clinical Evaluation</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Medical Device Regulation(MDR) refers to a new medical device regulation that all medical device manufacturers planning to enter the European market must comply with. MDR requires a process that enhances clinical data and evaluation processes, and manufacturers must provide clinical evaluation reports to demonstrate the safety and performance of medical devices.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>For Class III and Class IIb products, clinical evaluation is mandatory, and the clinical evaluation instruction manual and PMCF plan are included.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Clinical data can be acquired by collecting data on the clinical experience of equivalent medical devices, deriving clinical results through clinical evaluation reports, and clinical evaluation using similar devices.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/clinical_02.jpg" alt="Stages of Clinical Evaluation">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Stages of Clinical Evaluation</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Establish a clinical evaluation plan</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Creation and identification of clinical data (Literature search, clinical experience, clinical research)</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Assessment of the conformity of clinical data</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Analyzing the entire data and drawing conclusion</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Preparation of clinical evaluation report</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/clinical_03.jpg" alt="Prerequisite of Clinical Trial Data">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Prerequisite of Clinical Trial Data</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Clinical trial evaluation data should include.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Risk assessment, justification of the designed clinical trial, clinical trial stage, clinical trial brochure, clinical trial</li>
                                            </ul>
                                            <ul><span class="point_b2">Clinical progress report, monitoring plan, reasons for selection of clinical trial region, clinical participant consent, and clinical participant identification method, etc. should be included.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Information about the initial clinical trial region is required.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Periodic monitoring for clinical trial region is required.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Data on side effects or device defects is required.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/clinical_04.jpg" alt="What is PMS?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is PMS?</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>‘PMS’ is also referred to as a post-market surveillance system and any activity carried out by manufacturers including pre-gather and review experience gained from medical devices placed on the EU market, and to keep the collected data up to date.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturers must plan, establish, document, implement, maintain and update post-market surveillance systems for each device in a manner proportional to the risk class and appropriate for the device type. Post-market surveillance systems must be suitable for actively and systemically collecting, recording and analyzing data on the quality, performance and stability of devices over their entire life span, drawing necessary conclusions, and determining, implementing and monitoring preventive and corrective actions.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In MDR, there is an increased obligation to proactively collect post market requirements and data for manufacturers and to document and report the analysis of these post market activities and data..</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/clinical_05.jpg" alt="PMS Report Creation">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PMS Report Creation</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Post-Market Surveillance Report (PMSR)</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturers of Class I devices are required to prepare a post-market surveillance report summarizing and analyzing results and conclusions of the post-market surveillance data collected as a result of the post-market surveillance plan to prepare a rationale and explanation for prevention and correction. If necessary, the report must be updated and provided to the competent authority upon request.</li>
                                            </ul>
                                            <ul><span class="point_b2">Periodic Safety Update Report (PSUR)</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturers of Class IIa, Class IIb and Class III devices are required to summarize the results and conclusions of the post-analysis for each category or group of devices, as well as results of periodic safety update report (PSUR) for each device. Market surveillance data is collected as a rationale and explanation for preventive and corrective actions taken as a result of post market surveillance plans.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/clinical_06.jpg" alt="PMCF and PSUR">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PMCF &amp; PSUR</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>PMCF(Post-Market Clinical Follow-up), a type of PMS, is the process of collecting and updating data on clinical evaluation, which is an essential requirement of MDR. It is designed to collect and validate long-term data on the performance, safety and residual risk of medical devices. Manufacturers are required to submit clinical data obtained through PMCF and data such as PMS reports, clinical assessment reports, and risk assessment reports.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The purpose of PMCF is to verify the safety and clinical performance of medical devices, to continuously manage identified risks, and to detect risks based on factual evidence. PMCF can be achieved through new clinical studies, review of data derived from medical device registries, follow-up by customers who have conducted premarket clinical trials, or through follow-up by patients who have previously used medical devices.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The PSUR(Periodic Safety Update Report) is a document intended to provide an evaluation of the safety and performance of approved medical devices. It is the purpose of PSUR to present a comprehensive and critical analysis by identifying new risks to stability and performance.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturers of Class IIb, Class III medical devices must submit a PSUR annually, and manufacturers of Class IIa medical devices must submit a PSUR at least once every two years.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The company must submit a report on PMS data analysis to the certification body, and after reviewing the report, the certification body must register the result in EUDAMED.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/clinical_07.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC can provide services for clinical evaluation through cooperation with the IGC.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>IGC provides services for conducting clinical trials in partnership with DNA Technologies Pacific.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>DNA Technologies Pacific performs CRO as a clinical trial consignee, and supports the creation of clinical evaluation reports, and regular safety update reports according to evaluation by incorporating the results of research from investigation which will help you effectively acquire and maintain certification.</li>
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
                        <h1 class="sub_tit">Introduction of European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">CE IVD/IVDR In-vitro diagnostic medical device</h2>
                        <p class="sub_txt">
                            The In-vitro diagnostic medical devices Directive 98/79/EC, IVD was enacted on December 7, 1998 and has been applied to all in vitro diagnostic medical devices sold in the European market from December 7, 2003. Devices that comply with this directive are marked with the CE mark, and the EU mandates to attach the CE mark to in vitro diagnostic medical devices.<br><br>
                            The European Union enacted the ‘regulation for medical devices in 2017 and revised the legal system on medical devices. Unlike the existing form of ‘Directive’, ‘Regulation’ has legal effect applied directly to member states and is applied directly, not through implementing legislation of member states.<br><br>
                            In vitro diagnostic medical device regulation(EU Regulation 2017/746, IVDR) entered into force on May 26, 2018, and the in vitro diagnostic medical device regulation was enforced from May 26, 2022 after a transition period of 5 years.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE IVD IVDR_01.jpg" alt="Understanding of in-vitro diagnostic medical devices">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Understanding of in-vitro diagnostic medical devices</h3>
                                        <p class="sub_txt">
                                            In vitro diagnostic medical device regulations are applied to devices that comply with IVDR Article 2 ‘Definition of in vitro diagnostic medical devices’. In vitro diagnostic medical devices, either alone or in combination, mean reagents, reagent products, measuring instruments, kits, instruments, equipment, software and system medical devices intended by the manufacturer to be used in vitro for specimen testing, including donation of blood and tissues derived from human body for the purpose of providing information on one or more of the following :
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Relating to physiological or pathological process or condition;</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Relating to a congenital physical or mental disorder;</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Relating to a medical condition or predisposition to disease;</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>To determine safety and compatibility with potential subjects;</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>To predict treatment response or action;</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>To establish or monitor treatment measures;</li><br>
                                                <span style="display: block">Sample containers are also considered in-vitro diagnostic medical devices.</span>
                                            </ul>
                                        </div>
                                        <p class="sub_txt">
                                            If the intended use of the product to be certified meets the definition of in vitro diagnostic medical devices stipulated by laws and meets the IVDR requirements, CE marking can be affixed, and medical devices can be sold in the European Economic Area.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE IVD IVDR_02.jpg" alt="Major changes in IVD/IVDR">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Major changes in IVD/IVDR</h3>
                                        <p class="sub_txt">
                                            IVD consists of 24 groups and 10 annexes, and IVDR consists of 10 chapters, 113 groups and 15 annexes. As IVD was replaced by IVDR, requirements were added and the management of the product was strengthened.
                                        </p>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody><span class="point_b2">The major changes are as followings : </span>
                                                <tr>
                                                    <th width="22%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Major changes</p>
                                                    </th>
                                                    <th width="78%" valign="top" colspan="3" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Details</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td width="22%" rowspan="7">
                                                        <p align="center">
                                                            Medical device classificaiton system change
                                                        </p>
                                                    </td>
                                                    <td width="78%" colspan="3">
                                                        <p style="text-align: left;padding: 10px">In IVD, the grades were classified into General, Self-testing, List B, List A, but in IVDR, the grade classification system was changed to A, B, C, D.</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            IVD classification
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            IVDR classification
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            Risk
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            General
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            A
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            Low
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            Self-testing
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            B
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                        
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            List B
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            C
                                                        </p>
                                                    </td>
                                                    <td  width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            High
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td  width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            List A
                                                        </p>
                                                    </td>
                                                    <td width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                            D
                                                        </p>
                                                    </td>
                                                    <td  width="26%" style="background-color: whitesmoke">
                                                        <p align="center">
                                                        
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="26%">
                                                        <p align="center">
                                                            Changes in conformity assessment procedure
                                                        </p>
                                                    </td>
                                                    <td colspan="2">
                                                        <p style="text-align: left;padding: 10px">
                                                            In the case of Class A, there is no need to undergo conformity assessment through a Certification Body. However, devices that are sterilized among Class A(Class As) or higher must go through a certification body, and a quality management system is also required.
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="22%">
                                                        <p align="center">
                                                            Changes in the obligation of economic operators
                                                        </p>
                                                    </td>
                                                    <td colspan="3">
                                                        <p style="text-align: left;padding: 10px">
                                                            The obligation of operators(manufacturer, delegated agent, importer, distributor) have been strengthened and added.
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="22%" rowspan="2">
                                                        <p align="center">
                                                            Changes in performance evaluation
                                                        </p>
                                                    </td>
                                                    <td colspan="3">
                                                        <p style="text-align: left;padding: 10px">
                                                            IVDR requires the preparation of accurate and additional data on performance and should include scientific validity, analytical performance, and clinical performance.
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3">
                                                        <p style="text-align: left;padding: 10px">
                                                            For Class D, testing by an EU standard laboratory is required.
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="22%">
                                                        <p align="center">
                                                            Introduction of UDI
                                                        </p>
                                                    </td>
                                                    <td colspan="3">
                                                        <p style="text-align: left;padding: 10px">
                                                            Unique Device Identification(UDI) must be introduced to secure identification and traceability and to secure post-marketing safety.
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="22%">
                                                        <p align="center">
                                                            Requirements for the software
                                                        </p>
                                                    </td>
                                                    <td colspan="3">
                                                        <p style="text-align: left;padding: 10px">
                                                            Regulations related to software that were not included in IVD have been strengthened.
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-5" class="roll roll05"><!-- 4depth 컨텐츠 01-5 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of European product certification </h1>
                        <h2 class="sub_tit2 fc_pointer">CE LVD/EMC | Low Voltage/Electromagnetic Compatibility</h2>
                        <p class="sub_txt">
                            <span style="display: block;font-weight: 600">What is CE LVD/EMC?</span><br>
                            The European Low Voltage Directive(LVD) is a directive to protect electrical equipment against electric shock and other electrical hazards within a specific voltage range. These guidelines apply to electrical equipment designed and used with voltage specification for direct current between 70 ~ 1500 V and alternating current between 50 ~ 1000 V. Also, the voltage specifications that apply to these directives are for the electrical input/output voltage, not the voltage inside the equipment.<br><br>
                            The Low Voltage Directive also defines the human body’s effects of electromagnetic field radiation from electrical equipment. The Low Voltage Directive is one of the oldest single directives established prior to the introduction of the “New” or “Global” concepts. In a broad sense, it provides a pre-market conformity assessment procedure for a device and the Essential Health and Safety Requirements(HSR) that the device must meet either directly or by harmonized standards, which ensure that equipment is used safely.<br><br>
                            This is to prevent personal and property injury or loss from the following hazards that may occur under predicated or unforeseen circumstances.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE LVD EMC_01.jpg" alt="Predictable Hazard">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Predictable Hazard</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Electrical Hazard : When exposed to danger during use such as electronic shock</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Fire Hazard : In case of fire due to overload, short circuit, etc.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Mechanical Hazard : Risk factors due to mechanical malfunction</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Physical Hazard : Structural risk factors such as falling, external shock, and collapse</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Chemical Hazard : Possible hazards caused by the paint used on the product</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE LVD EMC_02.jpg" alt="CE LVD / EMC Certification Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">CE LVD / EMC Certification Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">LVD Certification scope</span>
                                                <li>
                                                    According to 2014/35/EU, it is applied to electrical appliances with a rated voltage of AC50~1000V or DC75~1500V. (However, products listed in Annex II are excluded(Explosion-proof equipment, radiation and medical equipment, electric parts of elevators, electric meters, indoor plugs and socket outlets, electric barbed wire controllers, jamming equipment, special electricity used for ships, aircraft, and railroads complying with safety regulations prepared by international organization device))
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE LVD EMC_03.jpg" alt="Detailed Procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Detailed Procedure</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">[Step 1]</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>In order to carry out CE marking, the manufacturer must understand the EMC Directive that defines the product to be marked.<br>EMC Directive: 2014/30/EU Electromagnetic compatibility (EMC) Directive</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>For the suitability of the product, the essential requirements stipulated in the Directive shall be organized by item<br>The manufacturer must prove that the requirements stipulated in the relevant Directive are met. For this purpose, technical details of the response for safety and risk prevention in product must be described or results of product test and related data must be presented.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The manufacturer determines the conformity assessment method(applied module) to prove and declare that the product meets the requirements of the relevant guidelines related to CE marking, and conducts conformity assessment accordingly. CE marking conformity assessment stipulates in each Directive to use one or a combination of two modules according to the characteristics of the product among the 8 modules.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Once the guidelines to be applied to the product have been determined, the European test standards to be tested for each of those guidelines should be determined.</li>
                                            </ul>
                                            <ul><span class="point_b2">[Step 2]</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>If the EN standard related to the product has been determined, conduct the test in an accredited institution according to the standard.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Product tests are used as data to prove the safety and risk response skills of products required by the guidelines.</li>
                                            </ul>
                                            <ul><span class="point_b2">[Step 3]</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>For the declaration of conformity, a technical document (Technical Construction Files; T.C.F) that deals with the technical contents for the safety and risk prevention of the product shall be prepared.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The technical contents to be dealt with in the technical document must be prepared by referring to the relevant guidelines as the required data differs according to the relevant directive.</li>
                                            </ul>
                                            <ul><span class="point_b2">[Step 4]</span>
                                                <li>In this step, in order to declare the conformity of the Directive, the manufacturer prepares a declaration of conformity based on the quality system certification required for each module and various technical documents, and signs and approves it as a confirmation.</li>
                                            </ul>
                                            <ul><span class="point_b2">[Step 5]</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>After completing and approving the declaration of conformity, the manufacturer attaches the labeling information of the product when the product is shipped. The label includes the manufacturer’s name, product related matters and CE marking.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>In general, the details of the technical document are as follows : 
                                                    <ul>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>General information about the product and explanation necessary for understanding the operating system of the product</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Installation drawings, design drawings, circuit diagrams, circuit distribution diagram, etc.</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Parts List, test report, design calculation, standard checklist</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Clinical trial data(for MDD), risk factor analysis</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Catalogs, technical data, etc. of important parts or parts exchanged during maintenance</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <p class="sub_txt">
                                            The purpose of this guideline is to ensure safety from electricity by preventing the sale of electrical products that threaten human and animal safety in the European Union. Related products include computers, information technology equipment, household appliances, power tools, laboratory equipment, test and measurement equipment and power supplies. In other words, it is essential for manufacturers planning to sell electrical products to Europe.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE LVD EMC_04.jpg" alt="Post management of CE LVD/EMC certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Post management of CE LVD/EMC certification</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>CE marked products are cleared through 17 EEA countries’ custom without any restriction. Cleared products can be distributed in the European market without any discrimination.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>CE Customs checks the CE marking and accepts the declaration of conformity.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Even for the customs clearance product, if necessary, follow-up management such as sample inspection, along with a request for submission of technical documents, is subject to objections from relevant stakeholders (customers, competitors, and domestic inspection agencies).</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>CE marking is a system that receives post-management, not a pre-inspection system that can be marketed after receiving pre-inspection and approval of CE marking authority of the member country’s government or mandatory standard. The CE marking authority will voluntarily, or when a stakeholder reports or a problem occurs, collects the products distributed on the market and conducts a document inspection related to conformity of standards and, if necessary, conducts a safety inspection of the product.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-6" class="roll roll06"><!-- 4depth 컨텐츠 01-6 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">CE Machinery | Machinery</h2>
                        <p class="sub_txt">
                            A manufacturer that intends to distribute or sell a product within Europe shall affix a CE mark to the product through declaration or certification of conformity that the product conforms to the applicable EU guidelines. In Europe, the guidelines applicable to the safety of machinery are Machinery Directive 2006/42/EC and apply to all machinery, including transport machines, mechanism, lifts and transport equipment and safety components.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE Machinery_01.jpg" alt="CE Machinery(Machinery Safety) European Product Certification Overview">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">CE Machinery(Machinery Safety) European Product Certification Overview</h3>
                                        <p class="sub_txt">
                                            The definition of machinery is defined in MD as "at least one part of the operation, with multiple interrelated parts and proper actuator, controller and power circuitry." The European Machinery Directive (Machinery Directive:2006/42/EC) is designed to ensure the health and safety of workers in the use of a wide range of machinery and other products, including accessories, chains, ropes and webbing, replacement equipment, mobile mechanical transmitters and safety components.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The following products can be attach CE marks : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>General industrial machinery: semiconductor equipment, excavator accessories and partial machinery, press, CNC lathe, machine tool, industrial compressor, industrial hoist, industrial printer, packaging equipment, etc.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Hazardous machinery: similar machinery, such as circular saws, products for underground work, such as presses, plastics, rubber ejectors, mines, car lifts for work, lifts for passenger transport, safety relays, etc.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE Machinery_02.jpg" alt="CE Machinery Directive(2006/42/EC)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">CE Machinery Directive(2006/42/EC)</h3>
                                        <div class="sub_txt"><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Composition of CE Machinery Directive(2006/42/EC)</span>
                                            <ul>
                                                <li><span style="display: inline-block;font-weight: bold">Introduction</span> : Guidelines and general explanations and cautions for preparation</li>
                                                <li><span style="display: inline-block;font-weight: bold">Main subject</span> : A provision for the application of guidelines, legal obligations or authority to the member countries</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul>
                                                <li><span style="display: inline-block;font-weight: bold">Annex I</span> : Essential requirements for health and safety regarding design and manufacturing</li>
                                                <li><span style="display: inline-block;font-weight: bold">Annex II</span> : Matters concerning the Declaration of Conformity</li>
                                                <li><span style="display: inline-block;font-weight: bold">Annex III</span> : CE – Marking</li>
                                                <li><span style="display: inline-block;font-weight: bold">Annex IV</span> : List of machinery that must be tested in the EU format by the Notified Body</li>
                                                <li><span style="display: inline-block;font-weight: bold">Annex V</span> : Declaration of Conformity and Technical Files</li>
                                                <li><span style="display: inline-block;font-weight: bold">Annex VI</span> : EU Type Test</li>
                                                <li><span style="display: inline-block;font-weight: bold">Annex VII</span> : Notified Body Criteria</li>
                                            </ul>
                                        </div>
                                        <div class="sub_txt"><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Standard classification</span>
                                            <p>European Standard for machine safety can be divided into A, B, and C standard. The product must meet all 3 applicable standards.</p><br>
                                            <div class="con_txt">
                                                <ul>
                                                    <li><span style="display: inline-block;font-weight: bold">standard A (EN 414, EN 12100)</span> : Standard that define basic concepts, design principles, and general aspects as basic safety standard</li><br>
                                                    <li>
                                                        <dl>
                                                            <dt><span style="display: inline-block;font-weight: bold">Standard B (EN 13850, EN 13849-1, EN 60204-1 and etc.)</span> : Safety-related standard applicable to machines that are widely classified according to their basic use and purpose.</dt><br>
                                                            <dd>- <span class="nbsp">&nbsp;</span>Standard B1 for specific safety aspects (Electricity, Safety Distance, Surface Temperature, Noise and etc.)</dd>
                                                            <dd>- <span class="nbsp">&nbsp;</span>Standard B2 for safety-related devices and mechanical components (emergency switches, pressure sensing devices and etc.)</dd>
                                                        </dl>
                                                    </li><br>
                                                    <li><span style="display: inline-block;font-weight: bold">Standard C</span> : Standard that specify detailed safety requirements for a particular machine or group of machines.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="sub_txt"><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Applied Devices</span>
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Products with at least one operating part, with electricity, air pressure, hydraulic pressure, weight and etc. as the source of energy<li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Parts of machinery that are involved in health or safety; equipment that is shipped on separateness<li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/CE Machinery_03.jpg" alt="CE Machinery Directive(2006/42/EC) core requirement">
                                        </div>
                                        <div class="sub_txt"><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>CE Machinery Directive(2006/42/EC) core requirement</span>
                                            <p>The documentation requirements that the manufacturer must comply with are in the essential health and safety requirements of Annex I of the MD, documenting whether the machine is being used safely and properly alerting the user if any remaining risks are present</p><br>
                                            <div class="con_txt">
                                                <ul><span class="point_b2">Required requirements as below; </span>
                                                    <li>1. <span class="nbsp">&nbsp;</span>the principle of safety, design that facilitates handling, Ergonomics, Control system, Protects against mechanical hazards, electrical and other energy temperatures, other hazards, such as fire and explosion, common to all types of machinery, such as noise emission, Vibration, Radiation and hazardous materials, maintenance, Cleaning, Display and Warning of Information<li>
                                                    <li>2. <span class="nbsp">&nbsp;</span>Requirements applicable to certain classes of machinery, such as food, cosmetics, and medicines<li>
                                                    <li>3. <span class="nbsp">&nbsp;</span>Requirements for offset the risk of machine mobility<li>
                                                    <li>4. <span class="nbsp">&nbsp;</span>Requirements to offset the risk of lift operations<li>
                                                    <li>5. <span class="nbsp">&nbsp;</span>Requirements for underground work machines<li>
                                                    <li>6. <span class="nbsp">&nbsp;</span>Requirements for mechanical lift personnel<li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/CE Machinery_04.jpg" alt="The certification procedure">
                                        </div>
                                        <div class="sub_txt">
                                            <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>The certification procedure</span>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">There are four methods as follows; </span>
                                                <li>
                                                    <dl>
                                                        <dt><span style="display: inline-block;font-weight: bold">1. <span class="nbsp">&nbsp;</span>High-risk machinery described in Annex 4</span></dt>
                                                        <dd>Accreditation through the notified Body (NB)</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt><span style="display: inline-block;font-weight: bold">2. <span class="nbsp">&nbsp;</span>General machinery other than Annex 4 (Annex II A)</span></dt>
                                                        <dd>Acquired by Declaration of self-conformity (with a CE mark as proof of conformity with the finished product)</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt><span style="display: inline-block;font-weight: bold">3. <span class="nbsp">&nbsp;</span>Declaration of self-conformity with respect to Machine Parts (Annex II B)</span></dt>
                                                        <dd>Acquired by self-compliance declaration (with a CE mark as proof of conformity with the finished product)</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt><span style="display: inline-block;font-weight: bold">4. <span class="nbsp">&nbsp;</span>Declaration of self-conformity with safety components (Annex II C)</span></dt>
                                                        <dd>Acquired by self-compliance declaration (with a CE mark as proof of conformity with the finished product)</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt><span style="display: inline-block;font-weight: bold">5. <span class="nbsp">&nbsp;</span>High-risk machinery described in Annex 4</span></dt>
                                                        <dd>Accreditation through the notified Body (NB)</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt><span style="display: inline-block;font-weight: bold">Note : </span></dt>
                                                        <dd>In the case of B) and C), a Declaration of self-conformity can be made and the relevant technical documents stored to declare compliance with the specification, but CE marks cannot be affixed to the product or packaging.</dd>
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
                                        <img src="./image/CE Machinery_05.jpg" alt="TCF: Technical Construction Files">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">TCF: Technical Construction Files</h3>
                                        <p class="sub_txt">
                                            Technical Construction Files requirements contained in 2006/42/EC Annex VII. The TCF should verify that the machine is suitable for the requirements of the Machinery Directive. The language used must be written as the official community language.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">TCF should include the following documents : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>General description of the machine</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Technical drawings necessary to check the overall drawings of the machine and the suitability of the machinery</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>List of essential health and safety requirements applicable to machinery</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Explanation of protective measures taken to reduce identified risks, instructions on residual risks associated with machinery</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Standards that present the essential health and safety requirements contained in this standard</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>A report showing the results of a test performed by a manufacturer or by an agency recognized by the manufacturer</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Copy of EC Declaration of Conformity for Machinery and Other Products</li><br>
                                                <span style="display: block">Technical documents shall be available for at least 10 years from the date of manufacture of the machine.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">EC - Declarative of Conformity</h3>
                                        <p class="sub_txt">
                                            To attach a CE mark, the manufacturer must issue a declaration of conformity indicating that the product conforms to the applicable guidelines and standard regulations. Most machine manufacturers can declare their own suitability. Several product categories, including high-risk machines such as electrical saws, require third-party certification.<br><br>
                                            Forced safety certification is carried out to ensure the safety of workers by using the machine properly and safely designing and properly installing products and maintaining the machine, due to numerous accidents caused by the use of the machine.<br><br>
                                            The manufacturer shall prepare and sign the EU Declaration of Conformity, and the DOC shall include the applied Harmonized Organization and the information of the manufacturer, European representative and certification authority, and, if necessary, additional information such as harmonized specifications, products and technical specifications.<br><br>
                                            Like the technical documentation, DOC should be stored for 10 years from the time the product is released. DOC's storage obligations are to the manufacturer or to the European representative, and in the case of imported products, the importer is responsible.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">DOC should include the following : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>The name and full address of the manufacturer and, if applicable, the representative's information which recognized by the manufacture</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Names and addresses of persons authorized to edit technical documents</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Description of machinery including general information including functions, models, serial numbers, and trade name</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Statement by which the machinery clearly declares that these guidelines have carried out all relevant regulations</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Similar statements declaring other guidelines and/or related regulations appropriate for machinery, if applicable</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Name, address and identification number of Notified body and number of certificates</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Criteria for harmonized standard</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Criteria for other technical standards and specification</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Site and date of certification</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>The status and signature of a manufacturer or a person entrusted to prepare a declaration on behalf of a manufacturer's recognized representative</li>
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
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC has a partnership with IGC. IGC works with European Notified Body (NB) to provide product certification services such as CE Machinery, CE MDD, CE IVD and CE LVD.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>IGC have years of technical skills and expertise, as well as up-to-date knowledge of a range of specific legal requirements in major markets around the world.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Provide knowledge and services to support your overall global operations.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-7" class="roll roll07"><!-- 4depth 컨텐츠 01-7 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">CE PED | Pressure equipment</h2>
                        <p class="sub_txt">
                            PED is abbreviation of Pressure Equipment Directive (2014/68/EU), which is a pressure equipment instruction that applies to design, manufacture and conformity assessment of pressure equipment and components with a maximum permissible pressure of 0.5 bar or more. Manufacturers wishing to export their products to EU countries must be certified in accordance with the Pressure Equipment Directive, which was amended from 97/23/EC to 2014/68/EU as of July 19, 2016.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE PED_01.jpg" alt="Scope">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Scope</h3>
                                        <p class="sub_txt">
                                            This guidance applies to the design, manufacture and conformity assessment of pressure equipment and assemblies with a maximum permissible pressure of 0.5 bar or more. Includes all vessels, piping, safety accessories and pressure accessories.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">[Applied pressure equipment]</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Water pipe boiler</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Heat Exchanger</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Pressure vessel</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Pipe</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Electric heater</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Valve (Isolated, Controlled)</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Meter</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Release valve</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Safety valve</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Controlled safety pressure release system</li>
                                                <li>11. <span class="nbsp">&nbsp;</span>Pressure switch</li>
                                                <li>12. <span class="nbsp">&nbsp;</span>Temperature change</li>
                                                <li>13. <span class="nbsp">&nbsp;</span>Fluid level switch</li>
                                            </ul>
                                            <ul><span class="point_b2">[Excluded scope]</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Items applicable to SPVD(Simple Pressure Vessels Directive) and TPED(Transportable Pressure Equipment Directive)</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Products with relatively low pressurization: Mechanical Directive</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Pressure vessel</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Equipment for vehicles, etc.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE PED_02.jpg" alt="Proof of pressure equipment (CE marking)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Proof of pressure equipment (CE marking)</h3>
                                        <p class="sub_txt">
                                            Pressure instruments are classified into four stages of Category I, II, III, and IV according to the maximum allowable pressure (PS), fluid use, volume, and external diameter (DN), and are subject to the module requirements applicable to that category as shown in the table below. For detailed technical requirements for conformity assessment, European technical specifications such as EN 1345, AD2000, and ASME codes are applied.
                                        </p>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody><span class="point_b2">Annex II, Conformity assessment table</span>
                                                <tr>
                                                    <th width="30%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Category</p>
                                                    </th>
                                                    <th width="70%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Modules</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p align="center" style="padding: 10px">
                                                            I
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p align="left" style="padding: 10px">Module A</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p align="center" style="padding: 10px">
                                                            II
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p align="left" style="padding: 10px">Modules A2, D1, E1</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p align="center" style="padding: 10px">
                                                            III
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p align="left" style="padding: 10px">Modules B(Design type)+D, B(Design type)+F, B(Production type)+E, B(Production type)+C2, H</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p align="center" style="padding: 10px">
                                                            IV
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p align="left" style="padding: 10px">Modules B(Production type)+D, B(Production type)+F, G, H1</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table><br><br>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody><span class="point_b2">Annex III, Conformity assessment table</span>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module A</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">Internal production management</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module A2</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">Internal production management + Product inspection under supervision at random cycles</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module B</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">EU-Type inspection (Production type)<br>EU-Type inspection (Design type)</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module C2</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">Formal conformity based on internal production management + Product inspection under supervision at random cycles</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module D/D1</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">D: Formal suitability based on quality assurance of production process<br>D1: Quality Assurance of Production Process</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module E/E1</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">E: Formal suitability based on product quality assurance<br>E1: Quality Assurance of Inspection and Testing of Final Products</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module F</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">Formal suitability based on product verification</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module G</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">Conformity based on unit verification</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="30%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module H/H1</p>
                                                    </th>
                                                    <th width="70%">
                                                        <p align="left" style="padding: 10px">H: Conformity based on full quality assurance<br>H1: Conformity based on complete quality assurance + Design inspection</p>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC has a partnership with IGC. IGC works with European Notified Body (NB) to provide product certification services such as CE Machinery and CE PED</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>IGC have years of technical skills and expertise, as well as up-to-date knowledge of a range of specific legal requirements in major markets around the world.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Provide knowledge and services to support your overall global operations.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-8" class="roll roll08"><!-- 4depth 컨텐츠 01-8 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">CE SPVD | Simple pressure container</h2>
                        <p class="sub_txt">
                            SPVD is a Simple Pressure Vessel Directive that is a weld container with an internal pressure of 0.5 or higher, applies to pressure vessels that contain air or nitrogen and target all non-flammable fluids, and is manufactured continuously.<br><br>
                            Manufacturers who wish to export their products to EU countries shall be certified according to the simple pressure container guidelines, and the simple pressure container guidelines have been revised to 2014/29/EU as of April 20, 2016
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE SPVD_01.jpg" alt="Applied scope/ Excluded scope">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Applied scope/ Excluded scope</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">[Applied scope]<br>All pressure vessels containing air or nitrogen and non-flammable as a welding vessel with an internal pressure of 0.5 bar or higher.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Areas and assemblies that affect the strength of the vessel under pressure must be made of non-alloyed steel, non-alloyed aluminum, or sturdy aluminum alloy that does not undergo aging.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The container consists of a cylindrical part or cylindrical part of a circular cross-sectional area closed by a stool on the outside, and a plate rotating coaxially or a stool rotating coaxially.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The maximum operating pressure of the container must not exceed 30 bar, and the product of the inner volume and pressure of the container must not exceed 10,000 bar/liter.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>The minimum operating temperature of the container should not be lower than -50℃ and the maximum operating temperature should not be higher than 300℃ for steel and 100℃ for aluminum and aluminum alloy containers.</li>
                                            </ul>
                                            <ul><span class="point_b2">[Excluded scope]</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Container designed to prevent radioactive leakage for use in nuclear power</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Container used for propulsion devices or equipment of ships or aircraft</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Fire extinguisher</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE SPVD_02.jpg" alt="Essential requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Essential requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The prerequisites for SPVD are below : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Vessels with a maximum permissible pressure (PS) x capacity (V) exceeding 50 bar.L must meet the essential safety requirements of Annex I</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Vessels with a maximum permissible pressure (PS) x capacity (V) of 50 bar.L or less must be designed and manufactured according to the engineering practice of one of the member states.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE SPVD_03.jpg" alt="The importance of SPVD">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of SPVD</h3>
                                        <p class="sub_txt">
                                            Dangers are created if pressure vessels are handled and evaluated incorrectly. Therefore, European Directive 2014/29/EU (SPVD) stipulates that all pressure vessels must be certified by notified body.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">This standard helps below : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Meets conformity assessment procedures including safety</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Satisfying prerequisites for product export</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Compliance with European usage standards and directive requirements</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Enhance product competitiveness</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Strengthen internal production management</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE SPVD_04.jpg" alt="Conformity assessment procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Conformity assessment procedure</h3>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody><span class="point_b2">For simple pressure vessels, the module is determined according to the maximum allowable pressure (PS) x capacity (V).</span>
                                                <tr>
                                                    <th width="20%" rowspan="3" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module B +</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="center">Module C1</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU- Type inspection + Product testing under formal conformity and supervision based on internal production management</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="center">Module C2</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU- Type inspection + Product testing under formal conformity and supervision based on internal production management at random cycles</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="center">Module C3</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU- Type inspection + Formal compatibility based on internal production management</p>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CE SPVD_05.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC can provide the certification services though a cooperation with IGC, partner of GIC.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>IGC provides certification services for simple pressure vessels in agreement with FQC (First Quality Certification, NB2674), a European accreditation body.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-9" class="roll roll09"><!-- 4depth 컨텐츠 01-9 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction to European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Hot-water boiler</h2>
                        <p class="sub_txt">
                            92/42/EEC is a directive on the efficiency requirements for new hot water boilers burning on liquid or gaseous fuels rated at 4 kW ~ 400 kW and is part of the European Union's SAVE program on promoting energy efficiency.<br><br>
                            The purpose of this directive is to improve energy efficiency by setting efficiency requirements for hot water boilers that burn as liquid or gas.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Hot-water boiler_01.jpg" alt="Scope">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Scope</h3>
                                        <p class="sub_txt">
                                            Hot water boilers that use liquid or gaseous fuel with a rated output of 4 Kw ~ 400 Kw (standard boiler, low temperature boiler, gas condensing boiler)
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Hot-water boiler_02.jpg" alt="Excluded Scope">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Excluded Scope</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hot water boiler that can be burned by various fuels including solid fuel</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Hot water preparation equipment</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Boiler designed to be burned by fuels(Industrial waste gas, biogas, etc.) with properties different from those of liquid and gaseous fuels on the market.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Cooking utensils and appliances installed in the building to provide central heating and sanitary hot water with the main purpose of heating</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Equipment designed for the production of stored sanitary hot water with a rated output of less than 6kW using gravity circulation</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Single use Boiler</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Hot-water boiler_03.jpg" alt="Efficiency requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Efficiency requirements</h3>
                                        <ul class="sub_txt">
                                            <li>&#10020; <span class="nbsp">&nbsp;</span>Rated power : Operates at an average boiler water temperature of 70 °C at rated power (Pn) expressed in kW</li>
                                            <li>&#10020; <span class="nbsp">&nbsp;</span>Partial load : Operates with a load of 30% at the average water temperature of the boiler depending on the type of boiler</li>
                                        </ul>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody>
                                                <tr>
                                                    <th width="20%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Type of boiler</p>
                                                    </th>
                                                    <th width="20%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Output range</p>
                                                    </th>
                                                    <th width="30%" valign="top" colspan="2" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Efficiency at rated power</p>
                                                    </th>
                                                    <th width="30%" valign="top" colspan="2" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Efficiency at partial load</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td width="20%" style="background-color: whitesmoke;">
                                                        <p align="center"></p>
                                                    </td>
                                                    <td width="20%" style="background-color: whitesmoke;">
                                                        <p align="center">Kw</p>
                                                    </td>
                                                    <td width="15%" style="background-color: whitesmoke;">
                                                        <p align="center">Average boiler water temperature <br class="s_mobile_no">(in  ℃)</p>
                                                    </td>
                                                    <td width="15%" style="background-color: whitesmoke;">
                                                        <p align="center">Efficiency requirement <br class="s_mobile_no">(in %)</p>
                                                    </td>
                                                    <td width="15%" style="background-color: whitesmoke;">
                                                        <p align="center">Average boiler water temperature <br class="s_mobile_no">(in  ℃)</p>
                                                    </td>
                                                    <td width="15%" style="background-color: whitesmoke;">
                                                        <p align="center">Efficiency requirement <br class="s_mobile_no">(in %)</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">
                                                        <p align="center">Standard boiler</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="center">4 - 400</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">70</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">≥ 84 + 2 <br class="s_mobile_no">logPn</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">≥ 50</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">≥ 80 + 3</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">
                                                        <p align="center">Low temperature boiler +</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="center">4 - 400</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">70</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">≥ 87.5 + 1.5 <br class="s_mobile_no">logPn</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">40</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">≥ 87.5 + 1.5</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="20%">
                                                        <p align="center">Gas condensing boiler</p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="center">4 - 400</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">70</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">≥91 + 1 <br class="s_mobile_no">logPn</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">30(**)</p>
                                                    </td>
                                                    <td width="15%">
                                                        <p align="center">≥ 97 + 1 <br class="s_mobile_no">logPn</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <span style="display: block;font-size: 0.8rem">(*) Condensing boilers using liquid fuel included</span>
                                        <span style="display: block;font-size: 0.8rem">(**) Water temperature of Boiler</span>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Hot-water boiler_04.jpg" alt="Conformity assessment procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Conformity assessment procedure</h3>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody>
                                                <tr>
                                                    <th width="20%" rowspan="3" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module B +</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px;background-color: whitesmoke">
                                                        <p align="center">Module C</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU- Type Inspection + Type suitability</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="20%" style="padding: 10px;background-color: whitesmoke">
                                                        <p align="center">Module D</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU- Type Inspection + Production quality assurance</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="20%" style="padding: 10px;background-color: whitesmoke">
                                                        <p align="center">Module E</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU- Type Inspection + Production quality assurance</p>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con1-10" class="roll roll10"><!-- 4depth 컨텐츠 01-10 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction to European Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Gas Appliance | Gas fuel combustion equipment</h2>
                        <p class="sub_txt">
                            <span style="display: block;font-weight: 600">Appliances burning gaseous fuels (EU 2016/426) introduction</span><br>
                            EU 2016/426 is a European gas appliance regulation that applies to gas appliances and accessories designed for hot water production, refrigeration, lighting, heating, washing and cooking purposes.<br><br>
                            The European Gas Appliances Directive (GAD 2009/142/EC) issued in March 2017 was replaced by the Gas Appliances Regulation (GAR 2016/426) has been updated and applied from April 2018.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Gas Appliance_01.jpg" alt="Scope">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Scope</h3>
                                        <p class="sub_txt">
                                            Gas-fired cooking, heating, hot water, refrigeration, and laundry equipment are included, and generally used household and commercial products excluding industrial products.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Gas Appliance_02.jpg" alt="Excluded scope">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Excluded scope</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Products used in industrial processes carried out in industrial sites</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Products used in aircraft and railroads</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Research purpose products for temporary use in the laboratory</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Gas Appliance_03.jpg" alt="Conformity assessment procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Conformity assessment procedure</h3>
                                        <p class="sub_txt">
                                            In the case of products that are continuously produced, the manufacturer must assessment the conformity by combining one of Modules C2, D, E, and F according to Module B-Production Type.
                                        </p>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody>
                                                <tr>
                                                    <th width="20%" rowspan="4" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Module B<br class="s_mobile_no">(Production Type)+</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px;background-color: whitesmoke">
                                                        <p align="center">Module C2</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU-Type Inspection + Formal conformity based on internal production management and product inspection under supervision at random cycles</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="20%" style="padding: 10px;background-color: whitesmoke">
                                                        <p align="center">Module D</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU-Type Inspection + Form conformity based on quality assurance of the production process</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="20%" style="padding: 10px;background-color: whitesmoke">
                                                        <p align="center">Module E</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU-Type Inspection + Form conformity based on product quality assurance</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th width="20%" style="padding: 10px;background-color: whitesmoke">
                                                        <p align="center">Module F</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">EU-Type Inspection + Form conformity based on product verification</p>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p class="sub_txt">
                                            In the case of products produced in single units or in small quantities, the manufacturer can also be evaluated for conformity with Module G (Unit Verification).
                                        </p>
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
        
<!--===========================================================================================================================-->        

        <article><!--+++++ 컨텐츠 02 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul class="over">
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">EAC Certification</a></li>
                    <li><a data-slide-index="1">Medical Device</a></li>
                    <li><a data-slide-index="2">Food</a></li>
                    <li><a data-slide-index="3">Cosmetic</a></li>
                    <li><a data-slide-index="4">Medicine</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con2-1" class="roll roll01 on"><!-- 4depth 컨텐츠 02-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of Eurasian Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">EAC(TRCU)</h2>
                        <p class="sub_txt">
                            TRCU abbreviated for Technical Regulation of Customs Union and stands for the technical regulations of the Customs Union centered on Russia.<br><br>
                            TRCU is an integrated certification system that began with the Eurasian Customs Union “EACU, Eurasian Customs Union” formed by Russia, Kazakhstan and Belarus in 2010, and entered into force in the Eurasian Economic Union “EEU, Eurasian Economic Union” in 2015.<br><br>
                            Currently, the Eurasian Customs Union/Economic Union consists of five countries: Russia, Kazakhstan, Belarus, Kyrgyzstan, and Armenia, and TRCU certification follows the stipulated certification procedure according to the decision of the Eurasian Economic Commission.<br><br>
                            The EAC mark is affixed on the certificate, which means Eurasian Conformity.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EAC_01.jpg" alt="TRCU EAC Regulation">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">TRCU EAC Regulation</h3>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size: 1rem">
                                            <tbody>
                                                <tr><!-- 표 구분 시작 -->
                                                    <th width="20%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Technical Regulation</p>
                                                    </th>
                                                    <th width="60%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Technical regulations specific content</p>
                                                    </th>
                                                    <th width="20%" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Products</p>
                                                    </th>
                                                </tr><!-- 표 구분 끝-->
                                                <tr><!-- 표 내용 1 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 001/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of railway rolling stock”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">railway rolling stock</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 2 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 002/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of high-speed railway transport”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">high-speed railway transport</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 3 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 003/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of railway transport infrastructure”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">railway transport infrastructure</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 4 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 004/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of Low-voltage equipment”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">Low-voltage equipment</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 5 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 005/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of packages”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">packages</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 6 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 006/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of pyrotechnic articles”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">pyrotechnic articles</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 7 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 007/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of products intended for children and adolescents”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">products intended for children and adolescents</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 8 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 008/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of toys”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">toys</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 9 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 009/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of perfumes and cosmetics”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">perfumes and cosmetics</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 10 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 010/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of machinery and equipment”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">machinery and equipment</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 11 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 011/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of elevators”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">elevators</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 12 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 012/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of equipment in explosion hazardous environments”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">equipment in explosion hazardous environments</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 13 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 013/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“0n requirements to motor and aviation petrol, diesel and marine, fuel, reactive engines fuel and black oil”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">motor and aviation petrol, diesel and marine, fuel, reactive engines fuel and black oil</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 14 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 014/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of roads”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">roads</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 15 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 015/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of grain”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">grain</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 16 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 016/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of apparatuses working on gaseous fuel”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">apparatuses working on gaseous fuel</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 17 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 017/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of light industry products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">light industry products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 18 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 018/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of wheeled vehicles”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">wheeled vehicles</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 19 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 019/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of personal protection equipment”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">personal protection equipment</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 20 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 020/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of Electromagnetic compatibility of technical devices”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">Electromagnetic compatibility of technical devices</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 21 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 021/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of food products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">food products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 22 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 022/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of food products in terms of their marking”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">food products in terms of their marking</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 23 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 023/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of juice products made of fruit and vegetables”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">juice products made of fruit and vegetables</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 24 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 024/2011</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of oil &amp; fat products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">oil &amp; fat products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 25 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 025/2012</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of furniture”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">furniture</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 26 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 026/2012</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of small-size crafts“</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">small-size crafts”</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 27 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 027/2012</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of certain types of specialized food products, including food for dietary treatment and protective diet”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">certain types of specialized food products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 28 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 028/2012</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of explosives and products on their basis”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">explosives and products on their basis</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 29 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 029/2012</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On requirements for food additives, flavoring agents and processing supplements”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">food additives, flavoring agents and processing supplements</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 30 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 030/2012</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On requirements for lubricants, oils and special liquids”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">lubricants, oils and special liquids</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 31 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 031/2012</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of agricultural and forestry tractors and trailers thereto”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">agricultural and forestry tractors and trailers thereto</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 32 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 032/2013</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of pressure equipment”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">pressure equipment</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 33 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 033/2013</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On the safety of milk and dairy products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">milk and dairy products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 34 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 034/2013</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of meat and meat products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">meat and meat products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 35 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТR CU 035/2014</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of tobacco products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">tobacco products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 36 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 036/2016</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On requirements for liquified petroleum gases foe use as fuel”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">liquified petroleum gases foe use as fuel</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 37 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 037/2016</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“Restricting usage of hazardous substances in the electrical goods and radio electronics”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">electrical goods and radio electronics</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 38 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 038/2016</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of amusement rides”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">amusement rides</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 39 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 039/2016</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On requirements for mineral fertilizers”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">mineral fertilizers</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 40 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">ТР EAEC 040/2016</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of fish and fish products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">fish and fish products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 41 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 041/2017 <br class="s_mobile_no">(Scheduled to take effect on June 2, 2021)</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of fish and fish products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">fish and fish products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 42 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 042/2017</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of chemical products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">chemical products</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 43 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 043/2017</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of equipment for children’s playgrounds”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">equipment for children’s playgrounds</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 44 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 044/2017</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of packaged drinking water, including natural mineral water”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">drinking water, including natural mineral water</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 45 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 045/2017</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of oil prepared for transportation and(or) use”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">oil prepared for transportation and(or) use</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 46 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 046/2018<br class="s_mobile_no">(Scheduled to take effect on January 1, 2022)</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">“On safety of natural flammable gas, prepared for transportation or usage”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">natural flammable gas, prepared for transportation or usage</p>
                                                    </th>
                                                </tr>
                                                <tr><!-- 표 내용 47 -->
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">TR EAEU 047/2018</p>
                                                    </th>
                                                    <th width="60%" style="padding: 10px">
                                                        <p align="left">"On safety of alcohol products”</p>
                                                    </th>
                                                    <th width="20%" style="padding: 10px">
                                                        <p align="left">alcohol products</p>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EAC_02.jpg" alt="TRCU EAC certification type">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">TRCU EAC certification type</h3>
                                        <p class="sub_txt">
                                            TRCU certificates are classified into two categories: Certification of Conformity (CoC) and Declaration of Conformity (DoC) according to the details.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">TRCU CoC</span>
                                                <li>This includes pressure vessels, hand tools, cranes, elevators, some machinery, test equipment, electrical and electronic products, etc., and a sample test or factory inspection is required.</li>
                                            </ul>
                                            <ul><span class="point_b2">TRCU DoC</span>
                                                <li>This is a general product with relatively low risk, and some products can be issued certificate by only document review. In the case of CoC, product tests are conducted through designated testing laboratories in principle, but a number of certification agencies are issuing certificates after acknowledging CB safety reports without additional tests.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EAC_03.jpg" alt="TRCU EAC certification validity period">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">TRCU EAC certification validity period</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>One-Shipment (Single Delivery Certification): This is mainly in cases where products are exported on a one-off basis, such as plants, and in cases where resale to third parties or other general consumers is not possible, and is valid until the contract fulfillment period indicated in the contract with the importer.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Serial Production Certification: This is advantageous in cases where continued export is expected, and one certification can result in a certificate valid for up to 5 years.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img horizon">
                                        <img src="./image/EAC_04.jpg" alt="TRCU EAC certification process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">TRCU EAC certification process</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Submit application form and product-related documents to the certification body</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Document review</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Check the type of certificate applied</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Check the Sample test and factory inspection</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Issuance of quotation and contract</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>If sample test is needed, test and test report is issued after sending sample</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>If factory inspection is necessary, proceed with the inspection</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Draft certificate issuance and customer verification</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Certificate issuance</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EAC_05.jpg" alt="TRCU EAC submission documents">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">TRCU EAC submission documents</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The documents to be submitted by the manufacturer are as follows: (Not limited to this, but can be added as needed.)</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>application</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>HS Code</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Product manual (Russian or exporting country language)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Existing test report</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Existing Certificate</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Drawing (if applicable)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Technical document (if applicable)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EAC_06.jpg" alt="Eurasian certification applicant (Eurasia Representative)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Eurasian certification applicant (Eurasia Representative)</h3>
                                        <div class="sub_txt">
                                            <p class="fc_pointer point_b2">Rosakkreditasiya Register</p>
                                            <p>TRCU certification and GOST R certification are registered on the Rosakkreditasiya website.</p>
                                            <p><a href="https://www.fsa.gov.ru/" class="link">Go to Rosakkreditasiya website (https://www.fsa.gov.ru/) ☜ Click!</a></p><br><br>
                                            <p>
                                                - <span class="nbsp">&nbsp;</span>When applying for TRCU certification, GOST R certification, etc., only companies located in Russia or other customs union countries can become the applicant. The company must be a legal entity or a private business, and the general public can’t be an applicant for certification.
                                            </p>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EAC_07.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <p class="sub_txt">
                                            GIC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">GIC complies with : </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Compliance with legal requirements</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Teamwork and solidarity among members</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Sincerity and fairness</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Social and environmental accountability</li>
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
                        <h1 class="sub_tit">Introduction of Eurasian Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Medical Device</h2>
                        <p class="sub_txt">
                            In order to register medical devices in Russia, it takes a lot of time and fee to perform separate tests according to compulsory requirements, even if tests are conducted for approval by CE or FDA. Since Russia has not entered into a certification agreement with the EU or the United States, it does not accept internationally accredited certificates such as CE certification from the EU or FDA approval from the United States.<br><br>
                            Since 2002, the Russian government has started to change the part of the test to other forms such as product safety assurance, such as production site inspection, quality system check, and post-marketing continuous management. However, such attempts were unsuccessful and, therefore, from January 1, 2013, these procedures were operated in a more robust and realistic form.
                        </p>
                        <div class="con_img">
                            <img src="./image/eur_medical_01.jpg" alt="Introduction of Eurasian Product Certification">
                        </div>
                        <p class="sub_txt">
                            The Medical Device Registration Certificate, an official document issued by Roszdravnadzor, the Russian Federation Health Supervisory Service, which provides health and social development services, has passed the preliminary evaluation of the relevant medical device and is therefore suitable for production, import, sale and use in Russia. All medical devices, whether produced in Russia or imported into Russia from abroad, must be registered.<br><br>
                            The registration certificate contains the name of the manufacturer, distributor or legal representative. If the medical device for which cancer drug registration is to be registered is composed of modules/blocks manufactured by other manufacturers, but is not a branded product, each module/block must be registered individually. Government Decree Jan. For medical devices listed in 17, 2002 N 19, if there is a registration certificate, VAT is not collected from the manufacturing company.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/eur_medical_02.jpg" alt="Classification of medical devices">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Classification of medical devices</h3>
                                        <p class="sub_txt">
                                            Nomenclature and classification of medical devices operating in Russia are listed in Order N4H “About Conformation of Nomenclature Classification of Medical Devices” and in vitro diagnostic equipment is not included. In vitro diagnostic equipment is subject to separate class regulations.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 1 – Low risk</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 2a – Medium risk</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 2b – High risk</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 3 – Top risk</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/eur_medical_03.jpg" alt="Test type of Medical device registration progress">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Test type of Medical device registration progress</h3>
                                        <p class="sub_txt">
                                            Testing according to medical device registration can only be conducted in laboratories registered under the 2011 N 352 Act of 06 May 2011, and for clinical trials, a list of institutions that can perform this function is posted on the Roszdravnadzor website.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Toxicity test</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Functional test</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Electromagnetic inspection</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Clinical trial</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/eur_medical_04.jpg" alt="Medical device registration validity period">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration validity period</h3>
                                        <p class="sub_txt">
                                            Permanent (valid until the product registered in the certificate is discontinued.)
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/eur_medical_05.jpg" alt="Medical device registration process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration process</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>The representative of the company must apply for permission to consent to sending samples to Russia by Rosdravnadzor, which is valid for 6 months. In addition, the representative must provide a description of the applied product, a contract with the laboratory, and a contract with an attorney or manufacturer.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The representative must check in to get the sample through customs. In addition, the representative must also provide samples, contracts, documents to be submitted to customs officials, and invoices.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Toxicity tests, technical tests, and electromagnetic tests are conducted in the case of electrical products at accredited laboratory.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>(Simultaneous with step 3) The company must prepare all technical documents required for registration.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>If the class of medical devices is determined, and there is no similar medical device registered in Russia, quality evaluation, efficiency and safety tests are conducted as the first step, and then clinical evaluation is carried out at two different medical institutions. Quality assessment, efficiency and safety assessments are carried out.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>The company submits the entire technical file to Rospotrebnadzor. After completing the registration of medical devices, GOST-R certificate, hygiene certificate for each item, and measuring instrument certificate according to the characteristics of the product must be secured based on the registration certificate.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/eur_medical_06.jpg" alt="Medical device registration submission documents">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration submission documents</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturer's power of attorney following the registration and certification process (requires notarization)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Proof of company registration in the home country (for example, chamber of commerce, internal FDA registration or company registration certificate, business license) must be notarized and submitted.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>9001 or ISO 13485 certificate issued by national or international organizations applicable to medical devices</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certificate of conformity according to the requirements of 93/42/EEC, declaration of conformity, free-selling certificate, FDA certification document, medical device certification document for national or other countries. (Must be notarized and submitted)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Test reports proving safety (IEC 60601-1, IEC 60601-1-2, ISO 10993, etc.)-Accurate reports can help to simplify work during technical inspections in laboratory.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Toxic Safety / Biocompatibility Safety Test Report</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Providing samples for technical and toxicity tests</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical device new registration application or renewal registration application. The application must use the letterhead of the applicant (a legal entity authorized to carry out registration in Russia). The application must include a description of all components and parts included in the medical device or device. Applications must be submitted in Russian.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Submit a power of attorney for the appointment of a legal representative to perform the application. The manufacturing company must issue a power of attorney to a legal entity with registration authority (address to the head of the legal entity), and must be notarized in the country of origin of the manufacturer. It must also be translated into Russian and notarized by the Russian consulate in your country. The power of attorney must stipulate that the manufacturer must entrust the applicant to sign a contract to perform registration of medical devices/equipment, perform consultation and professional work, and obtain a registration certificate.</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul>
                                                <li><span class="txt_arrow"></span> <span class="nbsp">&nbsp;</span>The registration process does not require Good Manufacturing Practices (GMP) audits. However, legislation to introduce these audits will be implemented in the near future.</li>
                                                <li><span class="txt_arrow"></span> <span class="nbsp">&nbsp;</span>In general, the fee of registration depends on the scope of testing required.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/eur_medical_07.jpg" alt="Medical device registration confirmation">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration confirmation</h3>
                                        <div class="sub_txt">
                                            <p class="point_b2">You can check the registration status of medical devices on the website of Rospotrebnadzor in the Russian version.</p><br>
                                            <p><a href="http://roszdravnadzor.ru/registration/mi/login" class="link">☞ Go to Rospotrebnadzor website ☜</a></p><br><br>
                                            <p>
                                                - <span class="nbsp">&nbsp;</span>For medical devices of Class 1 and 2a, if the products are similar (same grade, applied in the same way, same efficiency), both products are registered on the basis of equivalent or technical testing, safety.
                                            </p>
                                            <p>
                                                -  <span class="nbsp">&nbsp;</span>All other products including Class 2b, 3, 1 and 2a (if no similar product has already been registered) are registered on the basis of technical tests, safety assessments, clinical and medical tests to confirm effectiveness and safety.
                                            </p>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.
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
                        <h1 class="sub_tit">Introduction of Eurasian Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Food</h2>
                        <p class="sub_txt">
                            If you wish to export food to the Eurasian region, you must obtain a certification proving compliance with the applicable technical regulations. And the conformity mark (EAC) is affixed on the product, packaging or attached documents to export to that country.<br><br>
                            Exporting to countries that have joined the Economic Union/Customs Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia) requires EAC certification or GOST certification in accordance with the Technical Regulation of Customs Union (TRCU). Or exporting to other Eurasian countries such as Uzbekistan requires national certification.<br><br>
                            Certification for food is divided into EAC, GOST and State Registration Certificate
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/food_01.jpg" alt="Eurasian Product Certification(EAC)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Eurasian Product Certification (<span class="fc_pointer">EAC</span>)</h3>
                                        <p class="sub_txt">
                                            TRCU abbreviated for Technical Regulation of Customs Union and stands for the technical regulations of the Customs Union centered on Russia.<br><br>
                                            TRCU is an integrated certification system that began with the Eurasian Customs Union “EACU, Eurasian Customs Union” formed by Russia, Kazakhstan and Belarus in 2010, and entered into force in the Eurasian Economic Union “EEU, Eurasian Economic Union” in 2015.<br><br>
                                            Currently, the Eurasian Customs Union/Economic Union consists of five countries: Russia, Kazakhstan, Belarus, Kyrgyzstan, and Armenia, and TRCU certification follows the stipulated certification procedure according to the decision of the Eurasian Economic Commission.<br><br>
                                            The EAC mark is affixed on the certificate, which means Eurasian Conformity.
                                        </p>
                                        <div class="con_img">
                                            <img src="./image/food_02.jpg" alt="TRCU EAC applied items (food)">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1) TRCU EAC applied items (food)</span>
                                                <li>- <span class="nbsp">&nbsp;</span>TR СU 015/2011 On safety of grain</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 021/2011 On safety of food product</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR СU 022/2011 On food products in terms of its marking</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 023/2011 On juice production of vegetables and fruits</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 024/2011 On oil and fat products</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 027/2012 On safety of certain types of specialized food products, including foods for dietary treatment and dietary preventive nutrition</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 029/2012 Requirements for the safety of food additives, flavorings and technological aids</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 033/2013 On safety of milk and dairy products</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 034/2013 On safety of meat and meat products</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 040/2016 On safety of fish and fish products</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 044/2017 On the safety of packaged drinking water, including natural mineral water</li>
                                                <li>- <span class="nbsp">&nbsp;</span>TR CU 047/2018 On safety of alcohol products</li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/food_03.jpg" alt="EAC certificate type">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">2) EAC certificate type</span>
                                                <li>- <span class="nbsp">&nbsp;</span>This is a general product with relatively low risk, and some products can be issued certificate by only document review. Food is subject to the EAC DoC.</li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/food_04.jpg" alt="EAC certification information">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">3) EAC certification information</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Documents to be submitted: application form, product manual, HS Code, drawing, technical document, test report, certificate (Documents to be submitted must be written in Russian)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Sample test: Depending on the product, it is decided whether to submit and test the sample. </li>
                                                <li>- <span class="nbsp">&nbsp;</span>Factory inspection: None </li>
                                                <li>- <span class="nbsp">&nbsp;</span>Duration: 2 weeks (Excluding sample delivery and sample testing period) </li>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate validity period: up to 5 years (Serial Production Certification)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/food_05.jpg" alt="Eurasian Product Certification(GOST)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Eurasian Product Certification (<span class="fc_pointer">GOST</span>)</h3>
                                        <p class="sub_txt">
                                            GOST is a national technical standard specified by the Euro-Asian Council for Standardization, Metrology and Certification (EASC), an abbreviation of GOsudarstvennyy STandart, which means federal standard in Russian.<br><br>
                                            Currently, GOST certificates issued by country and the subject of issuing certification bodies are different, so each country's GOST certificate is a different certificate, and it is classified as GOST-R in Russia and GOST-K in Kazakhstan.<br><br>
                                            After the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the proportion of GOST certification in the country has decreased significantly compared to the past. However, GOST certification is still required for import customs clearance for compulsory certification items that have not yet been negotiated between customs alliances.
                                        </p>
                                        <div class="con_img">
                                            <img src="./image/food_06.jpg" alt="GOST applied items (food)">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1) GOST applied items (food)</span>
                                                <li>
                                                    After the introduction of the integrated certification system that took effect between the countries of the Eurasian Customs Union such as meat, fish, shellfish, vegetables/fruits, grains, citrons, alcohol/drinks, etc., the share of GOST certifications in Russia has decreased significantly compared to the past.<br><br>
                                                    However, compulsory certification items that have not yet been negotiated between allies must be certified by GOST.<br><br>
                                                    In addition, EAC-certified companies may additionally apply for a voluntary GOST certificate for customer promotion and trust.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/food_07.jpg" alt="GOST certificate type">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">2) GOST certificate type</span>
                                                <li>- <span class="nbsp">&nbsp;</span>GOST DoC (Declaration of Conformity)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>GOST Voluntary<br><br>
                                                GOST Voluntary is a certificate that proves that the product has been made in accordance with applicable regulations and guidelines, although it is not mandatory to obtain GOST certification.<br><br>The additional acquisition of the GOST Voluntary Certificate will have the expected effect of more clearly demonstrating your management capabilities, thus securing the effect of increasing exports.</li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/food_08.jpg" alt="GOST certification information">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">3) GOST certification information</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Documents to be submitted: application form, product manual, HS Code, drawing, technical document, Existing test report, Existing certificate (Documents to be submitted must be written in Russian)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Sample test: Depending on the product, it is decided whether to submit and test the sample.</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Factory inspection: None</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Duration: 2 weeks (Excluding sample delivery and sample testing period)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Certificate validity period: up to 3 years (Serial Production Certification)</li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/food_09.jpg" alt="Certification process">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">4) Certification process</span>
                                                <p>TRCU EAC, GOST and State Registration Certificate certification process</p><br>
                                                <li>1. <span class="nbsp">&nbsp;</span>Submit application form and product-related documents to the certification body</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Document review</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Check the type of certificate applied</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Check the Sample test and factory inspection</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Issuance of quotation and contract</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>If sample test is needed, test and test report is issued after sending sample</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>If factory inspection is necessary, proceed with the inspection</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Draft certificate issuance and customer verification</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Certificate issuance</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/food_10.jpg" alt="State Registration Certificate">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1"><span class="fc_pointer">State Registration Certificate</span></h3>
                                        <p class="sub_txt">
                                            The hygiene registration certificate issued by each country has been integrated into one certificate according to the Decision of CU commission No.299 adopted in 2010 by the Customs Union.<br><br>
                                            One certificate can be used in all 5 countries of the Eurasian Customs Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia).
                                        </p>
                                        <div class="con_img">
                                            <img src="./image/food_11.jpg" alt="Food products to which national hygiene registration is applied">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">1) Food products to which national hygiene registration is applied</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Mineral water, bottled water, soft drinks, alcohol-including low alcohol and tonic drinks</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Baby food, food for pregnant and breastfeeding women, dietary products, food for athletes, biologically active food additives, organic products, specialty foods including supplements</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Food additives (plant extracts, aromas, etc.)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Food produced using genetically modified (transgenic) organisms</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Materials, devices, equipment and other technical products for use in drinking water supply</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Food contact products (excluding cutlery, tableware, and manufacturing equipment)</li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/food_12.jpg" alt="National hygiene registration certification information">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">2) National hygiene registration certification information</span>
                                                <li>- <span class="nbsp">&nbsp;</span>Sample test: Depending on the product, sample submission and testing are decided.</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Factory inspection: Depending on the product, factory inspection may be required, and inspection M/D and fee are determined through quotation.</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Duration: 4~6 weeks (excluding sample sending and sample testing period)</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Validity period of certificate: 5 years</li>
                                                <li>- <span class="nbsp">&nbsp;</span>Certification fee: It is different for each product, so consultation is required for accurate quotation.</li>
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
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <p class="sub_txt">
                                            GIC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Providing competitive services based on knowledge and technology secured through certification projects in various fields</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Competitive certification fee</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Minimum time required through rapid certification service</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Provides One Stop Service for various system and product certifications</li>
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
                        <h1 class="sub_tit">Introduction of Eurasian Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Cosmetics</h2>
                        <p class="sub_txt">
                            Companies wishing to export products to the Eurasian region must obtain certification proving conformity to the applicable technical regulations and mark the conformity mark on the product, packaging or attached documents to be exported to that country.<br><br>
                            Exporting to countries that have joined the Economic Union/Customs Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia) requires EAC certification or State Registration Certificate in accordance with the TRCU regulation. Exporting to other Eurasian countries such as Uzbekistan requires national GOST certification.<br><br>
                            The certification for cosmetics is divided into EAC, GOST and State Registration Certificate according to product characteristics.
                        </p>
                    </div>
                    <div class="con_img">
                        <img src="./image/cosmetics_01.jpg" alt="Cosmetics">
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/cosmetics_02.jpg" alt="EAC">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">EAC</h3>
                                        <div class="sub_txt">
                                            TRCU is an integrated certification system that began with the Eurasian Customs Union “EACU, Eurasian Customs Union” formed by Russia, Kazakhstan, and Belarus in 2010 and entered into force in the Eurasian Economic Union “EAEU, Eurasian Economic Union” in 2015.<br><br>
                                            <ul>
                                                <li>&#10020; TRCU EAC applied items (cosmetics) : <span class="nbsp">&nbsp;</span>TR СU 009/2011 On safety of cosmetics and perfumes</li>
                                                <li>&#10020; EAC certificate type (cosmetics) : <span class="nbsp">&nbsp;</span>DoC (Declaration of Conformity): This is a general product with relatively low risk, and some products can be issued certificate by only document review. Cosmetics require EAC DoC.</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Certification Information</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted: application form, product manual, HS Code, test report, certificate, etc. (Documents to be submitted must be written in Russian)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Sample test: Depending on the product, it is decided whether to submit a sample or test. For cosmetics, sample tests are conducted</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Factory inspection: None</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Duration: 2 weeks (Excluding sample sending and sample testing period)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certificate validity period: 5 years (Serial Production Certification)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certification fee: It is different for each product, so consultation is required for accurate quotation.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/cosmetics_03.jpg" alt="GOST">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GOST</h3>
                                        <p class="sub_txt">
                                            GOST is a national technical standard specified by the Euro-Asian Council for Standardization, Metrology and Certification (EASC), an abbreviation of GOsudarstvennyy STandart, which means federal standard in Russian.<br><br>
                                            Currently, GOST certificates issued by country and the subject of issuing certification bodies are different, so each country's GOST certificate is a different certificate, and it is classified as GOST-R in Russia and GOST-K in Kazakhstan.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">GOST applied items (cosmetics)</span>
                                                <li>After the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the proportion of GOST certification in the country has decreased significantly compared to the past. However, GOST certification is still required for import customs clearance for compulsory certification items that have not yet been negotiated between customs alliances.<br><br>
                                                EAC DoC or State Registration Certificate (National Hygiene Registration) is mandatory when exporting cosmetics to countries belonging to the Eurasian Economic Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia), and GOST certification is not included. However, when exporting to Eurasian countries (such as Uzbekistan) other than the countries of the Economic Union, GOST certification for each country or State registration within the country is required.</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">GOST certificate type</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GOST DoC (Declaration of Conformity)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GOST Voluntary</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GOST Voluntary is a certificate that proves that the product has been made in accordance with applicable regulations and guidelines, although it is not mandatory to obtain GOST certification. The additional acquisition of the GOST Voluntary Certificate will have the expected effect of more clearly demonstrating your management capabilities, thus securing the effect of increasing exports.</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Certification Information</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted: application form, product manual, HS Code, test report, and certificate (Documents to be submitted must be written in Russian)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Sample test: Depending on the product, it is decided whether to submit or test the sample. (In the case of GOST Voluntary certification, a sample test of cosmetics is performed, but since it was conducted in the EAC certification process, no additional test is required)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Factory inspection: None</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Duration: 2 weeks (Excluding sample sending and sample testing period)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certificate validity period: 3 years (Serial Production Certification)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certification fee: It is different for each product, so consultation is required for accurate quotation.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/cosmetics_04.jpg" alt="State Registration Certificate">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">State Registration Certificate</h3>
                                        <p class="sub_txt">
                                            The hygiene registration certificate issued by each country was integrated into one in accordance with the Decision of CU commission No.299 adopted in 2010 by the Customs Union.<br><br>
                                            One certificate can be used in all countries of the Eurasian Economic Union (Russia, Kazakhstan, Belarus, Kyrgyzstan, Armenia).
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Products subject to State Registration Certificate (cosmetics)<br>Cosmetics that are classified as special cosmetics according to their ingredients, functions and purposes must obtain a national hygiene registration certificate.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Tanning products</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Whitening products</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Products for tattoos</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Intimate care</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Perfume or cosmetics intended to protect the skin from the effects of harmful factors by individuals</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Infant cosmetics (Products for children under 14)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Dyeing and Bleaching Products</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Products for perm, hair straights</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Perfume and cosmetics using nanomaterials (nanomaterials: insoluble or in-body stability substance, internal or Exterior particle size specially manufactured within a range of 1 to 100 nm)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Brushing products</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Pilling agent (chemical filling). Products for removing surface cells from the epidermis using exfoliating agents)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Fluoride oral hygiene products with fluorine content of 0.15% or higher (liquid products for oral hygiene of oral hygiene are 0.05% or higher)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Contains zinc peroxide and peroxide elements concentrated in hydrogen peroxide or whitening products with hydrogen oxide. Other components that produce hydrogen peroxide (0.1-6.0%)</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">State Registration Certificate Certification Information</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Documents to be submitted: Application form, product manual, MSDS, copy of product and label (photo), test report, certificate (documents must be written in Russian)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Sample test: Required</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Factory inspection: Depending on the product, factory inspection may be required, and inspection M/D and fee are determined through quotation.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Duration: 4~6 weeks (Excluding sample sending and sample testing period)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certificate validity period: 5 years</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certification fee: It is different for each product, so consultation is required for accurate quotation.</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">TRCU EAC, GOST and State Registration Certificate certification process</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Submit application form and product-related documents to the certification body</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Document review</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Check the type of certificate applied</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Issuance of quotation and contract</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>If sample test is needed, test and test report is issued after sending sample</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Certificate issuance</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/cosmetics_05.jpg" alt="Cosmetic test">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Cosmetic test</h3>
                                        <div class="sub_txt">
                                            Product samples submitted for certification or national state registration are tested by accredited laboratories in Eurasian countries for : <br><br>
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>physical and chemical analysis test</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>microorganism detection test</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>toxicity test</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>hygiene inspection</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>other necessary tests and tests</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/cosmetics_06.jpg" alt="Why is it important?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Why is it important?</h3>
                                        <p class="sub_txt">
                                            Companies wishing to export products to the Eurasia region must obtain certification proving conformity to the applicable technical regulations and mark the conformity mark on the product, packaging or attached documents to be exported to that country.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <p class="sub_txt">
                                            GIC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">GIC complies with : </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Compliance with legal requirements</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Teamwork and solidarity among members</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Sincerity and fairness</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Social and environmental accountability</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con2-5" class="roll roll05"><!-- 4depth 컨텐츠 02-5 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of Eurasian Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Medicine</h2>
                        <p class="sub_txt">
                            In accordance with Russian Federal Law (Pharmaceutical Distribution Act: #61-FZ / 2010.04.12), all pharmaceuticals and medical substances imported into the Russian Federation must obtain an import license and are subject to federal state control over the distribution of pharmaceuticals. State control bodies are territorial authorities under the Health Supervisory Service of the Russian Federation (ROSZDRAVNADZOR) and constituent bodies of the Russian Federation. The purpose of state supervision is to prevent, detect and contain violations of the requirements of the legislation of the Russian Federation in the field of drug distribution.
                        </p>
                    </div>
                    <div class="con_img">
                        <img src="./image/medicine_01.jpg" alt="Medicine">
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/medicine_02.jpg" alt="The need to comply with the Drug Distribution Act (#61-FZ)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The need to comply with the Drug Distribution Act (#61-FZ)</h3>
                                        <div class="sub_txt">
                                            According to the current law, violations of the law on the distribution of drugs are subject to penalties under the laws of the Russian Federation.
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The relevant laws are : </span>
                                                <li><span class="point_b2">1. Resolution of the Government of the Russian Federation Article 5.1.4</span>
                                                Health monitoring service (No323, 2004/06/30). State oversight includes the organization and conduct of inspections for compliance with the circulation of pharmaceuticals with requirements for the distribution, transportation, dispensing, sale of pharmaceuticals, and use of pharmaceuticals.</li><br><br>
                                                <li><span class="point_b2">2. Federal Law Regulations (#294-F3, 2008/12/26)</span>
                                                It is about the protection of the rights of corporations and private companies in the implementation of state control (supervision) and local governments. Monitoring the integrity and quality of state supervision includes conducting inspections, identifying and eliminating violations of the applicant's rights, violating essential requirements, applying measures to contain the violation, and eliminating the consequences of such violations, reviewing, making decisions and preparing responses to the applicant's appeal.<br><br>Therefore, if your company wants to distribute medicines in Russia, you must comply with the Drug Distribution Act and other relevant laws.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/medicine_03.jpg" alt="Product license registration">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Product license registration</h3>
                                        <p class="sub_txt">
                                            In order to register an import license, product registration must be preceded to the Russian Federation Health Supervisory Service (ROSZDRAVNADZOR). Product registration requires registration review and clinical trials conducted by the Federal Health Supervisory Service. The registration review is determined within the 210-day period excluding the clinical trial period, and document review, production process review, and sampling type test are required.<br><br>
                                            In the case of clinical trials, the requirements for preclinical and clinical trials established by federal law of drug distribution and other regulatory laws of Russia must be complied. In accordance with Article 4, Paragraph 40 of the Drug Distribution Act (#61-FZ/2010.04.12), preclinical testing is defined as biological, microbiological, immunological, toxicological, physical testing, and stability testing of pharmaceuticals by other scientific evaluation methods. For clinical trials, this includes research into the diagnosis, treatment, prevention and pharmacological properties of a drug.<br><br>
                                            This includes interactions with other pharmaceuticals and foods, not limited to processes such as absorption, allocation and transformation by scientific methods.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/medicine_04.jpg" alt="Application for import permit">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Application for import permit</h3>
                                        <p class="sub_txt">
                                            After the drug is registered with the Federal Health Supervisory Service, you can apply for an import license, and all drug certifications that are initially registered are valid for five years. After that, upon renewal, the certificate of the approved drug is indefinitely valid.<br><br>
                                            In addition to issuing a drug registration certificate, it is also necessary to obtain a Certificate of Conformity or a Declaration of Conformity according to Russian certification GOST R.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/medicine_05.jpg" alt="Products subject to certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Products subject to certification</h3>
                                        <p class="sub_txt">
                                            According to the legislation of the Russian Federation government (#982, 2009.12.01), the items that require certification are immunoglobulins, gamma globulin, serum, toxins, medical and veterinary vaccines. Items subject to the declaration of conformity include drugs, pharmaceutical chemicals, coenzymes, enzymes, amino acids, vitamins, organic products, and veterinary serum.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/medicine_06.jpg" alt="prospects of expanding Eurasian pharmaceutical certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Benefits of pharmaceutical certification : <br>prospects of expanding Eurasian pharmaceutical certification</h3>
                                        <p class="sub_txt">
                                            Eurasian countries that require drug certification are expected to increase further. Currently, the member countries of the Eurasian Economic Union are in the process of forming a pharmaceutical market community as in the case of medical devices.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>On December 23, 2014, Russia, Belarus and Kazakhstan signed an agreement on common rules and principles for drug distribution within the EEC.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>and applied about 26 regulations including No. 78 Drug Registration Inspection Regulation (November 3, 2016) (Applicable date: 2017.05~)</li><br><br>
                                                <span class="point_b2">Therefore, the effectiveness and application of drug certification will be expanded.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/medicine_07.jpg" alt="EAEU drug distribution regulation">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">EAEU drug distribution regulation</h3>
                                        <p class="sub_txt">
                                            On May 5, 2017, the Eurasian Economic Commission announced that the 26-document EAEU drug distribution regulation came into effect on May 6, 2017. Transnational regulations apply to drug development, preclinical and clinical research, quality control, registration, production and distribution, while national regulations include preclinical and clinical trials, pricing, retail, public procurement, cost reimbursement, and advertising.<br><br>
                                            There is a grace period until December 31, 2020, so if you need a registration certificate, you can choose between EAEU and national regulatory systems to apply. If applying for registration before December 31, 2018, EAEU manufacturers were required to submit according to the country-specific regulatory system instead of the EAEU GMP certificate. All drugs registered in accordance with the regulations prior to December 31, 2020 must be re-registered in accordance with the regulations of each market by December 31, 2025.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/medicine_08.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is providing certification services for medicines in cooperation with RUS-TEST PACIFIC, an Eurasian regional certification service provider.</li>
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
        
<!--===========================================================================================================================-->  

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">GOST-R</a></li>
                    <li><a data-slide-index="1">Medical Device Registration</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con3-1" class="roll roll01 on"><!-- 4depth 컨텐츠 03-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of Russian product certification</h1>
                        <h2 class="sub_tit2 fc_pointer">GOST-R </h2>
                        <p class="sub_txt">
                            GOST is a national technical standard specified by the Euro-Asian Council for Standardization, Metrology and Certification (EASC) and stands for GOsudarstvennyy STandart, which means federal standard in Russian.<br><br>
                            As the subject of the issuing certification body is different from the GOST certificate currently issued by country, each country's GOST certificate is a different certificate. Russia is called GOST-R, and Kazakhstan is called GOST-K.<br><br>
                            Since the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the share of GOST-R certification in Russia has decreased significantly compared to the past. However, GOST-R certification is still required for import customs clearance for compulsory certification items that have not yet been negotiated between customs alliances.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/GOST-R_01.jpg" alt="GOST R Certificate type">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GOST R Certificate type</h3>
                                        <p class="sub_txt"><span class="point_b2">GOST R CoC</span>
                                            It is issued for objects that are obligated to obtain certification of conformity. GOST R CoC is a certificate that certifies that items and manufacturing process lines conform to Russian safety regulations for goods imported into Russia, and the issuance of GOST R CoC must be made by an accredited certification body.
                                        </p>
                                        <p class="sub_txt"><span class="point_b2">GOST R DoC</span>
                                            GOST R DoC is issued for objects that are obligated to receive a declaration of conformity. The Declaration of Conformity (GOST R DoC) is a simplified type of certificate compared to the Mandatory Certificate of Conformity (GOST R CoC).
                                        </p>
                                        <p class="sub_txt"><span class="point_b2">GOST Voluntary</span>
                                            GOST Voluntary is not a product that is obligated to obtain GOST certification, but it is a certificate that proves that the product is made in accordance with applicable regulations and guidelines. If a company receiving EAC certification additionally applies for GOST Voluntary, it is a company's publicity, securing trust, etc. Has the effect of.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/GOST-R_02.jpg" alt="GOST R certificate validity period">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GOST R certificate validity period</h3>
                                        <p class="sub_txt">
                                            GOST R certification is valid for a minimum of 1 year and a maximum of 3 years.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/GOST-R_03.jpg" alt="GOST R certification procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GOST R certification procedure</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Submit application form and product-related documents to the certification body</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Document review</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Check the type of certification applied</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Check whether sample test and factory audit is necessary</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Issuance of quotation and contract</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>If a sample test is needed, the test proceeds after sending the sample and the test report is issued</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>If factory audit is needed, proceed with audit</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Draft certificate issuance and customer verification</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Certificate issuance</li>
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
                                        <h3 class="point_b1">Documents to be submitted for GOST R certification</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Application</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>HS Code</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Product manual (Russian or exporting country language)</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Existing test report</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Existing certificate</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Drawing (if applicable)</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Technical documentation (if applicable)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/GOST-R_04.png" alt="Why is it important?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Why is it important?</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>After the introduction of the EAC, an integrated certification system that took effect between customs alliance countries, the share of GOST-R certification in Russia has decreased significantly compared to the past. However, compulsory certification items that have not yet been negotiated between the Customs Union countries still require GOST-R certification for import customs clearance.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Therefore, companies that wish to export goods to the Russian region must obtain a GOST R certification to demonstrate compliance with products that are subject to compulsory certification that have not been negotiated between the Customs Union countries. Only when the product, packaging, or attached document shows the GOST R conformity mark, can it be exported to the relevant country.</li>
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
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.
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
                        <h1 class="sub_tit">Introduction of product certification in Russia</h1>
                        <h2 class="sub_tit2 fc_pointer">Medical device registration in Russia</h2>
                        <p class="sub_txt">
                            The medical device registration certificate, an official document issued by the Russian Federation Health Supervisory Authority, Roszdravnadzor, authorizes the relevant medical device to be suitable for production, import, sale and use in Russia because it has passed a preliminary assessment. Not only medical devices produced in Russia, but all medical devices imported into Russia from abroad must be registered.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/mdr_russia_01.jpg" alt="Classification of medical devices">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Classification of medical devices</h3>
                                        <p class="sub_txt">
                                            Names and classes for medical devices operating in Russia are listed in [Order N4H “About Conformation of Nomenclature Classification of Medical Devices”], and in vitro diagnostic equipment is not included. In vitro diagnostic equipment is subject to separate class regulations.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 1 – Low risk</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 2a – Medium risk</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 2b – High risk</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Class 3 – Top risk</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/mdr_russia_02.jpg" alt="Medical device registration progress test type">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration progress test type</h3>
                                        <p class="sub_txt">
                                            Testing according to medical device registration can only be conducted in laboratories registered in accordance with the 06.05.2011 N 352 Act, and for clinical trials, a list of institutions that can perform this function is posted on the Roszdravnadzor website.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Toxicity test</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Functional test</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Electromagnetic inspection</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Clinical trial</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/mdr_russia_03.jpg" alt="Medical device registration validity period">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration validity period</h3>
                                        <p class="sub_txt">
                                            Permanent(valid until the product registered in the certificate is discontinued)
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/mdr_russia_04.jpg" alt="Medical device registration process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration process</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>The agent of the enterprise must apply for a permit that Rosdravnadzor agrees to send the samples to Russia, which is valid for 6 months. In addition, the agent must provide a description of the applied product, a contract with the laboratory, and a contract with an attorney or manufacturer.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The agent must go through the procedures to get the sample through customs. In addition to the samples, the representative must provide contracts, documents to be submitted to customs officials, and invoices.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Toxicology tests, technical tests and electromagnetic wave tests of electrical products are conducted at accredited laboratory.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>(Simultaneous with step 3) The company must prepare all technical documents required for registration.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The medical device is graded and, if there is no similar medical device registered in Russia, quality assessment, efficiency and safety tests are carried out as the first step. After that, clinical evaluations are conducted at two different medical institutions. A two-step quality assessment, efficiency and safety assessment are performed on medical devices.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>The entity submits the entire technical file to Rosdravnadzor. After completing the medical device registration, you must obtain the "GOST-R" certificate based on the registration certificate, the hygiene certificate according to the item, and the measuring instrument certificate according to the characteristics of the product.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/mdr_russia_05.jpg" alt="Medical device registration submission documents">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device registration submission documents</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturer's power of attorney according to the registration and certification process (requires notarization)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certificates of company registration in the home country (eg, chamber of commerce, internal FDA registration, company registration certificate, business license) must be notarized and submitted</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 9001 or ISO 13485 certificate issued by domestic or international organizations applicable to medical devices</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Certificate of conformity in accordance with the requirements of 93/42/EEC, declaration of conformity, free-selling certificate, FDA certification document, medical device certification document for domestic or other countries. (Must be notarized and submitted)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Test report proving safety (IEC 60601-1, IEC 60601-1-2, ISO 10993, etc.)-Accurate test report can help to simplify work during technical inspection at the laboratory.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Toxic safety/biocompatibility safety test report</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Providing samples for technical and toxicity testing</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical device new registration application or renewal registration application. The application must use the letterhead of the applicant (a legal entity authorized to conduct registration in Russia). The application must include a description of all components and parts included in the medical device or device. Applications must be submitted in Russian.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Submit a power of attorney for appointment of a legal representative to perform the application. The manufacturing company must issue a power of attorney to a legal entity with registration authority (address to the head of the legal entity), and must be notarized in the country of origin of the manufacturer. It must also be translated into Russian and notarized by the Russian consulate in your country. The power of attorney must state that the manufacturer must entrust the applicant to sign a contract and receive a registration certificate to perform the registration of medical devices/equipment, consultation and professional work.</li><br><br>
                                                <span class="point_b2">The registration process does not require Good Manufacturing Practices (GMP) audits. However, legislation to introduce such audits will be implemented in the near future.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/mdr_russia_06.jpg" alt="Why is it important?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Why is it important?</h3>
                                        <div class="con_txt">
                                            <ul>
                                                All medical devices produced abroad and imported into Eurasia, as well as medical devices produced in Eurasia, must be registered with the Federal Health Supervisory Service. Medical devices can be imported and sold in Eurasia only after passing the pre-evaluation and registration. In order to register medical devices in Russia, even if tests were performed for approval by CE or FDA, a separate test, etc., conducted at an Eurasian authorized laboratory must be performed according to mandatory requirements. Russia does not accept internationally recognized certifications such as EU CE certification or US FDA approval, as Russia has not entered into a certification agreement with the EU or the US.
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
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC cooperates with the RUS-TEST PACIFIC certification body to provide the best competitive value to customers and stakeholders, and is reborn as a global certification body through continuous shared growth.
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
 
        
<!--===========================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 04 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul class="over">
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">FDA</a></li>
                    <li><a data-slide-index="1">Medical Device</a></li>
                    <li><a data-slide-index="2" class="over">Electronic and Radiation Machine</a></li>
                    <li><a data-slide-index="3">Medicine</a></li>
                    <li><a data-slide-index="4">Food and Beverage</a></li>
                    <li><a data-slide-index="5">Dietary Food</a></li>
                    <li><a data-slide-index="6">Cosmetic</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con4-1" class="roll roll01 on"><!-- 4depth 컨텐츠 04-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of U.S. product certification</h1>
                        <h2 class="sub_tit2 fc_pointer">FDA</h2>
                        <p class="sub_txt">
                            The U.S. Federal Food and Drug Administration (FDA) is one of the U.S. Department of Health and Human Service's oldest and most trusted consumer protection agencies. In Korea, it is the Ministry of Food and Drug Safety.<br><br>
                            When foreign companies export to the United States, products from US customs are often detained (seized) due to unfamiliarity with FDA regulations, of which food, cosmetics and medical devices account for most.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_01.jpg" alt="FDA role">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA role</h3>
                                        <p class="sub_txt">
                                            The most important role of the FDA is to protect public health by managing the safety and efficient production, distribution, and sales of various products, and to continuously monitor the safety of products even while consumers are using them.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_02.jpg" alt="FDA investigation">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA investigation</h3>
                                        <p class="sub_txt">
                                            FDA's investigation, analysis, research, and regulatory compliance monitoring are under the jurisdiction of the National Medical Device and Radiation Protection Center, the Biology and Research Center, the Drug Evaluation and Research Center, the Food Safety and Nutrition Center, and the Veterinary Medicine Center.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img horizon">
                                        <img src="./image/FDA_03.jpg" alt="FDA enforcement rules">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA enforcement rules</h3>
                                        <p class="sub_txt">
                                            FDA performs three main tasks: analysis, surveillance, and assessment. Analysis is a task to take precautions that can be taken during customs clearance before a new product is shipped to the US market, and the monitoring task is to inspect the production plant and facilities of the product, and is performed by front-line inspectors. It is an institution that can take stronger sanctions against regulatory violations such as mixing of impurities or false labeling.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_04.png" alt="FDA regulations and standards">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA regulations and standards</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">FDA Food Standards</span> : Detailed regulations for food and these products.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Good Manufacturing Practices (CGMP)</span> : Quality control guidelines such as hygiene, inspection, and regulations for the design, manufacture and sale of food and products.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">New Drug Regulation</span> : Regulations on approval of new drugs and on the continued safety and efficacy of drugs</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con4-2"  class="roll roll02"><!-- 4depth 컨텐츠 04-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of U.S. product certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Medical device</h2>
                        <p class="sub_txt">
                            The owner or operator of a business (facility or equipment) involved in the production or distribution of medical devices intended for use in the United States must annually register the business with the U.S. Food and Drug Administration. This process is called the facility registration process.<br><br>
                            The US Congress has given the Food and Drug Administration authority to collect annual tuition fees from businesses. The details of who you must register and pay for the facility are described in detail in the document “Subject to Registration and Payment”. The annual registration fee is collected for SMEs and all other businesses in the same amount.<br><br>
                            Most of the business registration targets are the device registration targets, and information on what production activities are in charge of the production of products being manufactured on site must also be provided. If the product is subject to premarket approval or premarket declaration in the United States, the owner or operator of the business must complete the relevant procedures (510(k), PMA, PDP, HDE).
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Medical_01.jpg" alt="Conformity procedure">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Conformity procedure</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical devices are classified according to the risks they pose to patients. Depending on the type of product and grade, the conformity assessment process will be categorized as 510(k) (premarket notification and specific management) and Premarket Approval (PMA) registration.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FDA applies one of three classes based on regulations required to ascertain safety and effectiveness.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Additionally, classification is evaluated based on risk. In other words, the risk to patients and users of medical devices is an important factor in assigning ratings. Class 1 includes devices with the least risk and class 3 includes devices with the highest risk.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Medical_02.jpg" alt="Classification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Classification</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    <span class="point_b2">[Class 1 medical device]</span>
                                                    - <span class="nbsp">&nbsp;</span>Class 1 refers to the class of medical devices that are subject to general management only.<br>
                                                    - <span class="nbsp">&nbsp;</span>Product types: band, surgical gloves, surgical knife, surgical brush<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">[Class 2 medical device]</span>
                                                    - <span class="nbsp">&nbsp;</span>Class 2 refers to the class of medical devices that are subject to special management or will eventually be subject to special management.<br>
                                                    - <span class="nbsp">&nbsp;</span>Product types: condoms, contact lenses, infusion pumps, bone powder, tooth material<br><br>
                                                </li>
                                                <li>
                                                    <span class="point_b2">[Class 3 medical device]</span>
                                                    - <span class="nbsp">&nbsp;</span>Class 3 refers to the class of medical devices that require or will require Premarket Approval in accordance with Section 515 of the Act.
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
                                        <img src="./image/Medical_03.jpg" alt="Premarket Approval(PMA)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Premarket Approval</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical devices are classified according to the risks they pose to patients. Depending on the type of product and grade, the conformity assessment process will be categorized as 510(k) (premarket notification and specific management) and Premarket Approval (PMA) registration.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FDA applies one of three classes based on regulations required to ascertain safety and effectiveness.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Additionally, classification is evaluated based on risk. In other words, the risk to patients and users of medical devices is an important factor in assigning ratings. Class 1 includes devices with the least risk and class 3 includes devices with the highest risk.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Medical_04.jpg" alt="How to register medical devices (510k)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">How to register medical devices (510k)</h3>
                                        <p class="sub_txt">
                                            &#10020; <span class="nbsp">&nbsp;</span>Premarket Notification-510(k) / Applied to 1st and 2nd class medical devices.<br><br>
                                            &#10020; <span class="nbsp">&nbsp;</span>Class 1 medical devices are 510k with the exception of some Class 1 medical devices. And Class 2 medical devices must submit a premarket notification to the FDA.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">Premarket notification includes facility registration.</span>
                                                <li>
                                                    ① <span class="nbsp">&nbsp;</span>Audit period
                                                    <ul>
                                                        <li>- <span class="nbsp">&nbsp;</span>About 90 to 180 days (Sometimes it takes a year of audit.)</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    ② <span class="nbsp">&nbsp;</span>Premarket notification contents
                                                    <ul>
                                                        <li>- <span class="nbsp">&nbsp;</span>Fill in the applicant's name, address, manufacturer, sterilization facility address, registration number, and application date.</li>
                                                        <li>- <span class="nbsp">&nbsp;</span>Product description: product name, classification, appearance and structure, purpose of use, principle of operation, labeling and performance criteria</li>
                                                        <li>- <span class="nbsp">&nbsp;</span>Evaluation report, evaluation report on biocompatibility and performance</li>
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
                                    <dt class="con_img">
                                        <img src="./image/Medical_05.jpg" alt="Medical device requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device requirements</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Registration of manufacturer</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>List of all manufactured devices</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Records maintained and reported by the manufacturer</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Regulation on labeling</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Regulations on repair and refund of medical devices</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Registration of medical devices and facilities</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con4-3" class="roll roll03"><!--4depth 컨텐츠 04-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of U.S. product certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Electronic and radiation devices</h2>
                        <p class="sub_txt">
                            <span class="point_b2">What is the FDA?</span>
                            In the United States, medical devices are regulated and managed along with foods, pharmaceuticals, and cosmetics under the "Federal Food, Drug &amp; Cosmetic Act: Federal Food, Drug &amp; Cosmetic Act". The safety of the product is secured through pre-inspection and approval of the product, sanctions for nonconforming products through post-inspection, and inspection of imported/exported products.<br><br>
                            If you do not comply with the regulations required by the FDA, it cannot be distributed or sold in the United States. Products that do not meet the medical device regulations, even if they are on sale, may be subject to corrective action, recall, product seizure or disposal, criminal disposition, etc. through FDA follow-up management.
                        </p>
                        <p class="sub_txt">
                            <span class="point_b2">Related regulations</span>
                            &#10020; <span class="nbsp">&nbsp;</span>FD &amp; C Act (Federal Food, Drug &amp; Cosmetic Act)<br>
                            &#10020; <span class="nbsp">&nbsp;</span>21 CFR (The Code of Federal Regulations)
                        </p>
                        <p class="sub_txt">
                            <span class="point_b2">Coverage</span>
                            &#10020; <span class="nbsp">&nbsp;</span>Food, cosmetics, medicines and medical devices (including accessories), veterinary drugs, animal feed, infant formula, food additives, low acid canned food, oxidized food However, in the case of meat, poultry, and processed meat products, inspection and regulations are enforced by the "Food Safety &amp; Inspection Service (FSIS)"<br>
                            &#10020; <span class="nbsp">&nbsp;</span>Radiation equipment (electronic products): Ultrasound treatment equipment, Sunlamp, X-rays, TV receiver, etc.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/elec_RD_01.jpg" alt="What is the Center for Devices and Radiological Health (CRDH)?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is Center for Devices and Radiological Health (CRDH)?</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Recommend safe use of radiation by conducting an epidemiological investigation based on the various and potential dangers of radiation.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Develop measurement methods and tools to evaluate equipment and products that emit radiation.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical devices are classified according to their safety and efficacy (class I, class II, and class III) to be declared and approved before sale.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>By developing working standards for equipment that emit radiation, guidelines for use are prepared to prevent unnecessary exposure to radiation.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Educate consumers and manufacturers about accurate information and evidence for medical devices and radiation-emitting products.</li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/elec_RD_02.jpg" alt="What is the accession number?">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">What is the accession number?</span>
                                                <li>
                                                    The accession number is the unique identification number for a report in FDA's database. This number is provided in the CDRH confirmation letter. Market access numbers facilitate communication on specific reports. Because all agencies can use this market access number to determine if a document has been discussed. In addition, FDA import department personnel use accession numbers to ensure that manufacturers have documented requirements for products that are minimally imported.
                                                </li><br>
                                                <li>
                                                    The accession number not only means that the report has been received into CDRH's filing cabinet, but also means that some of the information about manufacturers and products has been entered into FDA's database.
                                                </li><br>
                                                <li>
                                                    The confirmation letter will be returned to the address provided by the report submitter. Only one copy will be shipped. If the submitter is different from the manufacturer, the letter will only be sent to the report submitter. Submitters can send a copy to the manufacturer.
                                                </li><br>
                                                <li>
                                                    Please allow at least 4 weeks after the manufacturer sends the product report, summary report, annual report, or pre-inquiry supplemental report.
                                                </li><br>
                                                <li>
                                                    If submitted by the manufacturer in electronic report format, an e-mail confirmation message will be sent as soon as the CDRH database has been successfully published. Typically, electronic reports are published in the database within 1 day of receipt.
                                                </li><br>
                                                <li>
                                                    Manufacturers are required to file a report with CDRH prior to the product being introduced into US commerce. The confirmation letter and accession number are evidence that these reports have been received by the CDRH. If the product was made in another country and then imported into the United States, the import approval process will require the identification of the market access number on the Customs Declaration Form FDA 2877
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/elec_RD_03.jpg" alt="What is the electronic product?">
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">What is the electronic product?</span>
                                                <li>
                                                    Any product that contains an electronic circuit and generates any kind of radiation is an electronic product that emits radiation. X radiation (x-rays), microwaves, radio waves (radiofrequency (RF)), laser, visible light, sound, ultrasound, and ultraviolet light are a few examples of the many types of radiation-emitting electronic products. Diagnostic x-ray systems, laser products, laser light shows, and microwave ovens are a few examples out of the many different electronic products that emit radiation.
                                                </li><br>
                                                <li>
                                                    The United States (U.S.) Food and Drug Administration’s (FDA) Center for Devices and Radiological Health (CDRH) is responsible for regulating radiation-emitting electronic products. The CDRH goal is to protect the public from hazardous and unnecessary exposure to radiation from electronic products. For most electronic products, safety regulation is divided between CDRH and state regulatory agencies. CDRH regulates the manufacture of the products, and the states regulate the use of the products.
                                                </li><br>
                                                <li>
                                                    Title 21 of the Code of Federal Regulations, Subchapter J, Parts 1000 through 1050 (21 CFR 1000 – 1050) contains radiation safety regulations for manufacturers of radiation-emitting electronic products. Manufacturers are responsible for producing products that do not emit hazardous and unnecessary radiation. All manufacturers must comply with the applicable requirements in Title 21 CFR 1000, 1002, 1003, 1004 and 1005. If a mandatory radiation safety performance standard applies to a manufacturer’s product, then the manufacturer must also comply with Title 21 CFR 1010 and the product must comply with the requirements of the standard. Mandatory radiation safety performance standards are found in 21 CFR 1020 – 1050”
                                                </li><br>
                                                <li>
                                                    As FDA homepage stated above, FDA requests manufacturer of such products to comply the requirements it they wish to market their products in US.
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
                <section id="con4-4" class="roll roll04"><!--4depth 컨텐츠 04-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of U.S Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Medicine</h2>
                        <p class="sub_txt">
                            The U.S. Food and Drug Administration secures the effectiveness of food and drugs, promotes the supply of safer and less expensive products to their own citizens, and provides accurate and scientifically based information necessary for the use of drugs and foods to maintain and improve public health.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/usa_medicine_01.jpg" alt="Application type">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Application type</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">There are two categories of Investigational New Drug application (IND) for sale and for research (non-sale). There are three types of application : </span>
                                                <li>
                                                    <dl>
                                                        <dt>1. <span class="nbsp">&nbsp;</span>Researcher IND(Investigational New Drug application)</dt>
                                                        <dd>The application is submitted by the doctor who initiates and conducts the clinical trial, and the investigational drug is administered or dispensed under the direct' direction of the doctor. Doctors may submit an application for approval of a research trial plan to propose a trial for an unlicensed drug or a drug for a new indication or a new patient population.</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>2. <span class="nbsp">&nbsp;</span>IND(Investigational New Drug application) for Emergency Use</dt>
                                                        <dd>The application allows the U.S. Food and Drug Administration to authorize the use of the test drug in situations where time is not allowed for approval of a clinical trial plan pursuant to Article 312.23 or 312.34 of the Code of Federal Regulations. It can also be used for patients who do not meet the conditions of an existing trial plan, or if no approved trial plan exists.</dd>
                                                    </dl>
                                                </li>
                                                <li>
                                                    <dl>
                                                        <dt>3. <span class="nbsp">&nbsp;</span>IND(Investigational New Drug application) for treatment purposes</dt>
                                                        <dd>The application is submitted for an investigational drug that has the prospect of severe or immediate life-threatening symptoms in the clinical trial when a clinical trial is being conducted and a review by the U.S. Food and Drug Administration is in progress. In the case of severe disease, drugs in phase 3 clinical trials or all clinical trials have been completed can be used for treatment according to this section. In the case of immediate life-threatening diseases, even before phase 3 clinical trials, the drug may be available for treatment pursuant to this section unless it is usually prior to phase 2 clinical trials.</dd>
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
                                        <img src="./image/usa_medicine_02.jpg" alt="How to register">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">How to register</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Establishment in a foreign country involved in manufacturing, preparation, dissemination, synthesis or processing of drugs (particularly including repackaging and relabeling) imported or provided for import into the United States (with no exceptions) must participate in initial activities. You must register immediately and annually.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Drug registration amendments must be submitted in accordance with 21 CFR 207.26</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Section 510 of the Act and Part 207 of 21 CFR provide registration information required to be submitted by domestic and international drug establishments.</li><br>
                                                <li>Under these regulations, all registrants must specify the name and full address of each facility, any trade name used in the establishment, the type of title or business (e.g., individually owned, jointly owned or legal), the name of the owner or the operator's name ( In the case of joint ownership, the name of each partner must be included; in the case of a legal entity, the name and the name and title of each officer and director, and the state of the corporation) must be provided.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/usa_medicine_03.jpg" alt="Specific additional information">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Specific additional information</h3>
                                        <p class="sub_txt">
                                            In addition to the information required for all registered establishments, certain additional information must be provided in order to register a foreign establishment.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">For example, foreign registrants must submit : </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Name, address, and phone number of the foreign registrant's U.S. agent</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The name of each importer known to the facility (this means each U.S. company or individual is the owner, consignee, or recipient of the drug in an outpatient facility that is imported into the U.S. Importers do not include customers or patients who ultimately purchase, receive, or administer drugs, unless a foreign facility directly ships the drug to the customer or patient.)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The name of the person who imports or provides the drug (this means the name of each agent, broker, or other entity other than the carrier that foreign drug establishments use to facilitate the import of their drugs into the United States)</li><br>
                                                <li>
                                                    To facilitate the registrant's and FDA's response, you must provide an email address of the importer's U.S. agent and phone number and email address of the importer you provide to import or import foreign registrants.
                                                    <dl>
                                                        <dt>Registrants must submit additional drug facility registration information using Form FDA 2656.16. Likewise, for electronic submissions, registrants must submit the following additional information in their SPL file : </dt><br>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Official contractor name, address, phone number, e-mail address</dd>
                                                        <dd>&#10020; <span class="nbsp">&nbsp;</span>Type of work performed at each facility</dd>
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
                                        <img src="./image/usa_medicine_04.jpg" alt=">Drug list">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Drug list</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Registrants must provide initial inventory information for all commercially distributed drugs upon initial registration of the facility.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Failure to provide any inventory information required by Act 510(j) pursuant to Section 301(p) of Act is a prohibited act and, in addition, if the inventory required by Section 502(o) of Act is not included, the drug It is marked with an unauthorized trademark.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>FDA does not accept drug facility registration information from private label distributors (PLDs), but PLDs may request their own NDC label code and submit drug listing information to the FDA.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>By submitting drug listing information, PLD assumes full responsibility for compliance with listing requirements.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In this case, when submitting or updating drug listing information, private label distributors must manufacture, prepare, disseminate, synthesize or process (especially, including repackaging and relabeling) the listed drugs. You must prove your registered facility.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>For certification of registered facilities by private label distributors, paper format can be used.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>If a drug product is listed by PLD, it is also by the owner of a registered facility that manufactures, prepares, disseminates, synthesizes or processes (including, in particular, repackaging and relabeling) the listed drug. It should not be listed.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Registrants (and private label distributors, if applicable) must update their drug listing information and ensure that drugs have not been previously listed and introduced for commercial distribution.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con4-5" class="roll roll05"><!--4depth 컨텐츠 04-5 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of U.S Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Food and beverage</h2>
                        <p class="sub_txt">
                            In the United States, the FDA regulates food exported to the United States through law to protect their citizens from food-borne hazards, and products that meet established standards require FDA approval and registration.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/food_beverage_01.jpg" alt="What is FDA's Food and Beverage Registration?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is FDA's Food and Beverage Registration?</h3>
                                        <p class="sub_txt">
                                            Under the Public Health Safety and Bioterrorism Preparedness and Response Act (Bio-Terrorism Act), the FDA Food &amp; Drug Administration (www.fda.gov) is a food regulatory agency that threatens the U.S. food supply and other food-related emergencies. Or have taken steps to protect the people from real terrorist attacks.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medicines, foods, cosmetics, radiation equipment emission pre-inspection, imports /exports inspection</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Compulsory approval and management of target products (food, pharmaceuticals, etc.) at the time of import customs clearance in the US market.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>If you get disqualified during import clearance decision, Legal marketing in the United States is prohibited</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/food_beverage_02.jpg" alt="FDA registration target items">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA registration target items</h3>
                                        <p class="sub_txt">
                                            Food, cosmetics, medicines and medical devices (including accessories), veterinary drugs, animal feed, infant formula, food additives, low acid canned food, oxidized food (in the case of meat, poultry and processed meat products, the Ministry of Agriculture, Food Safety &amp; Inspection Service (FSIS) inspects and regulates.)
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/food_beverage_03.jpg" alt="Food and beverage FDA export flow chart">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Food and beverage FDA export flow chart</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Factory registration (FFR)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Product ingredient review</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Nutrition analysis and nutrition fact label creation</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>SID/FCE report in case of low acidity room temperature food</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GACCP certification and related documents for seafood</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In the case of health food, comply with US health food cGMP regulations</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In the case of general food, the manufacturer shall comply with the Food for Human Use Regulation (PDCHF)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In the case of fresh agricultural products, comply with the Produce Safety Rule</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>USDA-related approval when a small amount of meat, eggs, and milk ingredients (2%) are included(In principle, Korean meat is prohibited for export to the United States.)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Whether the importer of the United States has DUNS# or FSVP (Overseas Supplier Verification System)</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con4-6" class="roll roll06"><!--4depth 컨텐츠 04-6 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of U.S Product Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Dietary supplement</h2>
                        <p class="sub_txt">
                            Congress defined the term' Dietary supplement ' in the Health Supplement Health Education Act of 1994 (DSHEA). Dietary supplement are foods that people need every day to maintain a healthy life (vitamins, minerals, co-enzymes, carbohydrates, fats, proteins, etc.)
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/health supplement_01.jpg" alt="FDA (Food and Drug Administration) Approval">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FDA (Food and Drug Administration) Approval</h3>
                                        <p class="sub_txt">
                                            All Dietary Supplements are categorized as food and are subject to FDA control. Although the developer is responsible for its effectiveness or safety, unlike drugs, there is no procedure that requires FDA approval before marketing. (Except for newly developed raw materials) All Dietary Supplements include 'These statements has not been evaluated by the Food and Drug Administration. The phrase “This product is not intended to diagnose, treat, cure, or prevent any disease” must be displayed, and phrases using the name of a specific disease cannot be used in advertising or product packaging. Also, it is against the law to use the word FDA in advertising for commercial purposes, and the FDA will take strong sanctions.<br><br>
                                            FDA approval from the Dietary Supplement is an import license approval, and all foods imported from foreign countries are tested for safety by investigating the experimental results that do not contain substances harmful to consumers such as heavy metal test, contamination test, bacteria test, and pesticide test. Is to license the import. This stability test is not directly conducted by the FDA and the results are not recognized, and the importer's documents are submitted for approval.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/health supplement_02.jpg" alt="Good Manufacturing Practices (GMP)">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Good Manufacturing Practices (GMP)</h3>
                                        <p class="sub_txt">
                                            If you produce, label, and own dietary supplements that are imported or proposed to be imported into a U.S. state or territory, region of Colombia or the Puerto Rican Union, the current Health Supplement Good Practices Standard (DS CGMP) applies. Retail establishment establishments do not include warehouses or other storage facilities for retailers and other storage facilities that may be sold directly to individual customers.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    <dl>
                                                        <dt><span class="point_b2">1. <span class="nbsp">&nbsp;</span>For labeler, DS CGMP regulations are as follows : </span></dt>
                                                        <dd>
                                                            - <span class="nbsp">&nbsp;</span>Meet 21 CFR 111.255 requirements to establish batch production records.
                                                        </dd>
                                                        <dd>
                                                            - <span class="nbsp">&nbsp;</span>Other related requirements such as personnel, facilities and physical facilities and spaces, facilities and equipment, and status maintenance must be observed.
                                                        </dd><br>
                                                        <dd>
                                                            Since the individual component steps start with the packaging process that has already been completed, there is no need to comply with the characteristics and weights or measurements of each component used in 21 CFR111.260(e) requirements.
                                                        </dd>
                                                    </dl>
                                                </li><br>
                                                <li>
                                                    <dl>
                                                        <dt><span class="point_b2">2. <span class="nbsp">&nbsp;</span>For Distributor, DS CGMP regulations are as follows</span></dt>
                                                        <dd>
                                                            - <span class="nbsp">&nbsp;</span>The requirements for storage and distribution must be observed.
                                                        </dd>
                                                        <dd>
                                                            - <span class="nbsp">&nbsp;</span>You must comply with those requirements, such as those for human resources, physical facilities and space.
                                                        </dd><br>
                                                        <dd>
                                                            If your only customer is a manufacturer that processes dietary ingredients for the manufacture of dietary supplements, you are not subject to DS CGMP. However, by complying with DS CGMP regulations, you can encourage good governance. Companies that package dietary ingredients as simple dietary supplements or label packaged dietary ingredients are subject to DS CGMP regulations. This is because the company is a manufacturer of dietary supplements that are simply packaged or labeled without any additional processing.
                                                        </dd>
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
                                        <img src="./image/health supplement_03.jpg" alt="Packaging and labeling of dietary supplements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Packaging and labeling of dietary supplements</h3>
                                        <p class="sub_txt">
                                            All details of the manufacturing process and steps that need to be controlled to ensure the quality of the dietary supplement must be indicated on the packaging and labeling as specified in the manufacturing record of the finished product of the dietary supplement.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Specifications of parts used in the manufacture of dietary supplements</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Specifications for intermediate production</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Label and packaging specifications for dietary supplements</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Product specification for finished products of dietary supplements</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Specifications for products received from suppliers for packaging and labeling as dietary supplements</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Packaging and label specifications for dietary supplements that have been packaged and labeled</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con4-7" class="roll roll07"><!--4depth 컨텐츠 04-7 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of U.S Product certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Cosmetics</h2>
                        <p class="sub_txt">
                            The U.S. FDA regulates cosmetics sold in the Americas to protect consumers in the Americas, but the regulations are strict, so if you export cosmetics without sufficient understanding, problems may arise. For this reason, companies that export cosmetics to the Americas must fully understand and apply the relevant information before exporting their products<br><br>
                            When a cosmetic is classified as a drug, a company must register a manufacturer with the FDA and pass the approval process for the drug. If it is classified as a general cosmetic, the product can be sold through self-registration rather than FDA approval.<br><br>
                            Companies can register company information, products, and ingredients in relation to their products under the FDA's Cosmetic Self-Registration Program.<br><br>
                            This registration program is The Voluntary Cosmetic Registration Program (VCRP) and is a reporting system to the FDA by companies that manufacture, package, and distribute cosmetics that are commercially distributed in the United States. The VCRP is divided into two items, and you can participate in two or one items.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/usa_cosmetics_01.jpg" alt="Subject to VCRP registration">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Subject to VCRP registration</h3>
                                        <p class="sub_txt">
                                            VCRP applies only to cosmetics sold to consumers in the United States. It does not apply to cosmetics used for professional use, such as products used in beauty salons, spas, or skin clinics. It also does not apply to products other than for sale, such as hotel samples, free gifts, or homemade cosmetics to give to friends.<br><br>
                                            In addition, products for which cosmetics are used for therapeutic or preventive purposes are considered both cosmetics as well as pharmaceuticals, so the relevant drug provisions must be applied to comply with legal requirements.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/usa_cosmetics_02.jpg" alt="Advantages of VCRP registration">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Advantages of VCRP registration</h3>
                                        <p class="sub_txt">
                                            VCRP assists FDA in its responsibility to regulate cosmetics marketed in the US Product submission and facility registration are not required, but through voluntary submission, we provide data so that FDA can obtain useful information about cosmetics and ingredients, frequency of use, and business related to manufacturing and distribution. This can in turn help promote the export activities of companies.<br><br>
                                            Information from the VCRP database is also used for Cosmetic Ingredient Review (CIR). Independent Industry Supported Expert Panel the CIR Expert Panel is being used to help prioritize ingredient safety assessments as part of the ingredient safety review.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/usa_cosmetics_03.jpg" alt="Precautions on VCRP registration">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Precautions on VCRP registration</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Cosmetics are not FDA pre-market approval.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>VCRP cannot be a cosmetic approval program or a marketing promotion tool.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Cosmetic registration, registration numbering, cosmetic filing, or CPIS numbering does not mean that the FDA has approved the company or product.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>VCRP is not a prior notification system for imported cosmetics, and importing companies in the United States are not required to register with the FDA.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/usa_cosmetics_04.jpg" alt="How to register">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">How to register</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    <span class="point_b2">1. <span class="nbsp">&nbsp;</span>Registration of cosmetics manufacturing and/or packaging facilities</span>
                                                    Cosmetic facility refers to the place where cosmetics are manufactured and/or packaged, and does not apply to places where only business operations are conducted. Only the owner or operator of a cosmetic manufacturing or packaging facility can register the facility using the form for the location of each facility, and distributors cannot register the facility. Companies located outside the United States may voluntarily register their facilities after exporting cosmetics for sale to the United States. FDA will assign a registration number to each facility location.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">2. <span class="nbsp">&nbsp;</span>Preparation of Cosmetic Product Ingredient Statement (CPIS)</span>
                                                    Cosmetics manufacturers, packers, or distributors may submit a statement for each product that the company has initiated commercial distribution in the United States. A separate form must be used for each lineage. FDA will assign a CPIS number for each line submitted to the VCRP.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">3. <span class="nbsp">&nbsp;</span>Modification or disruption of the product line</span>
                                                    CPIS may be amended or discontinued in a complete form and a continuous form. Changes to the brand name or ingredient must be submitted within 60 days of the product entering commercial distribution. CPIS must cease distribution within 180 days of becoming aware of the discontinuation of distribution of commercial distribution.
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
                                        <img src="./image/usa_cosmetics_05.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Based on a cooperation with PATS Corp. located in the U.S., GIC can assists in registering cosmetics sold in the US and provides overall guidelines.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>PATS Corp. (Pan America Technical Service, Corp.) is located in LA, USA, and provides fast and competitive support services to domestic and foreign companies in compliance with US FDA regulations and cGMP</li>
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
        </article><!--+++++ 컨텐츠 04 종료 +++++--> 
        
<!--============================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 05 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">CFDA</a></li>
                    <li><a data-slide-index="1">Food Sanitation Registration</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con5-1" class="roll roll01 on"><!-- 4depth 컨텐츠 05-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of product certification in China</h1>
                        <h2 class="sub_tit2 fc_pointer">CFDA</h2>
                        <p class="sub_txt">
                            The National Medical Products Administration (NMPA) is an organization under the State Council of China, and is responsible for the management and supervision of medical devices nationwide, similar to the Korean Food and Drug Administration. Among imported medical devices in China, NMPA target products can be marketed after approval.<br><br>
                            The National Medical Products Administration (NMPA) was changed from CFDA to NMPA due to the reorganization of the governmental organization in March 2018. It stipulated that health food (health functional food in Korea) is managed and supervised by the National Market Supervision and Administration Bureau.<br><br>
                            NMPA can be seen as CFDA in the past and is currently divided into two organizations, but for convenience, it is collectively referred to as NMPA.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CFDA_01.jpg" alt="What is NMPA registration?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is NMPA registration?</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">It refers to the registration process in which the product lines included in the following items are certified by the Chinese NMPA according to Chinese regulations.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical devices (including in vitro diagnostic devices)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>cosmetics</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Raw materials and ingredients for pharmaceuticals and pharmaceutical packaging materials</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>infant formula</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Health food (nutrients and special dietary supplements)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food for special medical purposes The NMPA certification is a system introduced so that it can match international requirements as international competition intensifies after identifying institutional gaps as China faces globalization. Import, sale and use of the above products are permitted only with valid NMPA certification for quality assurance and product safety.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CFDA_02.jpg" alt="NMPA related regulations">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">NMPA related regulations</h3>
                                        <p class="sub_txt">
                                            The ever-changing laws and increasing regulatory requirements make the application process complex and difficult, not only for first time applicants, but also for companies with extensive application experience.<br>
                                            This is because the laws related to NMPA certification for certain product lines have been introduced only recently and are constantly being revised.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">NMPA registration rules are similar to international standards.</span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GB standard (national standard)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>YY standard (industry standard)</li>
                                                <span>In particular, the guidelines for labeling health food warning phrases are scheduled to be implemented from 2020, so health food must indicate the warning phrase, production date, and quality guarantee period on the minimum packaging (container). In addition, the number of health foods subject to the registration system is expected to increase as the health food ingredient list and health function list management method are implemented.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CFDA_03.jpg" alt="What is SAMR?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is SAMR?</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>On March 13, 2018, at the 13th National People's Congress, the Chinese Cabinet decided to reduce the number of ministries at the ministerial level, and the related regulations and officials in charge of registration were to remain the same.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>“Health food” in China refers to foods that can supply nutrients to specific or general consumers or control body functions, and are foods that are not intended for treatment and do not have acute or chronic harm to the human body. SAMR health food license and registration is an essential gateway to export health food to China. Only health food approved by the National Market Supervision and Management Administration (SAMR) can be officially sold in China.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>State Administration for Market Regulation (SAMR) and China Drug Administration (CDA) have decided to replace CFDA</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>In IGC, since all revisions have not been finalized, they are used interchangeably with the term CFDA.</li>
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
                                        <h3 class="point_b1">Classification of medical devices</h3>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size:1rem">
                                            <tbody>
                                                <tr><!-- 표 구분 시작 -->
                                                    <th width="20%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Classification</p>
                                                    </th>
                                                    <th width="40%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Definition</p>
                                                    </th>
                                                    <th width="40%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Product</p>
                                                    </th>
                                                </tr><!-- 표 구분 끝-->
                                                <tr><!-- 표 내용 1 -->
                                                    <td width="20%" rowspan="5">
                                                        <p align="center" style="padding: 10px">
                                                            Class I
                                                        </p>
                                                    </td>
                                                    <td width="40%" rowspan="5">
                                                        <p align="left" style="padding: 10px">
                                                            Medical devices that can guarantee safety and effectiveness through general management
                                                        </p>
                                                    </td>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Basic surgical instruments
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Ophthalmology/Otolaryngology surgical instruments
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            stethoscope
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Medical hammer
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Medical radiation protection equipment and supplies
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 2 -->
                                                    <td width="20%" rowspan="13">
                                                        <p align="center" style="padding: 10px">
                                                            Class II
                                                        </p>
                                                    </td>
                                                    <td width="40%" rowspan="13">
                                                        <p align="left" style="padding: 10px">
                                                            Medical devices requiring additional management to ensure safety and effectiveness
                                                        </p>
                                                    </td>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Medical devices requiring additional management to ensure safety and effectiveness	Medical suture
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Neurosurgery surgical instruments
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Thermometer, sphygmomanometer, spirometer
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Electrocardiogram, diagnostic device
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Disinfection and sterilization equipment
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Contraceptive
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Blood flow measuring device
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Ophthalmic optics
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Magnetotherapy machine
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Medical X-ray accessories and parts
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Ultrasound physiotherapy equipment
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Surface sealing material
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Biochemical analyzer
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 3 -->
                                                    <td width="20%" rowspan="11">
                                                        <p align="center" style="padding: 10px">
                                                            Class III
                                                        </p>
                                                    </td>
                                                    <td width="40%" rowspan="11">
                                                        <p align="left" style="padding: 10px">
                                                            Medical devices that are used for life support or maintenance, are inserted into the human body, or have a potential risk to the human body and must be strictly managed from the viewpoint of safety and effectiveness. 
                                                        </p>
                                                    </td>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Needle and electronic needle
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Electronic endoscope
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Ultrasound surgical equipment and treatment equipment
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Laser surgery and treatment equipment
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Medical high frequency equipment and equipment
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            MRI, X-ray treatment diagnostic equipment
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Medical radiation therapy equipment
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Blood type analyzer
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Oxygen supply prosthesis
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Medical sealing material and bonding material
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td width="40%">
                                                        <p align="left" style="padding: 10px">
                                                            Fluids, transfusion devices and hoses
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con5-2" class="roll roll02"><!-- 4depth 컨텐츠 05-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Information of product certification in China</h1>
                        <h2 class="sub_tit2 fc_pointer">Food Sanitary Registration</h2>
                        <p class="sub_txt">
                            As food exports to China increase every year, customs clearance issues are becoming very important when exporting food to China. Currently, exports of various foods such as snacks and ramen, as well as Korean health functional foods, are showing continuous growth. As food exports to China increase every year, the issue of customs clearance to China is becoming very important. (CIQ检验检疫证明, CIQ inspection and quarantine certificate = sanitation permit)
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/hygiene_01.jpg" alt="What is an import export zone?">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">What is an import export zone?</h3>
                                        <p class="sub_txt">
                                            In Korea, in the 1980s, only companies with certain licenses were allowed to export and import through the first class trade registration system. This was a system to secure trust in overseas customers and to efficiently manage foreign exchange.<br><br>
                                            Currently, even if China has a business registration card equivalent to the Korean business registration card, it is only possible to import and export imports and exports only after obtaining an import-export license.<br><br>
                                            The agency system for import and export countries is an official system recognized by the Chinese government. It is not illegal at all, and when the importer does not have an exit permit, it is a system that allows the importer to clear the import and export licensed company, and the actual taxpayer to import under the name of the accidental party.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Exporter preparation documents</h3>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5" style="font-size:1rem">
                                            <tbody>
                                                <tr><!-- 표 구분 시작 -->
                                                    <th width="10%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Number</p>
                                                    </th>
                                                    <th width="20%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Document name (Korean)</p>
                                                    </th>
                                                    <th width="20%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Document name (Chinese)</p>
                                                    </th>
                                                    <th width="20%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Document name (English)</p>
                                                    </th>
                                                    <th width="10%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Issuance</p>
                                                    </th>
                                                    <th width="20%" valign="top" style="background-color: rgba(240,88,74,0.5);padding: 5px 0">
                                                        <p align="center">Issuing agency</p>
                                                    </th>
                                                </tr><!-- 표 구분 끝-->
                                                <tr><!-- 표 내용 1 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            1
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            제조증명서(영문)
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            制作证明书（英文)
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            CERTIFICATE OF MANUFACTURE
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Ministry of Food and Drug Safety (MFDS)
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 2 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            2
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            자유판매증명서(영문)
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            自由贩卖证明书（英文
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            CERTIFICATE OF FREE SALES
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Ministry of Food and Drug Safety(MFDS)
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 3 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            3
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            위생증명서(영문)
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            卫生证明（英文）
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            SANITATION CERTIFICATE
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Ministry of Food and Drug Safety(MFDS)
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 4 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            4
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            영문 사업자등록증
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            英文营业执照
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            CERTIFICATE OF BUSINESS REGISTRATION
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            National Tax Service(NTS)
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 5 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            5
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            공장신고증(영문)
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            工厂申报证
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            FACTORY REGISTRATION CERTIFICATION
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Competent authority or self-production
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 6 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            6
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            영양성분 검사성적서
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            营养成分 检测书
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            NUTRIENT INSPECTION CERTIFICATION
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Manufacturing plant
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 7 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            7
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            제품포장지 도면
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            产品包装纸 图面
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            WRAPPING PAPER MAP
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Exporter or manufacturer
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 8 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            8
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            품질 표시 스티커(중국어)
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            食品品种标签
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            LABEL STICKER
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Exporter or manufacturer
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 9 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            9
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            원산지 증명서
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            原产地证明
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            CERTIFICATION OF ORIGIN
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Korea Chamber of Commerce and Industry (KCCI)
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 10 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            10
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            인보이스
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            发票
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            COMMERCIAL INVOICE
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Exporter
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 11 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            11
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            패킹리스트
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            箱单
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            PACKING LIST
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Exporter
                                                        </p>
                                                    </td>
                                                </tr>
                                                <tr><!-- 표 내용 12 -->
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            12
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            업체별 제품정보리스트
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            货物明细
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            PRODUCT INFORMATION LIST
                                                        </p>
                                                    </td>
                                                    <td width="10%">
                                                        <p align="center" style="padding: 10px">
                                                            Korea
                                                        </p>
                                                    </td>
                                                    <td width="20%">
                                                        <p align="left" style="padding: 10px">
                                                            Exporter
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <span style="display: block;font-size: 0.8rem">• In addition, several additional documents may be added depending on product characteristics.</span>
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
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">Thailand Medical Device Registration</a></li>
                    <li><a data-slide-index="1">Taiwan Medical Device Registration</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con6-1" class="roll roll01 on"><!-- 4depth 컨텐츠 06-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of product certification in Southeast Asia</h1>
                        <h2 class="sub_tit2 fc_pointer">Thailand medical device registration</h2>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Licensing procedure</h3>
                                        <p class="sub_txt">
                                            In order to handle imported medical devices in Thailand, business registration, medical device import license (Thai FDA), and certification procedures according to the classification of medical devices are required.<br><br>
                                            The conformity assessment of medical devices is regulated by the Medical Device Act 2008 and is under the jurisdiction of the Food and Drug Administration (FDA) under the Ministry of Public Health.<br><br>
                                            Regarding product certification, the Thai Food and Drug Administration categorizes medical devices into three categories: General Medical Device, Notified Medical Device, and Licensed Medical Device. The validity term is 5 years, and an extension is required after 5 years.
                                        </p>
                                        <div class="con_img">
                                            <img src="./image/Thai_01.jpg" alt="General Medical Devices Certification_Class l">
                                        </div>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>General Medical Devices Certification_Class l
                                                    <p>
                                                        Producers, importers, or distributors of products in this category do not need to obtain a separate license. However, they are required to submit a Certificate of Free Sale issued by the government of the country of origin. As an exception, for the following medical devices that are used directly on the human body among general medical devices, ISO 13485 or GMP certificates must be submitted.
                                                    </p>
                                                    <ul>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Implant</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Tissue origin medical device</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Radiation equipment for diagnosis and treatment In vitro diagnostic equipment (In Vitro Diagnostic Products)</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Medical equipment disinfection supplies</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Tooth filling, prosthetic-related devices</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/Thai_02.jpg" alt="Notified Medical Devices Certification_Class ll">
                                        </div>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>Notified Medical Devices Certification_Class ll
                                                    <p>
                                                        In addition to the certificate of free sale issued by the government of the country in which the product is produced, producers, importers or distributors of products falling under this category must submit product technical documentation together with a declaration form (Jor Nor 1), which must include : 
                                                    </p>
                                                    <ul>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Product technical documentation: product instructions, instructions, specifications, labels, names of producers and distributors</li>
                                                        <li>
                                                            <dl>
                                                                <dt>&#10020; <span class="nbsp">&nbsp;</span>Target medical device</dt>
                                                                <dd><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Rehabilitation treatment medical equipment</dd>
                                                                <dd><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Blood alcohol diagnostic tool</dd>
                                                                <dd><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Medical silicone</dd>
                                                                <dd><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Other diagnostic tools</dd>
                                                                <dd><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Silicone breast implants</dd>
                                                                <dd><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Ophthalmic Viscosurgical Devices; OVD</dd>
                                                                <dd><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Metamphetamine screening test in urine</dd>
                                                            </dl>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="con_img">
                                            <img src="./image/Thai_03.jpg" alt="Licensed Medical Device Class III">
                                        </div>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>Licensed Medical Device Class III
                                                    <p>
                                                        Producers, importers, or distributors of products falling under this category must obtain a license to produce, import and sell products. The Thai Food and Drug Administration requires the licensee to submit information on the production process, import, sale, and side effects of the product. Also, the Thai Food and Drug Administration requires a Certificate of Free Sale and an application for permission (Khor Por 1) issued by the government of the product producing country. ) Must be submitted.
                                                    </p>
                                                    <ul><span style="displat:block">&#10020; <span class="nbsp">&nbsp;</span>There are 8 types of medical devices in this category : </span>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;HIV diagnostic tool</li>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;condom</li>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Lab gloves</li>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;surgical gloves</li>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Medical blood bag</li>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Contact lens</li>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Disposable hypodermic syringe</li>
                                                        <li><span class="nbsp">&nbsp;&nbsp;&nbsp;</span>- &nbsp;&nbsp;Disposable insulin syringe</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con6-2" class="roll roll02"><!-- 4depth 컨텐츠 06-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of product certification in Southeast Asia</h1>
                        <h2 class="sub_tit2 fc_pointer">Taiwan medical device registration</h2>
                        <p class="sub_txt">
                            Medical devices exported to Taiwan must be licensed and registered in accordance with the registration requirements required by TFDA (Taiwan Food and Drug Administration). Since February 2004, Taiwan has compulsory requirements for medical device GMP for medical devices sold in Taiwan, and this certification was established based on the contents of ISO 13485.<br><br>
                            The medical device market in Taiwan is showing continuous growth as awareness of the need for medical system development spreads, and the market growth will be further promoted by the advancement of the health care system and the government's support for the medical device industry.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Taiwan_01.jpg" alt="Medical device definition and classification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Medical device definition and classification</h3>
                                        <p class="sub_txt">
                                            According to the Pharmaceuticals Affair Law of Taiwan, medical devices include equipment, machinery, instruments and accessories, and are defined as products that can affect diagnosis, treatment, healing, disease alleviation, disease prevention, or body function or structure.<br><br>
                                            The classification of medical devices in Taiwan basically follows the classification of the US FDA. It is largely divided into general medical devices and in vitro diagnostic medical devices, and is classified into 17 categories according to the function, purpose, use and operating principle of the product. It is classified into three classes (Class I, II, III) according to the characteristics and risk of medical devices.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Class I (Low risk)</span>
                                                    A medical device that does not sustain or prolong life, is not used for a very important purpose in preventing human damage, and does not have the potential for risk of disease or injury.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Class II (Medium risk)</span>
                                                    Medical devices are recognized as being used to sustain or extend life.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Class III (High risk)</span>
                                                    A device that sustains or prolongs life, or a device that is of great importance to prevent human damage, or that may present a potential risk of illness and injury.
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
                                        <img src="./image/Taiwan_02.jpg" alt="Registration process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Registration process</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>The procedure for registration of medical devices in Taiwan is as follows.</span>
                                                <li>
                                                    <span class="point_b2">1. <span class="nbsp">&nbsp;</span>Classification of medical devices</span>
                                                    The Taiwan medical device registration process is essential for all classes of medical devices, and the documents to be submitted differ depending on the class of medical devices. Therefore, the product must be properly classified prior to application.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">2. <span class="nbsp">&nbsp;</span>Designated as a local representative in Taiwan</span>
                                                    For overseas manufacturers who wish to sell medical devices in Taiwan, they must appoint a local representative in Taiwan. The Taiwan agent must reside in Taiwan and have a sales license in Taiwan. Agents register medical devices on behalf of the business, contact TFDA directly, and conduct business.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">3. <span class="nbsp">&nbsp;</span>Product Permit/Report Application</span>
                                                    Application for a product license varies depending on the medical device class.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">4. <span class="nbsp">&nbsp;</span>QSD (GMP) preparation and application</span>
                                                    For local manufacturers in Taiwan, certification must be obtained according to the procedure for obtaining GMP for medical devices, and for overseas manufacturers, if they have ISO 13485 certificates, they must undergo a QSD (Quality System Documentation) review.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">5. <span class="nbsp">&nbsp;</span>TFDA audit</span>
                                                    Prepare a quality system certification document and submit it to the agency designated by TFDA, and the audit agency will conduct the review. Overseas manufacturing site audits are conducted as needed.
                                                </li><br>
                                                <li>
                                                    <span class="point_b2">6. <span class="nbsp">&nbsp;</span>Issuance of final certification</span>
                                                    After registration of medical devices with TFDA is completed, products can be distributed in Taiwan.
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
                                        <img src="./image/Taiwan_03.jpg" alt="Required information and documents">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Required information and documents</h3>
                                        <p class="sub_txt">
                                            The Taiwan medical device approval process consists of product license/report application and quality system certification.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span style="display: block;font-size:1.1em">1. <span class="nbsp">&nbsp;</span>The documents to be prepared by the medical device manufacturer when applying for product approval/declaration differ by medical device class.</span>
                                                <li>
                                                    <ul><span class="point_b2">1) <span class="nbsp">&nbsp;</span>Class I</span>
                                                        <li>- &nbsp;&nbsp; Application</li>
                                                        <li>- &nbsp;&nbsp; Copy of medical device manufacturing business license</li>
                                                        <li>- &nbsp;&nbsp; For Taiwanese local manufacturers, GMP conformity certificate</li>
                                                        <li>- &nbsp;&nbsp; For overseas manufacturers, QSD conformity certificate</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul><span class="point_b2">2) <span class="nbsp">&nbsp;</span>Class II / III</span>
                                                        <li>- &nbsp;&nbsp; Application</li>
                                                        <li>- &nbsp;&nbsp; Copy of medical device manufacturing business license</li>
                                                        <li>- &nbsp;&nbsp; For Taiwanese local manufacturers, GMP conformity certificate</li>
                                                        <li>- &nbsp;&nbsp; In the case of overseas manufacturers, the original QSD certificate of conformity and approval for manufacturing and marketing in the relevant country</li>
                                                        <li>- &nbsp;&nbsp; Chinese instruction leaflet, catalog packaging, labeling, usage, product appearance photo</li>
                                                        <li>- &nbsp;&nbsp; Test records and reports</li>
                                                        <li>- &nbsp;&nbsp; Technical documentation</li>
                                                        <li>- &nbsp;&nbsp; Papers and data</li>
                                                        <li>- &nbsp;&nbsp; Clinical trial report</li>
                                                        <li>- &nbsp;&nbsp; In the case of radiation products, safety information data</li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span style="display: block;font-size:1.1em">2. <span class="nbsp">&nbsp;</span>When applying for medical device quality system certification, Taiwanese local manufacturers must acquire the certification according to the medical device GMP acquisition procedure, and in the case of overseas manufacturers, if they have ISO 13485 certification, the audit is conducted through the Quality System Documentation (QSD). QSD is classified into three categories:</span>
                                                <li>
                                                    <ul><span class="point_b2">1) <span class="nbsp">&nbsp;</span>European CE certified manufacturers and US FDA registered products: Subject to QSD simplification</span>
                                                        <li>- &nbsp;&nbsp; Application</li>
                                                        <li>- &nbsp;&nbsp; manufacturer documentation</li>
                                                        <li>- &nbsp;&nbsp; For CE certified manufacturers, a copy of the ISO 13485 certificate, the most recent audit report, CFG (Certificate to Foreign Government)</li>
                                                        <li>- &nbsp;&nbsp; For manufacturers of FDA-registered products in the U.S., factory investigation report issued by FDA, certificate of conformity verification registration, and CFG of FDA manufacturing and sales certificate</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul><span class="point_b2">2) <span class="nbsp">&nbsp;</span>Medical device licensed products from other foreign countries: General QSD target</span>
                                                        <li>- &nbsp;&nbsp; Application</li>
                                                        <li>- &nbsp;&nbsp; manufacturer documentation</li>
                                                        <li>- &nbsp;&nbsp; Factory layout</li>
                                                        <li>- &nbsp;&nbsp; Process area for the product</li>
                                                        <li>- &nbsp;&nbsp; List of major production facilities</li>
                                                        <li>- &nbsp;&nbsp; Process process</li>
                                                        <li>- &nbsp;&nbsp; Manufacturing factory quality manual and procedure</li>
                                                        <li>- &nbsp;&nbsp; List of quality documents</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul><span class="point_b2">3) <span class="nbsp">&nbsp;</span>If the above does not apply: Subject to field inspection by overseas manufacturers</span>
                                                    </ul>
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
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 06 종료 +++++--> 

 
<!--==============================================================================================================================================================-->
                   
       

        <article><!--+++++ 컨텐츠 07 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">GIC Vegan</a></li>
                    <li><a data-slide-index="1">Non-GMO</a></li>
                    <li><a data-slide-index="2">Vegan Society Introduction</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con7-1" class="roll roll01 on"><!-- 4depth 컨텐츠 07-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Vegan and Non-GMO Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">GIC Vegan</h2>
                        <div class="sub_txt">
                            Vegan trends are increasing in various fields around the world, and they are expanding in food, cosmetics, fashion, and other areas of life.<br><br>
                            Vegan cosmetics can be described as non-use of animal raw materials and animal-derived ingredients, prohibition of animal testing, prevention of cross-contamination with non-vegan production lines, and exclusion of genetically modified organisms.<br><br>
                            If all of these standards are met, vegan cosmetics can be registered as vegan cosmetics, which means cosmetics that do not contain animal ingredients and have not been tested on animals.<br><br>
                            Vegan certification marks have gone through a difficult certification process, which reduces the hassle of consumers having to check detailed raw materials, and makes it easier for consumers to choose vegan products.<br><br>
                            Producers who sell products can also confidently promote vegan products they manufacture and increase product reliability to help increase profits.
                        </div>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/GIC_Vegan_01.jpg" alt="The profits of Vegan">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The profits of Vegan</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Eating vegan food can protect one's health.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Eating vegan foods can prevent diabetes, cancer, heart disease, and high blood pressure and prevent other adult diseases.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Eating vegan food can save the environment.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The accumulated meat releases carbon dioxide which creates environmental problems because it accounts for 40% of methane gas and 65% of nitrogen dioxide in the world.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Eating a balanced vegetarian diet can reduce bad cholesterol, and it secretes large amounts of enzymes that are good for our body through fruits, grains, and vegetables, serving as a fuel for our body's strength.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Eating vegan food can have a positive effect on our body as it can prevent not only health but also weight loss and skin aging.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>When using vegan cosmetics, plant-ingredient raw materials have a low risk of developing allergies.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Vegan cosmetics can help increase profits by reconsidering the reliability of the product.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/GIC_Vegan_02.jpg" alt="Standard of Vegan Trademark registration">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Standard of Vegan Trademark registration</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Animal Ingredients</span>
                                                <li>From the selection of raw materials to throughout the manufacturing and/or production phase of the product, no use of any animal-ingredient raw materials and products, by-products or derivatives shall be not included or related.</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Animal Testing</span>
                                                <li>There should never have been any experiment with any kind of animal about the manufacture and/or development of a product and product's ingredient on behalf of the company or the interested persons concerned that the company can control.</li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Genetically Modified Organisms (GMO)</span>
                                                <li>The process of development and production of Genetically Modified Organisms (GMO) should never relate to animal genes or animal-derived components. However, plant ingredients are not applicable. </li>
                                            </ul>
                                            <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Cross-Contamination with Non-vegan</span>
                                                <li>
                                                    Prevent potential cross-contamination with animal raw materials and animal-derived ingredients as much as possible.<br><br>
                                                    It must be cleaned the minimum area of use and equipment before operating Vegan production lines. Be aware of the risk of cross-contamination from non-vegan materials in process of production, and take all practical and reasonable measures to prevent them.<br><br>
                                                    If Vegan and Non-vegan are produced in the same line, it is recommended to produce non-vegan lines first.
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
                                        <img src="./image/GIC_Vegan_03.jpg" alt="The competency of GIC">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The competency of GIC</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is carrying out vegan certification on its own.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC contributes to the continued development of customers by accurately evaluating the suitability of Vegan certification by utilizing the auditor's vast network with many years of technical skills, expertise and knowledge.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is providing strict procedures of vegan certification to fast and accurately as a leading organization of food-related certification.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con7-2" class="roll roll02"><!-- 4depth 컨텐츠 07-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Vegan and Non-GMO Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Non-GMO</h2>
                        <div class="sub_txt">
                            Nowadays, people's interest in food safety is increasing day by day. Therefore, the demand for Non-GMO is also increasing. So, what does Non-GMO mean?<br><br>
                            Often, GMOs are ‘Genetically Modified Organism’, called ‘Genetically Modified (Recombined, Modified)’ foods.<br><br>
                            Genetically modified food refers to plants, animals, microorganisms, or other organisms whose genetic makeup has been modified using genetically modified techniques. These create a combination of plants, animals, bacteria, and virus genes that do not occur in nature.<br><br>
                            Non-GMO refers to foods that are not genetically modified. Genetically modified foods affect many of the products we consume every day.<br><br>
                            As the number of GMO foods increases every year, GIC certification body is working to provide the most accurate and up-to-date standards through Non-GMO certification.
                        </div>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Non_GMO_01.jpg" alt="Introduction of Non-GMO Certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Introduction of Non-GMO Certification</h3>
                                        <div class="sub_txt">
                                            <ul><span class="point_b2">1. <span class="nbsp">&nbsp;</span>Genetically Modified Organism (GMO)</span>
                                                <li>It is called a “Genetically Modified Organism” or "Genetically Recombinant Organism" and is usually made using genetic engineering technology for increased production or convenience in distribution and processing. Therefore, it has traits or genes that cannot be seen by traditional breeding methods.</li>
                                            </ul><br><br>
                                            <ul><span class="point_b2">2. <span class="nbsp">&nbsp;</span>Non-GMO Certification</span>
                                                <li>It is a system that certifies foods that never used GMOs as non-genetically modified foods.<br>
                                                To ensure transparency and free choice of consumers through marked in the Non-GMO products.<br>
                                                It is also a nature-friendly certification aimed at preserving indigenous seeds and maintaining diversity in life.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Non_GMO_02.jpg" alt="Representative Products of Non-GMO Certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Representative Products of Non-GMO Certification</h3>
                                        <p class="sub_txt">
                                            Non-GMO certification has many different types that can obtain certification.<br><br>
                                            Non-GMO certification can be obtained because various foods such as tuna cans, bread, red pepper paste, soybean paste, and instant food that we commonly eat can contain GMO.<br><br>
                                            Typical products are soy oil, snacks, red pepper paste, liquor, canola oil, margarine, soy sauce, soybean paste, bread, seasoning food, instant food, tuna can, and salad oil.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Non_GMO_03.jpg" alt="The competency of GIC">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The competency of GIC</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is carrying out Non-GMO certification on its own.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC contributes to the continued development of customers by accurately evaluating the suitability of Non-GMO certification by utilizing the auditor's vast network with many years of technical skills, expertise and knowledge.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is providing strict procedures of Non-GMO certification to fast and accurately as a leading organization of food-related certification.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con7-3" class="roll roll03"><!-- 4depth 컨텐츠 07-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Vegan and Non-GMO Certification</h1>
                        <h2 class="sub_tit2 fc_pointer">Information of Vegan Society</h2>
                        <p class="sub_txt">
                            The Vegan Society is a non-profit organization founded in November 1944 by its founder Donald Watson and 6 founding members. It is the organization that invented the new vegetarian concept and created the word ‘vegan’, and is the oldest vegan organization in the world.<br><br>
                            As the world’s oldest and most original vegan organization, the Vegan Society founded an international vegan trademark in 1990 to improve product labeling. They have been registering our products around the world for 29 years and the vegan trademark can be found on over 35,000 products worldwide.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Vegan_Society_01.jpg" alt="Vegan Trademark">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Vegan Trademark</h3>
                                        <p class="sub_txt">
                                            In 1990, the Vegan Society established International Vegan Trademark to improve the labeling of vegan products. It is known as the most trusted international vegan mark because it allows trademarks on products that have passed strict standards and meticulous auditing. For 29 years, the Vegan Society have registered products around the world and you can find the vegan trademark on over 35,000 products worldwide.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Vegan_Society_02.jpg" alt="Product Registration Criteria">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Product Registration Criteria</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Animal ingredients</span>
                                                    The manufacture and/or development of the product, and where applicable its ingredients, must not involve, or have involved, the use of any animal product, by-product or derivative.
                                                </li>
                                                <li>
                                                    <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Animal testing</span>
                                                    The development and/or manufacture of the product, and where applicable its ingredients, must not involve, or have involved, testing of any sort on animals conducted at the initiative of the company or on its behalf, or by parties over whom the company has effective control.
                                                </li>
                                                <li>
                                                    <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Cross-contamination</span>
                                                    Potential cross-contamination of animal-derived ingredients should be avoided as much as possible. Vegan production lines require thorough cleaning of minimal surfaces and equipment prior to use. Recognizing the risk of cross-contamination by non-vegan raw materials in the production space, and taking all reasonable and practical steps to eliminate it. If you are producing vegan and non-vegan in the same space, it is strongly recommended to start with the non-vegan line.
                                                </li>
                                                <li>
                                                    <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Genetically Modified Organisms (GMO’s)</span>
                                                    The development and/or production of genetically modified organisms (GMO) must not have involved animal genes or animal-derived substances. Products put forward for registration which contain or may contain any GMOs must be labelled as such.
                                                </li>
                                                <span class="fc_pointer">Animal refers to the entire animal kingdom, that is all vertebrates and all multicellular invertebrates.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/Vegan_Society_03.jpg" alt="Benefits of choosing Vegan Trademark">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Benefits of choosing Vegan Trademark</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>The oldest and most trusted vegan organization.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>We have a professional team for evaluation of vegan product registration.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Vegan Trademark is easier to identify internationally by consumers.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Vegan Trademark logo assures consumers that a product meets their ethical standards.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Upon registration, customers can receive benefits such as using logos on packaging, marketing materials, and online.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Product updates and additions are included in the fee and there is no additional charge during the registration period.</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Customers can provide samples to exhibits attended by The Vegan Society.</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Currently more than 35,000 products are registered in the trademark.</li>
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
            </div>
        </article><!--+++++ 컨텐츠 07 종료 +++++--> 
        
    
<!--==================================================================================================-->
       
       <article><!--+++++ 컨텐츠 08 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">Introduction to Halal Product Certification</h1>
                <h2 class="sub_tit2 fc_pointer">HALAL</h2>
                <div class="sub_txt">
                    <ul>
                        <li>&#10020; <span class="nbsp">&nbsp;</span>Halal is an Arabic word that means “permissible” or “lawful”. Halal certification is a certification scheme and certification mark that can be assigned to products or services produced in accordance with Islamic Sharia law for use by Muslims.</li>
                        <li>&#10020; <span class="nbsp">&nbsp;</span>Halal products mean compliance with the requirements for raw materials used in the manufacture of halal products, as well as for work, production facilities, tools used by employees, work clothes and labels.</li>
                        <li>&#10020; <span class="nbsp">&nbsp;</span>The recognition that halal products are clean and safe is growing, which is why many companies are receiving halal certifications for food, cosmetics, pharmaceuticals and beverages.</li>
                        <li>&#10020; <span class="nbsp">&nbsp;</span>Companies can export halal products to Islamic countries after their qualification has been verified after submitting documents that meet Halal's requirements and standards, and audit.</li>
                    </ul>
                </div>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/halal_01.jpg" alt="Products classification">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Products classification</h3>
                                <p>
                                    Products are classified as Halal, Haram, or Mashbooh.<br><br>
                                    <span class="fc_pointer">Halal</span> : Halal is anything that is “allowed” for Muslims. Typical halal includes foods such as cattle, sheep, chicken, and duck etc.<br><br>
                                    <span class="fc_pointer">Haram</span> : Haram is the opposite of Halal and has the meaning of "prohibited." Typical Haram foods include pig, blood, and alcohol etc.<br><br>
                                    <span class="fc_pointer">Mashbooh</span> : Mashbooh refers to products with ambiguous or suspicious ingredients that are hard to classify by standards whether they’re Halal or Haram. The typical mash part is cigarette.
                                </p>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/halal_02.jpg" alt="Halal Certified Product Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Halal Certified Product Requirements</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Selection of proper products for Halal certification</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Raw materials used in the manufacturing process and the supplier of raw materials</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Product production process review</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Work environment or equipment / facility safety and hygiene management assessment</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Appointment of members of the organization's internal halal team and training in Islamic halal rules and requirements</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Review the labeling of the packaging</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/halal_03.jpg" alt="Certification Process">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Certification Process</h3>
                                <div>
                                     <ul class="con_sec">
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">Applicant</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Quotation Inquiry</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Providing some product data (ingredients)</div>
                                            </div>
                                        </li>
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-university"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">Certification Body</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Preliminary analysis Decision on Issuing Halal certificate</div>
                                            </div>
                                        </li>
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-handshake-o"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">CB + Applicant</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;If Yes / Signing a contract</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;If No / Denial</div>
                                            </div>
                                        </li>
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">Applicant</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Payment &amp; Submitting of Application required documents</div>
                                            </div>
                                        </li>
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-university"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">Certification Body</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;1st Stage audit</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Non-conformity report issuing</div>
                                            </div>
                                        </li>
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-user"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">Applicant</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Submission of the result of nonconformity corrective action.</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;If verification is not possible with the submitted evidence, re-audit may be conducted.</div>
                                            </div>
                                        </li>
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-university"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">Certification Body</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;IHG (Initial Halal Group) Halal Training Course and Exam</div>
                                            </div>
                                        </li>
                                        <li class="circle_li">
                                            <div class="circle_box">
                                                <div class="icon"><i class="fa fa-university"></i></div>
                                            </div>
                                            <div class="circle_txt">
                                                <div style="font-weight: 600;font-size: 1.1em">Certification Body</div>
                                                <div style="text-indent: 1.2em;">-&nbsp;&nbsp;Issuance of Halal certificate</div>
                                            </div>
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
                                <img src="./image/halal_04.jpg" alt="Documents to be submitted">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Documents to be submitted</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Application</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Product questionnaire (ingredients/raw materials)</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Certificate of Business Registration</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Company profile</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Certification of Manufacture Registration</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Product manufacturing process chart</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Map of premise/factory location</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Process flow chart, production procedure</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Halal certificate or specification for major ingredients (raw materials)</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Other documents such as HACCP, ISO, GHP, GMP (must have for cosmetic product), TQM etc. (if applicable)</li>
                                        <li>11. <span class="nbsp">&nbsp;</span>Design and label of products</li><br>
                                        <span>* Additional documents may be required depending on the product.</span>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 08 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        
<!--==================================================================================================-->
        
        <article><!--+++++ 컨텐츠 09 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">EWG</a></li>
                    <li><a data-slide-index="1">CPNP</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con9-1" class="roll roll01 on"><!-- 4depth 컨텐츠 09-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of cosmetic product certification</h1>
                        <h2 class="sub_tit2 fc_pointer">EWG</h2>
                        <p class="sub_txt">
                            EWG stands for Environmental Working Group and is one of the most influential nonprofit environmental movement groups in the United States. EWG is an organization that mainly conducts education and enlightenment activities to avoid harmful ingredients and toxic substances and to select the right and safe products. Since EWG does not receive any external pressure or sponsorship from companies or governments, it provides fair and objective information more than any other organization.<br><br>
                            EWG conducts research on human health and environment in the fields of food, energy, and agriculture, and provides a database on its ingredients and safety, especially in relation to cosmetics. Product safety ratings are given based on the scores given by EWG's evaluation and verification, and can be used in personal hygiene products and cosmetics.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EWG_01.jpg" alt="Features of EWG">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Features of EWG</h3>
                                        <p class="sub_txt">
                                            EWG aims to enable people to live healthier lives in healthier environments. EWG tracks the safety of chemicals, enabling producers to promote the safety of ingredients, promote transparency and promote sales, and enable consumers to recognize risks and pursue safety.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">EWG Grade</span>
                                                <li>
                                                    <span>
                                                        The rating is based on the Skin Deep database operated by EWG, and this data is based on safety research data published by research groups around the world.<br><br>
                                                        Available in red, yellow or green grades depending on the ingredient safety score, of which green is the product that meets the most stringent criteria.
                                                    </span><br>
                                                    <ul>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Grade 1~2: Green</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Grade 3~6: Yellow</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Grade 7~10: Red</li>
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
                                    <dt class="con_img">
                                        <img src="./image/EWG_02.jpg" alt="The necessity of EWG verification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity of EWG verification</h3>
                                        <p class="sub_txt">
                                            Since the EWG verification began, manufacturers have been making healthier and safer products. Manufacturers have been considering increasing cancer rates and allergies. EWG recognizes products that meet EWG's most stringent standards for health. This means there are no chemicals of concern to EWG, which means complete transparency. The EWG Approval Mark means a sign of trust.<br><br>
                                            With thousands of consumer products on the market, it is difficult to know which products are safer and healthier. When a product is marked with the EWG mark, you can ensure that it is free of chemicals and meets the most stringent standards for health.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/EWG_03.jpg" alt="EWG certification process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">EWG certification process</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">When applying for the first time, follow the procedure below.</span>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>Application and permission: EWG verification by partner HLB (Healthy Lifestyle Brands)
                                                    <ul>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Submission of application form and other documents (statement, disclosure contract, product ingredient spreadsheet, safety enhancement notice, etc.)</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>4~6 weeks</li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>Certification progress: Certification proceeds when HBL's EWG verification criteria are met
                                                    <ul>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Additional certification processing fee: Product sales and differences by company</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>6~8 weeks</li>
                                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Additional documents may be requested as needed</li>
                                                    </ul>
                                                </li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Approval and writing of license agreement</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Completion of mark usage and access training</li><br>
                                                <span>* The new certification is valid for 3 years, and if the ingredient is changed, it must undergo a retest.</span>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                </section>
                <section id="con9-2" class="roll roll02"><!-- 4depth 컨텐츠 09-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Introduction of cosmetic registration certification</h1>
                        <h2 class="sub_tit2 fc_pointer">CPNP</h2>
                        <p class="sub_txt">
                            <span class="point_b2 fc_pointer">CPNP(Cosmetic Product Notification Portal)</span>
                            All cosmetic products to be distributed in the European market must meet the requirements of Cosmetic Regulation 1223/2009, the European Union (EU) cosmetic regulation, and be registered with the CPNP. CPNP is a Cosmetic Product Notification Portal, EC No. Online cosmetic registration portal created according to 1223/2009. Through one registration with CPNP, the ingredients and raw materials of cosmetic products are managed and controlled, and it is possible to enter the entire EU market.<br><br>
                            CPNP registration of cosmetic products is done by the responsible person in Europe, the Responsible Person (RP). The RP is the legal officer for cosmetic products distributed in the EU, helping to ensure that the product is well distributed in the European market, and in the event of a problem with the product, the competent authority orders the RP to take action.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CPNP_01.jpg" alt="Registration process">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Registration process</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The CPNP registration process is as follows.</span>
                                                <li>
                                                    <span class="point_b2">1. <span class="nbsp">&nbsp;</span>RP designation</span>
                                                    Cosmetics manufacturers who want to export cosmetics to the European market designate RP, and RP prepares a procedure for registering cosmetic products with CPNP. RP also stores and manages product information files (PIF), and is responsible for post management of cosmetic products in Europe in the future.
                                                </li>
                                                <li>
                                                    <span class="point_b2">2. <span class="nbsp">&nbsp;</span>Fill out required documents and labeling</span>
                                                    Cosmetics manufacturers submit information and documents necessary for CPNP registration to RP.
                                                </li>
                                                <li>
                                                    <span class="point_b2">3. <span class="nbsp">&nbsp;</span>Product ingredients and label review</span>
                                                    RP reviews product ingredients and labels based on documents submitted by cosmetic manufacturers.
                                                </li>
                                                <li>
                                                    <span class="point_b2">4. <span class="nbsp">&nbsp;</span>Product information file (PIF) preparation</span>
                                                    Product information file is a single file that combines all the data necessary to enter the European market. RP creates a product information file based on the reviewed documents.
                                                </li>
                                                <li>
                                                    <span class="point_b2">5. <span class="nbsp">&nbsp;</span>CPNP registration</span>
                                                    When all requirements are met, RP registers the cosmetic product with CPNP.
                                                </li>
                                                <li>
                                                    <span class="point_b2">6. <span class="nbsp">&nbsp;</span>Product market launch</span>
                                                    Once a registration number is assigned to a cosmetic product from CPNP, the cosmetic product can be distributed in the European market.
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
                                        <img src="./image/CPNP_02.jpg" alt="Required information and documents">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Required information and documents</h3>
                                        <p class="sub_txt">
                                            Cosmetics manufacturers must prepare basic and detailed information and labels for cosmetics products to be registered with CPNP.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The information and documents that cosmetic manufacturers must submit to RP are as follows : </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturer information</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>ISO 22716, GMP certificate</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>product information</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Ingredient mixing ratio</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Name of EU member country in which the product will be released</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>CoA</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>MSDS (Material Safety Data Sheet)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Product safety, suitability, antiseptic, animal testing, etc.</li>
                                            </ul>
                                            <ul><span class="point_b2">Additionally, the cosmetic label must contain the following information : </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Basic information of the product</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Serial number</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Ingredients Table</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Weight or volume of the product</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Raw material information</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Expiration date</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Allergy-causing ingredients</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>How to use and precautions</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>origin</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>RP information</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CPNP_03.jpg" alt="CPSR includes">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">CPSR includes</h3>
                                        <p class="sub_txt">
                                            The Cosmetic Product Safety Report is a document to prove that cosmetics to be registered in CPNP are safe products. The Cosmetic Product Safety Report (CPSR) is prepared by the safety evaluator, and the safety evaluator must have a degree in a related field and have at least 3 years of experience.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The CPSR includes the following information : </span>
                                                <li>&#10020;. <span class="nbsp">&nbsp;</span>ingredient table</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>MSDS</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>CoA</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Ingredient mixing ratio</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Cosmetic manufacturer and container manufacturer declaration</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Draft label</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Package image</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/CPNP_04.jpg" alt="PIF includes">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">PIF includes</h3>
                                        <p class="sub_txt">
                                            The Product Information File is a file that combines all the information necessary for the distribution of cosmetic products in the European market and includes the Cosmetic Product Safety Report.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020;. <span class="nbsp">&nbsp;</span>Product description</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Product safety report</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Manufacturing method GMP conformity (ISO 22716 certificate or GMP)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Product efficacy and evidence (clinical test, etc.)</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Animal test data</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>label</li>
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
        </article><!--+++++ 컨텐츠 09 종료 +++++-->  
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>