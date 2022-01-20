<?php
	include_once('./_common.php');
$g5['title'] = 'System Certification';//<!------서브페이지 최상위 타이블, css/design.css 파일 Line 425 ~ line 430까지 참조-------> 
include_once(G5_THEME_PATH.'/head.php');

	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    
    /* 컨텐츠 페이지별 css */
	.fc_pointer { color:#f89834 }/*각 서브페이지의 포인트 컬러*/
    .link:hover { color: blue;text-decoration: underline }/* 링크에 대한 css */
    
    /* 각 페이지 탭메뉴 css */
    .tab_menu.tab01 ul li { width: 25% }
    
    /* 컨텐츠 공통 css */ 
    .content_wrap {width:100%; max-width:1200px; margin:0 auto; font-size: 1.2em !important;font-weight: 400;line-height: 1.5 }/* 서브페이지 전체 레이아웃 */
    section, article { margin-bottom: 70px }
    
    .point_b1 { font-size: 1.6em; font-weight: 600; text-align: center; margin-bottom: 30px }/* 문단 제목 css */
    .point_b2 { display: block;font-size: 1.1em; font-weight: 600; margin-bottom: 15px }/* 본문의 강조부분 css */
    
    .nbsp {display: inline-block; text-indent: 0.4em }/* 리스트 자간 조절 */
    .center-diamond { border: 0; height: 2px; width: 100%; position: relative; margin: 50px auto 0; background: rgba(248,152,52,0.5) }/* 문단 처음과 끝부분 수평 가로선, fc_pointer와 동일한 색 적용 */
    .center-diamond::before { content: ""; width: 10px;height: 10px;background: #f89834; display: inline-block; border: 2px solid #f89834; position: absolute;top: -5px;left: 50%;margin: 0 0 0 -3px; -webkit-transform: rotate(45deg) }/* 문단 처음과 끝부분 선 위에 다이아몬드모양, fc_pointer와 동일한 색 적용 */
    
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
    
    
    /* 주요 사업영역에 대한 css */
    .partner_type2 { margin:70px 0 0; } 
    .partner_type2 .sec_tt { font-size:1.6em;font-weight:600;color:#222;margin-bottom:20px; }
    
    .partner_type2 .con_arrow { width:100%; max-width:1200px;  padding-bottom:20px;  margin:0 auto; }
	.partner_type2 .con_arrow p { position:relative; font-size:2em; color:#000; padding-left:30px; }
	.partner_type2 .con_arrow span { position:absolute; right:0; display:inline-block; font-size: 1em;  padding-left: 10px;  color: #555; }
	.partner_type2 .con_arrow > p:before { position:absolute; top:4px; left:10px; display:inline-block; content:""; width:3px; height:23px; background-color:#1F88E5; -ms-transform:rotate(45deg); -webkit-transform:rotate(45deg); -moz-transform:rotate(45deg); -o-transform:rotate(45deg); transform:rotate(45deg); }

	.partner_type2 .con_box { width:100%; padding:20px 0; border-top:1px solid #000; border-bottom:1px solid #000; }
	.partner_type2 .con_box:after {content:""; display:block; clear:both; }
	.partner_type2 .con_box ul { padding:0; margin:0; }
	.partner_type2 .con_box ul li {float:left; width:50%; list-style:none; margin:10px 0; }
	.partner_type2 .con_box ul li p {display:table; width:100%; }
	.partner_type2 .con_box ul li p > em, .business_type2 .con_box p > span {display:table-cell; vertical-align:top; }
	.partner_type2 .con_box ul li p > em { width:30px; }
	.partner_type2 .con_box ul li p > em > strong {display:inline-block; width:30px; height:30px;  line-height:30px; color:#fff; background-color:#000; text-align:center; font-size:1em;  border-radius:100%; -moz-border-radius:100%; -webkit-border-radius:100%; -o-border-radius:100%; font-weight:500; }
	.partner_type2 .con_box ul li p > span {font-size:1rem; line-height:30px; color:#555; letter-spacing:-0.75px;  padding:0 15px; }
    
    
    /* ------------------------ 반응형 시작 ------------------------ */   

	@media screen and (max-width:768px) {		
        .con_img img { width: 60% }
        .con_txt { width: 100% }
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }/* 주요사업영역 width값 100%로 변경 */
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
            
            $("#con4-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con5-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con7-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con8-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            $("#con13-" + index).addClass('on'); // 선택된 섹션(화면)에 활성화 클래스인 on 추가
            
            $(target).addClass('on'); // 선택된 탭 버튼에 활성화 클래스인 on 추가
        });
    })
</script>
<!-- 탭 메뉴 구현 끝 -->
<br>

<!-- /* 그누보드 내용관리등 에디터로 입력할 경우 여기서부터 */ -->

<div class="content_wrap">
	<div class="tab_menu tab01">
	    <h2>System Certification Services</h2>
		<ul>
			<!-- 처음 활성화 메뉴에 class="on" -->
			<li class="on"><a href="javascript:;">Quality</a></li>
			<li><a href="javascript:;">Environment</a></li>
			<li><a href="javascript:;">Health &amp; Safety</a></li>
			<li><a href="javascript:;">Medical Device</a></li>
			<li><a href="javascript:;">Food</a></li>
			<li><a href="javascript:;">Energy</a></li>
			<li><a href="javascript:;">Information Security</a></li>
			<li><a href="javascript:;">Anti-Bribery</a></li>
			<li><a href="javascript:;">Education</a></li>
			<li><a href="javascript:;">Business Continuity</a></li>
			<li><a href="javascript:;">Event Sustainability</a></li>
			<li><a href="javascript:;">Cosmetic</a></li>
			<li><a href="javascript:;">Customer Satisfaction</a></li>
			<li><a href="javascript:;">Facility Management</a></li>
			<li><a href="javascript:;">Supply Chain</a></li>
			<li style="display:none"><a href="javascript:;">Social Accountability</a></li>
		</ul>
	</div>
    
    <div class="tab_con">
		
        <!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") +++++-->
        <article style="display:block">
            <div class="page_title">
                <h1 class="sub_tit">ISO 9001:2015</h1>
                <h2 class="sub_tit2 fc_pointer">Quality Management System</h2>
                <p class="sub_txt">
                    Today, many companies want to not only meet their organizations’ needs, but also provide better products and services. As quality assurance of products and services and stakeholders' demands for product responsibility increase, the importance of quality management, which is an essential requirement for client satisfaction, is increasing.<br><br>
                    ISO 9001 Quality Management System is one of the most effective management tools organizations can use to implement quality management. <br><br>
                    It is also an international standard that specifies the requirements of quality management systems that can be applied to all industrial fields and activities. It also provides effective quality management processes for businesses.<br><br>
                    The requirements of ISO 9001 are comprehensive and can apply to any organization, regardless of its shape, size, or product and service provided. Therefore, this standard is the most commonly used quality management standard in the world.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO9001_01.jpg" alt="ISO 9001:2015 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 9001:2015 Requirements</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative References</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the Organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance Evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO9001_02.jpg" alt="The importance of ISO 9001:2015">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 9001:2015</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Reinforce marketing</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Meet diverse client needs</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Improve client’s satisfaction and retention</li>
                                        <li>4 <span class="nbsp">&nbsp;</span>Increasing revenue and overcoming export barriers due to increasing corporate image</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Increased external reliability within the enterprise.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Use it as a tool to continuously improve organizational performance and measure performance</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Maximizing preventive activities reduce quality costs</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO9001_03.jpg" alt="The necessity and effects of ISO 9001:2015">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The necessity and effects of ISO 9001:2015</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>In today's service sector-focused economy, many companies use ISO 9001 as a business tool.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Appropriate quality control is Improves business and positively impacts investment, market share, revenue growth, competitive advantage and litigation avoidance.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Improve an organization's internal and external reliability, best response about product responsibility system, preferential treatment of certified companies, and can be enjoyed preferential when corporate management audit. Such quality management has a positive impact on companies and client.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO9001_04.jpg" alt="GIC’s Competency">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC’s Competency</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>The GIC Certification body provides certification services for the quality management system as a reliable global leader in management system certification with accreditation of ISO 9001:2015 from the accreditation body, IAS in U.S.A.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GIC has up-to-date knowledge of various specific scope and legal and voluntary requirements in major markets around the world, providing reliable audit.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC Certification Services</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 01 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->   

        <article><!--+++++ 컨텐츠 02 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">ISO 14001:2015</h1>
                <h2 class="sub_tit2 fc_pointer">Environmental management systems</h2>
                <p class="sub_txt">
                    ISO 14001 is an international standardization organization (ISO) that specifies requirements for a company's environmental management system. Many companies around the world are certified for the environmental management of their organizations, and can be certified by third-party certification agencies to ensure that their environmental systems are compatible with ISO 14001 for a series of management activities ISO 14001 can improve the company's economic profitability and cost savings through minimizing waste and energy consumption, compliance with environmental laws, environmental issues, entry into international markets through international trust acquisition And efficient access is possible in the export market
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO14001_01.jpg" alt="ISO 14001:2015 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 14001:2015 Requirements</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
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
                                <h3 class="point_b1">The Importance of ISO 14001:2015</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>
                                            1. <span class="nbsp">&nbsp;</span>Improve organizational competitiveness by eliminating environmental risks, improving environmental performance, and reducing costs 
                                        </li>
                                        <li>
                                            2. <span class="nbsp">&nbsp;</span>The negative environmental perception of the organization is alleviated and the financial benefits increase as the organization implements suitable environmental alternatives.
                                        </li>
                                        <li>
                                            3. <span class="nbsp">&nbsp;</span>Resolving environmental issues through continuous improvement of environmental performance
                                        </li>
                                        <li>
                                            4. <span class="nbsp">&nbsp;</span>Reduce energy usage, reduce waste, increase recycling, reduce raw materials and consumables costs
                                        </li>
                                        <li>
                                            5. <span class="nbsp">&nbsp;</span>When exporting to developed countries, it is required to certify the environmental management system, which can be effective in obtaining certification.
                                        </li>
                                        <li>
                                            6. <span class="nbsp">&nbsp;</span>Improved corporate image to increase sales and facilitate trade transactions.
                                        </li>
                                        <li>
                                            7. <span class="nbsp">&nbsp;</span>It is easy to secure new customers by increasing external reliability in the company.
                                        </li>
                                        <li>
                                            8. <span class="nbsp">&nbsp;</span>Build a global consensus of good environmental practices and improve your image as an eco-friendly enterprise
                                        </li>
                                        <li>
                                            9. <span class="nbsp">&nbsp;</span>Save on supplies and energy
                                        </li>
                                        <li>
                                            10. <span class="nbsp">&nbsp;</span>Increased financial benefits by implementing appropriate environmental alternatives  
                                        </li>
                                        <li>
                                            11.	<span class="nbsp">&nbsp;</span>Reduce direct costs by minimizing waste and energy consumption
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
                                <img src="./image/ISO14001_02.jpg" alt="Estimated Effectiveness of ISO 14001:2015">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Estimated Effectiveness of ISO 14001:2015</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>It is possible to improve the business structure and create new businesses through environmentally friendly management.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Build a company's green friendly image to gain a competitive advantage in the marketplace.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Objectively demonstrates that it is consistent with the environmental management rules that are widely used around the world.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Improve process efficiency and reduce cost by minimizing waste and energy consumption.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>You can gain international confidence and gain competitive advantage in the export market.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>It reduces the risk of environmental accidents and encourages the satisfaction of members.</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>We can prevent environmental complaints that may occur in the future.</li>
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
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GIC has the accredited scheme, ISO 14001, by the U.S. accreditation body, IAS and provides certification services for the environmental management system as a reliable global leader in management system certification.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GIC provides reliable audits with up-to-date knowledge of a wide range of specific and legal and voluntary requirements in key global markets.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC certification service</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 02 종료 +++++--> 

        <article><!--+++++ 컨텐츠 03 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">ISO 45001:2018</h1>
                <h2 class="sub_tit2 fc_pointer">Occupational Health and Safety Management System</h2>
                <p class="sub_txt">
                    Recently, there has been an increasing interest in Occupational Health and Safety issues, and at the same time, <span class="fc_pointer">organizational responsibility for the health and safety of workers has also been emphasized.</span><br><br>
                    ISO 45001:2018 (Occupational Health and Safety Management System) is a standard introduced to Help organizations provide a healthy and safe working environment, prevent work-related injuries and health impairments, and continue to improve Health and Safety performance.<br><br>
                    By applying the Occupational Health and Safety Management System, the organization can fulfill its responsibilities for the health and safety of workers and <span class="fc_pointer">secure the trust of stakeholders.</span><br><br>
                    Additionally, ISO 45001:2018 can help <span class="fc_pointer">protect personnel resources</span> and <span class="fc_pointer">reduce disaster losses</span> by identifying, eliminating, or minimizing risks and causes of errors.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt style="margin-bottom: 70px"></dt>
                            <dd>
                                <h3 class="point_b1">OHSAS 18001:2007 VS ISO 45001:2018</h3>
                                <div class="con_txt">
                                    <ul><span class="point_b2">Since ISO 45001:2018 International Standards have been established, to <span class="fc_pointer">further enhance compliance with workers' rights and legal requirements.</span></span>
                                        <li>- <span class="nbsp">&nbsp;</span>Workers and other stakeholders: Provide more details about considering the needs and expectations of workers and other stakeholders and determining whether they should be accepted within the system.</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Participation and consultation: Strengthen requirements related to worker participation and consultation in establishing and implementing a Occupational Health and Safety Management System.</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Risks and opportunities: Include risks and opportunities associated with management systems as well as health and safety risks and opportunities.</li>
                                        <li>- <span class="nbsp">&nbsp;</span>Performance assessment: Measure health and safety operations to meet legal requirements, health and safety risks, opportunities and performance, and objectives.</li>
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
                                <h3 class="point_b1">The objectives of ISO 45001:2018</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Provides a foundation for managing Occupational Health and Safety risks and opportunities.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Prevent worker’s injury and disease.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Help organizations meet legal and other requirements.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Occupational Health and Safety Management System help organizations improve Occupational Health and Safety performance by implementing the requirements of ISO 45001:2018.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO45001_01.jpg" alt="ISO 45001:2018 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 45001:2018 Requirements</h3>
                                <p class="sub_txt">
                                    ISO 45001:2018 includes improved health and safety, eliminating risk factors, and minimizing health and safety risks (including system faults).<br><br>
                                    This International Standard helps organizations achieve the intended outcomes of the Occupational Health and Safety Management System, and the intended outcomes of the Occupational Health and Safety Management System consistent with the organization's health and safety policy include : <br><br>
                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Continuously improve health and safety performance.</span>
                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Meet legal requirements and other requirements.</span>
                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Achieve health and safety objectives.</span>
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative References</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the Organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership and Worker Participation</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance Evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO45001_02.jpg" alt="The importance of ISO 45001:2018">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 45001:2018</h3>
                                <div class="sub_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Domestic industrial disaster rates are constantly increasing.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>The importance of health and safety certification in terms of long-term loss management is being emphasized.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>In the event of an industrial disaster, the cost of compensation for industrial disasters, including the decline in the company’s image due to retirement of workers, and various indirect costs, is a huge loss to the company in the long term.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Introducing ISO 45001:2018 can help keeping workers safe and promoting sustainable economic growth for the enterprise.</li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    <ul><span class="point_b2">This standard helps with the following particulars : </span>
                                        <li>1. <span class="nbsp">&nbsp;</span>Identify hazardous substances in the workplace and perform effective preventive management.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Improve the working environment of workers by establishing an Occupational Health and Safety Management System.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Reduce accident compensation costs due to reduced industrial accident rates within the enterprise.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Respond in accordance with domestic and foreign safety laws and regulations.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Improve reliability from stakeholders through continuous management of safety and health.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Identify areas of training and eligibility requirements.</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Increase productivity.</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Complement the client's pre-registration process.</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Facilitate corporate accountability.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO45001_03.jpg" alt="The necessity and effects of ISO 45001:2018">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The necessity and effects of ISO 45001:2018</h3>
                                <div class="sub_txt">
                                    <ul>
                                        <li>&#10020;<span class="nbsp">&nbsp;</span>Active response to the international trend of the Occupational Health and Safety Management System is possible.<br><br>
                                            <p style="display: block;text-indent: 1.2em">-&nbsp;&nbsp;Active response is required due to the organization's transition to self-management.</p>
                                            <p style="display: block;text-indent: 1.2em">-&nbsp;&nbsp;Should stabilize labor-management relations.</p>
                                            <p style="display: block;text-indent: 1.2em">-&nbsp;&nbsp;Continuous pressure from international organizations such as the ILO is emerging.</p><br>
                                        </li>
                                        <li>&#10020;<span class="nbsp">&nbsp;</span>Needed to establish an optimal Occupational Health and Safety Management System for worker safety.<br><br>
                                            <span style="display: block;text-indent: 1.2em">-&nbsp;&nbsp;Needed to protect lives and property from accidents, and continuously reduce remain risks.</span>
                                            <span style="display: block;text-indent: 1.2em">-&nbsp;&nbsp;The focus is on worker participation and consultation, and compliance with workers' rights and legal requirements should be strengthened.</span><br>
                                        </li>
                                        <li>&#10020;<span class="nbsp">&nbsp;</span>It can cope with financial and social pressures<br><br>
                                            <span style="display: block;text-indent: 1.2em">-&nbsp;&nbsp;Build reliability from banks and insurers is required because reduced industrial accident insurance rates</span>
                                            <span style="display: block;text-indent: 1.2em">-&nbsp;&nbsp;By providing stakeholders with a sense of security for investment, respond to social pressures.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    <ul><span class="point_b2">When using ISO 45001:2018 as a business means, effect is : </span>
                                        <li>1. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Build safety management processes.</span></li>
                                        <li>2. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Improve compliance and ability for response to safety-related laws.</span></li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Minimize health and safety risks to <span class="fc_pointer">reduce safety incident handling costs.</span></li>
                                        <li>4. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Promote the corporate image</span> by protecting workers' safety and improving productivity.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Actively cope with domestic and foreign laws.</span></li>
                                        <li>6. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Strengthen monitoring of international labor.</span></li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO45001_04.jpg" alt="GIC’s Competency">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC’s Competency</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>GIC provides certification services for the Occupational Health and Safety Management System as a reliable global leader in management system certification with accreditation of ISO 45001:2018 from IAS, accreditation body in U.S.A.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>As an expert with training and related technical qualifications, GIC's auditors are capable of providing effective and thorough audit, have the knowledge and capabilities that meet the needs of your business and implementation and effectiveness of the ISO 45001:2018 management system.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC Certification Services</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 03 종료 +++++--> 
 
        
<!--===========================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 04 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="fir_menu on"><a data-slide-index="0">ISO 13485</a></li>
                    <li><a data-slide-index="1">ISO 15378</a></li>
                    <li><a data-slide-index="2">ISO 14155</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con4-1" class="roll roll01 on"><!-- 4depth 컨텐츠 04-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 13485:2016</h1>
                        <h2 class="sub_tit2 fc_pointer">Medical devices — Quality management systems</h2>
                        <p class="sub_txt">
                            ISO 13485 is an internationally accreditation standard for quality management systems in the medical device industry. This standard can also be applied to external organizations that provide services such as sterilization, calibration, and sales to medical device organizations, providing a foundation for quality management systems for medical device and medical device related services. In addition, ISO 13485 is more demanding and difficult to acquire than other certifications to handle products that deal with life, but it has high added value. ISO 13485 conforms to global medical device standards and is a necessary certification for overseas export.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO13485_01.jpg" alt="ISO 13485:2016 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 13485:2016 Requirements</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Term and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Quality management system</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Management responsibility</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Resource management</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Product realization</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Measurement, analysis and improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO13485_02.jpg" alt="The Importance of ISO 13485:2016">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The Importance of ISO 13485:2016</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Essential for medical device companies exporting products to overseas markets.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Gain competitive edge in exporting and increase sales.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Increase accessibility to more markets around the world with certification.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Prove safer and more effective medical device production.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Help obtain medical device authorization.</li>
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
                                        <h3 class="point_b1">Estimated Effectiveness of ISO 13485</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>It is a necessary certification for companies preparing to enter the medical industry and export overseas.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Ensure safety and quality of the entire lifecycle process of medical devices and ensure reliability to customers.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Increase product safety through continuous quality improvement.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Along with certification, access to more markets around the world and obtaining medical device licenses can help boost sales.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>It will help you get CE certification.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Increase product safety through continuous quality improvement.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO45001_04.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is a global leader in management system certification and provides certification services for medical device management systems with the accreditation of ISO 13485 from IAS, accreditation organization in the United States.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC's auditors accurately evaluate the suitability of the medical device quality management system through years of technology and expertise, and provide CE certification and FDA services through partnership with overseas product certification institutions based on global competitiveness.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC certification service</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con4-2"  class="roll roll02"><!-- 4depth 컨텐츠 04-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 15378:2017</h1>
                        <h2 class="sub_tit2 fc_pointer">Primary packaging materials for medicinal products</h2>
                        <p class="sub_txt">
                            ISO 15378:2017 specifies requirements for quality management systems for primary packaging manufacturers of medicines and medical devices. Specifications for the primary packaging of medicines, inhumanity developed material suppliers to verify the quality management system standards. Primary packaging materials include glass, plastic, rubber, aluminum, etc., which directly come into contact with contents such as drugs, medical devices, cosmetics, etc., and requirements of ISO 9001 (Quality Management System) and Good Manufacturing Practice (GMP). It is based on ISO 9001 as a GMP for cosmetics containers and pharmaceutical direct containers, and is a certification standard required for cosmetics container manufacturers or pharmaceutical direct containers (vials, ampules, rubber pancakes, etc.)
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO15378_01.jpg" alt="ISO 15378 : 2017 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 15378 : 2017 Requirements</h3>
                                        <p class="sub_txt">
                                            The ISO 15378:2017 standard is the same high-level structure (HLS), consisting of 10 chapters and 4 appendices. For manufacturers who understand and perform quality management systems, ISO 15378 Standards can be certified by understanding and reflecting additional requirements.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                            </ul>
                                        </div>
                                        <div class="con_img"><img src="./image/ISO15378_02.jpg" alt="The following are additional requirements in ISO 15378:2017"></div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">[The following are additional requirements in ISO 15378:2017]</span>
                                                <li>4.3 <span class="nbsp">&nbsp;</span>Specific document management conditions: The document must be signed, designated as a security document if necessary, and identifiable.</li>
                                                <li>4.4 <span class="nbsp">&nbsp;</span>Critical process check shall be in records management is a double.</li>
                                                <li>5.2 <span class="nbsp">&nbsp;</span>Customer review should be accepted and shall meet the requirements.</li>
                                                <li>5.5 <span class="nbsp">&nbsp;</span>Signature of the staff keep the list and stressed the independence of the quality control.</li>
                                                <li>5.5.3 <span class="nbsp">&nbsp;</span>Including law requirements when internal communication, and the primary quality situation shall be communicated in the situation in a timely.</li>
                                                <li>5.8.3 <span class="nbsp">&nbsp;</span>The effectiveness of education and training should be understood during the management review meeting.</li>
                                                <li>6.2 <span class="nbsp">&nbsp;</span>GMP education and training were emphasized.</li>
                                                <li>6.4 <span class="nbsp">&nbsp;</span>Standards for clean rooms and working environments should be established, and pollution control, pest control, utilities, and maintenance activities should be described.</li>
                                                <li>7.1 <span class="nbsp">&nbsp;</span>Risk assessment should be conducted.</li>
                                                <li>7.2 <span class="nbsp">&nbsp;</span>If there is any change in the product, it shall be notified and the customer's requirements shall be documented for disposal of discarded packaging materials.</li>
                                                <li>7.2.3 <span class="nbsp">&nbsp;</span>You should also notify the customer of the problem of the product that has not been found yet.</li>
                                                <li>7.3 <span class="nbsp">&nbsp;</span>When the risk assessment shall be carried out in stage design, development and design changes shall forthwith so notify the customer.</li>
                                                <li>7.4 <span class="nbsp">&nbsp;</span>Subcontractor shall be managed and the particularly the ability of the company that experiment should be evaluated. It needs the approval of the quality department, about key supplies.</li>
                                                <li>7.5.1 <span class="nbsp">&nbsp;</span>The manufacturing date should be managed and the production environment conditions approved by the customer. Containers, fillings and packaging lines must be identified, and reprocessing materials must also be approved by the customer. The line inspection for the next task should be carried out and the change management procedure should be established.</li>
                                                <li>7.5.2 <span class="nbsp">&nbsp;</span>The feasibility of the product process should be checked and implemented, and the feasibility check should be carried out again if there are any changes. In addition, this validity should be kept as a record, and data such as functional test results and accuracy should be kept and maintained when using the software.</li>
                                                <li>7.5.3 <span class="nbsp">&nbsp;</span>It should be possible to identify and track production process products including critical process data.</li>
                                                <li>7.5.5 <span class="nbsp">&nbsp;</span>The preservation period and storage conditions of the warehouse must be specified.</li>
                                                <li>7.6 <span class="nbsp">&nbsp;</span>The load of automatic inspection equipment should be tested, production data should be provided when requested by the customer, and important measurement equipment should be inspected and calibrated.</li>
                                                <li>8.2.4 <span class="nbsp">&nbsp;</span>We need to manage records of deviations and warehousing inspection, process inspection, final inspection, and storage.</li>
                                                <li>8.3 <span class="nbsp">&nbsp;</span>Evaluate the risk of rework, and need approved by the quality department when rework, and non-conformity shall be managed with customer approval.</li>
                                                <li>8.5.2 <span class="nbsp">&nbsp;</span>Corrective action to be corrected shall be taken as soon as possible on the prescribed schedule.</li>
                                            </ul>
                                            <ul><span class="point_b2">* Scope</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>If it is necessary to demonstrate the organization's ability to provide primary packaging materials, the requirements for the quality management system should be specified.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>This specification applies to the design, manufacture, and supply of primary packaging materials for medical supplies, which can also be used for certification purposes.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>All requirements of this specification are general, developed to be applicable to all organizations regardless of the product, and may be excluded if the requirements of the specification cannot be applied to the organization and product.</li>
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
                                        <h3 class="point_b1">The Importance of ISO 15378:2017</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>Primary packaging directly in contact with medicines is directly related to the health of people or animals that use them, thus reducing costs by minimizing contamination, mixing and manufacturing errors and waste during manufacturing and improving productivity.
                                                </li>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>ISO 15378 certification improves brand and organizational image and provides guidance on risk management and validation to mitigate the risks identified as contamination, mixing and error of the product and ensure product efficacy and shelf life
                                                </li>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>Ensure high-quality products, which can lead to improved customer satisfaction and implement optimized quality management system requirements
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
                                        <h3 class="point_b1">Estimated Effectiveness of ISO 15378</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>Helps improve brand and organizational image and ensures organizational quality and safety.
                                                </li>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>Helps organizations identify, control, and manage risks throughout the auditing process.
                                                </li>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>Support organizations' efforts to maintain current and future compliance with relevant legal  and regulatory requirements.
                                                </li>
                                                <li>
                                                    4. <span class="nbsp">&nbsp;</span>Improve customer satisfaction through effective application, including continuous improvement and ensuring compliance with customer requirements.
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
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is a global leader in management system certification and provides certification services for medical devices quality management systems with accreditation of ISO 13485 and ISO 9001 from IAS, accreditation body in U.S.A.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC's auditors accurately evaluate the suitability of the management system through years of technical skills and expertise, helping customers develop continuously.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC certification service</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con4-3" class="roll roll03"><!--4depth 컨텐츠 04-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 14155:2020</h1>
                        <h2 class="sub_tit2 fc_pointer">Clinical investigation of medical devices for human subjects</h2>
                        <p class="sub_txt">
                            ISO 14155 is the International Standard for Human Medical Device Clinical Trials – Good Clinical Practice (GCP), which provides guidelines on the principles of clinical trials, procedures for performing and information to be collected. Clinical trials in accordance with ISO 14155 have the advantage of protecting the safety and health of the insured while collecting objective and reliable scientific clinical data.<br><br>
                            In addition to the EU, the United States, Canada, Brazil, Australia, Japan, China and Russia accreditation medical device clinical trials and clinical data based on ISO 14155.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO14155_01.jpg" alt="ISO 14155:2020 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 14155:2020 Requirements</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Summary of good clinical practice (GCP) principles</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Ethical considerations</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Clinical investigation planning</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Clinical investigation conduct</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Suspension, termination, and close-out the clinical investigation</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Responsibilities of the sponsor</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Responsibilities of the principal investigator.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO14155_02.jpg" alt="The Importance of ISO 14155:2020">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The Importance of ISO 14155:2020</h3>
                                        <p class="sub_txt">
                                            Clinical investigation plans should be designed appropriately. Without disclosing the rules and procedures for data collection, medical device manufacturers' safety and product performance can be compromised, which is critical. In addition, the standards is guaranteed the rights, stability, welfare and are clinical trials of the test subjects can rely on the data, a very important evidence.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Ability to collect clinical data related to safety and performance </li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Protect patient safety and well-being</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Conformity assessment of the device.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Fully supportive of claims regarding the safety and performance of medical device manufacturers.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The rights and safety benefits of the test subjects are guaranteed.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Clinical trial data is reliable.</li>
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
                                        <h3 class="point_b1">Estimated Effectiveness of ISO 14155</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Preemptive response to stricter regulations on medical device clinical trials in Europe.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Presents a guide to the role of a medical device company's platform and international certification standards to enter the overseas market.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Securing competitiveness in clinical trials of medical devices by establishing a standardized clinical research system for medical devices of international standards.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Medical device clinical trials conducted on the human body can be expected to evaluate the safety and performance of medical devices.</li>
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
                                            Starting in May 2020, when the MDR is fully applied, clinical data and findings based on ISO 14155 will be required for export medical devices to the EU.
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">GIC has the following best capabilities : </span>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Medical device clinical trial management and monitoring </li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Support medical device clinical trial research design and protocol development</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Review Clinical Investigation Report</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Review the Trial Master File</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC certification service</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 04 종료 +++++--> 
        
<!--============================================================================================================================-->
   
        <article><!--+++++ 컨텐츠 05 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 22000</a></li>
                    <li><a data-slide-index="1">FSSC 22000</a></li>
                    <li><a data-slide-index="2">FDA FSMA</a></li>
                    <li><a data-slide-index="3">Global HACCP</a></li> 
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con5-1" class="roll roll01 on"><!-- 4depth 컨텐츠 05-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 22000:2018</h1>
                        <h2 class="sub_tit2 fc_pointer">Food Safety Management System</h2>
                        <p class="sub_txt">
                            ISO 22000:2018 is a standard to ensure that food is safety at the point of human consumption, organization in the food chain regulates the requirements about a food safety management system to manage food safety hazards.<br><br>
                            Food safety is concerned with the hazards present in food at the point of consumption.<br><br>
                            Adequate management of the entire food chain is essential because the influx of food safety hazards can occur at any stage of the food chain.<br><br>
                            Therefore, food safety must be guaranteed through the efforts of <span class="fc_pointer">all those involved in the food chain.</span><br><br>
                            The requirements of ISO 22000:2018 are comprehensive, intended to apply to all organizations in the food chain, regardless of size and complexity, and include those <span class="fc_pointer">directly or indirectly</span> involved at one or more stages of the food chain.<br><br>
                            ISO 22000:2018 <span class="fc_pointer">incorporates the principles and application stages of the HACCP system</span> developed by the International Food Standards Commission (CAC) and requires the identification and evaluation of all hazards expected to occur in the food chain, including process forms and hazards related to facilities used.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">HACCP VS ISO 22000:2018</h3>
                                        <p class="sub_txt">
                                            If HACCP focuses on the production process, ISO 22000:2018 requires the management about the producer's food safety management system as a whole<br><br>
                                            In particular, the ISO 22000:2018 Food Safety Management System sets global standards for food management processes and complies with the same practices regardless of the firm's physical location or local regulations.<br><br>
                                            Since HACCP operates according to locally or in jurisdiction within the country where it is certified, submitting certificates to other countries is often not accredited.<br><br>
                                            Therefore, ISO 22000:2018 Food Safety Management System certification, accredited by the International Standards Organization (ISO), may be effective for domestic/abroad exporters.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Scope</h3>
                                        <p class="sub_txt">
                                            ISO 22000:2018 Food Safety Management System is an international standard applicable to all companies, including interrelated companies such as equipment, packaging materials, cleaning agents, food additives, and raw materials across the food supply chain.<br><br>
                                            It can also be applied to companies that want to integrate quality management systems and food safety management systems.<br><br>
                                            Applicable to any organization <span class="fc_pointer">(direct or indirect)</span> within the food chain, regardless of size or complexity of the enterprise.<br><br>
                                        </p>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5">
                                            <tbody>
                                                <tr>
                                                    <th width="50%" valign="top" style="background-color: rgba(248,152,52,0.5);padding: 5px 0">
                                                        <p align="center">Direct related organizations</p>
                                                    </th>
                                                    <th width="50%" valign="top" style="background-color: rgba(248,152,52,0.5);padding: 5px 0">
                                                        <p align="center">Indirect related organizations</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td width="50%" style="padding: 10px">
                                                        <p align="center">
                                                            Feed producers, Farmers, Producers of compositional materials, Food manufacturers, Wholesaler and retailer, Food service provider, Organization that provides to cleaning and sanitation services Transportation, Storage and distribution services, etc.
                                                        </p>
                                                    </td>
                                                    <td width="50%" style="padding: 10px">
                                                        <p align="center">Suppliers of equipment, cleaning, disinfectants, packaging materials, and other food contact materials;</p>
                                                    </td>
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
                                        <img src="./image/ISO22000_01.jpg" alt="ISO 22000:2018 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000:2018 Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO 22000:2018 Requirements are applicable to organizations <span class="fc_pointer">directly or indirectly</span> included in the food chain.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Plan, execute, maintain and update FSMS providing secure products and services based on intended use.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Demonstrate compliance with applicable legal and regulatory food safety requirements.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Evaluate and demonstrate suitability for mutually agreed client’s requirements.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Effective communication about food safety issues to stakeholders within the food chain is required.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Ensure the organization's suitability to the stated food safety policy.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Demonstrate suitability of relevant stakeholders.</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Certification or registration of FSMS by an external authority, self-evaluation, and self-statement of the suitability of this document is required.</li>
                                            </ul>
                                            <ul>
                                                <span class="point_b2">All requirements in this document are comprehensive and intended to be applicable to all organizations in the food chain, regardless of complexity and size. Organizations directly or indirectly included may include feed products, animal food producers, farmers, ingredient producers, food manufacturers, food service providers, organizations providing packaging materials and other food contact materials.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and references</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img horizon">
                                        <img src="./image/ISO22000_02.jpg" alt="The importance of ISO 22000:2018">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 22000:2018</h3>
                                        <p class="sub_txt">
                                            ISO 22000:2018 incorporates the principles and application stages of the Hazard Analysis and Critical Control Point (HACCP) system developed by the International Food Standards Commission.<br><br>
                                            This standard requires the identification and evaluation of all hazards expected to arise from the food chain, including the form of the process and any hazards that may be relevant to the facility in use.<br><br>
                                            Therefore, ISO 22000:2018 helps classify identified hazards based on their need to be managed and provides a means of documentation.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <span class="point_b2">This standard helps with the following particulars : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Establish effective <span class="fc_pointer">food safety management system management means</span> during the construction process.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Gain <span class="fc_pointer">reliability</span> from clients.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>It can improve employees' <span class="fc_pointer">sense of responsibility.</span></li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Help improve the <span class="fc_pointer">sustainability</span> of business.</li>
                                            </ul>
                                            <ul>
                                                <span class="point_b2">This standard applies to all organizations <span class="fc_pointer">directly or indirectly</span> involved in the food chain, including:</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Farms, fish, and dairy farms</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Production of meat, fish, and feed</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Manufacturer of bread, cereal, drinks, and frozen food</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Food service providers, including restaurants, fast food chains, hospitals, hotels and business dinners</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Food storage and delivery, Food processing machine, additives, raw materials, cleaning and sterilizing products and wrapping paper supplier</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO22000_03.jpg" alt="The necessity and effects of ISO 22000:2018">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity and effects of ISO 22000:2018</h3>
                                        <div class="sub_txt">
                                           <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Deliveries that meet client’s requirements such as quality, safety, and legality make client satisfaction possible.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Reduce operating costs by improving the process continuously and increasing operational efficiency.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The required programs (programs in PRP and OPRP) and HACCP are combined with the PDCA cycle in ISO 9001, the efficiency of the food safety management system is increased.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Parallel and integration with the quality/environment/safety and health management system specifications is required.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>The need for integration into various food-related programs (HACCP, BRC, EUREPGAP, GMP) arises.</li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">When using ISO 22000:2018 as a business means, effect is : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Helps <span class="fc_pointer">improve relationships with stakeholders</span></li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Understand the impact of legal and regulatory requirements on businesses and clients, and <span class="fc_pointer">enable compliance testing</span> through internal audits and management reviews.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Ensure higher levels of consistency and traceability</span> in the product to improve crisis management.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Internal harmony and efficiency</span> with other international standard systems can be enhanced.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Helps <span class="fc_pointer">demonstrate the complete implementation of a management system</span> for a variety of food safety and quality.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Prevent food safety accidents in advance</span> while responding to emergencies.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO22000_04.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    &#10020; <span class="nbsp">&nbsp;</span>GIC provides certification services for the food safety management system as a global leader in management system certification with accreditation of ISO 22000:2018 from IAS, accreditation body in U.S.A.
                                                </li>
                                                <li>
                                                    &#10020; <span class="nbsp">&nbsp;</span>As an expert with training and related technical qualifications, GIC's auditors are capable of providing effective and thorough audit, have the knowledge and capabilities that meet the needs of your business and implementation and effectiveness of the ISO 22000:2018 management system.
                                                </li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con5-2" class="roll roll02"><!-- 4depth 컨텐츠 05-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">FSSC 22000</h1>
                        <h2 class="sub_tit2 fc_pointer">Food Safety System Certification</h2>
                        <p class="sub_txt">
                            Food Safety System Certification (FSSC 22000) is a food safety standard developed by the International Food Safety Association under the <span class="fc_pointer">GFSI (Global Food Safety Initiative)</span> by <span class="fc_pointer">specializing in food industrial like food manufacturing and food container manufacturing.</span><br><br>
                            Based on the ISO 22000:2018 Food Safety Management System, the FSSC 22000, a combination of industry-specific prerequisite program requirements, is a <span class="fc_pointer">necessary standard for pioneering overseas markets where various PRPs such as food, food additives, and food packaging are developed and scope is expanded.</span><br><br>
                            In addition, the FSSC 22000 allows major global companies around the world to utilize it as a hygiene and safety specification for the food industry, <span class="fc_pointer">it provides a reliable food safety platform to the food industry to certify.</span><br><br>
                            GIC is an FSSC 22000 certification body accredited by IAS, with <span class="fc_pointer">the largest number of FSSC 22000 certification scopes and clients</span> among domestic certification bodies.<br><br>
                            Thus, food manufacturers certified by FSSC 22000 <span class="fc_pointer">can gain a lot of confidence from buyers</span> as the international demand for GFSI approval specifications increases, especially by proving that they have obtained certificates from reliable certification body.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 22000:2018 VS FSSC 22000</h3>
                                        <p class="sub_txt">
                                            ISO 22000:2018 is a food safety management system established by the International Standards Organization (ISO) for food safety and is an international standard certification that <span class="fc_pointer">integrates and supplements key elements of ISO 9001 and HACCP</span> across the food supply chain.<br><br>
                                            On the other hand, the FSSC 22000 is a food safety system certification with detailed guidelines such as HACCP's methodology and antecedents, designed in greater detail than necessary components <span class="fc_pointer">based on ISO 22000 standards and PAS 220 standards.</span>
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FSSC22000_01.jpg" alt="FSSC 22000 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">FSSC 22000 Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">The FSSC 22000 requirements consist of the following items : </span><br><br>
                                                <li>1. <span class="nbsp">&nbsp;</span><span class="fc_pointer">ISO 22000:2018</span></li><br><br>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span><span class="fc_pointer">PRP (Prerequisite Requirements Program)</span><br>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;ISO 22002-1 (Manufacture of Food)</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;ISO 22002-4 (Manufacture of Food packaging materials)</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;PAS 221 (Wholesale and Retail of Food)</span>
                                                </li><br><br>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>FSSC 22000 <span class="fc_pointer">Additional requirements</span><br>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Service Management</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Product Labeling</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Food Defense</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Food Fraud Prevention</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Logo Used</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Management of Allergens</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Environmental Monitoring → Corresponds to Category C, C, I</span>
                                                    <span style="display: block;text-indent: 1.2em">&#10020;&nbsp;&nbsp;Formulation of Products → Corresponds to Category FI</span>
                                                </li><br><br>
                                                <p>
                                                    FSSC requirements can be checked through the FSSC 22000 website and the URL below.<br><br>
                                                    <a href="https://www.fssc22000.com/wp-content/uploads/2021/02/Version-5.1-Upgrade-Process_Feb-2021.pdf" class="link">https://www.fssc22000.com/scheme/scheme-documents/</a>
                                                </p>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FSSC22000_02.jpg" alt="The importance of FSSC 22000">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of FSSC 22000</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>FSSC 22000 establishes standards for certification to related food companies in various food supply chains, including food, packaging, wholesale and retail businesses, feed and catering industries, with global food giants and stakeholders participating.
                                                </li>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>Due to changes in the production, processing, storage, and distribution process of food, there is a growing concern about the stability of food consumed.
                                                </li>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>Food production and distribution methods are changing today with the globalization of the food industry and food trade. This clearly shows the importance of food safety.
                                                </li>
                                                <li>
                                                    4. <span class="nbsp">&nbsp;</span>The FSSC 22000 food safety system certification enables international transparency and harmonization of food safety standards.
                                                </li>
                                                <li>
                                                    5. <span class="nbsp">&nbsp;</span>Food safety also affects international trade, and globalization of food production and supply activities increases food safety risks.
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
                                        <img src="./image/FSSC22000_03.jpg" alt="The necessity and effects of FSSC 22000">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity and effects of FSSC 22000</h3>
                                        <div class="sub_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Client’s <span class="fc_pointer">awareness of food safety and accurate management of safety</span> are required.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span class="fc_pointer">The need for certification covering ISO 22000 etc. is increasing</span> so that buyers can guarantee food safety.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span class="fc_pointer">There are barriers to trade</span> in international commerce of food safety.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Need to be able to <span class="fc_pointer">prevent food safety accidents in advance</span> and respond to emergencies.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span class="fc_pointer">Effective communication with related persons,</span> such as food related suppliers, internal and subcontractors, is required.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>It contributes to <span class="fc_pointer">improving the level of food safety management.</span></li>
                                            </ul>
                                        </div>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">When using FSSC 22000 as a business means, effect is : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Maximize the efficiency of the hygiene management system.</span></li>
                                                <li>2. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Can respond in accordance with strengthened food safety regulations and laws at home and abroad.</span></li>
                                                <li>3. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Food safety accidents can be prevented in advance</span> by complying with food-related laws.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Smooth communication with the supply chain</span> can be achieved.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Raise the sense of responsibility of people in the food industry.</span></li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Various food-related programs <span class="fc_pointer">can be operated in an integrated</span> manner. (HACCP, PRPs, Food Defense &amp; Fraud)</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con5-3" class="roll roll03"><!-- 4depth 컨텐츠 05-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">FDA FSMA (VQIP)</h1>
                        <h2 class="sub_tit2 fc_pointer">Food Safety Modernization Act</h2>
                        <p class="sub_txt">
                            On January 04, 2011, the FDA enacted the Food Safety Modernization Act <span class="fc_pointer">to ensure the safety of food supply</span> and <span class="fc_pointer">to protect the health of the people,</span> which allowed the FDA to focus on <span class="fc_pointer">preventing food safety issues</span> with the enactment of the FSMA.<br><br>
                            FSMA is applicated to facilities that manufacture, process, package or store food or feed, and producers, US importers, shippers, consignors, shippers, shipping companies, and carriers must comply the FSMA.<br><br>
                            The FSMA has a regulation called the <span class="fc_pointer">‘Accredited Third-Party Certification Program’.</span><br><br>
                            The program is to issue a certificate after an <span class="fc_pointer">Accredited third-party body evaluates</span> whether food production facilities produced outside the United States and imported into the United States comply with the requirements of the FSMA.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Subject to exemption of ‘Accredited Third-Party Certification Program’</h3>
                                        <p class="sub_txt">
                                            - &nbsp;&nbsp;Alcoholic beverages that manufactured in certain circumstances and foreign facilities<br>
                                            - &nbsp;&nbsp;Specific meat, poultry and egg products supervised by the USDA at the time of import.<br><br>
                                            These issued certificates are used to qualify for the <span class="fc_pointer">Voluntary Qualified Importer Program (VQIP)</span> or when the FDA requires a certificate to <span class="fc_pointer">prevent food from being brought in food that may be harmful</span> to U.S. consumers.<br><br>
                                            ** <span class="fc_pointer">VQIP (Voluntary Qualified Importer Program)</span><br>
                                            A program that allows the FDA to bring imported food into the United States quickly by giving food importers <span class="fc_pointer">customs clearance benefits.</span>
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_FSMA_01.jpg" alt="Preparation item of FDA FSMA’s third-party certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Preparation item of FDA FSMA’s third-party certification</h3>
                                        <p class="sub_txt">
                                            Food facilities should establish a food safety management system that includes hazard analysis and risk-based preventive management. <span class="fc_pointer">A Food Safety Plan must be prepared in writing</span> and reviewed by a qualified <span class="fc_pointer">Prevention Control Qualified Individual (PCQI).</span> For food safety management system, following shall include and <span class="fc_pointer">establish a food safety plan.</span>
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Analyze of Hazards</span></li>
                                                <li>2. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Implement of Preventive care</span> (processes, food allergens cause material, sanitation, supply chains and others, recovery plans)</li>
                                                <li>3. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Monitor and operate Preventive management.</span></li>
                                                <li>4. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Implement of Corrective action</span></li>
                                                <li>5. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Implement of Verification</span></li>
                                            </ul>
                                        </div>
                                        <p class="sub_txt">
                                            When planning for food safety, a recovery plan should be made and products that are food safety concerns should be prepared to can be recalled.<br><br>
                                            In response, IGC a partner of GIC is preparing a separate PCQI training course for food companies that are exporting to the U.S. market or are planning to export.
                                        </p>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_FSMA_02.jpg" alt="The importance of FDA FSMA’s third-party certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of FDA FSMA’s third-party certification</h3>
                                        <p class="sub_txt">
                                            By focusing the priority of food safety on prevent, FSMA demands new particulars from food manufacturers, facilities and importers in the United States and other countries.<br><br>
                                            Therefore, in order to sell and distribute products to the U.S. market, new requirements must be observed.<br><br>
                                            In order to facilitate food exports to the U.S. market in response to the FSMA smoothly, careful preparation by companies exporting food to the U.S. is required.
                                        </p>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/FDA_FSMA_03.jpg" alt="Scope of FDA FSMA’s third-party certification">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Scope of FDA FSMA’s third-party certification</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    - <span class="nbsp">&nbsp;</span>In limited circumstances, the FDA may directly approve third-party certification bodies, and the FDA may accredit third-party certification bodies as foreign governments/agencies or private third-party organizations.
                                                </li><br>
                                                <li>
                                                    - <span class="nbsp">&nbsp;</span>Third-party certification bodies are required to conduct an unannounced facility audit and <span class="fc_pointer">notify the FDA</span> if they find conditions that may pose serious public health risks.
                                                </li><br>
                                                <li>
                                                    - <span class="nbsp">&nbsp;</span>There are two types of audits accredited third-party certification bodies can perform as part of the program : <span class="fc_pointer">advice and regulation.</span> Advisory audits are conducted to prepare for regulatory audits, and only regulatory audits can be the basis for certification.
                                                </li><br><br>
                                                <li>
                                                    ※ <span class="nbsp">&nbsp;</span>21 CFR Part 117 CURRENT GOOD MANUFACTURING PRACTICE, HAZARD ANALYSIS, AND RISK-BASED PREVENTIVE CONTROLS FOR HUMAN FOOD
                                                </li><br>
                                                <li>
                                                    ※ <span class="nbsp">&nbsp;</span>21 CFR Part 120 HAZARD ANALYSIS AND CRITICAL CONTROL POINT (HACCP) SYSTEMS 
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
                                        <img src="./image/FDA_FSMA_04.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    &#10020; <span class="nbsp">&nbsp;</span>IGC, a partner of GIC, has been accredited by the U.S. FDA and IAS as the seventh in the world and first in Korea as FDA FSMA third-party certification body.
                                                </li>
                                                <li>
                                                    &#10020; <span class="nbsp">&nbsp;</span>GIC is conducting FDA FSMA third-party certification through IGC, a partner certification body, and provides fast and accurate certification services for customers based on extensive knowledge of food safety regulations.
                                                </li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con5-4" class="roll roll04"><!-- 4depth 컨텐츠 05-4 -->
                    <div class="page_title">
                        <h1 class="sub_tit">Global HACCP</h1>
                        <h2 class="sub_tit2 fc_pointer">Hazard Analysis and Critical Control Points</h2>
                        <p class="sub_txt">
                            Hazard Analysis Critical Control Point (HACCP) is a scientific and preventive food safety management technology Developed by NASA to provide 100% safe food to astronauts and verify of <span class="fc_pointer">food safety.</span><br><br>
                            From raw material of food and through manufacture, process, cooking, distribution and until the end client eats it, in all processes, <span class="fc_pointer">to prevent substances harmful to the human body being mixed with food or contaminated,</span> it has developed into a food safety management system that <span class="fc_pointer">identifies and analyzes hazards and focuses on managing.</span><br><br>
                            HACCP-based systems are considered legal requirements in several countries, including the United States and the EU, <span class="fc_pointer">except primary production.</span><br><br>
                            By demonstrating a true commitment to food safety through HACCP compliance, it can change the brand and act as a tool for effective market entry. This provides new business opportunities with the world.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">Definition of Food Safety Management System</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>- <span class="nbsp">&nbsp;</span><span class="fc_pointer">Hazard Analysis (HA):</span> it means predicting a hazard in advance and proactively identifying the risk factors.</li>
                                                <li>- <span class="nbsp">&nbsp;</span><span class="fc_pointer">Critical Control points (CCP):</span> which means items must be managed essentially.</li>
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
                                        <h3 class="point_b1">Scope</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food Manufacturing Processing establishment</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Health Function Food Manufacturing establishment</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food additive manufacturing establishment</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food hospitality establishment</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Food subdivision establishment</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>Immediate sales manufacturing processing shop, food sales shop, other food distribution shop, group cafeteria</li>
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
                                        <h3 class="point_b1">HACCP 7 Principles 12 Procedures</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>Procedure 1. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Consist a HACCP team</span> in professional intellectual</li>
                                                <li>Procedure 2. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Prepare a product manual</span> related to the product's technology, distribution method, etc.</li>
                                                <li>Procedure 3. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Check the usage</span> of the product.</li>
                                                <li>Procedure 4. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Create a process flow chart.</span></li>
                                                <li>Procedure 5. <span class="nbsp">&nbsp;</span>Check the process flow chart directly <span class="fc_pointer">in the field.</span></li>
                                                <li>Procedure 6. (Principle ①) <span class="nbsp">&nbsp;</span>Analysis of biological, chemical, and physical hazards.</li>
                                                <li>Procedure 7. (Principle ②) <span class="nbsp">&nbsp;</span>Determine so that prevent hazards of food and to ensure stability by <span class="fc_pointer">applying HACCP.</span></li>
                                                <li>Procedure 8. (Principle ③) <span class="nbsp">&nbsp;</span><span class="fc_pointer">Set control limits</span> to ensure that risk management is performed according to reference settings.</li>
                                                <li>Procedure 9. (Principle ④) <span class="nbsp">&nbsp;</span>Regularly observe that CCP management is carried out <span class="fc_pointer">according to the set management standards.</span></li>
                                                <li>Procedure 10. (Principle ⑤) <span class="nbsp">&nbsp;</span>Establish improvement and action measures for in case they <span class="fc_pointer">deviate from CCP management standards.</span></li>
                                                <li>Procedure 11. (Principle ⑥) <span class="nbsp">&nbsp;</span><span class="fc_pointer">Set up procedures to verify</span> that the HACCP system is running well.</li>
                                                <li>Procedure 12. (Principle ⑦) <span class="nbsp">&nbsp;</span>All steps of the procedure should be <span class="fc_pointer">documented</span> and <span class="fc_pointer">improvement action records should be maintained</span> in case of deviations from the CCP monitoring results and control standards.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/HACCP_01.jpg" alt="The necessity of GLOBAL HACCP">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity of GLOBAL HACCP</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">GLOBAL HACCP has been developed to prevent <span class="fc_pointer">in advance</span> food safety accidents that continue to emerge in the international community.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Microorganisms, chemicals, etc. should be controlled</span> in case of a massive food poisoning accident.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>The <span class="fc_pointer">chemical and microbiological contamination</span> of raw materials caused by environmental pollution is increasing.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Strengthening food safety measures</span> is required in response to internationalization.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Safe food must be supplied</span> by the government's establishment of an efficient food hygiene monitoring and self-management system.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>It should be able to <span class="fc_pointer">actively cope with client protection policies</span> such as food recovery and manufacturing compensation.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>The manufacturing process should be developed to <span class="fc_pointer">monitor critical control points </span>related to risk prevention in real time.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/HACCP_02.jpg" alt="The effects of GLOBAL HACCP">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The effects of GLOBAL HACCP</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span class="fc_pointer">Effective food safety management systems management measures can be established</span> during the deployment of GLOBAL HACCP.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span class="fc_pointer">It provides a sense of trust in food safety</span> based on logical, clear and systematic scientific.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span class="fc_pointer">It can prevent harmful factors in advance,</span> and it is easy to identify the cause of the problem when occurring the problem.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span class="fc_pointer">Comprehensive hygiene measures are possible</span> as it can be applied from raw materials to manufacturing and processing processes.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/HACCP_03.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                As an expert with food-related technical qualifications such as ISO 22000 and FSSC 22000, GIC's auditors are capable of providing effective and thorough audits, have the knowledge and capabilities that meet the needs of your business and implementation and effectiveness of the GLOBAL HACCP management systems.
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                </div><!----div class="slider" 종료-------->
            </div>
        </article><!--+++++ 컨텐츠 05 종료 +++++--> 
   
        <article><!--+++++ 컨텐츠 06 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">ISO 50001:2018</h1>
                <h2 class="sub_tit2 fc_pointer">Energy management systems</h2>
                <p class="sub_txt">
                    Purpose of this standard is to improve energy efficiency, energy use and consumption of the organization. Through systematic energy management, we can reduce greenhouse gas emissions, energy costs, and other related environmental impacts.<br><br>
                    Organizations can also develop and implement energy policies and expect a variety of benefits from obtaining ISO 50001 energy management system certification.  This standard in organizations of all kinds and sizes on the regional, Cultural and social conditions can be applied.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO50001_01.jpg" alt="ISO 50001 : 2018 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 50001 : 2018 Requirements</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO50001_02.png" alt="The Importance of ISO 50001:2018">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The Importance of ISO 50001:2018</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Improve organizations' energy efficiency, energy use and consumption</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Save energy on facilities, use them effectively and protect the climate.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Available as a key means of improving energy efficiency for enterprises</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Continuously improve energy performance through energy management </li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Manage energy use and efficiency, waste, eliminating waste, fluctuations by the Better Business promotion.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Contributing to more efficient use of available energy sources, improved competitiveness, reduced greenhouse gas emissions, and other environmental impacts</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Prepare for greenhouse gas reduction and emission trading by quantitatively identifying energy use</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Increase business opportunities by improving trust from stakeholders and the company's image</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO50001_03.jpg" alt="Estimated Effectiveness of ISO 50001">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Estimated Effectiveness of ISO 50001</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Realize energy management that encompasses production that is a source of demand from supplier-centered energy management.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>It can reduce energy.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Target management system relevant national, including for the practical response to the plan can do it.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Energy technology can be developed and commercialized.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>More transparent and effective communication is possible in managing energy resources.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>It has a positive impact on environmental issues.</li>
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
                                        GIC's auditors accurately evaluate the suitability of the management system through years of technical skills and expertise, helping customers develop continuously. As a reliable global leader in management system certification, ISO 9001 provides certification of energy, environment, health and other management systems.
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC certification service</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 06 종료 +++++--> 

 
<!--==============================================================================================================================================================-->
                   
       

        <article><!--+++++ 컨텐츠 07 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO/IEC 27001</a></li>
                    <li><a data-slide-index="1">ISO/IEC 27701</a></li>
                    <li><a data-slide-index="2">ISO/IEC 20001-1</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <div class="slider">
                <section style="display:block" id="con7-1" class="roll roll01 on"><!-- 4depth 컨텐츠 07-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO/IEC 27001:2013</h1>
                        <h2 class="sub_tit2 fc_pointer">Information Security Management System</h2>
                        <div class="sub_txt">
                            ISO/IEC 27001:2013 is an international standard for about <span class="fc_pointer">information security control system</span> established by the International Standards Organization and the International Electrotechnical Commission (IEC).<br><br>
                            It is the most prestigious international certification standard in the field of information security, covering information security policies and physical security, and information access control.<br><br>
                            Information security management systems are preserving the <span class="fc_pointer">confidentiality, integrity and availability</span> of information by applying risk management processes and provide stakeholders with a belief that risks are properly managed.<br><br>
                            <span style="display: block;text-indent: 1.2em">- <span style="font-weight: 600">Confidentiality</span> :<span class="nbsp">&nbsp;</span>Ensure that <span class="fc_pointer">only accredited persons</span> have able to access to the information.</span>
                            <span style="display: block;text-indent: 1.2em">- <span style="font-weight: 600">Integrity</span> :<span class="nbsp">&nbsp;</span>Protects <span class="fc_pointer">accuracy and completeness</span> of information and processing methods.</span>
                            <span style="display: block;text-indent: 1.2em">- <span style="font-weight: 600">Availability</span> :<span class="nbsp">&nbsp;</span>Ensure <span class="fc_pointer">accredited users have access</span> to information and related assets at necessary.</span><br><br>
                            In other words, the ISO/IEC 27001:2013 Information Security Management System provides a shortcut to improving enterprise competitiveness by protecting enterprise information assets and client information and enhancing the value of information.<br><br>
                            It provides solutions for systematic and ongoing management of information through system standards.
                        </div>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27001_01.jpg" alt="ISO/IEC 27001:2013 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27001:2013 Requirements</h3>
                                        <p class="sub_txt">
                                            ISO/IEC 27001:2013 certification is the only international standard system designed to protect and manage a company's critical information assets effectively and to define information security management system requirements and to select a security management system.<br><br>
                                            This ensures that information assets are protected while also provide a confidence to relevant entities and clients, and this standard is based on an itemized approach to introducing, executing, operating, monitoring, reviewing, maintaining and improving ISMS.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative reference</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27001_02.jpg" alt="The importance of ISO/IEC 27001:2013">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 27001:2013</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Hacking, data loss, breach of confidentiality, even terrorism and this is happening from various organizations, such as private and private organizations, or secret intelligence agencies abroad.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>In a borderless, ubiquitous world, if a company's IT processes are incapacitated, it can cause serious damage to the organization and even lose markets to competitors.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Protecting digital privacy has emerged as an important business concern, and according to IBM recently, and governments around the world are introducing a variety of privacy rules that organizations must abide.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>ISO/IEC 27001:2013 presents a systematic and structured approach to ensuring information confidentiality and integration of enterprise data and improving the availability of enterprise IT systems.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27001_03.jpg" alt="The necessity and effects of ISO/IEC 27001:2013">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity and effects of ISO/IEC 27001:2013</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Protect client’s information securely to <span class="fc_pointer">ensure client satisfaction.</span></li>
                                                <li>2. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Secure business stability</span> through risk management, future security issues, and boundaries for concerns.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Can understand the impact of legal and regulatory requirements on the company and its clients and how to <span class="fc_pointer">reduce risks.</span></li>
                                                <li>4. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Ensure that intellectual property rights</span> such as client records and accounting information are protected through a systematic framework.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Independent validation of accepted global industry specifications <span class="fc_pointer">ensures reliability.</span></li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Because clients often require a certificate as a delivery condition, certification allows them to <span class="fc_pointer">expand the scope of their business.</span></li>
                                                <li>7. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Improve competitiveness</span> by putting client information protection first.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27001_04.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC provides certification services for the Information Security Management System as a reliable global leader in management system certification with accreditation of ISO/IEC 27001:2013 from the US accreditation body, IAS.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>As an expert with training and related technical qualifications, GIC's auditors are capable of providing effective and thorough audit, have the knowledge and capabilities that meet the needs of your business and implementation and effectiveness of the ISO/IEC 27001:2013 management system.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con7-2" class="roll roll02"><!-- 4depth 컨텐츠 07-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO/IEC 27701:2019</h1>
                        <h2 class="sub_tit2 fc_pointer">Privacy Information Management System</h2>
                        <div class="sub_txt">
                            ISO/IEC 27701:2019 is the first global standard for privacy Information management systems and an expanded ISO/IEC 27001 area, including specific requirements, objectives, and management measures related to the establishment of the <span class="fc_pointer">Privacy Information Management System (PIMS).</span><br><br>
                            In addition, organizations are simultaneously providing guidelines and requirements for privacy. Because it is an <span class="fc_pointer">extension of ISO/IEC 27001,</span> ISO/IEC 27001 certification must be retained if ISO/IEC 27701:2019 certification is desired.<br><br>
                            ISO/IEC 27701:2019 is an important step for <span class="fc_pointer">protect privacy.</span> It meets existing regulations by providing practical guidance on how to protects organization's data and privacy. These guidelines enable organizations to comply with regulations such as the <span class="fc_pointer">General Data Protection Regulation (GDPR)</span> while protecting <span class="fc_pointer">PII (Personal Identification Information).</span>
                        </div>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27701_01.jpg" alt="ISO/IEC 27701:2019 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 27701:2019 Requirements</h3>
                                        <p class="sub_txt">
                                            ISO/IEC 27701:2019 is an extension of ISO/IEC 27001:2013 and ISO/IEC 27002, <span class="fc_pointer">providing guidance for establishing, implementing, maintaining and continuing to improve the Privacy Management System (PIMS).</span><br><br>
                                            To this end, <span class="fc_pointer">PIMS-related requirements are specified and guidance is provided for PII controllers and PII processors</span> responsible for processing PIIs. Other ISO/IEC 27701:2019 requirements include <span class="fc_pointer">relationships with various standards, terminology arrangements, application methods, and mapping between clauses.</span>
                                        </p>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO/IEC 27701:2019 consists of the following requirements <span class="fc_pointer">based on ISO/IEC 27001:2013</span> : </span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms, definitions and abbreviations</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>General</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>PIMS-specific requirements related to ISO/IEC 27001</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>PIMS-specific guidance for PIMS related to ISO/IEC 27002</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Additional ISO/IEC 27002 guidance for PII Controllers</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Additional ISO/IEC 27002 guidance for PII Processors</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27701_02.jpg" alt="The importance of ISO/IEC 27701:2019">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 27701:2019</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>The introduction of ISO/IEC 27701:2019 represents the difficulty of organizations relying on information and privacy and having to protect information for their clients as well as government and regulators.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Privacy and data protection are important issues, legal requirements and preconditions for the business for employees, clients, suppliers and all stakeholders who value them.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>ISO/IEC 27701:2019 meets existing regulations by providing organizations with practical guidance on how to act, enabling organizations to protect their personal identification, and demonstrating compliance.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>As an extension of ISO/IEC 27001:2013, the privacy requirements have become much more detailed and even a changing regulatory environment has been considered.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>ISO/IEC 27701:2019 certification demonstrates and as a tool to compliance the law and consist privacy protect management best practices, enabling consistent and efficient implementation of multiple regulatory requirements using a universal set of operations controls.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27701_03.jpg" alt="The necessity and effects of ISO/IEC 27701:2019">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity and effects of ISO/IEC 27701:2019</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>PII controllers and processors that process privacy identification information (PII) within the Information Security Management System (ISMS) apply to all types of organizations and scales, including public and private enterprises and government organizations and nonprofits.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>There are increasing regulatory requirements like privacy protect law worldwide, including domestic privacy laws and General Data Protection Regulation (GDPR).</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Internal capabilities are enhanced through clarification of roles and responsibilities within the organization and process improvement.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>It provides established control and transparency for privacy management and is easily integrated with the leading information security management system, ISO/IEC 27001:2013.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC27701_04.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC's auditors contribute to client's sustainably development by evaluating accurately the suitability of the management system through years of technical skills and expertise, and as a reliable global leader in management system certification, Provides certification for occupational health and safety, Information security and other management systems as well as ISO 9001.
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con7-3" class="roll roll03"><!-- 4depth 컨텐츠 07-3 -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO/IEC 20000-1:2018</h1>
                        <h2 class="sub_tit2 fc_pointer">Information technology Service management system</h2>
                        <p class="sub_txt">
                            In today's dynamic business environment, enterprises of all sizes rely on effective IT services, and service delivery continues to evolve and develop, presenting new challenges and opportunities for the business.<br><br>
                            Therefore, it is important to ensure that appropriate services are being provided and to adapt and adjust them with business objectives as a service provider.<br><br>
                            IT services require <span class="fc_pointer">cost efficiency, reliability, consistency and effectiveness,</span> and organizations that manage IT services within the enterprise and outsourced service providers that provide IT services professionally must apply an integrated management framework to deliver and manage IT services to clients.<br><br>
                            And provide clients with appropriate control, improved effectiveness and opportunities for improvement.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt style="margin-bottom: 70px"></dt>
                                    <dd>
                                        <h3 class="point_b1">The composition of ISO/IEC 20000-1:2018</h3>
                                        <table border="1" cellspacing="0" cellpadding="0" width="100%" bordercolor="ccc" borderheight="0.5">
                                            <tbody>
                                                <tr>
                                                    <th width="50%" valign="top" style="background-color: rgba(248,152,52,0.5);padding: 5px 0">
                                                        <p align="center">ISO/IEC 20000-1:2011</p>
                                                    </th>
                                                    <th width="50%" valign="top" style="background-color: rgba(248,152,52,0.5);padding: 5px 0">
                                                        <p align="center">ISO/IEC 20000-2:2012</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td width="50%">
                                                        <p align="left" style="padding: 10px 20px">
                                                            - Part 1: Specification for Service Management<br>
                                                            - Rules about IT service management.<br>
                                                            - Define standards for third-party audit or certification audit
                                                        </p>
                                                    </td>
                                                    <td width="50%">
                                                        <p align="left" style="padding: 10px 20px">
                                                            - Part 2: Code of Practice for Service Management<br>
                                                            - A reference guide that complement to Part 1 that provides about guidance or recommendations.<br>
                                                            - Specify the execution instructions within the scope of ISO/IEC 20000-1.
                                                        </p>
                                                    </td>
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
                                        <h3 class="point_b1">8 Principles of ISO/IEC 20000-1:2018</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Client-centered</span> :<span class="nbsp">&nbsp;</span>Organizations rely on clients and need an understanding about their requirements.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Leadership</span> :<span class="nbsp">&nbsp;</span>Establish consistency in purpose and direction and create and maintain an internal environment</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Full participation</span> :<span class="nbsp">&nbsp;</span>People from all walks of life should act as an integral part of the organization.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Process approach</span> :<span class="nbsp">&nbsp;</span>Relevant resources and activities must be managed in one process.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Systems approach method about management</span> :<span class="nbsp">&nbsp;</span>Interconnected processors need to be identified as one system.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Continuous improvement</span> :<span class="nbsp">&nbsp;</span>Continuous improvement must be made to the overall performance of the organization.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">A realistic approach to decision making</span> :<span class="nbsp">&nbsp;</span>decisions based on data and information analysis are required.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Mutually beneficial supplier relationships</span> :<span class="nbsp">&nbsp;</span>create mutually beneficial value for the organization and its suppliers.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC20000-1_01.jpg" alt="ISO/IEC 20000-1:2018 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO/IEC 20000-1:2018 Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO/IEC 20000-1 consists of 10 particulars :<br>
                                            organizational environment, leadership, planning, support, operations, performance assessment and improvement.</span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Support of the service management system</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Operation of the service management system</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC20000-1_02.jpg" alt="The importance of ISO/IEC 20000-1:2018">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO/IEC 20000-1:2018</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>IT accidents occur due to poor communication issues between Business and IT.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>It is difficult to define the specific business information needed for IT.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>The costs incurred by the scattered demand for IT are unclear. (Total cost of ownership)</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Strategic integrated IT needs management tools are required.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>The need for management systems for business value increases.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Experience limitations of checking execution in simple IT tasks – 'Qualitative work reporting'</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>It is difficult to objectively determine the effectiveness of the current IT process.</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Means and tools for quantified measurement must be successfully applied to the IT process.</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Reactive-centered IT work is being done.</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Lack of time for planning, analysis, prevention, and active activities.</li>
                                                <li>11. <span class="nbsp">&nbsp;</span>The significantly lower improvement rate of systems and processes is problematic.</li>
                                                <li>12. <span class="nbsp">&nbsp;</span>Lack of prior information from the business is a problem.</li>
                                                <li>13. <span class="nbsp">&nbsp;</span>The problem is that most of the tasks are event, such as fault response.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC20000-1_03.jpg" alt="The necessity and effects of ISO/IEC 20000-1:2018">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity and effects of ISO/IEC 20000-1:2018</h3>
                                        <p class="sub_txt">
                                            As more and more companies require ISO/IEC 20000 certification as a contractual condition, external service providers must use it as a means of differentiating themselves from competitors to gain new clients.<br><br>
                                            The ISO/IEC 20000 is a fully compliant standard with the IT Infrastructure Library (ITIL) system that provides the best way to handle ITSM processes, enabling more efficient selection and management of external service providers.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>By improving the quality of the company's services than before, objective evidence of an efficient IT service management system called 'ISO/IEC 20000 certification' in the ITO market can help maintain a competitive market advantage.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Allow to maintain consistent quality of service.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>It provides a methodology for continuous improvement to support services that meet business requirements and priorities.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>It supports effective and efficient system operation of ITSM schemes.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>It helps service commodification, service integration, vendor management, and client service value determination.</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO_IEC20000-1_04.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC's auditors contribute to client's sustainably development by evaluating accurately the suitability of the management system through years of technical skills and expertise, and as a reliable global leader in management system certification, Provides certification for Occupational health and safety, Information security and other management systems as well as ISO 9001.
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 07 종료 +++++--> 
        
    
<!--==================================================================================================-->
        
        <article><!--+++++ 컨텐츠 08 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 37001</a></li>
                    <li><a data-slide-index="1">ISO 37301</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con8-1" class="roll roll01 on"><!-- 4depth 컨텐츠 08-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 37001:2016</h1>
                        <h2 class="sub_tit2 fc_pointer">Anti-bribery management systems</h2>
                        <p class="sub_txt">
                            The Anti-bribery Management System is an international standard published in October 2016 by the International Organization for Standardization (ISO) that contains specific actions that companies must implement to prevent corruption. <br><br>
                            Corruption, such as bribery, can occur anywhere, and ISO 37001 is designed to include a set of measures that must be built to prevent corruption that can occur in all sectors of an organization's activities.<br><br>
                            The establishment of an anti-bribery management system can lead to a positive perception of corruption around the world and increase trust by reducing the risk of violation of laws among stakeholders.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO37001_01.jpg" alt="ISO 37001: 2016 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 37001: 2016 Requirements</h3>
                                        <p class="sub_txt">
                                            ISO 37001:2016 has a high-level structure (HLS) that applies to standards such as ISO 9001:2015, enabling integration and management with other standards.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO37001_02.jpg" alt="The Importance of ISO 37001:2016">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The Importance of ISO 37001:2016</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>Helps organizations implement anti-bribery management systems and strengthens the controls they currently have.
                                                </li>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>Can give management, owners, investors and business people confidence that the organization accepts and implements internationally accreditation standards related to anti-bribery.
                                                </li>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>Collaborate with stakeholders to monitor the entire organization and supply chain and manage risk.
                                                </li>
                                                <li>
                                                    4. <span class="nbsp">&nbsp;</span>If investigated by authorities, it may provide evidence that the organization has taken appropriate steps and steps to prevent bribery.
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
                                        <h3 class="point_b1">Estimated Effectiveness of ISO 37001</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>To prevent bribery and corruption in order to reduce the risk management organization could strengthen or implement a system.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Customers can trust the organization's management system that provides products and services.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Stakeholders can assure their organizations of anti-bribery measures by complying with ISO 37001.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Enhance partnerships based on trust from organizations and institution in partnerships.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>It can meet the anti-bribery system that is strengthened in various bids, including public institutions.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>It is possible to build trust with stakeholders.</li>
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
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC is a reliable global leader in management system certification and provides accreditation certification services for Anti-bribery management systems with accreditation of ISO 37001 from IAS, organization in the United States.</li>
                                                <li>&#10020; <span class="nbsp">&nbsp;</span>GIC has the latest knowledge of a wide range of specific and legal and voluntary requirements in key global markets, providing reliable audits.</li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC certification service</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con8-2" class="roll roll02"><!-- 4depth 컨텐츠 08-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 37301:2021</h1>
                        <h2 class="sub_tit2 fc_pointer">Compliance Management System</h2>
                        <p class="sub_txt">
                            ISO 37301:2021 (Compliance Management System) is the 「Compliance Management System」 established by ISO, further from the「Regulations on the Operation and Attraction of Fair Trade Self-compliance Programs <span class="fc_pointer">(CP Grade Assessment)</span>」based on Australia 3806.<br><br>
                            It means a certification system that <span class="fc_pointer">proves the compliance management</span> of the organization through the <span class="fc_pointer">third-party certification.</span><br><br>
                            It also means process output that specify and compliance of the <span class="fc_pointer">organization's strategic obligations, such as laws, regulations, norms, and codes of conduct</span> regardless of the size and nature of the organization.<br><br>
                            And certification that demonstrates an organization's commitment about compliance such as legislative requirements, industry protocols and organizational standards, as well as best governance, ethics and community expectations.<br><br>
                            It <span class="fc_pointer">applicable in all jurisdictions and to all organizations</span> regardless of the organization's field.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO37301_01.jpg" alt="ISO 37301:2021 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 37301:2021 Requirements</h3>
                                        <div class="con_txt">
                                            <ul><span class="point_b2">ISO 37301:2021 contributes to the sustainable development of the company with <span class="fc_pointer">[Compliance and ethical management practices].</span></span>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative References</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Context of the Organization</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                                <li>9. <span class="nbsp">&nbsp;</span>Performance Evaluation</li>
                                                <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO37301_02.jpg" alt="The importance of ISO 37301:2021">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The importance of ISO 37301:2021</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>
                                                    1. <span class="nbsp">&nbsp;</span>With the recent growing interest in corporate ethics, compliance activities for compliance management have become more active with large companies at the forefront. 
                                                </li>
                                                <li>
                                                    2. <span class="nbsp">&nbsp;</span>In corporate management, compliance is seen as corporate culture, affecting the image and credibility of the company.
                                                </li>
                                                <li>
                                                    3. <span class="nbsp">&nbsp;</span>Compliance began as an internal control criterion in the financial sector, but recently it has expanded to include compliance with social norms such as fair trade, anti-corruption, and environmental issues.
                                                </li>
                                                <li>
                                                    4. <span class="nbsp">&nbsp;</span>Regulations on compliance management are diversifying, and the importance is growing as companies and executives and employees are more responsible for violating laws.
                                                </li>
                                                <li>
                                                    5. <span class="nbsp">&nbsp;</span>Compliance management is a company's competitiveness and a top priority for its survival.
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
                                        <img src="./image/ISO37301_03.jpg" alt="The necessity and effect of ISO 37301:2021">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The necessity and effect of ISO 37301:2021</h3>
                                        <p class="sub_txt">
                                            ISO 37301:2021 provides organizations with guidance for faster and more effective remediation if violations are likely, such as Identifying new and existing laws and reducing the risk of violating existing laws when developing compliance management systems.
                                        </p>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>In many countries, regulators and courts are considered as the <span class="fc_pointer">reference basis for taking account of about the organization’s law-breaking sanctions.</span></li>
                                                <li>2. <span class="nbsp">&nbsp;</span><span class="fc_pointer">It can be used as a measure of compliance management assessment</span> of business partner selection during international commerce.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>As a global standard, <span class="fc_pointer">prerequisite conditionalization of transparency business activities is becoming a trend.</span></li>
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO37301_04.jpg" alt="GIC’s Competency">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">GIC’s Competency</h3>
                                        <div class="con_txt">
                                            <ul>
                                                GIC's auditors contribute to client's sustainably development by evaluating accurately the suitability of the management system through years of technical skills and expertise, and as a reliable global leader in management system certification, Provides certification for Quality, Occupational health and safety and other management systems as well as ISO 37001.
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC Certification Services</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 08 종료 +++++-->  
         
        
<!--=================================================================================================================== -->
        

        <article><!--+++++ 컨텐츠 09 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">ISO 21001:2018</h1>
                <h2 class="sub_tit2 fc_pointer">Educational Organizations Management System</h2>
                <p class="sub_txt">
                    As interest in quality of education increases, ISO 21001:2018 has been developed through international consensus to provide the educational services that learners expect. This International Standard specifies the <span class="fc_pointer">Educational Organizations Management System (EOMS)</span> requirements and aims to provide educational services to satisfy learners and other beneficiaries.<br><br>
                    Educational Organizations Management System is applicable to all educational institutions, including schools and academies, special educational institutions and remote educational institutions, and can be integrated with other management systems based on the <span class="fc_pointer">HLS structure,</span> a common international standard.<br><br>
                    ISO 21001:2018 does not apply to <span class="fc_pointer">organizations that produce or manufacture educational products,</span> and organizations should aim to increase learners, clients and staff satisfaction by <span class="fc_pointer">effectively applying EOMS,</span> including system improvement processes
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO21001_01.jpg" alt="ISO 21001:2018 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 21001:2018 Requirements</h3>
                                <p>
                                    ISO 21001:2018 provides a specific framework for educational institutions that aim to improve the curriculum and improve learner satisfaction by complying with learner requirements.<br><br>
                                    All requirements in ISO 21001:2018 are general information that can be applied to any organization providing services, regardless of type, size or nature of the organization, and are <span class="fc_pointer">based on the ISO 9001:2015 Quality Management System.</span>
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO21001_02.jpg" alt="v">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 21001:2018</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Improve <span class="fc_pointer">connectivity between policies, goals and activities,</span> including missions and visions.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Social responsibility is strengthened by providing inclusive and fair <span class="fc_pointer">quality education.</span></li>
                                        <li>3. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Personalized learning</span> should be provided to all learners (Special training needs, remote learners and learners with lifelong learning opportunities).</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>It serves as a <span class="fc_pointer">consistent process and evaluation tool</span> to demonstrate and increase effectiveness and efficiency.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Helps to <span class="fc_pointer">increase organizational reliability.</span></li>
                                        <li>6. <span class="nbsp">&nbsp;</span>It can be a means for educational institutions to demonstrate their <span class="fc_pointer">commitment to effective education management practices.</span></li>
                                        <li>7. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Harmony</span> local, national, public, proprietary and other standards within international frameworks.</li>
                                        <li>8. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Build a stronger education sector</span> and provide positive effects in terms of innovation and stimulating the economy.</li>
                                        <li>9. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Improve the education system, enhance the reputation of educational institutions, and promote excellence and innovation.</span></li>
                                        <li>10. <span class="nbsp">&nbsp;</span>All students have <span class="fc_pointer">equal learning opportunities</span> regardless of religion, ethnicity, culture, gender, ability, or disability.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO21001_03.jpg" alt="The necessity and effects of ISO 21001:2018">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The necessity and effects of ISO 21001:2018</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>ISO 21001:2018_Educational organizations – Management systems for educational organizations – Requirements with guidance for use of management systems for training providers to meet the needs and expectations of learners and other beneficiaries.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Achieving ISO 21001:2018 certification demonstrates to stakeholders that they are working to improve the training system and demonstrates greater trust and influence.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Institutions benefit from providing more effective and appropriate learning experiences that align with the organization's mission and vision.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>The educational services that learners receive are more personalized, allowing them to increase their learning effectiveness according to their needs.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>It provides comprehensive practices applicable to educational service providers.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>In line with the ever-changing world of learning, educational providers meet learners' expectations and needs.</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>It helps educational institutions provide continuous quality in a variety of educational environments.</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Through ensure suitability of international standards, improve public awareness of education delivery services</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO21001_04.jpg" alt="GIC’s Competency">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC’s Competency</h3>
                                <div class="con_txt">
                                    <ul>
                                        GIC's auditors contribute to client's sustainably development by evaluating accurately the suitability of the management system through years of technical skills and expertise, and as a reliable global leader in management system certification, Provides certification for Information security, Client satisfaction and other management systems as well as ISO 9001.
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC Certification Services</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 09 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        <article><!--+++++ 컨텐츠 10 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">ISO 22301:2019</h1>
                <h2 class="sub_tit2 fc_pointer">Business Continuity Management System</h2>
                <p class="sub_txt">
                    In addition to the typical market risks facing every business today, theft, natural disasters, disease, and terrorist attacks can take an unexpected toll on its business.<br><br>
                    Insufficient planning and resource allocation to cope with unforeseen threats will cost businesses a fortune, resulting in poor quality and efficiency, which will cause them to lose confidence in their stakeholders.<br><br>
                    ISO 22301:2012 was updated to ISO 22301:2019 as of October 31, 2019, and after a three-year grace period until October 2022, all business continuity management systems audits apply ISO 22301:2019 from May 1, 2021. The 2012 version can only be audited until April 30, 2021.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO22301_01.jpg" alt="ISO 22301:2019 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22301:2019 Requirements</h3>
                                <p class="sub_txt">
                                    This international standard identifies products and services that have a significant impact on organization's existence and helps they establish the necessary response in the event of a business disruption, while also providing the ability to respond appropriately.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO22301_02.jpg" alt="The importance of ISO 22301:2019">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 22301:2019</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>ISO 22301:2019 provides formal business continuity guidelines to help it continue to operate after a disruption, ensuring that products and services can be delivered or recovered immediately in the event of a disruption, minimizing the impact on products and services.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>It is applicable to businesses of all sizes across industries of all kinds and is suitable for global enterprises where the ability to can be operated without delay in extremely dangerous or complex environments is critical.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>In the event of a disruptive incident, aim to contribute to a much more resilient society, such as helping organizations defend against it and so that the likelihood of occurrence can be reduced.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Business continuity management provides a framework for building resilience with effective responsiveness to understand the impact of business operational threats posed when an organization actually faces potential threats and protect its core stakeholder interests, reputation, brand and value creation activities.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO22301_03.jpg" alt="The necessity and effect of ISO 22301:2019">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The necessity and effect of ISO 22301:2019</h3>
                                <div class="sub_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Business disruption incident</span> is increasing due to natural and social disasters.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Increasing demand for establishing <span style="font-weight: 600">international business continuity management systems</span> of clients and stakeholders.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span><span style="font-weight: 600">Connection</span> with quality/environment/safety and health management systems can be secured.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Adequate response is required in compliance with social safety <span style="font-weight: 600">laws and regulatory requirements</span> and changes at home and abroad.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>There is an increasing necessity of <span style="font-weight: 600">monitoring stakeholders</span> about the organization.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>The <span style="font-weight: 600">financial burden</span> of business disruption is increasing for the enterprise.</li>
                                    </ul>                                    
                                </div>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>It can improve company’s business understanding by analyzing critical issues and vulnerable areas.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>It can have a consistent approach across organization.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Costs are reduced and the impact on business performance is reduced when business disruptions.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Demonstrate to stakeholders the organization's commitment to building business continuity systems and processes.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Obtain appropriate response solutions and implement business continuity strategies.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Continuity management plans can be maintained through reviews and training tailored to organizational culture.</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>It can learn how to internalize the introduction of a business continuity approach.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO22301_04.jpg" alt="GIC’s Competency">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC’s Competency</h3>
                                <div class="con_txt">
                                    <ul>
                                        GIC's auditors contribute to client's sustainably development by evaluating accurately the suitability of the management system through years of technical skills and expertise, and as a reliable global leader in management system certification, Provides certification for Information security, Client satisfaction, Occupational health and safety and other management systems as well as ISO 9001.
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC Certification Services</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 10 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        <article><!--+++++ 컨텐츠 11 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">ISO 20121:2012</h1>
                <h2 class="sub_tit2 fc_pointer">Event sustainability management systems</h2>
                <p class="sub_txt">
                    ISO 20121 is a standard that provides the most efficient way in economically, environmentally and socially for event-related companies to drive their organizations' operations and businesses.<br><br>
                    Events involve many people, consume resources such as water and energy, and cause conflicts with local residents due to large-scale waste, and problems with subcontractors and suppliers in process of planning and operating events.<br><br>
                    So, the ISO 20121 standard was developed to prepare for all situations associated with these events and minimize possible problems.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO20121_01.jpg" alt="ISO 20121:2012 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 20121:2012 Requirements</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO20121_02.jpg" alt="The Importance of ISO 20121:2012">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The Importance of ISO 20121:2012</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Provides systematic event management techniques that enable organizations to adequately respond to and control economic, environmental and social impacts in managing events.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Organizations can use internationally accreditation techniques to transparently explain their event management activities to internal and external stakeholders and to ensure reliability.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Event sustainability practices enable different competitive advantages from competitors</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Provides a way to reduce costs and use of related resources, such as monitoring and measuring techniques.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Risk management is possible to prevent opposition from regulators and communities by minimizing the impact of events.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO20121_03.jpg" alt="Estimated Effectiveness of ISO 20121">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Estimated Effectiveness of ISO 20121</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Carbon savings through energy and waste management are possible.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>It is possible to reduce costs and reduce resources by analyzing data such as where and when resources are used and by preventing waste.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Helps organizations comply with legal responsibilities and prevent lawsuits.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Can minimize complaints from local residents against holding events, claims from fire-fighting agencies, and legal regulations to ease burden on resource use and strengthen guaranteed activities.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>The positive impact of the company on the economy, environment, and society gives stability in the community.</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Differentiate yourself from competitors, secure sustainability, and create new businesses.</li>
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
                                        GIC's auditors accurately evaluate the suitability of the management system through years of technical skills and expertise, helping customers develop continuously. As a reliable global leader in management system certification, GIC can provides a certification services of energy, environment, health and other management systems as well as ISO 9001.
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC certification service</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 11 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        
        <article><!--+++++ 컨텐츠 12 시작 +++++--> 
            <div class="page_title">
                <h1 class="sub_tit">ISO 22716:2007</h1>
                <h2 class="sub_tit2 fc_pointer">Cosmetics — Good Manufacturing Practices (GMP)</h2>
                <p class="sub_txt">
                    A new guide to Good Manufacturing Practice (GMP) for the manufacturing business of cosmetics, which aims to provide guidance for the production, management, storage and shipment of cosmetics.<br><br>
                    ISO 22716 is responsible for preventing harmful ingredients from entering cosmetics and consists of requirements that must be met in all manufacturing/production processes for cosmetic production. In addition, ISO 22716 is used as a certification that is used as a global cosmetics quality guideline, including the U.S. and EU, as well as China and Japan.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO22716_01.jpg" alt="ISO 22716 : 2007 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 22716 : 2007 Requirements</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Personnel</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Premises</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Equipment</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Raw materials and packaging materials</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Production</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Finished products</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Quality control laboratory</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Treatment of product that is out of specification</li>
                                        <li>11. <span class="nbsp">&nbsp;</span>Wastes</li>
                                        <li>12. <span class="nbsp">&nbsp;</span>Subcontracting</li>
                                        <li>13. <span class="nbsp">&nbsp;</span>Deviations</li>
                                        <li>14. <span class="nbsp">&nbsp;</span>Complaints and recalls</li>
                                        <li>15. <span class="nbsp">&nbsp;</span>Change control</li>
                                        <li>16. <span class="nbsp">&nbsp;</span>Internal audit</li>
                                        <li>17. <span class="nbsp">&nbsp;</span>Documentation</li>
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
                                <h3 class="point_b1">The Importance of ISO 22716:2007</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Comply with legal requirements and at the same time with the common requirements of the international community.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Securing the reliability of cosmetic safety manufacturing from customers</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Components used in manufacturing and production processes can be thoroughly inspected and evaluated.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Not only can you receive guidelines for your business plan, but you can also ensure the safety, quality and excellence of your products.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO22716_02.jpg" alt="Estimated Effectiveness of ISO 22716">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Estimated Effectiveness of ISO 22716</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>It is possible to build consumer confidence by preventing and minimizing product accidents.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>It is possible to produce products that meet the standards such as GMP requirements and quality of cosmetics.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>International accreditation can be strengthened when exporting abroad.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>The competitiveness of overseas exports is strengthened by establishing trust in the GMP evaluation of cosmetics.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>It can minimize the risk of contamination and error when manufacturing cosmetics.</li>
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
                                        GIC helps organizations that produce, manage, store and ship cosmetics to implement and achieve ISO 22716 certification. Experienced professionals are helping organizations' production lines throughout the field audit to certification process to minimize potential risks in accordance with ISO 22716 guidelines.
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC certification service</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 12 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
      
      
<!--===============================================================================================  -->
    

        <article><!--+++++ 컨텐츠 13 시작 +++++-->
           <div class="tab_menu tab02"><!-- 4depth -->
                <ul>
                    <!-- 처음 활성화 메뉴에 class="on" -->
                    <li class="on"><a data-slide-index="0">ISO 10002</a></li>
                    <li><a data-slide-index="1">ISO 10004</a></li>
                </ul>
            </div>
            <div class="tab_con2">
                <section style="display:block" id="con13-1" class="roll roll01 on"><!-- 4depth 컨텐츠 13-1 (처음 활성화 컨텐츠에만 style="display:block") -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 10002:2018</h1>
                        <h2 class="sub_tit2 fc_pointer">Quality management — Customer satisfaction</h2>
                        <p class="sub_txt">
                            ISO 10002 is a business system standard that helps to efficiently handle customer complaints based on a systematic process. Improve performance in the complaints handling sector and enhance customer and other stakeholder satisfaction to enhance domestic and international competitiveness. ISO 10002 can drive continuous improvement in product quality based on feedback from customers and stakeholders. You can build/operate an efficient complaint handling process. An effective and efficient complaint handling process reflects the needs of both the organization that supplies the product and those who receive it. In addition, the information gained through the complaint process can lead to product and process improvements and, when properly complained, the organization's reputation can increase regardless of its size, region, and industry.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO10002_01.jpg" alt="ISO 10002:2018 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 10002:2018 Requirements</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Guiding principles</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Complaints-handling framework</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning, design and development</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Operation of complaints-handling process</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Maintenance and improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/ISO10002_02.jpg" alt="The Importance of ISO 10002:2018">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The Importance of ISO 10002:2018</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Customer Retention</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Increase brand image</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Enhanced customer communication</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Continuous Improvement</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Improve process efficiency</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Revenue and Profit Growth</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Strengthen trust with stakeholders</li>
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
                                        <h3 class="point_b1">Estimated Effectiveness of ISO 10002:2018</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Revenue Profit </li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Increase Trust with stakeholders is strengthened.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Improve process efficiency so that complaints can be addressed in a systematic and rapid response.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Improve customer satisfaction and improve relationships with customers.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Improve customer service to prevent existing customers from leaving.</li>
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
                                                GIC's auditors accurately evaluate the suitability of the management system through years of technical skills and expertise, helping customers develop continuously. As a reliable global leader in management system certification, GIC can provides a certification services of customer satisfaction, environment, safety and other management systems.
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC certification service</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section id="con13-2"  class="roll roll02"><!-- 4depth 컨텐츠 13-2 -->
                    <div class="page_title">
                        <h1 class="sub_tit">ISO 10004:2018</h1>
                        <h2 class="sub_tit2 fc_pointer">Quality management — Customer satisfaction</h2>
                        <p class="sub_txt">
                            ISO 10004 is a standard for improving customer satisfaction.  Helps establish effective procedures for monitoring and measuring customer satisfaction and provides guidelines for improving the products and processes that customers value. Customer satisfaction is determined by differences in customer expectations and customer perceptions of products supplied from the organization (enterprise). To achieve customer satisfaction, the enterprise (organization) must understand customer expectations first.  The level of customer satisfaction determines the level of customer satisfaction, the level of supplied product, and the level of customer satisfaction. . It is important to note that there are characteristics between the organization's view of the quality of the delivered product and the customer's perception. Because this characteristic determines the level of customer satisfaction later. ISO 10004 helps strengthen customer loyalty and maintain customers.  In addition, the focus of this standard is to accurately understand the satisfaction of an individual or organization receiving products or services from a public or private organization and to ensure that the organization develops through appropriate responses.
                        </p>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="page_con">
                        <ul>
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso10004_01.jpg" alt="ISO 10004 : 2018 Requirements">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">ISO 10004 : 2018 Requirements</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Concepts and guiding principles</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Framework for monitoring and measuring customer satisfaction</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Planning, design and development</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Operation</li>
                                                <li>8. <span class="nbsp">&nbsp;</span>Maintenance and improvement</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso10004_02.jpg" alt="The Importance of ISO 10004">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">The Importance of ISO 10004</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Determine customer satisfaction.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Satisfaction customer expectations.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Increase the organization's view on the quality of the products provided, and increase customer awareness of the products provided.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Continuous review and analysis of the complaint handling process</li>
                                            </ul>
                                        </div>
                                    </dd>
                                </dl>			
                            </li>
                            <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                            <li>
                                <dl>
                                    <dt class="con_img">
                                        <img src="./image/iso10004_03.jpg" alt="Estimated Effectiveness of ISO 10004">
                                    </dt>
                                    <dd>
                                        <h3 class="point_b1">Estimated Effectiveness of ISO 10004</h3>
                                        <div class="con_txt">
                                            <ul>
                                                <li>1. <span class="nbsp">&nbsp;</span>Increase revenue and profitability.</li>
                                                <li>2. <span class="nbsp">&nbsp;</span>Can understand customer expectations and satisfaction.</li>
                                                <li>3. <span class="nbsp">&nbsp;</span>Customer satisfaction data collection is possible.</li>
                                                <li>4. <span class="nbsp">&nbsp;</span>Identify customer trends to eliminate the cause of dissatisfaction.</li>
                                                <li>5. <span class="nbsp">&nbsp;</span>Monitor customer satisfaction continuously.</li>
                                                <li>6. <span class="nbsp">&nbsp;</span>Feedback can be provided to improve customer satisfaction.</li>
                                                <li>7. <span class="nbsp">&nbsp;</span>Apply efficient customer response processes to improve the ability of your organization members.</li>
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
                                                GIC's auditors accurately evaluate the suitability of the management system through years of technical skills and expertise, helping customers develop continuously. As a reliable global leader in management system certification, GIC can provides a certification services of customer satisfaction, environment, safety and other management systems.
                                           </ul>
                                        </div>
                                    </dd>
                                </dl>	
                            </li>
                        </ul>
                    </div>
                    <div class="center-diamond"></div>
                    <div class="partner_type2">
                        <h2 class="sec_tt">GIC certification service</h2>
                        <div class="con_box">
                            <ul>
                                <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                                <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                                <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                                <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                                <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                                <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                                <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                                <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                                <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                                <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                                <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                                <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                                <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                                <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                                <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                                <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                                <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                                <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                                <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                                <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                                <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                                <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                                <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                                <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
        </article><!--+++++ 컨텐츠 13 (처음 활성화 컨텐츠에만 style="display:block") 종료 +++++-->
        


          
<!-- ============================================================================================================================================-->

      

        <article><!--+++++ 컨텐츠 14 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">ISO 41001:2018</h1>
                <h2 class="sub_tit2 fc_pointer">Facility management — Management systems</h2>
                <p class="sub_txt">
                    ISO 41001 is a facility management standard announced in April 2018. It is an international standard for recognizing the scope of responsibility for facility management, creating appropriate resources to meet the needs of the organization, and creating a management structure.<br><br>
                    Enable that buildings and facilities owned by the organization are conducting function given properly and a system standard that operated by integrating user, space, process and technology elements, and is now the fastest-growing specialized sector management system worldwide as growing larger and more complex of building and more internationally of business.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO41001_01.jpg" alt="ISO 41001:2018 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 41001:2018 Requirements</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Context of the organization</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Leadership</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>Planning</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>Support</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>Operation</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Performance evaluation</li>
                                        <li>10. <span class="nbsp">&nbsp;</span>Improvement</li>
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
                                <h3 class="point_b1">The Importance of ISO 41001:2018</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>An international standard for facility management systems, providing a framework for developing, implementing and maintaining effective facility management across sectors of the world</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Helps to recognize the scope of responsibility and creating a management structure with appropriate resources to meet stakeholder needs.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Reconsider occupational profiles for facility management positions and become aware of the value provided by facility management systems as part of the organization's strategic orientation </li>
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
                                <h3 class="point_b1">Estimated Effectiveness of ISO 41001</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>Workforce safety, health and productivity are improved.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Facilities management costs are reduced through improved efficiency and effectiveness.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Increase service level consistency.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Facilitates communication between public and private sector methodologies and requirements.</li>
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
                                        GIC's auditors accurately evaluate the suitability of the management system through years of technical skills and expertise, helping customers develop continuously. As a reliable global leader in management system certification, GIC can provides a certification services of customer satisfaction, environment, safety and other management systems.
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC certification service</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 14 종료 +++++-->   
        
        <article><!--+++++ 컨텐츠 15 시작 +++++--> 
             <div class="page_title">
                <h1 class="sub_tit">ISO 28000: 2007</h1>
                <h2 class="sub_tit2 fc_pointer">Security Management Systems for the Supply chain</h2>
                <p class="sub_txt">
                    The importance of security is also increasing day by day due to the increasing threat of terrorism internationally.<br><br>
                    In addition, <span class="fc_pointer">the role of security in the international logistics industry is increasingly</span> enhanced by the establishment and enforcement of international standards such as the Authorized Economic Operator (AEO) scheme of the World Customs Organization (WCO).<br><br>
                    Therefore, ISO 28000:2007 specification, a Security Management Systems for the Supply chain, has been established by the International Standards Organization (ISO) to address the problem that members of the supply chain working in the logistics industry have to incur significant costs to meet all criteria.<br><br>
                    Organizations can establish ISO 28000:2007 Security Management Systems for the Supply chain to <span class="fc_pointer">ensure supply chain’s security.</span>
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO28000_01.jpg" alt="ISO 28000:2007 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">ISO 28000:2007 Requirements</h3>
                                <div class="con_txt">
                                    <ul><span class="point_b2">ISO 28000:2007 consists of the following items that enable to establish, implement, maintain, and evolve a security management system, including key aspects to ensuring security across the supply chain : </span>
                                        <li>1. <span class="nbsp">&nbsp;</span>Scope</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Normative references</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Terms and definitions</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Security Management System elements</li>
                                        <li>4-1. <span class="nbsp">&nbsp;</span>General requirements</li>
                                        <li>4-2. <span class="nbsp">&nbsp;</span>Security Management Policy</li>
                                        <li>4-3. <span class="nbsp">&nbsp;</span>Security risk assessment and planning</li>
                                        <li>4-4. <span class="nbsp">&nbsp;</span>Implementation and operation</li>
                                        <li>4-5. <span class="nbsp">&nbsp;</span>Checking and Corrective action</li>
                                        <li>4-6. <span class="nbsp">&nbsp;</span>Management review and Continual improvement</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO28000_02.jpg" alt="The importance of ISO 28000:2007">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of ISO 28000:2007</h3>
                                <div class="con_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span>ISO 28000:2007, implemented by the International Standards Organization (ISO), is a system that governs the establishment of a logistics security system throughout logistics, including manufacturing, land transport, sea transport, and port unloading.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Ports or businesses that have obtained ISO 28000:2007 certification from certification bodies may be internationlly recognized for having a logistics security framework conforming to international standards.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Among the global supply chains, the logistics security system that can be applied to the domestic (inland) section is relatively insufficient, and strengthening logistics security in the inland sector is significant in enhancing the stability of the global supply chain.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Companies can provide enhanced logistics services due to ensuring cargo stability and improved logistics flow.</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>Since the September 11 attacks in the United States in 2001, international interest insecurity has increased significantly, and security checks on aircraft, international ships and facilities have been strengthened, with various logistics security systems in place.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO28000_03.jpg" alt="The necessity and effect of ISO 28000:2007">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The necessity and effect of ISO 28000:2007</h3>
                                <div class="sub_txt">
                                    <ul>
                                        <li>1. <span class="nbsp">&nbsp;</span><span class="fc_pointer">It can contribute to enhancing logistics competitiveness</span> by securing supply chain’s security.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Lack of educational activities and government and private investment in logistics security systems leads to <span class="fc_pointer">a lack of awareness of logistics security.</span></li> 
                                    </ul>
                                </div>
                                <div class="con_txt">
                                    <ul><span class="point_b2">When using ISO 28000:2007 as a business means, effect is : </span>
                                        <li>1. <span class="nbsp">&nbsp;</span>Provide a systematic approach to meeting and <span class="fc_pointer">identifying legislation related to security</span></li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Help improve organization's <span class="fc_pointer">security level and capabilities.</span></li>
                                        <li>3. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Effective management of security risks</span> is possible.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>Reduced theft, loss, exchange, etc. <span class="fc_pointer">improves product and service safety.</span></li>
                                        <li>5. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Improve visibility of supply chain.</span></li>
                                        <li>6. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Improve logistics process management ability.</span></li>
                                        <li>7. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Improve emergency response and resilience.</span></li>
                                        <li>8. <span class="nbsp">&nbsp;</span>ISO 28000:2007 certification can work to advantage <span class="fc_pointer">in competitive bids.</span></li>
                                        <li>9. <span class="nbsp">&nbsp;</span>Provide the <span class="fc_pointer">confidence that to maintain personal safety and security of goods and services</span> by demonstrating to clients and other stakeholders that established management plans to minimize supply chain security risks.</li>
                                        <li>10. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Effective management of security-related risks is possible.</span></li>
                                        <li>11. <span class="nbsp">&nbsp;</span>Confirm the <span class="fc_pointer">organization's implementing commitment</span> to policies and induced continuous improvement.</li>
                                        <li>12. <span class="nbsp">&nbsp;</span><span class="fc_pointer">Costs can be reduced</span> through efficient use of raw materials and improved performance.</li>
                                        <li>13. <span class="nbsp">&nbsp;</span>Damage such as return of cargo, delay in customs clearance, damage caused by criminal punishment or fines, and <span class="fc_pointer">credit deterioration can be prevented</span> in the event of a violation of the law of the importing country.</li>
                                        <li>14. <span class="nbsp">&nbsp;</span>Reduce latency by <span class="fc_pointer">simplifying cross-country logistics clearance.</span></li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/ISO28000_04.jpg" alt="GIC’s Competency">
                            </dt>
                            <dd>
                                <h3 class="point_b1">GIC’s Competency</h3>
                                <div class="con_txt">
                                    <ul>
                                        GIC's auditors contribute to client's sustainably development by evaluating accurately the suitability of the management system through years of technical skills and expertise, and as a reliable global leader in management system certification, Provides certification for Information security, Client satisfaction, Occupational health and safety and other management systems as well as ISO 9001.
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC Certification Services</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 15 종료 +++++--> 
        <article><!--+++++ 컨텐츠 16 시작 +++++-->
            <div class="page_title">
                <h1 class="sub_tit">SA 8000:2014</h1>
                <h2 class="sub_tit2 fc_pointer">Social Accountability Management</h2>
                <p class="sub_txt">
                    Recently, there has been a growing interest in corporate activities and policies as well as ethical and <span class="fc_pointer">social normative impacts,</span> as well as where products are produced and the working environment.<br><br>
                    Non-governmental organizations, investment analysts and other stakeholders, including employees, are evaluating corporate efforts to ensure a fair and equitable working environment and transparent work practices. This environment will require for more companies to prove their social responsibility.
                </p>
            </div>
            <div class="center-diamond"></div>
            <div class="page_con">
                <ul>
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/SA8000_01.jpg" alt="What is SA 8000 certification?">
                            </dt>
                            <dd>
                                <h3 class="point_b1">What is SA 8000 certification?</h3>
                                <p class="sub_txt">
                                    The SA 8000 certification covers a wide range of issues, including <span class="fc_pointer">Child and Forced labor, Health and Safety in the workplace, Freedom of association and the right to collective bargaining, Discrimination, Disciplinary practices, Working hours, Management systems and bonuses.</span><br><br>
                                    The SA 8000 not only <span class="fc_pointer">establishes workplace’s standards</span> worldwide, but also <span class="fc_pointer">encompasses existing international agreements,</span> including the International Labor Organization, the Universal Declaration of Human Rights and the United Nations Convention on the Rights of the Child.
                                </p>
                                <div class="con_txt">
                                    <ul>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>Developed in 1989 by the Social Accountability International (SAI), a subsidiary of the Council on Economic Priorities (CEP), it is the world's most recognized independent workplace standard.</li>
                                        <li>&#10020; <span class="nbsp">&nbsp;</span>This standard is intended to improve the working environment and can be applied to companies of all sizes worldwide, regardless of scope, industry and location, and is based on the International Labor Organization's Universal Declaration of Human Rights and the United Nations' International Convention on Children's Rights.</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/SA8000_02.jpg" alt="SA 8000 Requirements">
                            </dt>
                            <dd>
                                <h3 class="point_b1">SA 8000 Requirements</h3>
                                <p class="sub_txt">
                                    The SA 8000 standard is <span class="fc_pointer">based on the ISO 17021-1 standard,</span> just like the existing ISO standard, and <span class="fc_pointer">consists of its own form,</span> not high-level structure.<br><br>
                                    The purpose of the SA 8000 is to <span class="fc_pointer">empower and protect all employees of the organization</span> by providing be able to audit standards in accordance with the UN Declaration of Human Rights, the ILO and other international labor laws.<br><br>
                                    The purpose of the SA 8000 is to <span class="fc_pointer">empower and protect all employees of the organization</span> by providing standards for can audit in accordance with the UN Declaration of Human Rights, the ILO and other international labor laws.<br><br>
                                    The requirements for the following nine elements of the SA 8000 are at the heart of the right implementation, monitoring, and enforcement : <br>
                                    The management system for this standard also enables organizations to fully and continuously comply with and improve the SA 8000 and can be an indicator of social performance.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">The elements of the SA 8000 are as follows :</span>
                                        <li>1. <span class="nbsp">&nbsp;</span>CHILD LABOR</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>FORCED OR COMPULSORY LABOR</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>HEALTH AND SAFETY</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>FREEDOM OF ASSOCIATION &amp; RIGHT TO COLLECTIVE BARGAINING</li>
                                        <li>5. <span class="nbsp">&nbsp;</span>DISCRIMINATION</li>
                                        <li>6. <span class="nbsp">&nbsp;</span>DISCIPLINARY PRACTICES</li>
                                        <li>7. <span class="nbsp">&nbsp;</span>WORKING HOURS</li>
                                        <li>8. <span class="nbsp">&nbsp;</span>REMUNERATION</li>
                                        <li>9. <span class="nbsp">&nbsp;</span>MANAGEMENT SYSTEM</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>			
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/SA8000_03.jpg" alt="Certification process of SA 8000">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Certification process of SA 8000</h3>
                                <div class="con_txt">
                                    <ul><span class="point_b2">The following must be prepared for SA 8000 certification : </span>
                                        <li>1. <span class="nbsp">&nbsp;</span>Organizations should be familiar with the requirements, manage legal requirements and compare existing practices to those in the SA 8000 standard.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Compare the requirements of existing practices and SA 8000 standards to implement the requirements of SA 8000 standards.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Mandatory implementation procedures must be established to enable integration with the firm's existing management systems.</li>
                                        <li>4. <span class="nbsp">&nbsp;</span>After applying and completing the internal monitoring process, you can begin the certification process.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/SA8000_04.jpg" alt="The importance of SA 8000">
                            </dt>
                            <dd>
                                <h3 class="point_b1">The importance of SA 8000</h3>
                                <p class="sub_txt">
                                    When adopting SA 8000 certification, the enterprise must consider the social impact of operating the business, as well as the conditions under which its employees, partners and suppliers operate.<br><br>
                                    The SA 8000 is universal for any type of organization, regardless of size, geographical location, or industry, and is a voluntary social responsibility compliance standard that demonstrates an enterprise's commitment to humanitarian work environment and responsibility production.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">By complying with this standard, benefits is : </span>
                                        <li>1. <span class="nbsp">&nbsp;</span>Improve management and performance of the supply chain while proving that the employment relationship between businesses and workers is operating fairly and legally in accordance with international standards.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Ensure compliance with global standards to reduce the possibility of non-compliance, disclosure and litigation.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>Demonstrate appropriate social responsibility when bidding for overseas contracts and expanding for accommodate new business in local.</li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                    <hr style="border-top: 1px dotted #999999;display:block;margin: 50px auto 2px;width:100%;">
                    <li>
                        <dl>
                            <dt class="con_img">
                                <img src="./image/SA8000_05.jpg" alt="Expectation effectiveness of SA 8000">
                            </dt>
                            <dd>
                                <h3 class="point_b1">Expectation effectiveness of SA 8000</h3>
                                <p class="sub_txt">
                                    SA 8000 certification is in high demand in many countries, including China, India, and Italy, and its importance is prominent in developing countries, with companies in various fields such as architecture, food, consumer goods, and infrastructure acquiring SA 8000 certification.
                                </p>
                                <div class="con_txt">
                                    <ul><span class="point_b2">Other expected effects for SA 8000 authentication are as follows : </span>
                                        <li>1. <span class="nbsp">&nbsp;</span>We can respond to domestic and international demands for corporate social responsibility.</li>
                                        <li>2. <span class="nbsp">&nbsp;</span>Demonstrate the firm's willingness to comply with social responsibility for suppliers, suppliers, subcontractors.</li>
                                        <li>3. <span class="nbsp">&nbsp;</span>The system provides access to social problems. </li>
                                   </ul>
                                </div>
                            </dd>
                        </dl>	
                    </li>
                </ul>
            </div>
            <div class="center-diamond"></div>
            <div class="partner_type2">
                <h2 class="sec_tt">GIC Certification Services</h2>
                <div class="con_box">
                    <ul>
                        <li><p><em><strong>01</strong></em><span>ISO 9001</span></p></li>
                        <li><p><em><strong>02</strong></em><span>ISO 14001</span></p></li>
                        <li><p><em><strong>03</strong></em><span>ISO 45001</span></p></li>
                        <li><p><em><strong>04</strong></em><span>ISO 13485</span></p></li>
                        <li><p><em><strong>05</strong></em><span>ISO 15378</span></p></li>
                        <li><p><em><strong>06</strong></em><span>ISO 14155</span></p></li>
                        <li><p><em><strong>07</strong></em><span>ISO 37001</span></p></li>
                        <li><p><em><strong>08</strong></em><span>ISO 37301</span></p></li>
                        <li><p><em><strong>09</strong></em><span>ISO 21001</span></p></li>
                        <li><p><em><strong>10</strong></em><span>ISO 22301</span></p></li>
                        <li><p><em><strong>11</strong></em><span>ISO 22716</span></p></li>
                        <li><p><em><strong>12</strong></em><span>ISO 50001</span></p></li>
                        <li><p><em><strong>13</strong></em><span>ISO 22000</span></p></li>
                        <li><p><em><strong>14</strong></em><span>FSSC 22000</span></p></li>
                        <li><p><em><strong>15</strong></em><span>Global HACCP</span></p></li>
                        <li><p><em><strong>16</strong></em><span>FSMA</span></p></li>
                        <li><p><em><strong>17</strong></em><span>ISO/IEC 27001</span></p></li>
                        <li><p><em><strong>18</strong></em><span>ISO/IEC 27701</span></p></li>
                        <li><p><em><strong>19</strong></em><span>ISO/IEC 20001-1</span></p></li>
                        <li><p><em><strong>20</strong></em><span>ISO 41001</span></p></li>
                        <li><p><em><strong>21</strong></em><span>ISO 20121</span></p></li>
                        <li><p><em><strong>22</strong></em><span>ISO 10002</span></p></li>
                        <li><p><em><strong>23</strong></em><span>ISO 10004</span></p></li>
                        <li><p><em><strong>24</strong></em><span>ISO 28000</span></p></li>
                    </ul>
                </div>
            </div>
        </article><!--+++++ 컨텐츠 16 종료 +++++--> 
    </div><!-------div class="tab_con" 종료------>
</div><!---------/class="content_wrap" 종료/------------>
    <!-- /* 여기까지 에디터의 HTML 모드로 등록합니다. */ -->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>