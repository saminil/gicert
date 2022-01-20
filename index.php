<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<div id="main_visual">	
	<div class="slider">
	
		<div class="roll roll01">
			<div class="black"></div>
			<!------영상일 경우 : video src="http://a01.sgedu.co.kr/theme/a01/img/visual01.mp4" autoplay="autoplay" loop="loop" muted="muted"></video------->
			<div class="roll_wrap">
                <h2>GIC certification body is <br>a global leader in management system certification <br> across industries and sectors around the world.</h2>
                <hr>
                <p>Internationally accredited certification body<br class="mobile_no" /></p>
                <a href="javascript:" class="btn_more">more view</a>
            </div>
		</div>		
		
		<div class="roll roll02">
		    <div class="roll_wrap">
                <h2>GIC is a global management system certification body <br> based on trust and impartiality.</h2>
                <hr>
                <p>GIC does its best to maximize customer <br class="mobile_no" />and stakeholder value by providing world-class certification.</p>
                <!----a href="javascript:" class="btn_more">더보기</a---->
            </div>
		</div>
		<div class="roll roll03">
		    <div class="roll_wrap">
                <h2>Global Inter Certification</h2>
                <hr>
                <p>Providing management system certification  <br>to improving the competitiveness of global organizations<br class="mobile_no" /><br></p>
                <a href="javascript:" class="btn_more">more view</a>
            </div>
		</div>
		
		<div class="roll roll04">
		    <div class="roll_wrap">
                <h2>Global Inter Certification</h2>
                <hr>
                <p>Internationally accredited Management System Certification Body  <br>to improving the competitiveness of global organizations<br class="mobile_no" /><br></p>
                <a href="javascript:" class="btn_more">more view</a>
            </div>
		</div>
	</div>	
</div>

<!-------메인페이지 로고 하단 클릭했을 때 인증서검색 바로가기/// -------->
<div id="certification_search"></div>
        
	
	<!-- 메인 이벤트 /theme/테마/skin/latest/event/latest.skin.php -->
	<!----?php echo latest('theme/event', 'event', 1, 10); ?---->
	<!-- /메인 이벤트 -->		

<?
$v = @$_GET['view'];
if($v != 'dev'){
?>

<style type="text/css">
    
 /*기본CSS, 시작*/	
	body,td,h1,h2,h3,h4,h5,div,p,li,ul,ol,dd,dt,section,input,textarea,select,button{margin:0;padding:0; font-size:.85rem; line-height:1.6em; font-family: 'Noto Sans KR', sans-serif; font-weight:400; letter-spacing:-0.02em;}
    
	body{padding-top:0px; padding-bottom:0px;}
    
	ul,ol,li{margin:0px;padding-bottom:0px;list-style:none;}
	/*기본CSS, 종료*/   
    
    
    
    /* ------------------------ 인증서 검색 영역 css 시작 ------------------------ */
    
    
    .main_cert .form_wrap{/* 검색 입력폼 & 검색 버튼 영역*/
        width: 90%;	
        max-width: 500px;
        align-items: center;
        margin: 0px auto;
        text-align: center;

    }
    
    .main_cert .form_wrap input{/* 검색 입력폼 */
        width: 70%;
    }
    
    .main_cert .form_wrap button{/* 검색 버튼 */
        margin-left: 8px;
        padding:7px 15px;
        border:1px solid #ddd;
        background: #f3f3f3;
        vertical-align: top;
    }

    .main_cert #cert_rst{/* 검색 결과 전체 영역 */
        position:relative;
        top:0px;
        text-align: left;
        font-size: 1.05em;
        margin: 20px auto 0;
        max-width: 800px;
        color:#fff;
        padding: 50px 30px;

    }

    .main_cert #cert_rst div {/* 검색 결과값 문단 */
        padding: 4px 0;
        display: flex;/* 문단의 제목과 내용을 분리시킴 */
    }

    .main_cert #cert_rst div b {/* 검색 결과값 문단의 제목(구분) */
        font-size: 1.1rem;
        font-weight: 300;
        color: hsl(176,81%,85%);
        flex: 1
    }

    .main_cert #cert_rst p{
        text-align: center;
    }

    .main_cert #cert_rst b::before{
        content: '';
        margin-right: 10px;
        width: 3px;
        height: 1rem;
        display: inline-block;
        background: #3094ff

    }
    .main_cert #cert_rst span{/* 검색 결과값 문단의 내용 */
        display: inline-block;
        margin-left: 14px;
        font-size: 1rem;
        font-weight: 300;
        color: ghostwhite;
        flex: 2.3;
    }
    
/* ------------------------ 인증서 검색 영역 css 시작 ------------------------ */  
    
   
    
/* ------------------------ 인증서 검색 영역 반응형 시작 ------------------------ */     

@media (max-width: 1280px){
	.main_product.main_cert { 
	    padding: 50px 0;
	}
    
}
    
    
@media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .main_cert #cert_rst {
            padding: 30px;/* 전체 레이아웃에(.wrap에 패딩값: 0 30px) 맞춰서 사이드 30px 적용 */
    }
}    
  
    
@media all and (max-device-width : 640px) {
        .main_cert #cert_rst div {/* 태블릿 해상도에 맞춰 결과값 내용에 display: flex 제거 */
            display: block;
    }
}
    

