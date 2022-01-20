<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if ($is_dhtml_editor) {
    include_once("$g4[path]/lib/cheditor4.lib.php");
    echo "<script src='$g4[cheditor4_path]/cheditor.js'></script>";
    echo cheditor1('wr_content', '100%', '250');
}
?>

<div style="height:14px; line-height:1px; font-size:1px;">&nbsp;</div>
<style>
.board_top { clear:both; }
body, td, p, input, button, textarea, select, .c1 { font-family:맑은 고딕; font-size:15px; color:#222222; }
.board_list { clear:both; width:100%; table-layout:fixed; margin:5px 0 0 0; }
.board_list th {  font:bold 15px 맑은 고딕; } 
.board_list th { background:url(<?=$board_skin_path?>/img/title_bg.gif) repeat-x; } 
.board_list th { white-space:nowrap; height:34px; overflow:hidden; text-align:center; } 
.board_list th { border-top:1px solid #ddd; border-bottom:1px solid #ddd; } 

.board_list tr.bg0 { background-color:#fafafa; } 
.board_list tr.bg1 { background-color:#ffffff; } 

.board_list td { padding:.5em; }
.board_list td { border-bottom:1px } 
.board_list td.num { color:#999999; text-align:center; }
.board_list td.checkbox { text-align:center; }
.board_list td.subject { overflow:hidden; }
.board_list td.name { padding:0 0 0 10px; }
.board_list td.datetime { font:normal 13px 맑은 고딕; color:#BABABA; text-align:center; }
.board_list td.hit { font:normal 13px 맑은 고딕; color:#BABABA; text-align:center; }
.board_list td.good { font:normal 13px 맑은 고딕; color:#BABABA; text-align:center; }
.board_list td.nogood { font:normal 13px 맑은 고딕; color:#BABABA; text-align:center; }

.board_list .notice { font-weight:normal; }
.board_list .current { font:bold 13px 맑은 고딕; color:#E15916; }
.board_list .comment { font-family:맑은 고딕; font-size:10px; color:#EE5A00; }

.board_button { clear:both; margin:10px 0 0 0; }

.board_page { clear:both; text-align:center; margin:3px 0 0 0; }
.board_page a:link { color:#777; }

.board_search { text-align:center; margin:10px 0 0 0; }
.board_search .stx { height:21px; border:1px solid #9A9A9A; border-right:1px solid #D8D8D8; border-bottom:1px solid #D8D8D8; }
</style>
<style type="text/css">
.write_head { height:30px; text-align:center; color:#8492A0; }
.field { border:1px solid #ccc; }
</style>

<script type="text/javascript">
// 글자수 제한
var char_min = parseInt(<?=$write_min?>); // 최소
var char_max = parseInt(<?=$write_max?>); // 최대
</script>

<form name="fwrite" method="post" onsubmit="return fwrite_submit(this);" enctype="multipart/form-data" style="margin:0px;">
<input type=hidden name=null> 
<input type=hidden name=w        value="<?=$w?>">
<input type=hidden name=bo_table value="<?=$bo_table?>">
<input type=hidden name=bo_subject value="<?=$board[bo_subject]?>">
<input type=hidden name=wr_id    value="<?=$wr_id?>">
<input type=hidden name=sca      value="<?=$sca?>">
<input type=hidden name=sfl      value="<?=$sfl?>">
<input type=hidden name=stx      value="<?=$stx?>">
<input type=hidden name=spt      value="<?=$spt?>">
<input type=hidden name=sst      value="<?=$sst?>">
<input type=hidden name=sod      value="<?=$sod?>">
<input type=hidden name=page     value="<?=$page?>">

<table width="<?=$width?>" align=center cellpadding=0 cellspacing=0><tr><td>


<div style="border:1px solid #ddd; height:34px; background:url(<?=$board_skin_path?>/img/title_bg.gif) repeat-x;">
<div style="font-weight:bold; font-size:14px; margin:7px 0 0 10px;">:: <?=$title_msg?> ::</div>
</div>
<div style="height:3px; background:url(<?=$board_skin_path?>/img/title_shadow.gif) repeat-x; line-height:1px; font-size:1px;"></div>


<table width="100%" border="0" cellspacing="0" cellpadding="0">
<colgroup width=90>
<colgroup width=''>
<tr><td colspan="2" style="background:url(<?=$board_skin_path?>/img/title_bg.gif) repeat-x; height:3px;"></td></tr>
<? if ($is_name) { ?>
<tr>
    <td class=write_head>이 름</td>
    <td><input class='ed' maxlength=20 size=15 name=wr_name itemname="이름" required value="<?=$name?>"></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>

<? if ($is_password) { ?>
<tr>
    <td class=write_head>패스워드</td>
    <td><input class='ed' type=password maxlength=20 size=15 name=wr_password itemname="패스워드" <?=$password_required?>></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>

<? if ($is_email) { ?>
<tr>
    <td class=write_head>이메일</td>
    <td><input class='ed' maxlength=100 size=50 name=wr_email email itemname="이메일" value="<?=$email?>"></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>

<? if ($is_homepage) { ?>
<tr>
    <td class=write_head>홈페이지</td>
    <td><input class='ed' size=50 name=wr_homepage itemname="홈페이지" value="<?=$homepage?>"></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>

<? 
$option = "";
$option_hidden = "";
if ($is_notice || $is_html || $is_secret || $is_mail) { 
    $option = "";
    if ($is_notice) { 
        $option .= "<input type=checkbox name=notice value='1' $notice_checked>공지&nbsp;";
    }

    if ($is_html) {
        if ($is_dhtml_editor) {
            $option_hidden .= "<input type=hidden value='html1' name='html'>";
        } else {
            $option .= "<input onclick='html_auto_br(this);' type=checkbox value='$html_value' name='html' $html_checked><span class=w_title>html</span>&nbsp;";
        }
    }

    if ($is_secret) {
        if ($is_admin || $is_secret==1) {
            $option .= "<input type=checkbox value='secret' name='secret' $secret_checked><span class=w_title>비밀글</span>&nbsp;";
        } else {
            $option_hidden .= "<input type=hidden value='secret' name='secret'>";
        }
    }
    
    if ($is_mail) {
        $option .= "<input type=checkbox value='mail' name='mail' $recv_email_checked>답변메일받기&nbsp;";
    }
}

echo $option_hidden;
if ($option) {
?>

<? } ?>

<? if ($is_category) { ?>
<tr>
    <td class=write_head>분 류</td>
    <td><select name=ca_name required itemname="분류"><option value="">선택하세요<?=$category_option?></select></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>
<tr>
    <td class=write_head>시험 상태</td>
    <td><input type="radio" name="wr_9" value="1" <? if($write[wr_9] == 1 || $write[wr_9] ==  "") echo "checked";  ?>>시험 진행 중 <input type="radio" name="wr_9" <? if($write[wr_9] == 2 ) echo "checked";  ?> value="2"> 시험 종료</td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<tr><td colspan=2 height=10></td></tr>
<tr>
    <td class=write_head>문제</td>
    <td><input class='ed' style="width:70%;" name=wr_subject id="wr_subject" itemname="제목" required value="<?=$subject?>"></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<tr><td colspan=2 height=10></td></tr>
<tr>
    <td   colspan=2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;문제 내용을 적으세요. 사진이 있는 경우 왼쪽에 사진이 나오고 오른쪽에 문제가 나옵니다</td>
    </tr>

	<tr><td colspan=2 height=10></td></tr>

<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<tr>
    <td class='write_head' style='padding:5 0 5 10;' colspan='2'>
        <? if ($is_dhtml_editor) { ?>
            <?=cheditor2('wr_content', $content);?>
        <? } else { ?>
        <table width=100% cellpadding=0 cellspacing=0>
        <tr>
            <td width=50% align=left valign=bottom>
                <span style="cursor: pointer;" onclick="textarea_decrease('wr_content', 10);"><img src="<?=$board_skin_path?>/img/up.gif"></span>
                <span style="cursor: pointer;" onclick="textarea_original('wr_content', 10);"><img src="<?=$board_skin_path?>/img/start.gif"></span>
                <span style="cursor: pointer;" onclick="textarea_increase('wr_content', 10);"><img src="<?=$board_skin_path?>/img/down.gif"></span></td>
            <td width=50% align=right><? if ($write_min || $write_max) { ?><span id=char_count></span>글자<?}?></td>
        </tr>
        </table>
        <textarea id="wr_content" name="wr_content" class=tx style='width:90%; word-break:break-all;' rows=10 itemname="내용"  
        <? if ($write_min || $write_max) { ?>onkeyup="check_byte('wr_content', 'char_count');"<?}?>><?=$content?></textarea>
        <? if ($write_min || $write_max) { ?><script type="text/javascript"> check_byte('wr_content', 'char_count'); </script><?}?>
        <? } ?>
    </td>
</tr>
<tr><td colspan=2 height=1 bgcolor=#dddddd></td></tr>
<tr>
    <td class=write_head>문제 유형</td>
    <td    align=left>
	<input type="radio" name="wr_1" <? if($write[wr_1] == 1) echo "checked";  ?> value="1">논술식 주관식인 경우 
	<input type="radio" name="wr_1" <? if($write[wr_1] == 2) echo "checked";  ?> value="2">단답형 주관식인 경우 
	<input type="radio" name="wr_1" <? if($write[wr_1] == 3 || $write[wr_1] == "" ) echo "checked";  ?>  value="3">객관식의 경우</td>
</tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
	<tr><td colspan=2 height=10></td></tr>
 <tr>   <td colspan=2 align=left>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* 객관식 보기를 넣으세요</td>
    </tr>
	<tr><td colspan=2 height=10></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<tr>
    <td class=write_head>객관식인 경우</td><td>
    1. <input class='ed' style="width:200;" name=wr_3 id="wr_3" itemname="제목"  value="<?=$write[wr_3]?>"><br>
    2. <input class='ed' style="width:200;" name=wr_4 id="wr_4" itemname="제목"  value="<?=$write[wr_4]?>"><br>
    3. <input class='ed' style="width:200;" name=wr_5 id="wr_5" itemname="제목"  value="<?=$write[wr_5]?>"><br>
    4. <input class='ed' style="width:200;" name=wr_6 id="wr_6" itemname="제목"  value="<?=$write[wr_6]?>"><br>
    5. <input class='ed' style="width:200;" name=wr_7 id="wr_7" itemname="제목"  value="<?=$write[wr_7]?>"></td></tr>
		<tr><td colspan=2 height=10></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
	<tr><td colspan=2 height=10></td></tr>

<tr>
    <td  colspan=2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* '답을 두개 고르세요'는 안됩니다. </td>
</td></tr>
	<tr><td colspan=2 height=10></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<tr>
    <td class=write_head>객관식 답</td>
      <td   colspan=2 >
	  <input type="radio" name="wr_2" <? if($write[wr_2] == 1) echo "checked";  ?> value="1">1번
	  <input type="radio" name="wr_2" <? if($write[wr_2] == 2) echo "checked";  ?> value="2">2번
	  <input type="radio" name="wr_2" <? if($write[wr_2] == 3) echo "checked";  ?>  value="3">3번
	  <input type="radio" name="wr_2" <? if($write[wr_2] == 4) echo "checked";  ?>  value="4">4번
	  <input type="radio" name="wr_2" <? if($write[wr_2] == 5) echo "checked";  ?>  value="5">5번
	  </td>
	  </tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
	<tr><td colspan=2 height=10></td></tr>
<tr>
    <td class=write_head>단답형 답</td>
      <td   colspan=2 >
	  <input type="text" name="wr_10" value="<?=$write[wr_10]?>">

	  </td>
	  </tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
	<tr><td colspan=2 height=10></td></tr>
	<tr>
    <td class=write_head>점수</td>
      <td   colspan=2 >
	  <input type="text" name="wr_8" size=5 required value="<?=$write[wr_8]?>">점  (지금 내는 문제에만 적용됩니다)

	  </td>
	  </tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
	<tr><td colspan=2 height=10></td></tr>
<tr>
    <td   colspan=2 >* 참조한 자료가 있다면 링크를 넣으세요(교사만 보입니다)</td>
    </tr>	<tr><td colspan=2 height=10></td></tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? if ($is_link) { ?>

<tr>
    <td class=write_head>링크 #<?=$i?></td>
    <td><input type='text' class='ed' size=50 name='wr_link1' itemname='링크 #<?=$i?>' value='<?=$write[wr_link1]?>'></td>
</tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>

<? } ?>

<? if ($is_file) { ?>
<tr>
    <td class=write_head>
        <table cellpadding=0 cellspacing=0>
        <tr>
            <td class=write_head style="padding-top:10px; line-height:20px;">
                파일첨부<br> 
                <span onclick="add_file();" style="cursor:pointer;"><img src="<?=$board_skin_path?>/img/btn_file_add.gif"></span> 
                <span onclick="del_file();" style="cursor:pointer;"><img src="<?=$board_skin_path?>/img/btn_file_minus.gif"></span>
            </td>
        </tr>
        </table>
    </td>
    <td style='padding:5 0 5 0;'><table id="variableFiles" cellpadding=0 cellspacing=0></table><?// print_r2($file); ?>
        <script type="text/javascript">
        var flen = 0;
        function add_file(delete_code)
        {
            var upload_count = <?=(int)$board[bo_upload_count]?>;
            if (upload_count && flen >= upload_count)
            {
                alert("이 게시판은 "+upload_count+"개 까지만 파일 업로드가 가능합니다.");
                return;
            }

            var objTbl;
            var objRow;
            var objCell;
            if (document.getElementById)
                objTbl = document.getElementById("variableFiles");
            else
                objTbl = document.all["variableFiles"];

            objRow = objTbl.insertRow(objTbl.rows.length);
            objCell = objRow.insertCell(0);

            objCell.innerHTML = "<input type='file' class='ed' name='bf_file[]' title='파일 용량 <?=$upload_max_filesize?> 이하만 업로드 가능'>";
            if (delete_code)
                objCell.innerHTML += delete_code;
            else
            {
                <? if ($is_file_content) { ?>
                objCell.innerHTML += "<br><input type='text' class='ed' size=50 name='bf_content[]' title='업로드 이미지 파일에 해당 되는 내용을 입력하세요.'>";
                <? } ?>
                ;
            }

            flen++;
        }

        <?=$file_script; //수정시에 필요한 스크립트?>

        function del_file()
        {
            // file_length 이하로는 필드가 삭제되지 않아야 합니다.
            var file_length = <?=(int)$file_length?>;
            var objTbl = document.getElementById("variableFiles");
            if (objTbl.rows.length - 1 > file_length)
            {
                objTbl.deleteRow(objTbl.rows.length - 1);
                flen--;
            }
        }
        </script></td>
</tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>

<? if ($is_trackback) { ?>
<tr>
    <td class=write_head>트랙백주소</td>
    <td><input class='ed' size=50 name=wr_trackback itemname="트랙백" value="<?=$trackback?>">
        <? if ($w=="u") { ?><input type=checkbox name="re_trackback" value="1">핑 보냄<? } ?></td>
</tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>

<? if ($is_guest) { ?>
<tr>
    <td class=write_head><img id='kcaptcha_image' /></td>
    <td><input class='ed' type=input size=10 name=wr_key itemname="자동등록방지" required>&nbsp;&nbsp;왼쪽의 글자를 입력하세요.</td>
</tr>
<tr><td colspan=2 height=1 bgcolor=#e7e7e7></td></tr>
<? } ?>

</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
    <td width="100%" align="center" valign="top" style="padding-top:30px;">
        <input type=image id="btn_submit" src="<?=$board_skin_path?>/img/btn_write.gif" border=0 accesskey='s'>&nbsp;
        <a href="./board.php?bo_table=<?=$bo_table?>"><img id="btn_list" src="<?=$board_skin_path?>/img/btn_list.gif" border=0></a></td>
</tr>
</table>

</td></tr></table>
</form>

<script type="text/javascript" src="<?="$g4[path]/js/jquery.kcaptcha.js"?>"></script>
<script type="text/javascript">
<?
// 관리자라면 분류 선택에 '공지' 옵션을 추가함
if ($is_admin) 
{
    echo "
    if (typeof(document.fwrite.ca_name) != 'undefined')
    {
        document.fwrite.ca_name.options.length += 1;
        document.fwrite.ca_name.options[document.fwrite.ca_name.options.length-1].value = '공지';
        document.fwrite.ca_name.options[document.fwrite.ca_name.options.length-1].text = '공지';
    }";
} 
?>

with (document.fwrite) 
{
    if (typeof(wr_name) != "undefined")
        wr_name.focus();
    else if (typeof(wr_subject) != "undefined")
        wr_subject.focus();
    else if (typeof(wr_content) != "undefined")
        wr_content.focus();

    if (typeof(ca_name) != "undefined")
        if (w.value == "u")
            ca_name.value = "<?=$write[ca_name]?>";
}

function html_auto_br(obj) 
{
    if (obj.checked) {
        result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
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
    /*
    var s = "";
    if (s = word_filter_check(f.wr_subject.value)) {
        alert("제목에 금지단어('"+s+"')가 포함되어있습니다");
        return false;
    }

    if (s = word_filter_check(f.wr_content.value)) {
        alert("내용에 금지단어('"+s+"')가 포함되어있습니다");
        return false;
    }
    */

    if (document.getElementById('char_count')) {
        if (char_min > 0 || char_max > 0) {
            var cnt = parseInt(document.getElementById('char_count').innerHTML);
            if (char_min > 0 && char_min > cnt) {
                alert("내용은 "+char_min+"글자 이상 쓰셔야 합니다.");
                return false;
            } 
            else if (char_max > 0 && char_max < cnt) {
                alert("내용은 "+char_max+"글자 이하로 쓰셔야 합니다.");
                return false;
            }
        }
    }

    if (document.getElementById('tx_wr_content')) {
        if (!ed_wr_content.outputBodyText()) { 
  
        }
    }

    <?
    if ($is_dhtml_editor) echo cheditor3('wr_content');
    ?>

    var subject = "";
    var content = "";
    $.ajax({
        url: "<?=$board_skin_path?>/ajax.filter.php",
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
        alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
        f.wr_subject.focus();
        return false;
    }

    if (content) {
        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
        if (typeof(ed_wr_content) != "undefined") 
            ed_wr_content.returnFalse();
        else 
            f.wr_content.focus();
        return false;
    }

    if (!check_kcaptcha(f.wr_key)) {
        return false;
    }

    document.getElementById('btn_submit').disabled = true;
    document.getElementById('btn_list').disabled = true;

    <?
    if ($g4[https_url])
        echo "f.action = '$g4[https_url]/$g4[bbs]/write_update.php';";
    else
        echo "f.action = './write_update.php';";
    ?>
    
    return true;
}
</script>

<script type="text/javascript" src="<?="$g4[path]/js/board.js"?>"></script>
<script type="text/javascript"> window.onload=function() { drawFont(); } </script>
