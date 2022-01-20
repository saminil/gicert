<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// Selection options change cell merging variably
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- Bulletin Board List start { -->
<div id="bo_list" style="width:<?php echo $width; ?>">

    <!-- Bulletin board category start { -->
    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> Category</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } Bulletin board category end -->
    
    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <!-- Bulletin page information and buttons start { -->
    <div id="bo_btn_top">
        <div id="bo_list_total">
            <span>TOTAL <?php echo number_format($total_count) ?></span>
            <?php echo $page ?> PAGE
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
        	<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="ADMIN"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">ADMIN</span></a></li><?php } ?>
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
            <li>
            	<button type="button" class="btn_bo_sch btn_b01 btn" title="SEARCH"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">SEARCH</span></button>
            </li>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="WRITE"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">WRITE</span></a></li><?php } ?>
        	<?php if ($is_admin == 'super' || $is_auth) {  ?>
        	<li>
        		<button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="LIST OPTION"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">LIST OPTION</span></button>
        		<?php if ($is_checkbox) { ?>	
		        <ul class="more_opt is_list_btn">  
		            <li><button type="submit" name="btn_submit" value="Sel-del" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> Sel-del</button></li>
		            <li><button type="submit" name="btn_submit" value="Sel-copy" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> Sel-copy</button></li>
		            <li><button type="submit" name="btn_submit" value="Sel-move" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> Sel-move</button></li>
		        </ul>
		        <?php } ?>
        	</li>
        	<?php }  ?>
        </ul>
        <?php } ?>
    </div>
    <!-- } Bulletin page information and buttons end -->
        	
    <div class="tbl_head01 tbl_wrap">
        <table>
        <caption><?php echo $board['bo_subject'] ?> LIST</caption>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <th scope="col" class="all_chk chk_box">
            	<input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                <label for="chkall">
                	<span></span>
                	<b class="sound_only">FULL CURRENT PAGE POST</b>
				</label>
            </th>
            <?php } ?>
            <th scope="col" class="mobile_no">NO.</th>
            <th scope="col">SUBJECT</th>
            <th scope="col" class="mobile_no">NAME</th>
            <th scope="col" class="mobile_no"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>VIEW </a></th>
            <?php if ($is_good) { ?><th scope="col" class="mobile_no"><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>LIKE </a></th><?php } ?>
            <?php if ($is_nogood) { ?><th scope="col" class="mobile_no"><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>UNLIKE </a></th><?php } ?>
            <th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>DATE  </a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
        	if ($i%2==0) $lt_class = "even";
        	else $lt_class = "";
		?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> <?php echo $lt_class ?>">
            <?php if ($is_checkbox) { ?>
            <td class="td_chk chk_box">
				<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
            	<label for="chk_wr_id_<?php echo $i ?>">
            		<span></span>
            		<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
            	</label>
            </td>
            <?php } ?>
            <td class="td_num2 mobile_no">
            <?php
            if ($list[$i]['is_notice']) // Notice
                echo '<strong class="notice_icon">Notice</strong>';
            else if ($wr_id == $list[$i]['wr_id'])
                echo "<span class=\"bo_current\">Viewing</span>";
            else
                echo $list[$i]['num'];
             ?>
            </td>

            <td class="td_subject" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply'])*10) : '0'; ?>px">
                <?php
                if ($is_category && $list[$i]['ca_name']) {
				?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>
                <div class="bo_tit">
                    <a href="<?php echo $list[$i]['href'] ?>">
                        <?php echo $list[$i]['icon_reply'] ?>
                        <?php
                            if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                         ?>
                        <?php echo $list[$i]['subject'] ?>
                    </a>
                    <?php
                    if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">NEW</span></span>";
                    // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                    if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                    if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                    if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                    ?>
                    <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">COMMENT</span><span class="cnt_cmt"><?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only"></span><?php } ?>
                </div>
            </td>
            <td class="td_name sv_use mobile_no"><?php echo $list[$i]['name'] ?></td>
            <td class="td_num mobile_no"><?php echo $list[$i]['wr_hit'] ?></td>
            <?php if ($is_good) { ?><td class="td_num mobile_no"><?php echo $list[$i]['wr_good'] ?></td><?php } ?>
            <?php if ($is_nogood) { ?><td class="td_num mobile_no"><?php echo $list[$i]['wr_nogood'] ?></td><?php } ?>
            <td class="td_datetime"><?php echo $list[$i]['datetime2'] ?></td>

        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">No data.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>
	<!-- Page -->
	<?php echo $write_pages; ?>
	<!-- Page -->
	
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
        	<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="ADMIN"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">ADMIN</span></a></li><?php } ?>
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="WRITE"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">WRITE</span></a></li><?php } ?>
        </ul>	
        <?php } ?>
    </div>
    <?php } ?>   
    </form>

    <!-- Search Bulletin Board start { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>SEARCH POSTS</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">SEARCH FOR</label>
            <select name="sfl" id="sfl">
                <?php echo get_board_sfl_select_options($sfl); ?>
            </select>
            <label for="stx" class="sound_only">SEARCH<strong class="sound_only"> REQUIRED</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" Please enter a search term">
                <button type="submit" value="SEARCH" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">SEARCH</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="CLOSE"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">CLOSE</span></button>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
    <script>
    jQuery(function($){
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function(){
            $('.bo_sch_wrap').hide();
        });
    });
    </script>
    <!-- } Search Bulletin Board end -->
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>IF YOU DO NOT USE JAVASCRIPT<br>PLEASE NOTE THAT WE WILL DELETE THE SELECTION IMMEDIATELY WITHOUT A SEPARATE CONFIRMATION PROCEDURE.</p>
</noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "PLEASE SELECT AT LEAST ONE POST TO DO.");
        return false;
    }

    if(document.pressed == "Sel-copy") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "Sel-move") {
        select_copy("move");
        return;
    }

    if(document.pressed == "Sel-del") {
        if (!confirm("ARE YOU SURE YOU WANT TO DELETE THE SELECTED POST REALLY?\n\nONCE YOU HAVE DELETED DATA CAN NOT BE RECOVERED.\n\nIF YOU CHOOSE TO POST REPLIES IN\nREPLIES ALSO NEED TO CHOOSE THE POSTS WILL BE DELETED."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "copy";
    else
        str = "move";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = g5_bbs_url+"/move.php";
    f.submit();
}

// 게시판 리스트 관리자 옵션
jQuery(function($){
    $(".btn_more_opt.is_list_btn").on("click", function(e) {
        e.stopPropagation();
        $(".more_opt.is_list_btn").toggle();
    });
    $(document).on("click", function (e) {
        if(!$(e.target).closest('.is_list_btn').length) {
            $(".more_opt.is_list_btn").hide();
        }
    });
});
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