@media all and (min-width:360px) and (max-device-width : 414px) {
        .main_cert #cert_rst span {/* 모바일 해상도에 맞춰 결과값 내용을 분리시킴 */
            display: block;
    }
        .main_cert .form_wrap { width: 100% }/* 인증서 검색창 크기 조절 */
        .main_cert .form_wrap button { width: 20%;padding: 7px 5px }/* 인증서 검색창 & Search버튼 크기 조절 */
}
    
/* ------------------------ 인증서 검색 영역 반응형 종료 ------------------------ */  
    
    
</style>

<!-----// 인증서검색 시작,  맨 아래 코드 추가 참조, 개발 2021년6월22일 //------------>
<section class="main_sec main_cert">
	<div class="wrap"> <!---- style="margin-top:-0.1%;------->
      <h2>GIC CERT SEARCH
		  <span>GIC Certificate Verification</span>
	  </h2>
		<div class="form_wrap">
			<input type="text" name="cert_code" id="cert_code" placeholder="Please, Insert Certificate Number" />
			<button id="cert_btn">Search</button>
		</div>
	</div>
	<div id="cert_rst" class="wrap"></div>
</section>

<?
}
?>
<!-----// 인증서검색 종료 //------------>

<section class="main_sec main_bbs" style="background-color: #fff;">
	<div class="wrap">
	<!-- 질문과답변 최근글 /theme/테마/skin/latest/qna/latest.skin.php---->
<section><?php echo latest('theme/qna', 'notification_en', 3, 40); ?></section>
		<!-- 일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php>----->
<section><?php echo latest('theme/basic', 'introduce_en', 3, 40); ?></section>
		<!-- 일반 최근글 /theme/테마/skin/latest/basic/latest.skin.php -->
<section><?php echo latest('theme/basic', 'free_en', 3, 40); ?></section>
	</div>
</section>


<section class="main_sec main_about">
	<div class="bg"></div>
	<div class="wrap animatedParent animateOnce" data-sequence="500">
		<div class="img animated fadeInRightShort" data-id="1">
            <img src="<?php echo G5_THEME_URL ?>/img/main_about_img01.png" alt="Global Inter Certification" /> 
		    <img src="<?php echo G5_THEME_URL ?>/img/main_about_img02.png" alt="Global Inter Certification" /> 
		   
			<!----br--->
			<!--- style="display:block;margin-left:-10px;"  ----->
			
		</div>
		<div class="text animated fadeInUpShort" data-id="2">
			<div class="animatedParent animateOnce" data-sequence="250">
				<h2 class="animated fadeInUpShort" data-id="1"><!---about----> <strong>Global Inter Certification</strong></h2>
				<!----------h3 class="animated fadeInUpShort" data-id="2" style="color:#333333;">고객님의 성공을 위한 큰 힘이 되겠습니다.</h3---------->
				<p class="animated fadeInUpShort" data-id="3">GIC is <br class="pc_only" /> the best Internationally accredited certification body <br class="pc_only" >to support customers' successful overseas expansion.</p>
				<p class="animated fadeInUpShort" data-id="4">We also provide various management system certification <br class="pc_only" /> and testing, training, and auditor training services through our partner institutions.</p>
				<div class="btn_area animated fadeInUpShort" data-id="5">
					<a href="<?php echo G5_THEME_URL ?>/company/introduce.php">Introduction</a>
					<a href="<?php echo G5_THEME_URL ?>/company/location.php">Location</a>
				</div>
				<div class="cs animated fadeInUpShort" data-id="6">
				    <div class="cs_area">
                        <a href="mailto: info@gicert.org" title="send email">
                            <p>
                                <span class="icon"><i class="material-icons" style="">forward_to_inbox</i></span>
                                <span class="title">E-mail</span>
                                <span class="tel gic_email">info@gicert.org</span>
                            </p>
                        </a>
                    </div>
				</div>
                <!--<div class="cs animated fadeInUpShort" data-id="6">
				    <div class="cs_area">
                        <a href="mailto: info@gicert.org" title="send email">
                            <p class="icon"><span class="material-icons" style="">forward_to_inbox</span></p>
                            <p class="title">E-mail</p>
                            <p class="tel gic_email">info@gicert.org</p>
                        </a>
                    </div>
				</div>-->
			</div>
		</div>
	</div>
</section>

<section class="main_sec main_product">
	<div class="wrap">
		<h2>Publication</h2>
		<?php echo latest('theme/pic_block_slide', 'introduce_en', 4, 30); ?>
	</div>
</section>
 <!------style="padding-left:-10px;" ----->


<script type="text/javascript">
$(document).ready(function(){
	$('#main_visual .slider').bxSlider({
		mode: 'fade',
		auto: true,
		autoControls: true,
		stopAutoOnClick: false,
		speed: 800, 
		pager: true,
		touchEnabled: true,		
		pause: 8000
	});
});

<?
$v = @$_GET['view'];
if($v != 'dev'){

//http://igcert.net/?view=dev
?>

const certProxt = {
	data:'',
	getData:function(){
		let cert_code = $('#cert_code').val();
		if(cert_code === ''){
			$('#cert_rst').html('<p>올바른 인증서번호를 입력해주세요.</p>');
			return false;
		}

		$('#cert_rst').html('<p>검색 중...</p>');
		$.get('/lib/certProxy/search.php',{'code':cert_code},function(r){
			//console.log(r);            
			if(r === '') r = '<p>GIC인증서 조회결과가 없습니다.</p>';
			$('#cert_rst').hide().html(r).fadeIn(1500);
		});
	}
}

$('#cert_btn').click(certProxt.getData);

<?
}
?>
</script>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>