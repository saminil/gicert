<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
$chk = 0;

 

	     $table = $write_table."_result";
		$query5 = "select wr_id from $table where mb_id = '$member[mb_id]' ";
		$result5 = sql_query($query5);
		$total_count = mysql_num_rows($result5);
		if($total_count != 0 &&   $is_admin != 'super' )  { ?> 
			 <script> alert("이미 본 시험입니다. 담당 선생님에게 문의하세요.");   </script>  <?  $chk = 1; } ?> 
			  <?
			

if($chk != 1) {
// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

//if ($is_category) $colspan++;
if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// 제목이 두줄로 표시되는 경우 이 코드를 사용해 보세요.
// <nobr style='display:block; overflow:hidden; width:000px;'>제목</nobr>



// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan =7;

//if ($is_category) $colspan++;
if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;


// 제목이 두줄로 표시되는 경우 이 코드를 사용해 보세요.
// <nobr style='display:block; overflow:hidden; width:000px;'>제목</nobr>
?>

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


<!-- 게시판 목록 시작 -->
<table width="<?=$width?>" align="center" cellpadding="0" cellspacing="0"><tr><td>

    <!-- 분류 셀렉트 박스, 게시물 몇건, 관리자화면 링크 -->
    <div class="board_top">
        <div style="float:left;">
            
        </div>
        <div style="float:right;">
            
            <? if ($admin_href) { ?><a href="<?=$admin_href?>"><img src="<?=$board_skin_path?>/img/btn_admin.gif" border='0' title="관리자" align="absmiddle"></a><?}?>
        </div>
    </div>

    <!-- 제목 -->
<FORM name="fboardlist" METHOD="POST" action="<?=$board_skin_path?>/close.php"> 
    <input type='hidden' name='bo_table' value='<?=$bo_table?>'>
    <input type='hidden' name='bo_subject' value='<?=$board[bo_subject]?>'>
    <input type='hidden' name='sfl'  value='<?=$sfl?>'>
    <input type='hidden' name='stx'  value='<?=$stx?>'>
    <input type='hidden' name='spt'  value='<?=$spt?>'>
    <input type='hidden' name='page' value='<?=$page?>'>
    <input type='hidden' name='sw'   value=''>
    <table cellspacing="0" cellpadding="0" class="board_list">
    <col width="50" />
    <? if ($is_checkbox) { ?><col width="40" /><? } ?>
    <col />
    <col width="110" />
    <col width="40" />
    <col width="50" />
    <? if ($is_good) { ?><col width="40" /><? } ?>
    <? if ($is_nogood) { ?><col width="40" /><? } ?>
<?    if($is_admin == 'super') { ?>
    <tr>
        <th></th>
        <? if ($is_checkbox) { ?><th><input onclick="if (this.checked) all_checked(true); else all_checked(false);" type="checkbox"></th><?}?>
        <th>문 제</th>
        <th>출제자</th>
        <th><?=subject_sort_link('wr_datetime', $qstr2, 1)?>날짜</a></th>
        <th><?=subject_sort_link('wr_hit', $qstr2, 1)?>조회</a></th>
        <? if ($is_good) { ?><th><?=subject_sort_link('wr_good', $qstr2, 1)?>추천</a></th><?}?>
        <? if ($is_nogood) { ?><th><?=subject_sort_link('wr_nogood', $qstr2, 1)?>비추천</a></th><?}?>
    </tr>
<? } else { ?>
        <th colspan=4 ><?=$board[bo_subject]?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;이름: <?=$member[mb_name]?></th>
<? } ?>
<input type="hidden" name="count" value="<?=count($list)?>">
    <? 
   $count = 0;
	for ($i=0; $i<count($list); $i++) { 
        $bg = $i%2 ? 0 : 1;
			if($list[$i][wr_9] == 2 && $is_admin != 'super' ) {
    ?>

			 <script> alert("이미 시험을 종료했습니다. 담당 선생님에게 문의하세요.");   </script>  <? exit;  } ?>

    <tr class="bg<?=$bg?>"> 
        <td >
            <? 

             if($list[$i][wr_good] == 0) $count = $i + 1;
			else  $count = $list[$i][wr_good];
			if( $list[$i][file][0][file])  {
			$file = $list[$i][file][0][path] .'/'. $list[$i][file][0][file];
			$img_url = "$g4[path]/data/file/$bo_table/".$list[$i][file][0][file];
			}
			else $img_url = "";
            ?>
        </td>

        <? if ($is_checkbox) { ?><td class="checkbox"><input type=checkbox name=chk_wr_id[] value="<?=$list[$i][wr_id]?>"></td><? } ?>
  <?
				echo "<td class=subject><table><td>";
				$wr = $list[$i][wr_id];


				if($is_admin == 'super')             echo  $count.". <a href='$g4[path]/bbs/write.php?w=u&bo_table=$bo_table&wr_id=$wr'>{$list[$i][subject]}</a>";
	
			   else             echo   $count.". ".$list[$i][wr_subject];
				
				echo "</td></tr><tr><td><table >";
				if($img_url != "") { echo "<tr><td><img src=".$img_url.">";
				echo "</td><td valign=top align=left>"; }
				
				else echo "<tr><td colspan =2>";
			   echo  $list[$i][wr_content];

				echo "</tr></table></td></tr><tr><td align=left>";
				$a = "a".$i;

				if($list[$i][wr_1] == 1)  { ?>
				<textarea id="<?=$a?>" name="<?=$a?>" class=tx style='width:800; word-break:break-all;' required   rows=30 itemname="내용" >
				<?=$conmment?></textarea>
     			<? } 
				if($list[$i][wr_1] == 2) echo "<input type=text name=".$a."   required    class=tx style='width:500; word-break:break-all;' value =' ' >";
				if($list[$i][wr_1] == 3)  {     ?>
					<table width=100%><tr><td align=left width=30>
					<? if($list[$i][wr_3] != "") { ?> <input type=radio style="width:100%;" name=<?=$a?>  required  value="1"></td><td>1. <?=$list[$i][wr_3]?><? } ?>
					</td></tr>
					<tr><td>
					<? if($list[$i][wr_4] != "")  { ?>    <input type=radio  style="width:100%;" name=<?=$a?>  required   value="2"></td><td>2. <?=$list[$i][wr_4]?><? } ?>
					</td></tr>
					<tr><td>
					<? if($list[$i][wr_5] != "")   { ?>    <input type=radio  style="width:100%;" name=<?=$a?>   required    value="3"></td><td>3. <?=$list[$i][wr_5]?><? } ?>
					</td></tr>
					<tr><td>
					<? if($list[$i][wr_6] != "")   { ?>     <input type=radio  style="width:100%;" name=<?=$a?>   required    value="4"></td><td>4. <?=$list[$i][wr_6]?><? } ?>
					</td></tr>
					<tr><td>
					<? if($list[$i][wr_7] != "")  {  ?>   <input type=radio  style="width:100%;" name=<?=$a?>   required    value="5"></td><td>5. <?=$list[$i][wr_7]?><? } ?>
				</td></tr></table>
				<? } 
		 
            ?>
			
        </td></tr></table></td>
<?		  if($is_admin == 'super')  { ?>
        <td class="name"><?=$list[$i][name]?></td>
			 <td class="datetime"><?=$list[$i][datetime2]?></td>
			 <td class="hit"><?=$list[$i][wr_hit]?></td>
			<? if ($is_good) { ?><td class="good"><?=$list[$i][wr_good]?></td><? } ?>
	        <? if ($is_nogood) { ?><td class="nogood"><?=$list[$i][wr_nogood]?></td><? } ?>
		<? }  ?>


    </tr>
    <? } // end for ?>
<tr><td align=center colspan=4><input  TYPE="IMAGE" src="<?=$board_skin_path?>/img//close.gif" name="Submit" value="Submit"  align="absmiddle">
</td></tr>
    <? if (count($list) == 0) { echo "<tr><td colspan='$colspan' height=100 align=center>문제가 없습니다.</td></tr>"; } ?>


    <div class="board_button">
        <div style="float:left;">
        <? if ($list_href) { ?>
        <a href="<?=$list_href?>"><img src="<?=$board_skin_path?>/img/btn_list.gif" align="absmiddle" border='0'></a>
        <? } ?>
        <? if ($is_checkbox) { ?>
        <a href="javascript:select_delete();"><img src="<?=$board_skin_path?>/img/btn_select_delete.gif" align="absmiddle" border='0'></a>
        <a href="javascript:select_copy('copy');"><img src="<?=$board_skin_path?>/img/btn_select_copy.gif" align="absmiddle" border='0'></a>
        <a href="javascript:select_copy('move');"><img src="<?=$board_skin_path?>/img/btn_select_move.gif" align="absmiddle" border='0'></a>
        <? } ?>
        </div>

        <div style="float:right;">
          <? if ($write_href) { ?><a href="<?=$write_href?>"><img src="<?=$board_skin_path?>/img/btn_write.gif" border='0'></a><? } ?>
        </div>
    </div>

    <!-- 페이지 -->
    <div class="board_page">
        <? if ($prev_part_href) { echo "<a href='$prev_part_href'><img src='$board_skin_path/img/page_search_prev.gif' border='0' align=absmiddle title='이전검색'></a>"; } ?>
        <?
        // 기본으로 넘어오는 페이지를 아래와 같이 변환하여 이미지로도 출력할 수 있습니다.
        //echo $list_pages;
        $list_pages = str_replace("처음", "<img src='$board_skin_path/img/page_begin.gif' border='0' align='absmiddle' title='처음'>", $list_pages);
        $list_pages = str_replace("이전", "<img src='$board_skin_path/img/page_prev.gif' border='0' align='absmiddle' title='이전'>", $list_pages);
        $list_pages = str_replace("다음", "<img src='$board_skin_path/img/page_next.gif' border='0' align='absmiddle' title='다음'>", $list_pages);
        $list_pages = str_replace("맨끝", "<img src='$board_skin_path/img/page_end.gif' border='0' align='absmiddle' title='맨끝'>", $list_pages);
        //$list_pages = preg_replace("/<span>([0-9]*)<\/span>/", "$1", $list_pages);
        $list_pages = preg_replace("/<b>([0-9]*)<\/b>/", "<b><span style=\"color:#4D6185; font-size:12px; text-decoration:underline;\">$1</span></b>", $list_pages);
        ?>
        <?=$list_pages?>
        <? if ($next_part_href) { echo "<a href='$next_part_href'><img src='$board_skin_path/img/page_search_next.gif' border='0' align=absmiddle title='다음검색'></a>"; } ?>
    </div>

    <!-- 검색 -->
    
    </FORM>
</td></tr></table>

<script type="text/javascript">
if ('<?=$sca?>') document.fcategory.sca.value = '<?=$sca?>';
if ('<?=$stx?>') {
    document.fsearch.sfl.value = '<?=$sfl?>';

    if ('<?=$sop?>' == 'and') 
        document.fsearch.sop[0].checked = true;

    if ('<?=$sop?>' == 'or')
        document.fsearch.sop[1].checked = true;
} else {
    document.fsearch.sop[0].checked = true;
}
</script>

<? if ($is_checkbox) { ?>
<script type="text/javascript">
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function check_confirm(str) {
    var f = document.fboardlist;
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(str + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }
    return true;
}

// 선택한 게시물 삭제
function select_delete() {
    var f = document.fboardlist;

    str = "삭제";
    if (!check_confirm(str))
        return;

    if (!confirm("선택한 게시물을 정말 "+str+" 하시겠습니까?\n\n한번 "+str+"한 자료는 복구할 수 없습니다"))
        return;

    f.action = "./delete_all.php";
    f.submit();
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == "copy")
        str = "복사";
    else
        str = "이동";
                       
    if (!check_confirm(str))
        return;

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<? } }?>
<!-- 게시판 목록 끝 -->
