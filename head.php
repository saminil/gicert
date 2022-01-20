<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="logo_dna">
    <div class="wrap">
        <a href="<?php echo G5_URL ?>" class="logo s_mobile_no"><img src="<?php echo G5_THEME_URL ?>/img/ci_img_log.png" alt="GIC Global Inter Certification"></a>
        <div id="telnum" class="s_mobile_none">
            <!--<p>
                <span class="material-icons" style="color:#5878a8;">ring_volume</span>&nbsp;
                <a href="tel:+82 2 6749-1185" title="전화상담 하기" style="letter-spacing: -.7px">전화상담 : +82 2 6749-1185</a>
            </p>-->
            <p>
                <span class="material-icons" style="color:#5878a8;vertical-align:middle;">forward_to_inbox</span>&nbsp;
                <a href="mailto: info@gicert.org" title="send email" style=" vertical-align:middle;" class="gic_email">E-mail : info@gicert.org</a>
            </p>
        </div>
    </div>
</div>

<header id="header">
   
    <div class="dimmed"></div>
	<div class="wrap">
	
		<?php
		if(defined('_INDEX_')) { // index에서만 실행
			include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
		}
		?>
		<?php if(defined('_INDEX_')) { ?>
<!--		<div class="pc_ci pc_only">-->
<!--          <a href="/" title="메인으로"><img src="<!---?php echo G5_THEME_URL ?>/img/ci_img_log.png" alt="logo" class="logo" /></a>-->
<!--
			<div class=logo_link_t_einglish>
              <h3 class="logo_link_tt_einglish_h3"> 
			    <span>Dream <br>with IGC</span>
			  </h3>
          <hr class="hr01">
			  <h3 class="logo_link_t_einglish_h3"> 
			    <span style="padding:5px;"><a href="/igc_eng/" style="color:black;">English</a></span>
                  <span style="padding:5px;"><a href="#" style="color:black;">中國語</a></span>
			  </h3>
			</div>
			<a href="http://www.igcert.net" target="_blank"><img src="<!---?php echo G5_THEME_URL ?>/img/ci_inquiry.png" alt="이전 홈페이지 보기" /></a>
			<a href="#certification_search" style="display:inline-block;margin-top:0px;"><img src="<!---?php echo G5_THEME_URL ?>/img/ci_location.png" alt="인증서 검색" /></a>
-->
<!--		</div>-->
		<? } ?>
		
		<nav class="user pc_only">
		    <a href="javascript:" class="user_menu" title="User menu"><i class="fa fa-user-o" aria-hidden="true"></i></a>
			<ul>
				<?php if ($is_member) {  ?>
				<li><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php" class="myPage">
				    My page</a>
                </li>
				<li><a href="<?php echo G5_BBS_URL ?>/logout.php" class="logOut">
		            Log Out</a>
                </li>				
				<?php } else {  ?>				
				<li><a href="<?php echo G5_BBS_URL ?>/login.php" class="logIn">
		            Log In</a>
                </li>
				<li><a href="<?php echo G5_BBS_URL ?>/register.php" class="signUp">
				    Sign In</a>
                </li>
				<?php }  ?>
				<?php if ($is_admin) {  ?>
				<li><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>" target="_blank" class="admin">Admin</a></li>
				<?php }  ?>
			</ul>
		</nav>
		
		<div class="util pc_only">
		    <a href="<? Echo G5_URL ?>/gicert_kor/" class="eng" title="한국어사이트/To Korean"><strong class="e_btn"><img src="/theme/gicertorg/img/btn_kr.png" alt="한국어사이트/To Korean">한국어</strong></a>
		    <a href="javascript:" class="search" title="Search">
		        <i class="fa fa-search" aria-hidden="true"></i><strong class="btn_search">Search</strong>
            </a>
		</div>
		
		<!-----------sns버튼===>pc에서만 보여짐, 51라인 ~ 53라인)---------->
		<!--<nav class="sns mobile_no">
			<ul>
				<li><a id="channel-chat-button" href="http://pf.kakao.com/_MdxlzK/chat" onclick="void chatChannel();">카카오톡</a></li>
				<li><a href="javascript:">English</a></li>
				<li><a href="javascript:">유튜브</a></li> 
			</ul>
		</nav>-->
		
		<div class="m_util_wrap">
            <h1 class="m_logo"><a href="<?php echo G5_URL ?>" class="s_mobile_only"></a></h1>
            <a href="<?php echo G5_BBS_URL ?>/login.php" class="btn_user mobile_only" title="회원메뉴"><i class="fa fa-user-o" aria-hidden="true"></i></a> 
            <a href="javascript:" class="btn_search mobile_only" title="검색"><i class="fa fa-search" aria-hidden="true"></i></a>
            <a href="javascript:" class="btn_gnb mobile_only" title="모바일 메뉴 열기/닫기"><i class="fa fa-bars" aria-hidden="true"></i></a>
            <a href="<? Echo G5_URL ?>/gicert_kor/" class="btn_eng mobile_only" title="한국어사이트/To Korean"><strong class="e_btn"><img src="/theme/gicertorg/img/btn_kr.png" alt="한국어사이트/To Korean"></strong></a>
            <!--<a href="tel:+82 2 6749-1161" title="전화상담 하기" class="btn_tel s_mobile_only">전화상담 : <span>+82 2 6749-1161</span></a>-->
            <!--<a href="mailto: info@dna-tec.org" title="이메일 보내기" class="btn_mail s_mobile_only">이메일보내기</a>-->
        </div>
        
		<nav class="gnb">
		    <div class="btn_bg"></div>
			<ul>
				 <?php
				$menu_datas = get_menu_db(0, true);
				$cur_url = $_SERVER['REQUEST_URI'];          
				$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                $i = 0; 		
				foreach( $menu_datas as $row ){
				?>
				
				<li class="depth1 <?php echo ($row['me_link']==$cur_url)?'on':''; ?>">
					<a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
					<i class="fa fa-chevron-down mobile_only" aria-hidden="true"></i>
					<?php
					$k = 0;
					foreach( (array) $row['sub'] as $row2 ){
						if($k == 0)
							echo '<ul>'.PHP_EOL;
					?>
						<li class="depth2"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
					<?php
					$k++;
					}   //end foreach $row2

					if($k > 0)
						echo '</ul>'.PHP_EOL;
					?>
				</li>
				<?php
				$i++;
				}   //end foreach $row

				if ($i == 0) {  ?>
				<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
				<?php } ?>
			</ul>
			<!-----------sns버튼===>mobile에서만 보여짐(98라인 ~ 100라인)---------->
			<nav class="sns mobile_only">
				<ul>	

					<!--<li><a id="channel-chat-button" href="http://pf.kakao.com/_MdxlzK/chat" onclick="void chatChannel();">카카오</a></li>-->
