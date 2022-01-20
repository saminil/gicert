<?php
include_once('./_common.php');
$g5['title'] = 'Impartiality';
include_once(G5_THEME_PATH.'/head.php');
?>


<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    /*회사안내- 공정성 페이지 시작-YR 210616*/
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
        margin:20px 20%; 
        width:60%;
    }
    
    /*행동강령 9가지*/
    .vision_type1 ul{
        margin-top:60px;
        display:flex;
        flex-wrap:wrap;
    }
    .vision_type1 ul li{
        flex:auto;
        flex-basis: 32%;
        height:450px;
        background:#f7f7f7;
        border:1px solid #f7f7f7;
        border-radius:40px;
        margin:0 2% 20px 0;
        padding:25px 2.2%;
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
        color:#1194A8;
    }
    .act_tt span{ /*9가지 블럭 숫자*/
        display:block;
        width:45px;
        height:45px;
        border-radius:50%;
        font-size:0.95em;
        font-weight:400;
        background:#1194A8;
        color:#fff;
        text-align:center;
        line-height:45px;
        margin:0 auto 15px;
    }
    
   

/*회사안내- 공정성 페이지 종료*/

 
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
            height:470px;
        }
    }

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        .page_title img{width:20%;margin:30px 40% 0;} /*로고 이미지*/
        .vision_type1 ul{
            margin-top:50px;
            display:flex;
            flex-wrap:wrap;
        }
        .vision_type1 ul li{
            flex:auto;
            flex-basis: 60%;
            width:90%;
            height:auto;
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
            height:265px;
            margin:0 0% 25px;
            padding:25px 5%;
        }
        .vision_type1 ul li.right_box{margin-right:0%;}

    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap { font-size: 1.1em !important }
        
        .page_title img{width:20%;margin:30px 40% 0;} /*로고 이미지*/
        .sub_top_stt{margin-top:20px;}
        .sub_top_stt{font-size:2em;}
        .img_div img{/*이미지*/
            margin:20px auto; 
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
            margin:0 0% 20px;
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
        .page_title img{width:20%;margin:20px 40% 0;}
        .img_div img{/*이미지*/
            margin:0px auto; 
            width:100%;
        }
        .vision_type1 h2{
            line-height:1.7em;
        }
        .vision_type1 ul li{
            height:390px;
            line-height:1.6em;
        }
    }  
/*---------------------------------------------------------------반응형 끝*/
    
    
</style>

<div class="content_wrap animatedParent">
	<section class="page_title animated fadeInUpShort">
		 <div class="sub_top_tt">Impartiality</div>
		<div><img src="images/GIC_logo.png" alt="(주)지아이씨인증원 로고"></div><br>
	</section>
	<section class="vision_type1">
        <div class="sub_top_stt">Declaration for Impartiality</div>
        <h2>
            <span style="color:#102f45;font-weight:500; font-family: 'Noto Sans KR', sans-serif;">GIC</span> is a legal entity responsible for certification activities. GIC fully understands the importance of Impartiality in carrying out its certification activities and will ensure that all transactions with customers or prospects, employees or other personnel are kept fair.<br><br>
            To ensure impartiality is maintained and proven, GIC has established the following principles:
        </h2>
        
        <!--공정성 선언문 이미지-->
		<div class="img_div">
		   <img src="./images/impartiality_01.jpg" alt="공정성 이미지">
		</div>
        <!--------------// 공정성 선언문 15가지 //--------------->
		<ul class="clear act_box" style="height:100%;line-height:50%;">
			<li>
                <div class="act_tt"><span>01</span> Fair Certificate Issue</div>
                The GIC Certificate is issued after review by an internal, independent and authorized member to ensure that there are no impartiality hazards.
            </li>
            <li class="second_box">
                <div class="act_tt"><span>02</span> Prohibition of Consulting Service</div>
                GIC does not provide management systems consulting or any other form of consulting to organizations or individuals.
            </li>
            <li class="right_box">
                <div class="act_tt"><span>03</span> Controlling the Provision of Internal Audit Services</div>
                GIC does not provide internal audit services to organizations or individuals.
            </li >
            <li class="second_box">
                <div class="act_tt"><span>04</span> Restrictions on Ownership of Clients and Financial Companies</div>
                GIC does not own and are not interested (financial or otherwise) other companies that provide certification, management systems consulting or internal audit services.
            </li>
            <li>
                <div class="act_tt"><span>05</span> No Internal Relationship</div>
                GIC does not have any relationship with companies that provide consulting, internal audit services or other services that may be determined to affect the certification services provided by GIC.
            </li>
            <li class="right_box second_box">
                <div class="act_tt"><span>06</span> Conduct Regular Risk Assessment</div>
                Proposed relationships between GIC and other companies are subject to risk assessment by the Impartiality Committee before the relationship is formalized. Current relationships with companies, organizations and individuals are assessed on a regular basis to ensure that relationships do not affect the impartiality of the certification process.
            </li>
            <li>
                <div class="act_tt"><span>07</span> Impartiality Committee</div>
                The risk assessment is conducted by the Impartiality Committee.
            </li>
            <li class="second_box">
                <div class="act_tt"><span>08</span> Information Record and Declaration</div>
                Individuals employed or contracted with GIC must document their current and past relationships with all companies. Any situation in the past or present that could create a potential conflict of interest must be declared by the GIC.
            </li>
            <li class="right_box">
                <div class="act_tt"><span>09</span> Exclusion of Similar Business</div>
                Exclusion of Similar Business GIC does not assign employees or subcontractors who have previously been involved in auditing the management system.
            </li>
            <li class="second_box">
                <div class="act_tt"><span>10</span> Criteria of Audit Team Allocation</div>
                Audit team can be assigned to a management system audit that has not been related for at least two years.
            </li>
            <li>
                <div class="act_tt"><span>11</span> Risk Assessment</div>
                The risk assessment will be reviewed by the Impartiality Committee.
            </li>
            <li class="right_box second_box">
                <div class="act_tt"><span>12</span> Prohibition of System Establishment Education</div>
                GIC does not provide any education on system establishment.
            </li>
            <li>
                <div class="act_tt"><span>13</span> Management System Consulting Activities</div>
                GIC guarantees that there will be no sales or connections in any way related to management system consulting activities and will take appropriate action once such a relationship is identified.
            </li>
            <li class="second_box">
                <div class="act_tt"><span>14</span> Employee Monitoring</div>
                All employees are audited at least annually to ensure that they are fair when conducting audits.
            </li>
            <li class="right_box">
                <div class="act_tt"><span>15</span> Auditor Independence</div>
                Auditors and others involved in the certification process will not be subjected to any pressure and will not be affected in any way to draw special conclusions regarding the results of the audit.
            </li>
		</ul>
	</section>	
	
</div>    <!--------------// class="content_wrap" 종료 //--------------->

<?php
include_once(G5_THEME_PATH.'/tail.php');
?>