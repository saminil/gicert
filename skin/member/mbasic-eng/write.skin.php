<?php
if (!defined('_GNUBOARD_')) exit; // INDIVIDUAL PAGES CAN NOT BE ACCESSED
//  add_stylesheet ( 'CSS SYNTAX', OUTPUT ORDER); SMALLER NUMBERS ARE OUTPUT FIRST
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<section id="bo_w">
    <h2 id="container_title"><?php echo $g5['title'] ?></h2>

    <form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
    <input type="hidden" name="w" value="<?php echo $w ?>">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
    <input type="hidden" name="sca" value="<?php echo $sca ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <?php
    $option = '';
    $option_hidden = '';
    if ($is_notice || $is_html || $is_secret || $is_mail) {
        $option = '';
        if ($is_notice) {
            $option .= PHP_EOL.'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'.PHP_EOL.'<label for="notice">Notice</label>';
        }

        if ($is_html) {
            if ($is_dhtml_editor) {
                $option_hidden .= '<input type="hidden" value="html1" name="html">';
            } else {
                $option .= PHP_EOL.'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'.PHP_EOL.'<label for="html">html</label>';
            }
        }

        if ($is_secret) {
            if ($is_admin || $is_secret==1) {
                $option .= PHP_EOL.'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'.PHP_EOL.'<label for="secret">secret</label>';
            } else {
                $option_hidden .= '<input type="hidden" name="secret" value="secret">';
            }
        }

        if ($is_mail) {
            $option .= PHP_EOL.'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'.PHP_EOL.'<label for="mail">Reply email</label>';
        }
    }

    echo $option_hidden;
    ?>
    <div class="tbl_frm01 tbl_wrap">
        <table>
        <caption><?php echo $g5['title'] ?></caption>
        <tbody>
        <?php if ($is_name) { ?>
        <tr>
            <th scope="row"><label for="wr_name">NAME<strong class="sound_only">REQUIRED</strong></label></th>
            <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" maxlength="20"></td>
        </tr>
        <?php } ?>

        <?php if ($is_password) { ?>
        <tr>
            <th scope="row"><label for="wr_password">Password<strong class="sound_only">required</strong></label></th>
            <td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
        </tr>
        <?php } ?>

        <?php if ($is_email) { ?>
        <tr>
            <th scope="row"><label for="wr_email">E-MAIl</label></th>
            <td><input type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" maxlength="100"></td>
        </tr>
        <?php } ?>

        <?php if ($is_homepage) { ?>
        <tr>
            <th scope="row"><label for="wr_homepage">HOMEPAGE</label></th>
            <td><input type="url" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input"></td>
        </tr>
        <?php } ?>

        <?php if ($option) { ?>
        <tr>
            <th scope="row">OPTION</th>
            <td><?php echo $option ?></td>
        </tr>
        <?php } ?>

        <?php if ($is_category) { ?>
        <tr>
            <th scope="row"><label for="ca_name">CATEGORY<strong class="sound_only">REQUIRED</strong></label></th>
            <td>
                <select class="required" id="ca_name" name="ca_name" required>
                    <option value="">SELECT</option>
                    <?php echo $category_option ?>
                </select>
            </td>
        </tr>
        <?php } ?>

        <tr>
            <th scope="row"><label for="wr_subject">SUBJECT<strong class="sound_only">REQUIRED</strong></label></th>
            <td><input type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required class="frm_input required"></td>
        </tr>

        <tr>
            <th scope="row"><label for="wr_content">CONTENTS<strong class="sound_only">REQUIRED</strong></label></th>
            <td class="wr_content">
                <?php if($write_min || $write_max) { ?>
                <!--WHEN USING MINIMUM / MAXIMUM NUMBER OF CHARACTERS -->
                <p id="char_count_desc">THIS BOARD IS AT LEAST <strong><?php echo $write_min; ?></strong>CHARACTERS LONG, UP TO <strong><?php echo $write_max; ?></strong>TO CHARACTERS OR LESS CAN YOU WRITE AN ARTICLE.</p>
                <?php } ?>
                <?php echo $editor_html; // WHEN USING THE EDITOR, USE THE EDITOR, OR USE THE textarea ?>
                <?php if($write_min || $write_max) { ?>
                <!-- WHEN USING MINIMUM / MAXIMUM NUMBER OF CHARACTERS -->
                <div id="char_count_wrap"><span id="char_count"></span>WORD</div>
                <?php } ?>
            </td>
        </tr>

        <?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
        <tr>
            <th scope="row"><label for="wr_link<?php echo $i ?>">LINK #<?php echo $i ?></label></th>
            <td><input type="url" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input wr_link"></td>
        </tr>
        <?php } ?>

        <?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
        <tr>
            <th scope="row">FILE #<?php echo $i+1 ?></th>
            <td>
                <input type="file" name="bf_file[]" title="Add <?php echo $i+1 ?> : size <?php echo $upload_max_filesize ?> less can be uploaded." class="frm_file frm_input">
                <?php if ($is_file_content) { ?>
                <input type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="Please enter the file description." class="frm_file frm_input">
                <?php } ?>
                <?php if($w == 'u' && $file[$i]['file']) { ?>
                <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i; ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')'; ?> DEL</label>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>

        <?php if ($is_guest) { //PREVENT AUTOENROLLMENT ?>
        <tr>
            <th scope="row">VERIFICATION CODE</th>
            <td>
                <?php echo $captcha_html ?>
            </td>
        </tr>
        <?php } ?>

        </tbody>
        </table>
    </div>

    <div class="btn_confirm">
        <input type="submit" value="Complete" id="btn_submit" class="btn_submit" accesskey="s">
        <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel">Cancel</a>
    </div>
    </form>
</section>

<script>
<?php if($write_min || $write_max) { ?>
// CHARACTER LIMIT
var char_min = parseInt(<?php echo $write_min; ?>); // MINIMUM
var char_max = parseInt(<?php echo $write_max; ?>); // MAXIMUM
check_byte("wr_content", "char_count");

$(function() {
    $("#wr_content").on("keyup", function() {
        check_byte("wr_content", "char_count");
    });
});

<?php } ?>
function html_auto_br(obj)
{
    if (obj.checked) {
        result = confirm("Would you like to automatic line break?\n\nThe automatic line break is the ability to convert <br>the line changes where the contents of the post tags.");
        if (result)
            obj.value = "html2";
        else
            obj.value = "html1";
    }
    else
        obj.value = "";
}

function fwrite_submit(f)
{
    <?php echo $editor_js; // WHEN USING EDITOR, JAVASCRIPT INSERTS CONTENT INTO FORM FIELD AND CHECKS CONTENTS  ?>

    var subject = "";
    var content = "";
    $.ajax({
        url: g5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": f.wr_subject.value,
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

    if (subject) {
        alert("FORBIDDEN WORD IN THE TITLE ('"+subject+"') IS INCLUDES ");
        f.wr_subject.focus();
        return false;
    }

    if (content) {
        alert("FORBIDDEN WORDS IN CONTENT ('"+content+"') IS INCLUDES");
        if (typeof(ed_wr_content) != "undefined")
            ed_wr_content.returnFalse();
        else
            f.wr_content.focus();
        return false;
    }

    if (document.getElementById("char_count")) {
        if (char_min > 0 || char_max > 0) {
            var cnt = parseInt(check_byte("wr_content", "char_count"));
            if (char_min > 0 && char_min > cnt) {
                alert("CONTENTS YOU MUST GET AT LEAST "+char_min+" CHARACTERS.");
                return false;
            }
            else if (char_max > 0 && char_max < cnt) {
                alert("CONTENTS YOU MUST GET BELOW THE "+char_max+" CHARACTERS.");
                return false;
            }
        }
    }

    <?php echo $captcha_js; // CHECK captcha INPUT FROM JAVASCRIPT WHEN USING CAPTURE. ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}
</script>
