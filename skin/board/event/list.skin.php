<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

////////////////////////////////////////////////////////////////이벤트 추가
$is_file_exist = file_exists($board_skin_path."/topgbn.php");
$today = date("Y-m-d");

$is_topgbn = false;
$topgbn_html = "";
if ($is_file_exist) {
   include($board_skin_path."/topgbn.php");
   
   $is_topgbn = true;
   $topgbn_href = G5_BBS_URL.'/board.php?bo_table='.$bo_table;

   if(count($cattop) > 0){
      $topgbn_html .= "<li><a href='".$topgbn_href."'";
	   if ($tcg=='')
			$topgbn_html .= ' id="bo_cate_on"';
		$topgbn_html .= '>전체</a></li>';
      
      foreach($cattop as $value){		  
		  $category = substr($value['link'], 5, 1);
         if($value['use'] == "Y"):
            $topgbn_html .= "<li><a href='".$topgbn_href.$value['link']."'";
			 if ($category==$tcg) { // 현재 선택된 카테고리라면
				$topgbn_html .= ' id="bo_cate_on"';
				}
			$topgbn_html .= '>'.$value['name'].'</a></li>';
         endif;
      }
   }
}

if ($sca || $stx || $stx === '0') {     //검색이면
    $is_search_bbs = true;      //검색구분변수 true 지정
    $sql_search = get_sql_search($sca, $sfl, $stx, $sop);

    if($is_file_exist) {
       if(count($cattop) > 0):   
          if($tcg == "s"):
              $sql_search .= " and wr_9 <= '".$today."' AND wr_10 >= '".$today."'";
          elseif($tcg == "e"):
              $sql_search .= " and wr_10 < '".$today."'";
          else:
              $sql_search .= " and ((wr_9 <= '".$today."' AND wr_10 >= '".$today."') OR (wr_10 < '".$today."'))";
          endif;
       endif;
    }
	
} else {
    $sql_search = "";
    
    if($is_file_exist) {
       if($_GET['tcg'] == ""):
          if($member['mb_id'] == "admin"):
             $sql_search = "";
          else:
             $sql_search = "((wr_9 <= '".$today."' AND wr_10 >= '".$today."') OR (wr_10 < '".$today."') OR (wr_7 = 'Y')) AND";
          endif;
          
          $sql = " SELECT COUNT(DISTINCT `wr_parent`) AS `cnt` FROM {$write_table} WHERE {$sql_search} wr_is_comment = 0";
          $row = sql_fetch($sql);
          $total_count = $row['cnt'];
       else:
          if(count($cattop) > 0):   
             if($tcg == "s"):
                 $sql_search = "wr_9 <= '".$today."' AND wr_10 >= '".$today."' AND";
             elseif($tcg == "e"):
                 $sql_search = "wr_10 < '".$today."' AND";
             else:
                 if($member['mb_id'] == "admin"):
                    $sql_search = "((wr_9 <= '".$today."' AND wr_10 >= '".$today."') OR (wr_10 < '".$today."')) AND";
                 else:
                    $sql_search = "((wr_9 <= '".$today."' AND wr_10 >= '".$today."') OR (wr_10 < '".$today."') OR (wr_7 = 'Y')) AND";
                 endif;
             endif;
          endif;
          
          $sql = " SELECT COUNT(DISTINCT `wr_parent`) AS `cnt` FROM {$write_table} WHERE {$sql_search} wr_is_comment = 0";
          $row = sql_fetch($sql);
          $total_count = $row['cnt'];
          
       endif;
    }else{
       $total_count = $board['bo_count_write'];
    } 
}

if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)

// 년도 2자리
$today2 = G5_TIME_YMD;

$list = array();
$i = 0;
$notice_count = 0;
$notice_array = array();

if ($is_search_bbs) {
    $sql = " select distinct wr_parent from {$write_table} where {$sql_search} {$sql_order} limit {$from_record}, $page_rows ";
} else {
    $sql = " select * from {$write_table} where {$sql_search} wr_is_comment = 0 ";
    if(!empty($notice_array))
        $sql .= " and wr_id not in (".implode(', ', $notice_array).") ";
    $sql .= " {$sql_order} limit {$from_record}, $page_rows ";
}

