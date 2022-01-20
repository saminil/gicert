<?php
include_once('./_common.php');
$g5['title'] = 'Location';
include_once(G5_THEME_PATH.'/head.php');
?>
<?php
	/*
		이 페이지는 jquery 로 작동됩니다.	
	*/
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
	/* 내용관리등 에디터로 입력할 경우  여기서부터 */
    
    
    /*회사안내- 오시는길 페이지 시작-YR 210616*/
    .content_wrap { /* 서브페이지 전체 레이아웃 */
        width:100%; 
        max-width:1200px;
        margin:0 auto; 
        font-size: 1.2em !important;
        font-weight: 400;
        line-height: 1.5;
        overflow: hidden;
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
    
    /*지아이씨인증원 정보(텍스트)*/
    .sec02{margin:50px 0 100px;}
    .sec02 .sec_tt, .sec_tt{
        font-size:1.6em;
        font-weight:500;
        color:#102f45;
        margin-bottom:15px;
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
        color:#222;
        font-weight:500;
        margin-bottom:8px;
    }


/*회사안내- 오시는길 페이지 종료*/
    

    
    .claim_opinion{display:block;width:80%;margin-top:-70px;}
    
    
    /* -----------------------------------------------------반응형 시작 -210622 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .way_to_gic_txt{display:inline-block;width:400px;}
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
        /*지아이씨인증원 정보(텍스트)*/
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
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap { font-size: 1.1em !important }
        
        /*회사개요*/
        .sec02 ul>li>span{
            display:block;
            width:500px;
            margin-bottom:6px;
        }
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) { 
        .company_info, .company_info2{
            padding:20px 4%;
        }
        .sec_tt small{font-size:70%;}
    }  
/*---------------------------------------------------------------반응형 끝*/
    

	/*  여기까지 코드를 복사하여 공통 css파일 최하단에 추가합니다. */
</style>

<div class="content_wrap animatedParent">
    <section class="page_title animated fadeInUpShort" style="margin-bottom:15px">
            <div class="sub_top_tt">GIC Location</div>
    </section>
    
    <!--------------// sec02 //--------------->
    <section class="sec02 animatedParent" data-sequence="300">
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
    
    <!--------------// GIC Location (kakao Map) //--------------->
    <h2 class="sec_tt">GIC Location <small>(kakao Map)</small></h2> <!--   오시는길 텍스트와 동일한 폰트사이즈를 적용해도 크기가 상이하여 style로 별도의 폰트사이즈 적용 210617 yr-->
    <hr style="display:block;width:100%;height:2px;background:#102f45;margin-bottom:40px;">
   
    <hr style="display:block;width:100%;height:1px;background:#ddd;margin-bottom:20px;">
	<!-- 1. 약도 노드 -->
	<div id="daumRoughmapContainer1584435077831" class="root_daum_roughmap root_daum_roughmap_landing"></div>
	
	<!-- 2. 설치 스크립트 -->
    <div class="border">
	   <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>
    </div>
	
	<!-- 3. 실행 스크립트 -->
	<script charset="UTF-8">
		new daum.roughmap.Lander({
			"timestamp" : "1584435077831",
			"key" : "xj65",
			"mapWidth" : "",
			"mapHeight" : ""
		}).render();
	</script>
    <hr style="display:block;width:100%;height:1px;background:#ddd;margin:20px 0;">
    
</div> <!--------------// class="content_wrap" 종료 //--------------->



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>