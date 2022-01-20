<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가 
include_once(G5_LIB_PATH.'/thumbnail.lib.php');//썸네일 라이브러리
?>

<!-- 전체검색 시작 { -->
<link rel="stylesheet" href="<?php echo $search_skin_url ?>/style.css">

<form name="fsearch" onsubmit="return fsearch_submit(this);" method="get">
  <input type="hidden" name="srows" value="<?php echo $srows ?>">
  <fieldset id="sch_res_detail">
    <legend>상세검색</legend>
    <?php echo $group_select ?> 
    <script>document.getElementById("gr_id").value = "<?php echo $gr_id ?>";</script>
    <label for="sfl" class="sound_only">검색조건</label>
    <select name="sfl" id="sfl">
      <option value="wr_subject||wr_content"<?php echo get_selected($_GET['sfl'], "wr_subject||wr_content") ?>>제목+내용</option>
      <option value="wr_subject"<?php echo get_selected($_GET['sfl'], "wr_subject") ?>>제목</option>
      <option value="wr_content"<?php echo get_selected($_GET['sfl'], "wr_content") ?>>내용</option>
      <option value="mb_id"<?php echo get_selected($_GET['sfl'], "mb_id") ?>>회원아이디</option>
      <option value="wr_name"<?php echo get_selected($_GET['sfl'], "wr_name") ?>>이름</option>
    </select>
    <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
    <input type="text" name="stx" value="<?php echo $text_stx ?>" id="stx" required class="frm_input required" maxlength="20">
    <input type="submit" class="btn_submit" value="검색">
    <script>
    function fsearch_submit(f)
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
        
        f.action = "";
        return true;
    }
    </script>
    <input type="radio" value="or" <?php echo ($sop == "or") ? "checked" : ""; ?> id="sop_or" name="sop">
    <label for="sop_or">OR</label>
    <input type="radio" value="and" <?php echo ($sop == "and") ? "checked" : ""; ?> id="sop_and" name="sop">
    <label for="sop_and">AND</label>
  </fieldset>
</form>
<div id="sch_result">
 
 <?php //  내용관리 검색 기능 시작
if (number_format($page) == 1) { // 첫번째 검색 페이지에서만 노출
echo '<section class="sch_res_list">';
$sql = "SELECT * FROM g5_content WHERE (co_content LIKE '%$stx%' OR co_subject LIKE '%$stx%')";
$re = sql_query($sql);
$i = 0;
    while ($result = sql_fetch_array($re)) {
        $co_href = G5_BBS_URL.'/content.php?co_id='.$result['co_id'];
        print '<h2><a href="'.$co_href.'">'.$result['co_subject'].' </a>페이지내 결과</h2>';
        print '<ul><li><a href="'.$co_href.'">'.$result['co_subject'].'</a><p>';
        print cut_str(strip_tags($result['co_content']),200).'</p></li></ul>';
        $i++;
    }
if($i == 0){
    echo '<div class="empty_list">페이지에서는 검색된 자료가 하나도 없습니다.</div>';
    } else {
        echo '페이지에서 '.$i.'개의 결과가 검색되었습니다.';
    }

echo  '</section>';
}  //  내용관리 검색 기능 끝
?>
 
 
 
  <?php
    if ($stx) {
        if ($board_count) {
    ?>
  <section id="sch_res_ov">
    <h2><?php echo $stx ?> 전체검색 결과</h2>
    <dl>
      <dt>게시판</dt>
      <dd><strong style="color:<?php echo $config['cf_search_color'] ?>"><?php echo $board_count ?>개</strong></dd>
      <dt>게시물</dt>
      <dd><strong style="color:<?php echo $config['cf_search_color'] ?>"><?php echo number_format($total_count) ?>개</strong></dd>
    </dl>
    <p><?php echo number_format($page) ?>/<?php echo number_format($total_page) ?> 페이지 열람 중</p>
  </section>
  <?php
        }
    }
    ?>
  <?php
    if ($stx) {
        if (!$board_count) {
     ?>
  <div id="sch_res_no">검색 결과가 없습니다.</div>
  <?php } }  ?>
  <hr>
  <?php if ($stx && $board_count) { ?>
  <section id="sch_res_list">
    <?php }  ?>
    <?php
    $k=0;
    for ($idx=$table_index, $k=0; $idx<count($search_table) && $k<$rows; $idx++) {
        $comment_def = "";
        $comment_href = "";
     ?>
    <h2><img src="<?php echo $search_skin_url ?>/img/icon_sch_board.gif" valign="absmiddle" /> <a href="./board.php?bo_table=<?php echo $search_table[$idx] ?>&amp;<?php echo $search_query ?>"><?php echo $bo_subject[$idx] ?> <a href="./board.php?bo_table=<?php echo $search_table[$idx] ?>&amp;<?php echo $search_query ?>"><img src="<?php echo $search_skin_url ?>/img/icon_sch_more.gif" alt="검색결과 더보기" /></a></h2>
    <?php
        for ($i=0; $i<count($list[$idx]) && $k<$rows; $i++, $k++) {
            if ($list[$idx][$i][wr_is_comment]) 
            {
                $comment_def = "<span class=\"cmt_def\">[댓글]</span>";
                $comment_href = "#c_".$list[$idx][$i][wr_id];
            }
			//썸네일 이미지 생성
			$thumb_info = get_list_thumbnail($search_table[$idx], $list[$idx][$i][wr_id],105,79);
			$sch_thumb = $thumb_info['src'];
			
			//파일명 조회
			$file_info['file'] = get_file($search_table[$idx], $list[$idx][$i][wr_id]);
			$sch_file=$file_info[file][0]['source'];

     ?>
    <div id="sch_res_cont">
      <table summary="전체 게시판 검색결과">
        <tr>
          <?php if($sch_thumb){?>
          <td rowspan="3" class="sch_res_cont_thum"><img src="<?php echo $sch_thumb ?>" /></td>
          <?php }  ?>
          <td><a href="<?php echo $list[$idx][$i][href] ?><?php echo $comment_href ?>" class="sch_res_title"><?php echo $comment_def ?><?php echo $list[$idx][$i][subject] ?></a> <a href="<?php echo $list[$idx][$i][href] ?><?php echo $comment_href ?>" target="_blank"> <img src="<?php echo $search_skin_url ?>/img/icon_sch_newwindow.gif" alt="새창"></a></td>
        </tr>
        <tr>
          <td class="sch_res_cont_txt" valign="top"><?php echo mb_strimwidth($list[$idx][$i][content],'0','395','...','utf-8') ?></td>
        </tr>
        <tr>
          <td class="sch_res_cont_date" valign="bottom"><span class="sch_res_name"><?php echo $list[$idx][$i][name] ?> </span> | <?php echo $list[$idx][$i][wr_datetime] ?>
            <?php if($sch_file){?>
             | <img src="<?php echo $search_skin_url ?>/img/icon_sch_file.gif" alt="파일"> <?php echo $sch_file ?>
            <?php }  ?></td>
        </tr>
      </table>
    </div>
    <?php }  ?>
    <hr>
    <?php }  ?>
    <?php if ($stx && $board_count) {  ?>
  </section>
  <?php }  ?>
  <?php echo $write_pages ?> </div>
<!-- } 전체검색 끝 -->