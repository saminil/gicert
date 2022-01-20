<?php
include_once('./_common.php');
$g5['title'] = 'Code of conduct';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    
/*회사안내- 행동강령 페이지 시작-YR 210615*/
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
    /*로고이미지*/
    .page_title img{width:15%;margin:30px 42.5% 0;}
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
        padding-bottom:40px;
        margin-top:40px;
    }
    .sub_top_stt:after { /*밑줄선*/
        content: "";
        clear: both;
        display: block;
        width: 30px;
        margin: 40px auto 0;
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
    .img_div img{/*이미지*/
        margin:60px 20% 40px; 
        width:60%;
    }

    /*행동강령 9가지*/
    .vision_type1 ul{
        margin-top:50px;
        display:flex;
        flex-wrap:wrap;
    }
    .vision_type1 ul li{
        flex:auto;
        flex-basis: 32%;
        height:295px;
        background:#f7f7f7;
        border:1px solid #f7f7f7;
        border-radius:40px;
        margin:0 2% 20px 0;
        padding:25px 2.5%;
        text-align:center;
        line-height:1.6em;
        color:#333;
        font-weight:400;
        font-size:0.95em;
        box-sizing: border-box;
        letter-spacing:-0.02em;
    }
    .vision_type1 ul li.right_box{
        margin-right:0;
    }
    .vision_type1 ul .second_box{
        background:#fff;
        border:1px solid #f0f0f0;
        box-sizing:border-box;
    }
    .act_tt{
        text-align:center;
        font-weight:400;
        font-size:1.2em;
        line-height:1.3em;
        margin-bottom:15px;
        color:#f89834;
    }
    .act_tt span{ /*9가지 블럭 숫자*/
        display:block;
        width:45px;
        height:45px;
        border-radius:50%;
        font-size:0.95em;
        font-weight:400;
        background:#f89834;
        color:#fff;
        text-align:center;
        line-height:45px;
        margin:0 auto 15px;
    }
    
   

/*회사안내- 행동강령 페이지 종료*/
    

    
/* -----------------------------------------------------반응형 시작 -210622 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {
        .vision_type1 ul{
            margin-top:50px;
            display:flex;
            flex-wrap:wrap;
        }
        .vision_type1 ul li{
            flex:auto;
            flex-basis: 32%;
            height:310px;
        }
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        .page_title img{width:20%;margin:30px 40% 0;}
        .vision_type1 ul{
            margin-top:50px;
            display:flex;
            flex-wrap:wrap;
        }
        .vision_type1 ul li{
            flex:auto;
            flex-basis: 60%;
            width:90%;
            height:210px;
            margin:0 5% 20px 5%;
            padding:25px 5%;
        }
        .vision_type1 ul li.right_box{margin-right:5%;}
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .sub_top_tt{display:none;} /*탭메뉴와 중복되어서 안보이게함*/
        .page_title img{width:20%;margin:30px 40% 0;} /*로고 이미지*/
        .vision_type1 ul{
            margin-top:50px;
            display:flex;
            flex-wrap:wrap;
        }
        .vision_type1 ul li{
            flex:auto;
            flex-basis: 60%;
            width:100%;
            height:200px;
            margin:0 0% 25px;
            padding:25px 5%;
        }
        .vision_type1 ul li.right_box{margin-right:0%;}
         /*우리가 제공하는 관련 서비스 li 일렬로 정렬*/

    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap { font-size: 1.1em !important }
        
        .page_title img{width:20%;margin:20px 40% 0;} /*로고 이미지*/
        .sub_top_stt{margin-top:20px;}
        .sub_top_stt{font-size:1.6em;}
        .img_div img{/*이미지*/
            margin:40px auto 20px; 
            width:100%;
        }
        .vision_type1 ul{
            margin-top:50px;
            display:flex;
            flex-wrap:wrap;
        }
        .vision_type1 ul li{
            flex:auto;
            flex-basis: 60%;
            width:100%;
            height:auto;
            margin:0 0 20px;
            padding:25px 6%;
        }
        .act_tt span{ /*9가지 블럭 숫자*/
            width: 40px;
            height: 40px;
            line-height:40px;
            margin:0 auto 10px;
        }
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) {  
        .page_title img{width:20%;margin:20px 40% 0;} /*로고 이미지*/
        .img_div img{/*이미지*/
            margin:30px auto 0px; 
            width:100%;
        }
        .vision_type1 h2{
            line-height:1.7em;
        }
        .vision_type1 ul li{
            height:250px;
            line-height:1.6em;
        }
    }  
/*---------------------------------------------------------------반응형 끝*/



</style>

<div class="content_wrap animatedParent">
	<section class="page_title animated fadeInUpShort">
        <div class="sub_top_tt">Code of conduct</div>
		<div><img src="images/GIC_logo.png" alt="(주)지아이씨인증원 로고"></div><br>
	</section>
	<section class="vision_type1">
        <div class="sub_top_stt">Goals and Core Values of GIC</div>
        <h2>
            <span style="color:#102f45;font-weight:500;">GIC </span>seeks a quicker and more reliable approach in the ever-changing global industrial field, strives for continuous improvement for product development and productivity improvement, and contributes to the successful global business of customers through quality innovation and improvement of production capacity.
        </h2>
        
        <!--행동강령 이미지-->
		<div class="img_div"><img src="./images/code_of_conduct_eng.png" alt="행동강령 이미지"></div>
        
        <!--------------// 행동강령 9가지 //--------------->
		<ul class="clear act_box" style="height:100%;line-height:50%;">
            <li>
                <div class="act_tt"><span>01</span> Fair Professional Audit Expert</div>
                We conduct our activities in a professional, accurate and fair manner. We always apply our best expertise and judgment to Audit.
            </li>
            <li class="second_box">
                <div class="act_tt"><span>02</span> Professional Competency Development</div>
                All auditors continually develop their professional competencies and are in excellent condition for correct auditing.
            </li>
            <li class="right_box">
                <div class="act_tt"><span>03</span> Conflicts of Interest Avoidance</div>
                Avoid employment or transfers in conflict of interest.
            </li >
            <li class="second_box">
                <div class="act_tt"><span>04</span> Regulatory Compliance</div>
                We do not act in an illegal manner to the detriment of the reputation, interests and reputation of the certification body.
            </li>
            <li>
                <div class="act_tt"><span>05</span> Customer Information Security</div>
                We will not disclose the results, information, or parts of the review process, unless approved in writing by the respondent and the auditing body.
            </li>
            <li class="right_box second_box">
                <div class="act_tt"><span>06</span> Prohibition of Giving and Receiving Money</div>
                No commissions, gifts or other benefits are received from the audited organization, employees or other stakeholders.
            </li>
            <li>
                <div class="act_tt"><span>07</span> Integrity of Information</div>
                We do not knowingly convey false or manipulated information that could compromise the integrity of the audit or audit process.
            </li>
            <li class="second_box">
                <div class="act_tt"><span>08</span> Customer Satisfaction</div>
                We do not post or convey unreasonable or unreasonable criticism of the audited organization.
            </li>
            <li class="right_box">
                <div class="act_tt"><span>09</span> Cooperation Obligation</div>
                We must not violate this Code of Conduct and cooperate fully with any formal investigation of any suspected violation of this Code.
            </li>
		</ul>
	</section>	
	
   
</div>  <!--------------// class="content_wrap" 종료 //--------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>