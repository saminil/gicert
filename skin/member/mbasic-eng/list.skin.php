<?php
if (!defined('_GNUBOARD_')) exit; // INDIVIDUAL PAGES CAN NOT BE ACCESSED

// SELECTION OPTIONS CHANGE CELL MERGING VARIABLY
$colspan = 2;

if ($is_checkbox) $colspan++;

// add_stylesheet('css SYNTAX', ORDER ORDER); SMALLER NUMBER ARE OUTPUT FIRST
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<h2 id="container_title"><?php echo $board['bo_subject'] ?><span class="sound_only"> LIST</span></h2>

<!-- START THE BULLETIN BOARD LIST -->
<div id="bo_list<?php if ($is_admin) echo "_admin"; ?>">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> Category</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

    <div class="bo_fx">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>KEY</span>
            <?php echo $page ?> page
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">Admin</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">Write</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>

    <form name="fboardlist" id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <div class="tbl_head01 tbl_wrap">
        <table>
        <thead>
        <tr>
            <?php if ($is_checkbox) { ?>
            <th scope="col">
                <label for="chkall">Current page posts</label>
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
            </th>
            <?php } ?>
            <th scope="col">Subject</th>
            <th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>Date</a></th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i=0; $i<count($list); $i++) {
        ?>
        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
            <?php if ($is_checkbox) { ?>
            <td class="td_chk">
                <label for="chk_wr_id_<?php echo $i ?>" class="sound_only"><?php echo $list[$i]['subject'] ?></label>
                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">
            </td><?php } ?>
            <td class="td_subject">
                <?php
                echo $list[$i]['icon_reply'];
                if ($is_category && $list[$i]['ca_name']) {
                ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>

                <a href="<?php echo $list[$i]['href'] ?>">
                    <?php echo $list[$i]['subject'] ?>
                    <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">Comment</span><?php echo $list[$i]['comment_cnt']; ?><span class="sound_only">PIECE</span><?php } ?>
                    <?php
                    // if ($list[$i]['link']['count']) { echo '['.$list[$i]['link']['count']}.']'; }
                    // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }

                    if (isset($list[$i]['icon_new'])) echo $list[$i]['icon_new'];
                    if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
                    if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
                    if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
                    if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];

                    ?>
                </a>

            </td>
            <td class="td_date"><?php echo $list[$i]['datetime2'] ?></td>
        </tr>
        <?php } ?>
        <?php if (count($list) == 0) { echo '<tr><td colspan="'.$colspan.'" class="empty_table">No data.</td></tr>'; } ?>
        </tbody>
        </table>
    </div>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <ul class="btn_bo_adm">
            <?php if ($list_href) { ?>
            <li><a href="<?php echo $list_href ?>" class="btn_b01"> LIST</a></li>
            <?php } ?>
            <?php if ($is_checkbox) { ?>
            <li><input type="submit" name="btn_submit" value="Sel-del" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="Sel-copy" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="Sel-move" onclick="document.pressed=this.value"></li>
            <?php } ?>
        </ul>

        <ul class="btn_bo_user">
            <li><?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b02">WRITE</a><?php } ?></li>
        </ul>
    </div>
    <?php } ?>
    </form>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>IF YOU DO NOT USE JAVASCRIPT<br>PLEASE NOTE THAT WE WILL DELETE THE SELECTION IMMEDIATELY WITHOUT A SEPARATE CONFIRMATION PROCEDURE.</p>
</noscript>
<?php } ?>

<!-- PAGE -->
<?php echo $write_pages; ?>

<fieldset id="bo_sch">
    <legend>Search</legend>

    <form name="fsearch" method="get">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sop" value="and">
    <label for="sfl" class="sound_only">search</label>
    <select name="sfl">
        <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>Subject</option>
        <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>Content</option>
        <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>Subject+Content</option>
        <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>ID</option>
        <!--<option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>MEMBER ID(코)</option>-->
        <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>Name</option>
        <!--<option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>WRITER(코)</option>-->
    </select>
    <input name="stx" value="<?php echo stripslashes($stx) ?>" placeholder="Search word(required)" required id="stx" class="required frm_input" size="15" maxlength="20">
    <input type="submit" value="FIND" class="btn_submit">
    </form>
</fieldset>

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
        if (!confirm("Are you sure you want to delete the selected post really?\n\nOnce you have deleted data can not be recovered.\n\nIf you choose to post replies in\nreplies also need to choose the posts will be deleted."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// COPY AND MOVE SELECTED POSTS
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "copy";
    else
        str = "move";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- END OF BULLETIN BOARD LIST -->