<!--
					<li><a href="javascript:">인스타</a></li>
					<li><a href="javascript:">유튜브</a></li>
-->
                    <!--<div> <a href="/igc_eng/">To English Website</a> </div>-->
				</ul>
			</nav>
		</nav>
	</div>	
	
	<!--영문 페이지로 가기>
    <!--<div class="english_home"><a href="/" target="_blank">ENGLISH SITE</a></div>-->
    <!--<button class="button_001" type="button" onclick="location.href='/igc_eng/'"><span class="to_korean">ENGLISH</span></button>-->
	

</header>
   

	
    
<script type="text/javascript">
 // 웹 플랫폼 도메인 등 초기화한 앱의 설정이 그대로 적용됩니다.
 // 초기화한 앱에 현재 도메인이 등록되지 않은 경우 에러가 발생합니다.
// Kakao.init('c6dc22add6c016f2d3fa010aeb61d509') //'YOUR APP KEY===> 네이티브 앱 키: Android, iOS SDK에서 API를 호출할 때 사용===>적용함'
 function chatChannel() {
   Kakao.Channel.chat({
	 channelPublicId: '_MdxlzK',
   })
 }
</script>

<div class="hd_sch_wr">
	<div class="box">
		<header>
			<h2 style="display:inline;padding-top:5px;">Search in Boards</h2>
			<a href="javascript:" class="btn_close" title="닫기"><img src="<?php echo G5_THEME_URL ?>/img/btn_close.png" alt=" " /></a>
		</header>
		<fieldset id="hd_sch">
			<legend>사이트 게시판 전체검색</legend>
			<form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
			<input type="hidden" name="sfl" value="wr_subject||wr_content">
			<input type="hidden" name="sop" value="and">
			<label for="sch_stx" class="sound_only">검색어 필수</label>
			<input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="Please enter a search term">
			<button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
			</form>
	
			<script>
			function fsearchbox_submit(f)
			{
				if (f.stx.value.length < 2) {
					alert("검색어는 두글자 이상 입력하십시오.");
					f.stx.select();
					f.stx.focus();
					return false;
				}
	
				// 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
				var cnt = 0;
				for (var i=0; i<f.stx.value.length; i++) {
					if (f.stx.value.charAt(i) == ' ')
						cnt++;
				}
	
				if (cnt > 1) {
					alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
					f.stx.select();
					f.stx.focus();
					return false;
				}
	
				return true;
			}
			</script>
	
		</fieldset>
	</div>
	<div class="bo_sch_bg"></div>
