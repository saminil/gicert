<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<script>
// Character limit
var char_min = parseInt(<?php echo $comment_min ?>); // minimum
var char_max = parseInt(<?php echo $comment_max ?>); // maximum
</script>

<!-- Comments start { -->
<section id="bo_vc">
    <h2>LIST OF COMMENTS</h2>
    <?php
    $cmt_amt = count($list);
    for ($i=0; $i<$cmt_amt; $i++) {
        $comment_id = $list[$i]['wr_id'];
        $cmt_depth = ""; // Comment step
        $cmt_depth = strlen($list[$i]['wr_comment_reply']) * 20;
        $comment = $list[$i]['content'];
        /*
        if (strstr($list[$i]['wr_option'], "secret")) {
            $str = $str;
        }
        */
        $comment = preg_replace("/\[\<a\s.*href\=\"(http|https|ftp|mms)\:\/\/([^[:space:]]+)\.(mp3|wma|wmv|asf|asx|mpg|mpeg)\".*\<\/a\>\]/i", "<script>doc_write(obj_movie('$1://$2.$3'));</script>", $comment);
        $cmt_sv = $cmt_amt - $i + 1; // Comment header z-index reset ie8 or below Side view overlapped troubleshooting
     ?>

    <article id="c_<?php echo $comment_id ?>" <?php if ($cmt_depth) { ?>style="margin-left:<?php echo $cmt_depth ?>px;border-top-color:#e0e0e0"<?php } ?>>
        <header style="z-index:<?php echo $cmt_sv; ?>">
            <h1><?php echo get_text($list[$i]['wr_name']); ?> COMMENTS</h1>
            <?php echo $list[$i]['name'] ?>
            <?php if ($cmt_depth) { ?><img src="<?php echo $board_skin_url ?>/img/icon_reply.gif" class="icon_reply" alt="Comments"><?php } ?>
            <?php if ($is_ip_view) { ?>
            IP
            <span class="bo_vc_hdinfo"><?php echo $list[$i]['ip']; ?></span>
            <?php } ?>
            DATE
            <span class="bo_vc_hdinfo"><time datetime="<?php echo date('Y-m-d\TH:i:s+09:00', strtotime($list[$i]['datetime'])) ?>"><?php echo $list[$i]['datetime'] ?></time></span>
            <?php
            include(G5_SNS_PATH.'/view_comment_list.sns.skin.php');
            ?>
        </header>

        <!-- Comment output -->
        <p>
            <?php if (strstr($list[$i]['wr_option'], "secret")) { ?><img src="<?php echo $board_skin_url; ?>/img/icon_secret.gif" alt="Secret"><?php } ?>
            <?php echo $comment ?>
        </p>

        <span id="edit_<?php echo $comment_id ?>"></span><!-- Modified -->
        <span id="reply_<?php echo $comment_id ?>"></span><!-- answer -->

        <input type="hidden" value="<?php echo strstr($list[$i]['wr_option'],"secret") ?>" id="secret_comment_<?php echo $comment_id ?>">
        <textarea id="save_comment_<?php echo $comment_id ?>" style="display:none"><?php echo get_text($list[$i]['content1'], 0) ?></textarea>

        <?php if($list[$i]['is_reply'] || $list[$i]['is_edit'] || $list[$i]['is_del']) {
            $query_string = str_replace("&", "&amp;", $_SERVER['QUERY_STRING']);

            if($w == 'cu') {
                $sql = " select wr_id, wr_content from $write_table where wr_id = '$c_id' and wr_is_comment = '1' ";
                $cmt = sql_fetch($sql);
                $c_wr_content = $cmt['wr_content'];
            }

            $c_reply_href = './board.php?'.$query_string.'&amp;c_id='.$comment_id.'&amp;w=c#bo_vc_w';
            $c_edit_href = './board.php?'.$query_string.'&amp;c_id='.$comment_id.'&amp;w=cu#bo_vc_w';
         ?>
        <footer>
            <ul class="bo_vc_act">
                <?php if ($list[$i]['is_reply']) { ?><li><a href="<?php echo $c_reply_href;  ?>" onclick="comment_box('<?php echo $comment_id ?>', 'c'); return false;">REPLY</a></li><?php } ?>
                <?php if ($list[$i]['is_edit']) { ?><li><a href="<?php echo $c_edit_href;  ?>" onclick="comment_box('<?php echo $comment_id ?>', 'cu'); return false;">EDIT</a></li><?php } ?>
                <?php if ($list[$i]['is_del'])  { ?><li><a href="<?php echo $list[$i]['del_link'];  ?>" onclick="return comment_delete();">DEL</a></li><?php } ?>
            </ul>
        </footer>
        <?php } ?>
    </article>
    <?php } ?>
    <?php if ($i == 0) { //Without comments ?><p id="bo_vc_empty">NO COMMENTS HAVE BEEN REGISTERED.</p><?php } ?>

</section>
<!-- } End of comment-->

<?php if ($is_comment_write) {
    if($w == '')
        $w = 'c';
?>
<!-- Write comment start { -->
<aside id="bo_vc_w">
    <h2>COMMENT WRITE</h2>
    <form name="fviewcomment" action="./write_comment_update.php" onsubmit="return fviewcomment_submit(this);" method="post" autocomplete="off">
    <input type="hidden" name="w" value="<?php echo $w ?>" id="w">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="comment_id" value="<?php echo $c_id ?>" id="comment_id">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="is_good" value="">

    <div class="tbl_frm01 tbl_wrap">
        <table>
        <tbody>
        <?php if ($is_guest) { ?>
        <tr>
            <th scope="row"><label for="wr_name">NAME<strong class="sound_only"> REQUIRED</strong></label></th>
            <td><input type="text" name="wr_name" value="<?php echo get_cookie("ck_sns_name"); ?>" id="wr_name" required class="frm_input required" size="5" maxLength="20"></td>
        </tr>
        <tr>
            <th scope="row"><label for="wr_password">PASSWORD<strong class="sound_only"> REQUIRED</strong></label></th>
            <td><input type="password" name="wr_password" id="wr_password" required class="frm_input required" size="10" maxLength="20"></td>
        </tr>
        <?php } ?>
        <tr>
            <th scope="row"><label for="wr_secret">SECRET</label></th>
            <td><input type="checkbox" name="wr_secret" value="secret" id="wr_secret"></td>
        </tr>
        <?php if ($is_guest) { ?>
        <tr>
            <th scope="row">VERIFICATION CODE</th>
            <td><?php echo $captcha_html; ?></td>
        </tr>
        <?php } ?>
        <?php
        if($board['bo_use_sns'] && ($config['cf_facebook_appid'] || $config['cf_twitter_key'])) {
        ?>
        <tr>
            <th scope="row">SNS SEND</th>
            <td id="bo_vc_send_sns"></td>
        </tr>
        <?php
        }
        ?>
        <tr>
            <th scope="row">CONTENTS</th>
            <td>
                <?php if ($comment_min || $comment_max) { ?><strong id="char_cnt"><span id="char_count"></span>WORD</strong><?php } ?>
                <textarea id="wr_content" name="wr_content" maxlength="10000" required class="required" title="contents"
                <?php if ($comment_min || $comment_max) { ?>onkeyup="check_byte('wr_content', 'char_count');"<?php } ?>><?php echo $c_wr_content;  ?></textarea>
                <?php if ($comment_min || $comment_max) { ?><script> check_byte('wr_content', 'char_count'); </script><?php } ?>
                <script>
                $("textarea#wr_content[maxlength]").live("keyup change", function() {
                    var str = $(this).val()
                    var mx = parseInt($(this).attr("maxlength"))
                    if (str.length > mx) {
                        $(this).val(str.substr(0, mx));
                        return false;
                    }
                });
                </script>
            </td>
        </tr>
        </tbody>
        </table>
    </div>

    <div class="btn_confirm">
        <input type="submit" id="btn_submit" class="btn_submit" value="SUBMIT">
    </div>

    </form>
</aside>

<script>
var save_before = '';
var save_html = document.getElementById('bo_vc_w').innerHTML;

function good_and_write()
{
    var f = document.fviewcomment;
    if (fviewcomment_submit(f)) {
        f.is_good.value = 1;
        f.submit();
    } else {
        f.is_good.value = 0;
    }
}

function fviewcomment_submit(f)
{
    var pattern = /(^\s*)|(\s*$)/g; // \s Space character

    f.is_good.value = 0;

    var subject = "";
    var content = "";
    $.ajax({
        url: g5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": "",
            "content": f.wr_content.value
        },
        dataType: "json",
        async: false,
        cache: false,
        success: function(data, textStatus) {
            subject = data.subject;
            content = data.content;
        }
    });

    if (content) {
        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
        f.wr_content.focus();
        return false;
    }

    //Remove both spaces
    var pattern = /(^\s*)|(\s*$)/g; // \s Space character
    document.getElementById('wr_content').value = document.getElementById('wr_content').value.replace(pattern, "");
    if (char_min > 0 || char_max > 0)
    {
        check_byte('wr_content', 'char_count');
        var cnt = parseInt(document.getElementById('char_count').innerHTML);
        if (char_min > 0 && char_min > cnt)
        {
            alert("COMMENTS YOU MUST GET AT LEAST "+char_min+" CHARACTERS.");
            return false;
        } else if (char_max > 0 && char_max < cnt)
        {
            alert("COMMENTS YOU MUST GET BELOW THE "+char_max+" CHARACTERS.");
            return false;
        }
    }
    else if (!document.getElementById('wr_content').value)
    {
        alert("PLEASE ENTER A COMMENT");
        return false;
    }

    if (typeof(f.wr_name) != 'undefined')
    {
        f.wr_name.value = f.wr_name.value.replace(pattern, "");
        if (f.wr_name.value == '')
        {
            alert('PLEASE ENTER A NAME.');
            f.wr_name.focus();
            return false;
        }
    }

    if (typeof(f.wr_password) != 'undefined')
    {
        f.wr_password.value = f.wr_password.value.replace(pattern, "");
        if (f.wr_password.value == '')
        {
            alert('PLEASE ENTER A PASSWORD.');
            f.wr_password.focus();
            return false;
        }
    }

    <?php if($is_guest) echo chk_captcha_js();  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}

function comment_box(comment_id, work)
{
    var el_id;
    // Reply when ID is over, edit
    if (comment_id)
    {
        if (work == 'c')
            el_id = 'reply_' + comment_id;
        else
            el_id = 'edit_' + comment_id;
    }
    else
        el_id = 'bo_vc_w';

    if (save_before != el_id)
    {
        if (save_before)
        {
            document.getElementById(save_before).style.display = 'none';
            document.getElementById(save_before).innerHTML = '';
        }

        document.getElementById(el_id).style.display = '';
        document.getElementById(el_id).innerHTML = save_html;
        // Edit comment
        if (work == 'cu')
        {
            document.getElementById('wr_content').value = document.getElementById('save_comment_' + comment_id).value;
            if (typeof char_count != 'undefined')
                check_byte('wr_content', 'char_count');
            if (document.getElementById('secret_comment_'+comment_id).value)
                document.getElementById('wr_secret').checked = true;
            else
                document.getElementById('wr_secret').checked = false;
        }

        document.getElementById('comment_id').value = comment_id;
        document.getElementById('w').value = work;

        if(save_before)
            $("#captcha_reload").trigger("click");

        save_before = el_id;
    }
}

function comment_delete()
{
    return confirm("ARE YOU SURE YOU WANT TO DELETE THIS COMMENT?");
}

comment_box('', 'c'); // Added to handle comment input form (like root)

<?php if($board['bo_use_sns'] && ($config['cf_facebook_appid'] || $config['cf_twitter_key'])) { ?>
// Registering sns
$(function() {
    $("#bo_vc_send_sns").load(
        "<?php echo G5_SNS_URL; ?>/view_comment_write.sns.skin.php?bo_table=<?php echo $bo_table; ?>",
        function() {
            save_html = document.getElementById('bo_vc_w').innerHTML;
        }
    );
});
<?php } ?>
</script>
<?php } ?>
<!-- } End of comment -->