<?
// 사용자별 답을 코멘트 형식으로 담음
$g4[title] = $wr_subject . "답입력";

include_once("./_common.php");
$chk = "0";



if($member[mb_id] == ""){  ?> <script> alert("로그인하지 않았네요. 로그인 후 이용해 주세요");   document.location.href="<?=$g4[path]?>/bbs/login.php" </script>  <?  $chk = "1"; }
if($chk != "1") {

$count = $_POST[count];

for($i =0 ; $i < $count ; $i++) {
$tmp=${"a".$i};
	$content .= $tmp."!&";
	
}

$bo_table_1 = $bo_table."_result";
$write_table_1 = "g4_write_".$bo_table_1;
 $wr_num = get_next_num($write_table_1);
//echo $member[mb_name];

   $sql = " insert into $write_table_1
                set wr_num = '$wr_num',
                    wr_reply = '$wr_reply',
                    wr_comment = 0,
                    ca_name = '$ca_name',
                    wr_option = '$html,$secret,$mail',
                    wr_subject = '$bo_subject',
                    wr_content = '$content',
                    wr_link1 = '$wr_link1',
                    wr_link2 = '$wr_link2',
                    wr_link1_hit = 0,
                    wr_link2_hit = 0,
                    wr_trackback = '$wr_trackback',
                    wr_hit = 0,
                    wr_good = 0,
                    wr_nogood = 0,
                    mb_id = '$member[mb_id]',
                    wr_password = '$wr_password',
                    wr_name = ' $member[mb_name]',
                    wr_email = '$member[mb_email]',
                    wr_homepage = '$wr_homepage',
                    wr_datetime = '$g4[time_ymdhis]',
                    wr_last = '$g4[time_ymdhis]',
                    wr_ip = '$_SERVER[REMOTE_ADDR]',
                    wr_1 = '$bo_table',
                    wr_2 = '$wr_1',
                    wr_3 = '$wr_3',
                    wr_4 = '$wr_4',
                    wr_5 = '$wr_5',
                    wr_6 = '$wr_6',
                    wr_7 = '$wr_7',
                    wr_8 = '$wr_8',
                    wr_9 = '$wr_9',
                    wr_10 = '$wr_10' ";

    sql_query($sql);

    $wr_id = mysql_insert_id();

    // 부모 아이디에 UPDATE
    sql_query(" update $write_table_1 set wr_parent = '$wr_id' where wr_id = '$wr_id' ");

    // 새글 INSERT
    //sql_query(" insert into $g4[board_new_table] ( bo_table, wr_id, wr_parent, bn_datetime ) values ( '$bo_table', '$wr_id', '$wr_id', '$g4[time_ymdhis]' ) ");
    sql_query(" insert into $g4[board_new_table] ( bo_table, wr_id, wr_parent, bn_datetime, mb_id ) values ( '$bo_table_1',  '$wr_id', '$wr_id', '$g4[time_ymdhis]', '$member[mb_id]' ) ");

    // 게시글 1 증가
    sql_query("update $g4[board_table] set bo_count_write = bo_count_write + 1 where bo_table = '$bo_table_1'");
}

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

<table width=50% align=center valign=middle>
<tr>
	<td align=center><br><br><br><br><br><font size="" color="#3333CC"><b><?=$member[mb_name]?></b></font>, 수고하셨습니다. 
	</td></tr>
		<tr><td height=30>
			</td></tr>
	<tr><td align=center>
	<a href="<?=$g4[path]?>/bbs/board.php?bo_table=<?=$bo_table_1?>">내 시험 결과 확인하기</a>(채점이 완료되기 전까지 답만 확인이 가능합니다)</td>
</tr>
</table>