</div>
     
<script>
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ? true : false;
$(function(){
    /* ===== pc, 태블릿 버전 ===== */
	if(!isMobile){
         /* header depth1에 마우스오버시 header gnb.down 클래스 추가 */
		$("#header .depth1").on("mouseover", function(){
			$("#header").stop().addClass('down');
		});
        /* header depth1에 마우스리브시 header gnb.down 클래스 제거 */
		$("#header").on("mouseleave", function(){
			$("#header").stop().removeClass('down');
		});
        
         /* 유틸리티 회원메뉴 클릭시 header gnb.down 추가 20210608 책임자: 이혜정 */
        $("#header .user .user_menu").on("click", function(){
            $("#header").toggleClass('down');
        });
        /* 유틸리티 검색 클릭시 팝업창(검색창) 생성 */
        $(".search").on("click", function(){
            $(".hd_sch_wr").addClass('on');
        });
        /* 팝업창(검색창)의 클로즈 버튼 활성화 */
        $(".hd_sch_wr .btn_close").on("click", function(){
            $(".hd_sch_wr").removeClass('on');
        });
	};
    
    /* ===== 모바일 버전 ===== */
	if(isMobile){
		$("#header .btn_user").on("click", function(){
			$("#header .user").toggleClass('on');
		});
	};
    
	$("#header .btn_gnb").on("click", function(){
		$("#header .user").removeClass('on');
		$(this).toggleClass('on');
		$("#header .gnb").toggleClass('on');
        $('#header .dimmed').toggleClass('on');
	});
    
	$("#header .gnb").find('> ul > li > i').on("click", function(){
		if($(this).parent().hasClass('on')){
			$(this).parent().removeClass('on');
		}else{
		$("#header .gnb .depth1").removeClass('on');
			$(this).parent().toggleClass('on');
		}
	});
    
    $("#header .btn_search").on("click", function(){
            $(".hd_sch_wr").addClass('on');
        });
	$(".hd_sch_wr .btn_close").on("click", function(){
		$(".hd_sch_wr").removeClass('on');
	});
});
    
$(function(){	
	$(window).scroll(function(){
		var top = $(window).scrollTop();
		var subTop = $('#sub_visual').height() - $('#header').height(); // 200327 서브비주얼 영역
		if( top > 0 ){
			$('#header').addClass('on');
			$('#rightQuick').addClass('on');
		}else{
			$('#header').removeClass('on');
			$('#rightQuick').removeClass('on');
		};
		if( top > subTop ){ // 200327 서브비주얼 영역 넘었을 시 fix클래스 추가
			$('#left_area').addClass('fix');
		}else{
			$('#left_area').removeClass('fix');
		};
	});
	$(window).scroll();		
});
</script>
<!-- } 상단 끝 -->

