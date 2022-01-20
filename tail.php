<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<?php if (!defined("_INDEX_")) { ?>
		</div>
	</div>
</div>
<? } ?>

<script src="<?php echo G5_THEME_URL ?>/js/css3-animate-it.js"></script>


<!-- 하단 시작 { -->
<div id="footer_loca" <?php if (defined("_INDEX_")) { ?>class="main"<? }?>>
    <div class="wrap">
        <ul>
            <li>
                <span>Customer Center</span><br>
                <a href="mailto: info@gicert.org" title="send email" style="display:block" class="gic_email"><strong>info@gicert.org</strong></a>
                <p>
                    AM 9:00 ~ PM 6:00<br>
                    Saturday,Sunday,Holiday : Days Off
                </p>
            </li>
            <li>
                <strong>USA (Head Office)</strong>
                <p>
                    904 E. Winsor Road #102, Glendale, CA 91205, U.S.A.<br>
                    TEL : +1 213 261 0787<br>
                    FAX : +1 213 261 0797<br>
                    <span class="gic_email">E-mail : info@gicert.org</span>
                </p>
            </li>
            <li>
                <strong>Republic of Korea (Key Location)</strong>
                <p>
                    Rm. 502, Daeryung techno town, 638, Seobusaet-gil, Geumcheon-gu, Seoul, Republic of Korea<br>
                    TEL : +82 2-6749-1185<br>
                    FAX : +82 2-6749-0711<br>
                    <span class="gic_email">E-mail : info@gicert.org</span>
                </p>
            </li>
        </ul>
    </div>
</div>

<footer id="footer" <?php if (defined("_INDEX_")) { ?>class="main"<? }?>>
	<div class="wrap footer_wrap">
		<h1><a href="/"></a></h1>
		
		<nav class="gnb" style="margin-top:-5px;float:left;">
			<ul style="position:relative;right:-3px;">
  
				<li class="sites" style="padding:0px 0 20px 8px;display: none">
				   <select onchange="copyrtChgUrl(this.value)" style="font-size:0.9rem;background-color:#93a2bf;color:#fff;width:183px;" class="site2">
	                  <option value=""> 관련사이트 </option>
	                  <option value="http://dna-tec.org">DNA-TEC</option>
	                  <option value="http://rus-test.org">RUS-TEST</option>
	                  <option value="https://www.gicert.org/?l=ko">GIC</option>
	                  <option value="https://www.gpcert.org/">GPC</option>
	                  <option value="http://www.patscorp.com/">PATSCORP</option>
	                  <option value="https://www.asiaitc.com/">ASIAITC</option>
                      <option value="http://aemiworld.com/">AEMIWORLD</option>
                      <option value="http://igcert.net/">(구) IGC</option>
<!--                  <option value="https://data.igcert.org/">WWW.DATACERTORG</option>-->
                      <option value="https://blog.naver.com/kate_0432">NAVER Blog1</option>
                      <option value="https://blog.naver.com/woheni19">NAVER Blog2</option>
                      <option value="https://blog.naver.com/djrrlforyou">NAVER Blog3</option>
                      <option value="https://blog.naver.com/kate_0432">NAVER Blog4</option>
                   </select>
				</li>
				
			</ul>			
		</nav>
		<br class="s_mobile_only" />
		
		<div class="f_left">
		    <div class="privacyprovision">
				<a href="<?php echo get_pretty_url('content', 'privacy_en'); ?>"><span style="color:#fff;">Privacy</span></a>
				<a href="<?php echo get_pretty_url('content', 'provision_en'); ?>"><span style="color:#fff;">Provision</span></a>
				<a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=qa_en"><span style="color:#fff;">Estimate</span></a>
            </div><br>
            <hr class="hr03"><!------관련사이트 상단 라인------>
			<dl class="address">
				<dt>Company name : Global Inter Certification Co., Ltd.</dt>&nbsp; &nbsp;<br class="s_mobile_only" />			
				<dt class="mobile_no">Address : </dt> 
				<dt>904 E. Winsor Road #102, Glendale, CA 91205, U.S.A.</dt><br />
				<dt>CEO : </dt>
				<dt>Dr. Gill-Taik Gong</dt>&nbsp; &nbsp;
				<!--<dt>사업자등록번호 : </dt>
				<dt>107-81-76722</dt>&nbsp; &nbsp;  <br class="s_mobile_only" />-->
				<a href="tel:02-6749-0723" style="color: #fff">
                    <dt>TEL : </dt>
                    <dt>+1 213 261 0787</dt>
				</a>&nbsp; &nbsp;
				<dt>Fax : </dt>
				<dt>+82 2) 6749-0711</dt> &nbsp; &nbsp; <br>
				<a href="mailto:info@igcert.org" style="color: #fff" class="gic_email">
                    <dt>E-mail : </dt>
                    <dt>info@gicert.org</dt>
				</a>
			</dl>
			<p class="copyright">Copyright &copy; 2017 GIC Global Inter Certification All Rights Reserved.</p>
		</div>
		<div class="f_right">
		    <a href="https://www.iasonline.org/" target="_blank"><img src="/theme/gicertorg/img/ci_ias_mark.png" alt="IAS"></a>
		    <a href="https://www.iaf.nu/" target="_blank"><img src="/theme/gicertorg/img/ci_iaf_mark.png" alt="IAF"></a>
		</div>
	</div>    
   
    <a href="javascript:" id="top_btn"><i class="fa fa-angle-up" aria-hidden="true"></i><span class="sound_only" style="display:block;">TOP</span> </a>
    
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '1000');
            return false;
        });
    });
    </script>
    
    <!---FamilySites 시작------>
    <script>
    function copyrtChgUrl(url){
	if(url){
		window.open(url);
	}
    }
    <!---FamilySites 종료------>
</script>
</footer>
<!-- } 하단 끝 -->

<!-- 20200402 QuickMenu -->

<!----------
tail.php 60라인~ 추가
head.php 204,207라인 추가
design.css 564라인~ 추가
------>

<!----퀵메뉴 영역----->
<!-- 모바일_하단고정 -->
	<div class="request">
		<div class="floating">
			<div class="inner">
				<div class="btn_col">
					<span><a href="<?php echo G5_BBS_URL;?>/board.php?bo_table=qa_en" class="btn_type1">Estimate</a></span>
					<span><a href="mailto: info@gicert.org" title="send email" class="btn_type2">Email</a></span>
				</div>
			</div>
		</div>
	</div>
	<!-- 모바일_하단고정 //-->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>