// 페이지의 공지개수가 목록수 보다 작을 때만 실행
if($page_rows > 0) {
    $result = sql_query($sql);

    $k = 0;

    while ($row = sql_fetch_array($result))
    {
        // 검색일 경우 wr_id만 얻었으므로 다시 한행을 얻는다
        if ($is_search_bbs)
            $row = sql_fetch(" select * from {$write_table} where wr_id = '{$row['wr_parent']}' ");

        $list[$i] = get_list($row, $board, $board_skin_url, G5_IS_MOBILE ? $board['bo_mobile_subject_len'] : $board['bo_subject_len']);
        if (strstr($sfl, 'subject')) {
            $list[$i]['subject'] = search_font($stx, $list[$i]['subject']);
        }
        $list[$i]['is_notice'] = false;
        $list_num = $total_count - ($page - 1) * $list_page_rows - $notice_count;
        $list[$i]['num'] = $list_num - $k;

        $i++;
        $k++;
    }
}
////////////////////////////////////////////////////////////////이벤트 추가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 5;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<div id="bo_gall" style="width:<?php echo $width; ?>">

    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_topgbn) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $topgbn_html ?>
        </ul>
    </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->
	
    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="sst" value="<?php echo $sst ?>">
    <input type="hidden" name="sod" value="<?php echo $sod ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <!-- 게시판 페이지 정보 및 버튼 시작 { -->
    <div id="bo_btn_top">
        <div id="bo_list_total">
            <span>Total <?php echo number_format($total_count) ?>건</span>
            <?php echo $page ?> 페이지
        </div>

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
        	<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
            <li>
            	<button type="button" class="btn_bo_sch btn_b01 btn" title="게시판 검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">게시판 검색</span></button>
            </li>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
        	<?php if ($is_admin == 'super' || $is_auth) {  ?>
        	<li>
        		<button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
        		<?php if ($is_checkbox) { ?>	
		        <ul class="more_opt is_list_btn">  
		            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
		            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
		            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
		        </ul>
		        <?php } ?>
        	</li>
        	<?php }  ?>
        </ul>
        <?php } ?>
    </div>
    <!-- } 게시판 페이지 정보 및 버튼 끝 -->
        	
    <?php if ($is_checkbox) { ?>
    <div id="gall_allchk" class="all_chk chk_box">
        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
    	<label for="chkall">
        	<span></span>
        	<b class="sound_only">현재 페이지 게시물 </b> 전체선택
        </label>
    </div>
    <?php } ?>
	
	<ul id="gall_ul" class="gall_row">
        <?php for ($i=0; $i<count($list); $i++) {

            $classes = array();
            
            $classes[] = 'gall_li';
            $classes[] = 'col-gn-'.$bo_gallery_cols;

            if( $i && ($i % $bo_gallery_cols == 0) ){
                $classes[] = 'box_clear';
            }

            if( $wr_id && $wr_id == $list[$i]['wr_id'] ){
                $classes[] = 'gall_now';
            }
         ?>
        <li class="<?php echo implode(' ', $classes); ?> <?php if ($list[$i]['is_notice']) { ?>notice<? } ?>">
            <div class="gall_box">
                <div class="gall_chk chk_box">
	                <?php if ($is_checkbox) { ?>
					<input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
	                <label for="chk_wr_id_<?php echo $i ?>">
	                	<span></span>
	                	<b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
	                </label>
	                
	                <?php } ?>
	                <span class="sound_only">
	                    <?php
	                    if ($wr_id == $list[$i]['wr_id'])
	                        echo "<span class=\"bo_current\">열람중</span>";
	                    else
	                        echo $list[$i]['num'];
	                     ?>
	                </span>
                </div>
                <div class="gall_con">
                    <div class="gall_img">
                        <a href="<?php echo $list[$i]['href'] ?>">                      
                        <?php
                            $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                            if($thumb['src']) {
                                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" width="'.$thumb_width.'" height="'.$thumb_height.'">';
							} else {
                                $img_content = '<span class="no_image">no image</span>';
                            }
                            echo $img_content;
                         ?>
                        </a>
						<script>
							$(function(){
								var lineHeight = $('.gall_img img').height() + 'px';
								$('.gall_img .no_image').css('line-height', lineHeight)
							})
						</script>
                    </div>
                    <div class="gall_text_href">
                        <?php if ($is_category && $list[$i]['ca_name']) { ?>
                        <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                        <?php } ?>
                        <a href="<?php echo $list[$i]['href'] ?>" class="bo_tit">
                            <?php // echo $list[$i]['icon_reply']; ?>
                        	<!-- 갤러리 댓글기능 사용시 주석을 제거하세요. -->
                        
                            <?php echo $list[$i]['subject'] ?>                      
                            <?php
                            // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                            //if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                           // if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                            //if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                            //if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                            //if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
							?>							
                         </a>
						<div class="event_basic">
							<span class="sound_only">이벤트 설명 </span><span class="profile_img"><?php echo utf8_strcut(strip_tags($list[$i]['wr_8']), 90, '..'); ?></span>
						</div>
						<div class="event_date">
							<span class="sound_only">이벤트 기간 </span><span class="profile_img"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $list[$i]['wr_9']." ~ ". $list[$i]['wr_10']?></span>
						</div>
					</div>
                </div>
            </div>
        </li>
        <?php } ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>
	
	<!-- 페이지 -->
	<?php echo $write_pages; ?>
	<!-- 페이지 -->
	
    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
        	<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
        </ul>	
        <?php } ?>
    </div>
    <?php } ?>   
    </form>

    <!-- 게시판 검색 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <h3>검색</h3>
            <form name="fsearch" method="get">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">
            <input type="hidden" name="sop" value="and">
            <label for="sfl" class="sound_only">검색대상</label>
            <select name="sfl" id="sfl">
                <?php echo get_board_sfl_select_options($sfl); ?>
            </select>
            <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
            <div class="sch_bar">
                <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
                <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
            </div>
            <button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
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
    <!-- } 게시판 검색 끝 --> 
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
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
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
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
        str = "복사";
    else
        str = "이동";

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