<?php if (!defined("_INDEX_")) { ?>

<?php
	################################################################################################
	##### 관리자 메뉴설정을 아래와 같이 한다고 가정하에 왼쪽 메뉴 설정  (bo_table 기준으로 작업)
	################################################################################################
	##### 게시판이 아닐때 : /theme/a01/sub01/sub01.php
	##### 게시판 일때 : /bbs/board.php?bo_table=product01
	################################################################################################

	// 게시판이 아니고 co_id 값이 없을 때
	if($bo_table == "" && $co_id == "") {
		$url = preg_replace('/(qawrite\.php|qaview\.php)/i', 'qalist.php', $_SERVER['SCRIPT_NAME']); // 일대일상대 적용
	// 게시판일때
	}else{
		$base_url = preg_replace('/write\.php/i', 'board.php', $_SERVER['SCRIPT_NAME']);
		// 인터넷 주소창에 "&" 없는 경우 - 글목록/글등록/글수정
		if(strpos($_SERVER['QUERY_STRING'], "&") === false) {
    		$url = $base_url."?".$_SERVER['QUERY_STRING'];
		// 인터넷 주소창에 "&" 있는 경우 - 글보기, 글검색
		}else{
			$query_string = preg_replace('/(w=u&)/i', '', $_SERVER['QUERY_STRING']);
			$url = $base_url."?".substr($query_string, 0, strpos($query_string, "&"));
		}
	}

    $sql = " select * from {$g5['menu_table']} where length(me_code) = '4' and me_link like '%".$url."%' and me_use = '1' order by me_order, me_id ";
	$query = sql_query($sql, false) ;
	$total  = sql_num_rows($query) ;
	$list = array() ;
	if($total > 0) {
		$row = sql_fetch_array($query);
		$keyword =  $row['me_code'] ;
		if(strlen($keyword) >= 2) {
			$filter_keyword = substr($keyword, 0, 2);
			$sql = " select * from {$g5['menu_table']} where me_code like '{$filter_keyword}%' and me_use = '1' order by me_order, me_code ";
			$query = sql_query($sql, false);
			$num = sql_num_rows($query);
			for($i=0; $i < $num;$i++) {
				$list[$i] = sql_fetch_array($query);
			}
		}
	}	
	$pageNum = substr($row['me_code'], 0, 2);
    if (count($list) > 0) {
?>
<div id="sub_visual" class="sub<?=$pageNum?>">
	<div class="bg"></div>
	<?php for($i=0;$i<count($list);$i++) { if ($i == 0) { ?>	 
    <h2><?php echo $list[$i]['me_name']?></h2>    
    <?php } } ?>
</div>

<!-- 200506 Mark / islro navigation추가 -->
<div id="sub_navi">
	<div class="wrap">
		<ul>
			<li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
			<?php for($i=0;$i<count($list);$i++) { if ($i == 0) { ?>
			<li><a href="<?php echo $list[$i]['me_link']?>">&gt; <?php echo $list[$i]['me_name']?></a></li>
			<li>&gt; <?php echo $g5['title']?></li>
			<?php } } ?>
		</ul>
	</div>
</div>
<?php } else  { 
$str = explode("/",$_SERVER["REQUEST_URI"]); 
	switch($str[3]){ // url 3번째 폴더명 기준으로 navigation경로 수동 지정
		case "manage" : $pageName="제공서비스"; $depth1="> 제공서비스"; $depth1="> 제공서비스"; $depth2="> 시스템인증"; $depth2_link="/theme/rt_igcert/manage/igc_006.php"; break; 
		case "medical" : $pageName="제공서비스"; $depth1="> 제공서비스"; $depth2="> 시험"; $depth2_link="/theme/rt_igcert/medical/igc_026.php"; break; 
		case "edu1" : $pageName="제공서비스"; $depth1="> 제공서비스"; $depth2="> 교육"; $depth2_link="/theme/rt_igcert/edu1/igc_033.php"; break; 
		case "product" : $pageName="제공서비스"; $depth1="> 제공서비스"; $depth2="> 제품인증"; $depth2_link="/theme/rt_igcert/product/igc_069.php"; break; 
		case "aduits" : $pageName="제공서비스"; $depth1="> 제공서비스"; $depth2="> 심사원인증"; $depth2_link="/theme/rt_igcert/aduits/igc_104.php"; break; 
		case "global" : $pageName="제공서비스"; $depth1="> 제공서비스"; $depth2="> 연수기관"; $depth2_link="/theme/rt_igcert/global/igc_105.php"; break; 
	} 
?> 
<div id="sub_visual" class="sub20">
    <div class="bg"></div>
	<h2>
		<? 
			if($pageName != "") {
				echo $pageName;
			}else{
				echo $g5['title'];
			}
		?>
	</h2>
</div>
<div id="sub_navi">
	<div class="wrap">
		<ul>
			<li><a href="/"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li>
			<li><a href="/theme/rt_igcert/manage/igc_006.php"><?php echo $depth1?></a></li>
			<li><a href="<?php echo $depth2_link?>"><?php echo $depth2?></a></li>
			<li>&gt; <?php echo $g5['title']?></li>
		</ul>
	</div>
</div>
<?php } ?>
<!-- /200506 islro navigation추가 -->

<!---기존 코드, 서브메뉴===>가로형태 시작 -?php include(G5_THEME_PATH.'/snb.php'); ?  기존 코드, 서브메뉴===>가로형태 종료----->
<div id="contents">	
	<div class="wrap">
	<!-----컨텐츠 영역 시작 2020년3월23일, 서브페이지 좌측 영역과 우측 컨텐츠 영역 구분하기 위해 코딩 수정------>
	<!-------- 현재 서브페이지 서브이미지 바로 아래 있던 코드 시작 ------>
		<div id="contents_area">
		<!-----h2 class="container_title"><//?php echo get_head_title($g5['title']); ?></h2---->
		<!------기존에 있던 코드 종료------->	
			<div id="left_area">
				<?php include(G5_THEME_PATH.'/snb.php'); ?>
			</div>
			<div id="right_area">
				<h2 class="container_title"><?php echo get_head_title($g5['title']); ?></h2>	
<? } ?>
