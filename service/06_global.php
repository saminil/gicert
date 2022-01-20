<?php
	include_once('./_common.php');
$g5['title'] = 'Training Institution';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#00d4d4 }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 33.3% }
    
    /* 연수기관 지정 절차(컨텐츠 02) 페이지에 대한 css */
    .ordinal { display:flex;margin-top: 50px }
    .ordinal li { flex: 1;background: rgba(0,212,212,0.5);text-align: center;padding: 10px;margin: 0 50px 0 0;position: relative }
    .ordinal li::before { content: '';display: block;width: 20px;height: 20px;border-bottom: 2px solid #222;border-right: 2px solid #222;transform:rotate(-45deg);position: absolute;top: 13px;right: -30px }
    .ordinal li:last-child { margin: 0 }
    .ordinal li:last-child::before { top: 55px;right: 50%;transform:rotate(45deg) }
    .ordinal:last-child li:nth-child(1)::before { right: -37px;transform:rotate(135deg) }
    .ordinal:last-child li:nth-child(2)::before { right: -37px;transform:rotate(135deg) }
    .ordinal:last-child li:nth-child(3)::before { display: none }
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }
    
    .point_b1 { font-size: 1.6em; font-weight: 600; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 600; margin-bottom: 15px }/* 본문의 강조부분 css */
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(0,212,212,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #00d4d4; display: inline-block; border: 2px solid #00d4d4; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    
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
    
    @media screen and (max-width:1024px) {
        .ordinal li::before { top: 25px }
        .ordinal li:last-child::before { top: 85px;right: 45% }
    }

	@media screen and (max-width:768px) {		
        .con_img img { width: 60% }
        .con_txt { width: 100% }
        .page_con { width: 100% }
        .con_txt ul { width: 100% }
	}
    
    @media screen and (max-width:640px) {	
        .con_img img { width: 100% }
        .ordinal li:last-child::before { top: 75px; }
        
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
        .ordinal { margin-top: 20px }
        .ordinal li { padding: 5px;margin: 0 20px 0 0 }
        .ordinal li::before { top: 32px;right: -14px; width: 14px;height: 14px }
        .ordinal li:last-child::before { top: 80px;right: 40% }
        .ordinal:last-child li:nth-child(1)::before { right: -20px; }
        .ordinal:last-child li:nth-child(2)::before { right: -20px; }
        

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
	    <h2>Training Institution Service</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Overview</a></li>
			<li><a href="javascript:;">Procedure of Training Institute Designation</a></li>
			<li><a href="javascript:;">Training Institute invigilator</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="sub_tit">Training Institution Overview</h1>
                <h2 class="sub_tit2 fc_pointer">What is the Training Institution?</h2>
                <p class="sub_txt">
                    Training Institution means the institution that provides educational services for training professionals based on standards applicable in industrial area to all personnel in various industries.<br><br>
                    IPC (International Personnel Certification Association) has signed an MLA with the IAF (International Accreditation Forum) for IPC’s field of activities (Personnel Certification and Training Institution Designation), and the international personnel certification body, GPC (Global Personnel Certification), a full member of the IPC, is working on the designation of training institution through IAF MLA.<br><br>
                    GIC provides auditor training and certification services based on cooperation With IGC and GPC, who are a partner of GIC.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">Competency of Partner Organization IGC</h3>
                                <p class="sub_txt">
                                    IGC has been designated as an official training institution by GPC and provides education services to various industries areas.<br><br>
                                    IGC’s educational services are highly reliable and international services that can be recognized equally anywhere in the world as well as in domestic.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>IGC can provide various services based on securing various certification schemes as follows.</span>
                                        <li>1. <span class="nbsp">&nbsp;</span>Training ISO Management System Auditor/Lead Auditor/Internal Auditor</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>FSSC 22000 Education (FSSC Headquarters Authorized Training Institution)</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>FDA, FSMA Education (FSVP, PCQI)</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Electrical Electronic Test Education</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Food Nutrition Test Education (Chemical, Biological)</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>CE/MDR Education</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>ISO/IEC 17021 Education</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>ISO/IEC 17025 Education</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>ISO 19011 Education</li>
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
                                <h3 class="point_b1">Competency of Partner Organization GPC</h3>
                                <p class="sub_txt">
                                    GPC can provide various services based on securing various certification schemes as follows.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GPC is an international personnel certification body that certifies the qualifications of personnel accredited by the International Accreditation Service (IAS) based in the United States on the basis ISO/IEC 17024.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Personnel certification is issue certificates after evaluating the suitability of ability based on applicable standards.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>EA (European Organization for Certified Agency Cooperation) and APAC (European Organization for Certified Agency Cooperation) under the IAF have signed MLA about personnel certification.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>All personnel qualification certification will also request the remaining regional organization, IAAC (American Organization for Certified Agency Cooperation), to issue personnel certificates with the IAF logo when entering into the MLA.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GPC will continue to make efforts to cultivate high-quality professionals by providing various services for personnel qualifications through various certification schemes.</li>
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
                <h1 class="sub_tit">Procedure of Training Institute Designation</h1>
                <h2 class="sub_tit2 fc_pointer">Training Institution Designation Procedure</h2>
                <p class="sub_txt">
                    In order to designate a training institution, the management system and lecture location for the operation of the training institution must be regularly evaluated.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">Submission Documents When Applying for Training Institution</h3>
                                <p class="sub_txt">
                                    The following items should be reviewed when designating a training institution from a partner organization, GPC.<br><br>
                                    This is used as evaluation material about the institution and is protected by the GPC security procedure.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Manual and Procedure list</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Outsourcing Company Information, if applicable</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Instructor History and Evidence material</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Lectures-related materials, Location, Standards, Full plan, Textbook, etc.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Workshop Materials Such as Cast Study and Scenario</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Technical Procedure about Evaluating Individual or Team Activities</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Training Certificate Sample</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Continuous Evaluation Data During the Curriculum</li>
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
                                <h3 class="point_b1">Application Procedure</h3>
                                <ul class="ordinal">
                                    <li>Receiving an application</li>
                                    <li>Payment of Expenses </li>
                                    <li>Document review</li>
                                </ul>
                                <ul class="ordinal">
                                    <li style="font-size: 1rem">Issue a Designation document</li>
                                    <li>Final Approval </li>
                                    <li>and on-site audit </li>
                                </ul>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">Training Institute invigilator</h1>
                <h2 class="sub_tit2 fc_pointer">Services of registering invigilator</h2>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">Registration of invigilator in Training Institution</h3>
                                <p class="sub_txt">
                                    If a training institution conducts a test of a partner organization, GPC, it is necessary to register a invigilator in the GPC for fairness.<br><br>
                                    <span class="point_b2">※ The GPC has full authority related to the test.</span>
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>At least 1 invigilator is assigned to each of per 20 candidates, they perform the following task.</span>
                                        <li>- <span class="nbsp">&nbsp;</span>Identification of Candidates</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Test Guidance (Limited Time, Precautions, Prohibition of Cheating, Rights of Candidates, Method of Raising Objections, Criteria for Acceptance, etc.)</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Invigilator</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Finding and Taking Measures Against Cheaters</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Distribution and Retrieval of Test Papers and Answer Sheets</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Seal and Submit Collected Test Papers and Answer Sheets</li><br><br>
                                        <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>Invigilator should also maintain fairness and have no interests in the candidates.</span><br><br>
                                        <span class="point_b2">&#10020; <span class="nbsp">&nbsp;</span>GPC can be registered after evaluation according to simple history verification and internal procedure for candidates who have applied as invigilator.</span><br><br>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
        </article><!--+++++ 컨텐츠 03 종료 +++++--> 
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
<!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>