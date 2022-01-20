<?php
include_once('./_common.php');
$g5['title'] = '사이트맵';
include_once(G5_THEME_PATH.'/head.php');
?>

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:100,300,400,500,700,900&display=swap&subset=korean" rel="stylesheet">

<style>
    /*자료실-사이트맵 페이지 시작-YR 210616*/
    .content_wrap { /* 서브페이지 전체 레이아웃 */
        width:100%; 
        max-width:1200px;
        margin:0 auto; 
        font-size: 1.2em !important;
        font-weight: 400;
        line-height: 1.5 
    }
     .sub_top_tt{
        color:#0A4F81;
        text-align:center;
        font-size:1.6em;
        font-weight:600;
        border:2px solid #f0f0f0;
        padding:22px 0;
        margin-bottom:20px;
    }
    .swipe{display:none;}
    .sitemap1>span{ /*메뉴클릭시 이동한다는 안내메세지*/
        font-size:0.9em;
        font-weight:400;
        height:40px;
        line-height:40px;
        display:block;
        text-align:right;
        color:#b2c511;
    }
    .sitemap1 .material-icons{
        vertical-align:middle;
        font-size:1em;
        padding-right:4px;
    }
    /*테이블 시작*/
    table{
        width:100%;
        min-width:250px;
        margin-top:5px;
    }
    th,td{
        border: 1px solid #444; 
        font-size:0.8em;
        padding:5px;
        margin-top:-10px;
        transition:all 0.2s; /* 210618 전산팀 yr*/
    }
    table tr{
        height:40px;
        color:#333;
        font-weight:400;
    }
    table a{transition:all 0.2s;} /* 210618 전산팀 yr*/
    table td:hover{background:#5f98de;}
    table td:hover a{color:#fff;}
    .table_tt, .table_tt_2{ /*상단 주메뉴 제목*/
        text-align:center;
        font-weight:500;
        font-size:1em;
        background:#85b8ec;
        height:45px; 
    }
    .table_tt a, .table_tt_2 a{color:#fff !important;}
    .table_tt a:visited, .table_tt_2 a:visited{color:#fff !important;}
    .table_tt_2{height:40px;}
    .menu_2depth{
        font-weight:400;
        color:#222;
        font-size:0.85em;
        background:#f7f7f7;
    }
    .empty_block:hover{
        background:#fff;
    }
/*    .last_row{border-right:none;}*/
    

/*자료실-사이트맵 페이지 종료*/


    
    /* -----------------------------------------------------반응형 시작 -210622 yr*/   
    
    /* 놋북,태블릿 사이즈, 최대 1280px 화소까지 적용 */
    @media (max-width:1280px) {}

    
    /* 최대 1024px 화소까지 적용 */
    @media (max-width:1024px) {
        .sitemap1{overflow-x:scroll;}
        th,td{padding:5px 0.4%; min-width: 90px;}
        /*테이블 시작*/
        table{
            margin-top:5px;
            word-break: keep-all;
        }
        .table_tt, .table_tt_2{ /*상단 주메뉴 제목*/
            font-size:0.95em;
        }
        .menu_2depth{
            font-size:0.85em;
        }   
    }
    

    /*  최대 768px 화소까지 적용 */
    @media only screen and (max-device-width : 768px) and (-webkit-min-device-pixel-ratio: 1) {
        .sub_top_tt{display:none;} /*탭메뉴와 중복되어서 안보이게함*/
        
         th,td{
             padding:5px 0.5%;
        }
    }


    /* 모바일(가장 작은 사이즈: SAMSUNG GALAXY S6) 가로 버전 사이즈, 최소 360px ~ 최대 640px(가로로 볼때) 화소까지 적용 */    
    @media all and (max-device-width : 640px) { 
        .content_wrap{overflow-x:scroll;} /*table 흘러 넘칠때 컨텐츠 부분만 스크롤 가능하도록 변경*/
        .swipe{
            display:block;
            color:#2e78e6;
            text-align:right;
            height:15px;
            font-size:0.8rem;
        }
        .sitemap1>span{ /*메뉴클릭시 이동한다는 안내메세지*/
            font-size:0.75em;
        }
        th,td{
            padding:5px 0.8%;
            font-size:0.75em;
        }
        /*테이블 시작*/
        table{
            margin-top:5px;
            word-break: keep-all;
        }
        .table_tt, .table_tt_2{ /*상단 주메뉴 제목*/
            font-size:0.85em;
        }
        .menu_2depth{
            font-size:0.8em;
        }
    }


    /* 모바일(가장 큰 사이즈: iPhone 6/7/8 Plus) 세로 버전 사이즈, 최소 360px ~ 최대 414px 화소까지 적용 */
    @media all and (min-width:360px) and (max-device-width : 414px) {  
        .sitemap1>span{ /*메뉴클릭시 이동한다는 안내메세지*/
            font-size:0.6em;
        }
        th,td{
            font-size:0.7em;
            min-width: 80px;
            border:1px solid #ddd;
        }
        .sitemap1 .material-icons{
            font-size:0.6em;
        }
        /*테이블 시작*/
        table{
/*            overflow-x:scroll;*/
            margin-top:5px;
            word-break: keep-all;
        }

    }  
    
/*---------------------------------------------------------------반응형 끝*/
</style>

<div class="content_wrap">
    
    <section class="vision_type1">
        <img src="./images/eng_references_banner_06.png" alt="사이트맵 배너"><br><br>
        <div class="sub_top_tt">Sitemap</div> 
        <div class="sitemap1">
            <div class="swipe"><span class="material-icons">swipe</span>Swipe&nbsp;</div>
             <span><span class="material-icons">open_in_new</span>If you click the menu, you can move to detail information.</span>
             
                <table cellspacing="0" cellpadding="0">
                    <col width="170" span="7">
                    <tr>
                        <td class="table_tt"><a href="../company/introduce.php">About us</a></td>
                        <td class="table_tt" colspan="3"><a href="../service/01_system.php">Services</a></td>
                        <td class="table_tt"><a href="/bbs/board.php?bo_table=introduce_en">References</a></td>
                        <td class="table_tt"><a href="/bbs/board.php?bo_table=notification_en">News</a></td>
                        <td class="table_tt last_row"><a href="/bbs/board.php?bo_table=gallery_en">Recruitment</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/introduce.php">Introduction</a></td>
                        <td class="menu_2depth" rowspan="24" ><a href="../service/01_system.php">System Certification</a></td>
                        <td><a href="../service/01_system.php">Quality</a></td>
                        <td><a href="../service/01_system.php">ISO 9001</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=introduce_en">Publication</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=notification_en">GIC News</a></td>
                        <td class="menu_2depth last_row"><a href="/bbs/board.php?bo_table=gallery_en">Recruitment</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/code_of_conduct.php">Code of conduct</a></td>
                        <td><a href="../service/01_system.php">Environment</a></td>
                        <td><a href="../service/01_system.php">ISO 14001</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=gicglobal_en">Partners</a></td>
                        <td class="menu_2depth"><a href="/bbs/board.php?bo_table=free_en">Certification Information</a></td>
                        <td rowspan="111" class="empty_block last_row"></td> <!--인재채용 공백-->
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/impartiality.php">Impartiality</a></td>
                        <td><a href="../service/01_system.php">Health &amp; Safety</a></td>
                        <td><a href="../service/01_system.php">ISO 45001</a></td>
                        <td class="menu_2depth"><a href="../info/process1_system.php">System Procedure</a></td>
                        <td rowspan="14" class="empty_block"></td> <!--주요뉴스 공백-->
                    </tr>
                     <tr>
                        <td class="menu_2depth"><a href="../company/logo.php">CI &amp; Mark</a></td>
                        <td rowspan="3"><a href="../service/01_system.php">Medical Device</a></td>
                        <td><a href="../service/01_system.php">ISO 13485</a></td>
                        <td class="menu_2depth"><a href="../info/process2_product.php">Product Procedure</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/appeal.php">Appeal</a></td>
                        <td><a href="../service/01_system.php">ISO 15378</a></td>
                        <td class="menu_2depth"><a href="../info/sitemap.php">Sitemap</a></td>
                    </tr>
                    <tr>
                        <td class="menu_2depth"><a href="../company/location.php">Location</a></td>
                        <td><a href="../service/01_system.php#con4-3">ISO 14155</a></td>
                        <td rowspan="107" class="empty_block"></td> <!--자료실 공백-->
                    </tr>
                    <tr>
                        <td rowspan="106" class="empty_block"></td> <!--회사안내 공백-->
                        <td rowspan="4"><a href="../service/01_system.php">Food</a></td>
                        <td><a href="../service/01_system.php">ISO 22000</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">FSSC 22000</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">FDA FSMA</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Global HACCP</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Energy</a></td>
                        <td><a href="../service/01_system.php">ISO 50001</a></td>
                    </tr>
                    <tr>
                        <td rowspan="3"><a href="../service/01_system.php">Information Security</a></td>
                        <td><a href="../service/01_system.php">ISO/IEC 27001</a></td>
                    </tr>
                    <tr>
                       <td><a href="../service/01_system.php">ISO/IEC 27701</a></td> 
                    </tr>
                     <tr>
                       <td><a href="../service/01_system.php">ISO/IEC 20001-1</a></td> 
                    </tr>
                    <tr>
                        <td rowspan="2"><a href="../service/01_system.php">Anti-Bribery</a></td>
                        <td><a href="../service/01_system.php">ISO 37001</a></td>
                    </tr>
                    <tr>
                       <td><a href="../service/01_system.php">ISO 37301</a></td> 
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Education</a></td>
                        <td><a href="../service/01_system.php">ISO 21001</a></td>
                        <td class="table_tt_2"><a href="../info/sitemap.php">Others</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Business Continuity</a></td>
                        <td><a href="../service/01_system.php">ISO 22301</a></td>
                        <td><a href="/bbs/content.php?co_id=privacy_en">Privacy Policy</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Event Sustainability</a></td>
                        <td><a href="../service/01_system.php">ISO 20121</a></td>
                        <td><a href="/bbs/content.php?co_id=provision_en">Terms and Condition of Service</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Cosmetic</a></td>
                        <td><a href="../service/01_system.php">ISO 22716</a></td>
                        <td><a href="/bbs/qalist.php">1:1 Counseling</a></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><a href="../service/01_system.php">Customer Satisfaction</a></td>
                        <td><a href="../service/01_system.php">ISO 10002</a></td>
                        <td><a href="/bbs/search.php?sfl=wr_subject%7C%7Cwr_content&sop=and&stx=">Searching</a></td>
                    </tr>
                    <tr>
                       <td><a href="../service/01_system.php">ISO 10004</a></td>
                        <td width="168"><a href="/bbs/register.php">New Account</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Facility Management</a></td>
                        <td><a href="../service/01_system.php">ISO 41001</a></td>
                        <td width="168"><a href="/bbs/login.php">Login</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/01_system.php">Supply Chain</a></td>
                        <td><a href="../service/01_system.php">ISO 28000</a></td>
                        <td></td> 
                    </tr>
                    
                    <!--제공서비스 제품인증-->
                    <tr>
                        <td class="menu_2depth" rowspan="34"><a href="../service/02_product.php">Product Certification</a></td>
                        <td rowspan="10"><a href="../service/02_product.php">Europe</a></td>
                        <td><a href="../service/02_product.php">CE MDD</a></td>
                        <td class="table_tt_2"><a href="https://gicertorg.cafe24.com/gicert_kor/"><strong>Korean Homepage</strong></a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/02_product.php">CE MDR</a></td>
                        <td rowspan="87" class="empty_block"></td> <!--주요뉴스 공백-->
                    </tr>
                    <tr><td><a href="../service/02_product.php">Clinical Evaluation</a></td></tr>
                    <tr><td><a href="../service/02_product.php">CE IVD/IVDR</a></td></tr>
                    <tr><td><a href="../service/02_product.php">CE LVD/EMC</a></td></tr>
                    <tr><td><a href="../service/02_product.php">CE Machinery</a></td></tr>
                    <tr><td><a href="../service/02_product.php">CE PED</a></td></tr>
                    <tr><td><a href="../service/02_product.php">CE SPVD</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Hot-water Boiler</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Gas Appliance</a></td></tr>
                    <tr>
                        <td rowspan="5"><a href="../service/02_product.php">Eurasia</a></td>
                        <td><a href="../service/02_product.php">EAC Certification</a></td>
                    </tr>
                     <tr><td><a href="../service/02_product.php">Medical Device</a></td></tr>
                     <tr><td><a href="../service/02_product.php">Food</a></td></tr>
                     <tr><td><a href="../service/02_product.php">Cosmetic</a></td></tr>
                     <tr><td><a href="../service/02_product.php">Medicine</a></td></tr>
                    <tr>
                        <td rowspan="2"><a href="../service/02_product.php">Russia</a></td>
                        <td><a href="../service/02_product.php">GOST-R</a></td>
                    </tr>
                    <tr><td><a href="../service/02_product.php">Medical Device Registration</a></td></tr>
                    <tr>
                        <td rowspan="7"><a href="../service/02_product.php">America</a></td>
                        <td><a href="../service/02_product.php">FDA</a></td>
                    </tr>
                    <tr><td><a href="../service/02_product.php">Medical Device</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Electronic and Radiation Machine</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Medicine</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Food and Beverage</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Dietary Food</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Cosmetic</a></td></tr>
                    <tr>
                        <td rowspan="2"><a href="../service/02_product.php">China</a></td>
                        <td><a href="../service/02_product.php">CFDA</a></td>
                    </tr>
                    <tr><td><a href="../service/02_product.php">Food Sanitation Registration</a></td></tr>
                    <tr>
                        <td rowspan="2"><a href="../service/02_product.php">Southeast</a></td>
                        <td><a href="../service/02_product.php">Thailand Medical Device Registration</a></td>
                    </tr>
                    <tr><td><a href="../service/02_product.php">Taiwan Medical Device Registration</a></td></tr>
                    <tr>
                        <td rowspan="3"><a href="../service/02_product.php">Vegan and Non-GMO</a></td>
                        <td><a href="../service/02_product.php">GIC Vegan</a></td>
                    </tr>
                    <tr><td><a href="../service/02_product.php">Non-GMO</a></td></tr>
                    <tr><td><a href="../service/02_product.php">Vegan Society Introduction</a></td></tr>
                    <tr>
                        <td><a href="../service/02_product.php">HALAL</a></td>
                        <td><a href="../service/02_product.php">HALAL</a></td>
                    <tr>
                        <td rowspan="2"><a href="../service/02_product.php">Cosmetic</a></td>
                        <td><a href="../service/02_product.php">EWG</a></td>
                    </tr>
                    <tr><td><a href="../service/02_product.php">CPNP</a></td></tr>
                    
                    <!--제공서비스 시험-->
                    <tr>
                        <td class="menu_2depth" rowspan="7"><a href="../service/03_testing.php">Testing</a></td>
                        <td><a href="../service/03_testing.php">Medical Device</a></td>
                        <td><a href="../service/03_testing.php">Medical Device Test</a></td>
                    </tr>
                     <tr>
                        <td><a href="../service/03_testing.php">Machinery</a></td>
                        <td><a href="../service/03_testing.php">Machinery Safety</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/03_testing.php">Electrical Testing</a></td>
                        <td><a href="../service/03_testing.php">Electrical Safety</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/03_testing.php">Building Materials</a></td>
                        <td><a href="../service/03_testing.php">Building Materials Certification</a></td>
                    </tr>
                    <tr>
                        <td rowspan="2"><a href="../service/03_testing.php">Biological Test</a></td>
                        <td><a href="../service/03_testing.php">Food Biological Test</a></td>
                    </tr>
                    <tr><td><a href="../service/03_testing.php">Sanitation Test</a></td></tr>
                    <tr>
                        <td><a href="../service/03_testing.php">Chemical Analysis</a></td>
                        <td><a href="../service/03_testing.php">Food Nutrition Analysis</a></td>
                    </tr>
                    
                    <!--제공서비스 교육-->
                    <tr>
                        <td class="menu_2depth" rowspan="32"><a href="../service/04_edu.php">Education</a></td>
                        <td><a href="../service/04_edu.php">Quality</a></td>
                        <td><a href="../service/04_edu.php">ISO 9001</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/04_edu.php">Environment</a></td>
                        <td><a href="../service/04_edu.php">ISO 14001</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/04_edu.php">Health &amp; Safety</a></td>
                        <td><a href="../service/04_edu.php">ISO 45001</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/04_edu.php">Medical Device</a></td>
                        <td><a href="../service/04_edu.php">ISO 13485</a></td>
                    </tr>
                    <tr>
                        <td rowspan="4"><a href="../service/04_edu.php">Food</a></td>
                        <td><a href="../service/04_edu.php">ISO 22000</a></td>
                    </tr>
                    <tr><td><a href="../service/04_edu.php">FSSC 22000</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">FDA FSMA</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">PCQI</a></td></tr>
                    <tr>
                        <td rowspan="9"><a href="../service/04_edu.php">Information Security</a></td>
                        <td><a href="../service/04_edu.php">ISO/IEC 20000-1</a></td>
                    </tr>
                    <tr><td><a href="../service/04_edu.php">ISO/IEC 27001</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO/IEC 27002</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO/IEC 27005</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO/IEC 27032</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO/IEC 27035-1</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO 27799</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO/IEC 29100</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO/IEC 38500</a></td></tr>
                    <tr>
                        <td><a href="../service/04_edu.php">Risk Management</a></td>
                        <td><a href="../service/04_edu.php">ISO 31000</a></td>
                    </tr>
                    <tr>
                        <td rowspan="3"><a href="../service/04_edu.php">Transportation &amp; Energy</a></td>
                        <td><a href="../service/04_edu.php">ISO 29001</a></td>
                    </tr>
                    <tr><td><a href="../service/04_edu.php">ISO 39001</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO 50001</a></td></tr>
                    <tr>
                        <td rowspan="4"><a href="../service/04_edu.php">Continuity &amp; Resilience</a></td>
                        <td><a href="../service/04_edu.php">ISO 22301</a></td>
                    </tr>
                    <tr><td><a href="../service/04_edu.php">ISO 22316</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO/TS 22317</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO 22320</a></td></tr>
                    <tr>
                        <td rowspan="4"><a href="../service/04_edu.php">Business Management</a></td>
                        <td><a href="../service/04_edu.php">ISO 13053</a></td>
                    </tr>
                    <tr><td><a href="../service/04_edu.php">ISO 21500</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO 30301</a></td></tr>
                    <tr><td><a href="../service/04_edu.php">ISO 55001</a></td></tr>
                    <tr>
                        <td rowspan="2"><a href="../service/04_edu.php">Social accountability &amp; Bribery management</a></td>
                        <td><a href="../service/04_edu.php">ISO 26000</a></td>
                    </tr>
                    <tr><td><a href="../service/04_edu.php">ISO 37001</a></td></tr>
                    <tr>
                        <td><a href="../service/04_edu.php">Testing &amp; Calibration</a></td>
                        <td><a href="../service/04_edu.php">ISO/IEC 17025</a></td>
                    </tr>
                    
                    <!--제공서비스 심사원인증-->
                    <tr>
                        <td class="menu_2depth" rowspan="12"><a href="../service/05_aduits.php">Auditor Certification</a></td>
                        <td rowspan="4"><a href="../service/05_aduits.php">Part 1</a></td>
                        <td><a href="../service/05_aduits.php">ISO 9001</a></td>
                    </tr>
                    <tr><td><a href="../service/05_aduits.php">ISO 14001</a></td></tr>
                    <tr><td><a href="../service/05_aduits.php">ISO 13485</a></td></tr>
                    <tr><td><a href="../service/05_aduits.php">ISO 45001</a></td></tr>
                    <tr>
                        <td rowspan="4"><a href="../service/05_aduits.php">Part 2</a></td>
                        <td><a href="../service/05_aduits.php">ISO/IEC 20000-1</a></td>
                    </tr>
                    <tr><td><a href="../service/05_aduits.php">ISO/IEC 27001</a></td></tr>
                    <tr><td><a href="../service/05_aduits.php">ISO 22716</a></td></tr>
                    <tr><td><a href="../service/05_aduits.php">ISO 50001</a></td></tr>
                    <tr>
                        <td rowspan="4"><a href="../service/05_aduits.php">Part 3</a></td>
                        <td><a href="../service/05_aduits.php">ISO 22000</a></td>
                    </tr>
                    <tr><td><a href="../service/05_aduits.php">FSSC 22000</a></td></tr>
                    <tr><td><a href="../service/05_aduits.php">FDA FSMA</a></td></tr>
                    <tr><td><a href="../service/05_aduits.php">PCQI</a></td></tr>
                    
                    <!--제공서비스 연수기관-->
                    <tr>
                        <td class="menu_2depth" rowspan="3"><a href="../service/06_global.php">Training Institution</a></td>
                        <td><a href="../service/06_global.php">Overview</a></td>
                        <td rowspan="3" class="empty_block"></td> <!--연수기관 공백-->
                    </tr>
                    <tr>
                        <td><a href="../service/06_global.php">Procedure of Training Institute Designation</a></td>
                    </tr>
                    <tr>
                        <td><a href="../service/06_global.php">Training Institute invigilator</a></td>
                    </tr>
      
                </table>
        </div>
	</section>	 <!---------------------// class="vision_type1" 종료//---------------------------->


</div> 	<!---------------------// class="content_wrap" 종료//---------------------------->


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>