<?php
include_once('./_common.php');
$g5['title'] = 'CI&Mark';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">


<style>
    /*회사안내- 로고 페이지 시작-YR 210616*/
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
    .ci_mark_content{width:100%;height:auto;}
     /*ci 소제목*/
    .box_title{
        font-size:1.6em;
        color:#102f45;
        font-weight:500;
        height:auto;
    }
    /*1) CI*/
    .ci_box1, .ci_box2, .ci_box3{
        width:100%;
        margin:40px 0 80px;
        border:2px solid #e8e8e8;
        padding:20px 3%;
    }
    .ci_tt{
        float:left;
        font-size:1.3em;
        font-weight:500;
        color:#5878a8;
        padding:3px 0;
        height:28px;
        width:40%;
    }
    .ci_tt_underline{
        display:inline-block;
        width:100%;
        height:2px;
        background:#5878a8;
    }
    .basic_logo>img{ /*로고 이미지*/
        width:60%;
        margin:50px 20%;
        border:1px solid #eee;
        padding:20px 30px;
    }
    .ci_txt{
        color:#222;
        font-weight:400;
        line-height:1.7em;
        margin-bottom:30px;
        text-align:justify;
    }
    /*2) 형태규정*/
     .basic_logo_size>img{ /*로고형태규정 이미지*/
        width:70%;
        margin:40px 15%;
        border:1px solid #eee;
        padding:20px 30px;
    }
    .ci_txt_box{padding:0 2%;}
    .ci_txt_box>li{margin:5px 0;}
    .ci_txt_tt{font-weight:500;}
    .ci_txt_box>li>span{
        display:inline-block;
        font-size:0.95em;
        color:#333;
        font-weight:400;
        line-height:1.7em;
        margin:5px 0 20px;
        text-align:justify;
        margin-left:20px;
    }
    /*다운로드 버튼*/
    .gic_logo_download_btn{margin-top:30px;}
    .gic_logo_download_btn a{
        display:block;
        background:#fff;
        border:1px solid #102f45;
        font-size:1em;
        font-weight:500;
        color:#102f45;
        height:42px;
        line-height:40px;
        width:350px;
        border-radius:50px;
        text-align:center;
        margin:20px auto 30px;
        transition:all 0.3s; /*마우스 오버시 효과 YR*/
    }
    .gic_logo_download_btn a:hover{
        background:#102f45;
        border:1px solid transparent;
        color:#fff;
    }
    .gic_logo_download_btn .material-icons{
        vertical-align:middle;
        font-size:1em;
    }
    /*3) 색상규정*/
    .basic_logo_color{margin:40px 0 30px;display:flex;}
    .basic_logo_color li{
        flex:1;
        width:32%;
        margin-right:2%;
        height:260px;
        border:1px solid #ccc;
    }
    .basic_logo_color li:last-child{margin-right:0%;}
    
    .basic_logo_color .color_box{width:100%;height:150px;}
    .cmyk_color{background:#00428e;}
    .pantone_color{background:rgba(0,45,114,1);}
    .rgb_color{background:#0a4f81;}
    .basic_logo_color li>p{
        margin:15px 7% 5px 6%;
        color:#333;
        font-weight:500;
    }
    .basic_logo_color li>span{
        display:block;
        margin:0 6%;
        font-size:0.95em;
        color:#333;
        line-height:1.6em;
    }
    .basic_logo_color li .color_for{font-size:0.85em;}


/*회사안내- 로고 페이지 종료*/
    
	.fc_pointer {color:#1f2558; }
	.page_title{width:100%; margin-bottom:70px;}
	.page_title h1{width:100%; margin:0 auto; text-align:center; font-size:2.5em; font-weight:600;}
	.page_title h1:after {content:""; clear:both; display:block; width:30px; margin:10px auto; border:1px solid #000;}
	.page_title h2{width:100%; margin:0 auto; text-align:center; font-size:1.2em; color:#666; margin-top:20px; }

	.vision_type1 {width:100%;  margin:0 auto; }
	.vision_type1:after{content:""; clear:both; display:block;}
	.vision_type1 h2.title {text-align:center; font-size:2em; font-weight:400; color:#333; line-height:1.2em; margin-bottom:40px; }
	.vision_type1 span.stitle {display:block; width:100%; text-align:center; margin:0 auto; font-size:1.1em; font-weight:400; color:#666; line-height:1.6em; margin-bottom:40px; }
	.vision_type1 .img_div img{width:100%; max-width:1200px;}

    .vision_type1 ul {margin:0; border:1px solid #ddd; overflow:hidden;padding:2% 0;}
    
	.vision_type1 ul li {float:left; display:inline-block; padding:30px 0; padding-bottom:15px; width:20%; height:200px; text-align:center; margin:3% 2.5%; border-bottom:1px solid #ddd; border-right:0px solid #ddd;}
    
	.vision_type1 ul li:nth-child(3n) {border-right:1; }
	.vision_type1 ul li:nth-child(2n) {background-color:#f7f7f7;}
	.vision_type1 ul li .icon {display:block; width:100px; height:100px; margin:0 auto; overflow:hidden;margin-bottom:-40px;padding:20px;}
	.vision_type1 ul li .icon i {display:inline-block; font-size:2em; line-height:50px; color:#333;}
	.vision_type1 ul li p {display:block; font-size:0.95em; color:#5878a8; font-weight:400; margin-top:-40px;}
	.vision_type1 ul li span { display:block; font-size:1em; color:#555; margin-top:10px; line-height:1.5em;}

	.s_tit {width:100%; height:30px; line-height:30px; text-align:left; border-left:5px solid #000; margin:50px auto;  margin-bottom:10px;  font-size:1.5em;  text-indent:10;}
    
    .bg1, .bg2, .bg3, .bg4, .bg5, .bg6, .bg7, .bg8, .bg9, .bg10, .bg11, .bg12, .bg13, .bg14, .bg15, .bg16 {width:10%;height:auto;background-color:#ffffff;display:block;}/* */
    
    ul .bg1{background-image:url('images/ISO-9001.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg2{background-image:url('images/ISO-14001.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg3{background-image:url('images/ISO-45001.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg4{background-image:url('images/ISO-13485.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg5{background-image:url('images/ISO-37001.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg6{background-image:url('images/ISO-37301.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg7{background-image:url('images/ISO_IEC_27001.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg8{background-image:url('images/ISO-21001.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    ul .bg9{background-image:url('images/ISO-22000.png');background-size:contain; background-position:center center;background-repeat:no-repeat;}
    

    
    a li p{display:block;margin-top:-80px;}
    
    
  
    
/* -----------------------------------------------------반응형 시작 -210622 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        /*  인증 마크 다운로드 목록 Mobile Settings */
        .vision_type1 ul li {
            padding:30px 0 15px; 
            width:21%; 
            height:190px; 
            margin:2% 2%;
        }
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        .ci_tt{width:50%;}
        .basic_logo_size>img{ /*로고형태규정 이미지*/
            width:80%;
            margin:40px 10%;
            }
        .basic_logo>img{ /*로고 이미지*/
            width:70%;
            margin:50px 15%;
        }
        /*3) 색상규정*/
        .basic_logo_color li{
            flex:1;
            width:34%;
            margin-right:3%;
            height:260px;
            border:1px solid #ccc;
        }
        .basic_logo_color li:last-child{margin-right:0%;}

        /* 인증 마크 다운로드 목록 Mobile Settings */
        .vision_type1 ul li {
            padding:30px 0 15px; 
            width:28%; 
            height:180px; 
            margin:4% 2.6%;
        }
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .sub_top_tt{display:none;} /*탭메뉴와 중복되어서 안보이게함*/
        /* 인증 마크 다운로드 목록 Mobile Settings */
        .vision_type1 ul li{
            Width:28%;
            margin:4% 2.6%;
        }
        .partner_type2 .con_box ul li {float:left; width:100%; list-style:none; margin:10px 0; }
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap { font-size: 1.1em !important }
        
        /*1) CI*/
        .ci_box1, .ci_box2, .ci_box3{padding:20px 5%;}
        .ci_tt{width:80%;}
        /*이미지*/
        .basic_logo_size>img{ /*로고형태규정 이미지*/
            width:100%;
            margin:40px 0%;
            }
        .basic_logo>img{ /*로고 이미지*/
            width:100%;
            margin:50px 0%;
        }
         /*다운로드 버튼*/
        .gic_logo_download_btn{margin-top:30px;}
        .gic_logo_download_btn a{width:80%;}
        .gic_logo_download_btn .hide{display:none;}
        
        /*3) 색상규정*/
        .basic_logo_color{margin:40px 0 30px;display:block;padding:0 0%;}
        .basic_logo_color li{
            flex:1;
            width:100%;
            margin:30px 0%;
            height:230px;
            border:1px solid #ccc;
        }
        .basic_logo_color .color_box{width:100%;height:130px;}
        /* 인증 마크 다운로드 목록 Mobile Settings */
        .vision_type1 ul li{
            padding:25px 0 15px; 
            width:40%; 
            height:180px; 
            margin:6% 5%;
        }
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) { 
         /*1) CI*/
        .ci_box1, .ci_box2, .ci_box3{
            width:100%;
            margin:40px 0 80px;
            border:0;
            padding:20px 0%;
        }
        /* 인증 마크 다운로드 목록 Mobile Settings */
        .vision_type1 ul li{
            padding:50px 0 15px; 
            width:40%; 
            height:180px; 
            margin:4% 5%;
        }
    }  
/*---------------------------------------------------------------반응형 끝*/


</style>

<div class="content_wrap animatedParent">
	<section class="page_title animated fadeInUpShort">
        <div class="sub_top_tt">CI&amp;Mark</div>
	</section>
	<section class="ci_mark_content animated fadeInUpShort">
        <h2 class="box_title">1. GIC Logo(CI: Corporate Identify)</h2>
        <span class="bottom_line"></span>
        
        <!-------------- ci_box1 --------------->
        <div class="ci_box1">
            <h2 class="ci_tt">Corporate Identity(CI)</h2>
            <span class="ci_tt_underline"></span>
            <div class="basic_logo">
               <img src="./images/GIC_ci.png" alt="(주)지아이씨인증원 로고">
            </div>
            <div class="ci_txt">
              The design of Wordmark emphasizes flexibility and simplicity, and by honestly processing the circles symbolizing the universe and the world stage, we wanted to present an innovative yet balanced image. In addition, the G, I, and C characters express the will to breathe with the world and contribute to human society by communicating the inside and outside through the divisions that are orderly located in the circle. The English logo design expresses the customer-oriented will integrating technicism and humanism, and the image of a global company with a modern sense.
            </div>
        </div>

        <!-------------- ci_box2 --------------->
        <div class="ci_box2">
            <h2 class="ci_tt">Form regulations</h2>
            <span class="ci_tt_underline"></span>
            <div class="basic_logo_size">
               <img src="./images/GIC_ci_size.png" alt="(주)지아이씨인증원 로고 형태규정">
            </div>
            <ul class="ci_txt_box">
               <li>
                    <p class="ci_txt_tt">1) Basic wordmark</p>
                   <span>
                    The basic wordmark is a form that combines orb and text and has a formative feature in which the text part is inherent in the background. 
                   Therefore, a plan about the application space must be preceded so that optimal application conditions can be maintained when applied.
                   </span>
               </li>
               <li>
                    <p class="ci_txt_tt">2) Utilization Watermark</p>
                   <span>
                    It is a wordmark used in video, internet and outdoor media, and its use in print media is prohibited.
                    The ellipse and the character part are separated, making it easy to express in three dimensions and minimizing the restrictions of the background space.
                   </span>
                <li>   
                    <p class="ci_txt_tt">3) Logo of GIC Certification body</p>
                    <span>
                    The logo of the GIC certification body is not a certification mark and cannot be used by customers.
                    </span>
                </li>
                <li>
                    <!--지아이씨 로고 다운로드 버튼-->
                    <div class="gic_logo_download_btn">
                        <a class="btn" href="/data/file/giclogo/GIC_Logo.zip" download> GIC Logo <span class="hide">Ai(Illust)</span> Download <span class="material-icons">file_download</span></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-------------- ci_box3 --------------->
        <div class="ci_box3"> 	
            <h2 class="ci_tt"> Color regulations</h2>
            <span class="ci_tt_underline"></span>
            <ul class="basic_logo_color clear">
                <li class="color01">
                    <div class="cmyk_color color_box"></div>
                    <p>Process Color</p>
                    <span>C100 M70 Y0 K20</span>
                    <span class="color_for">All print media and products</span>
                </li>
                <li class="color02">
                    <div class="pantone_color color_box"></div>
                    <p>Pantone Color</p>
                    <span>Pantone 288C</span>
                    <span class="color_for">All print media and products</span>
                </li>
                <li class="color03">
                    <div class="rgb_color color_box"></div>
                    <p>RGB Color</p>
                    <span>R10 G79 B129</span>
                    <span class="color_for">For screens such as video, website, etc.</span>
                </li>
            </ul>
        </div>
      <br>
	</section>
    
    <!--------------// 2. Certification Mark //--------------->
    
	<section class="vision_type1 animated fadeInUpShort">
        <h2 class="box_title">2. Certification Mark</h2>
        <span class="bottom_line"></span>
        <br>
        <div style="padding:40px 3%;border:2px solid #e8e8e8;">
           <div class="mark_info" style="line-height:1.8em;">
               <p style="font-weight:bold;color:#f89834;">
                   <span class="material-icons" style="vertical-align:middle;">info</span>Certification Mark Precautions for use
               </p><br>
               <p style="font-size:0.95em;margin-left:2%;line-height:2em; word-break:keep-all;">
                   Customers certified from GIC must use the Certification Mark and Accreditation Mark correctly in accordance with the following regulations.<br><br>
                   &bull;  &nbsp;You can use the Certification Mark and Accreditation Mark only when the certificate is valid.<br>
                   &bull;  &nbsp;Certification marks and Accreditation marks can only be used within the scope that has been certified. <br>
                   &bull;  &nbsp;Certification marks and Accreditation marks are never used by GIC certifiers in a manner that gives them the impression that they have certified a product or certified a process.<br>  
                   &bull;  &nbsp;Certification marks and Accreditation marks are not available other than those provided by GIC.<br> 
                   &bull;  &nbsp;No misleading expression can be made regarding certification. <br>
                   &bull;  &nbsp;If the certification is suspended or withdrawn, no advertisement with a mark referring to the certification shall be made.<br>
                   &bull;  &nbsp;If the certification terms are reduced, all advertisements must be modified.<br> 
                   &bull;  &nbsp;Certification marks and Accreditation marks may not be used in such a way that the GIC certification system is likely to be discredited or subject to public distrust.<br> 
                   &bull;  &nbsp;Accreditation marks and certification marks should always be marked together.
               </p>
           </div>
        </div>        
        <br><br>
        
        
        <!--------------// Certification mark download list //--------------->
        
        <p style="display:block; text-align:center;color:#f89834;font-size:1.2em;font-weight:400;">[ Certification mark download list ] </p>
        <p style="display:block; text-align:center;color:#f89834;font-weight:400;margin-bottom:20px;"> You can download the file by clicking the corresponding certification mark below.<br>
        <ul class="Logo_mark" style="border:2px solid #e8e8e8;">
            <a href="/data/file/gic_mark/ISO 9001.zip">
			<li class="bg1">
				<p>ISO 9001 Mark</p>
			</li>
			</a>
			<a href="/data/file/gic_mark/ISO 14001.zip">
			<li class="bg2">
				<p>ISO 14001 Mark</p>
			</li>
			</a>
			<a href="/data/file/gic_mark/ISO 45001.zip">
			<li class="bg3">
				<p>ISO 45001 Mark</p>
            </li>
			</a>
			<a href="/data/file/gic_mark/ISO 13485.zip">
			<li class="bg4">
				<p>ISO 13485 Mark</p>
            </li>
			</a>	
			<a href="/data/file/gic_mark/ISO 37001.zip">
			<li class="bg5">
				<p> ISO 37001 Mark</p>
            </li>
			</a>
			<a href="/data/file/gic_mark/ISO 37301.zip">
			<li class="bg6">
				<p>ISO 37301 Mark</p>
            </li>
			</a>
			<a href="/data/file/gic_mark/ISO_IEC_27001.zip">
			<li class="bg7">
				<p>ISO/IEC 27001 Mark</p>
            </li>
			</a>			
			<a href="/data/file/gic_mark/ISO 21001.zip">
			<li class="bg8">
				<p>ISO 21001 Mark</p>
            </li>
            </a>
			<a href="/data/file/gic_mark/ISO 22000.zip">
			<li class="bg9">
				<p>ISO 22000 Mark</p>
			</li>
            </a>
		</ul>
    </section>
    <br>
    
</div> <!--------------// class="content_wrap" 종료 //--------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>