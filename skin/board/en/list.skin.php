<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 2;

if ($is_checkbox) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<!-- 게시판 목록 시작 -->
<div id="bo_list">
	<div class="bo_list_innr">    
		<?php if ($is_category) { ?>
	    <nav id="bo_cate">
	        <h2><?php echo ($board['bo_mobile_subject'] ? $board['bo_mobile_subject'] : $board['bo_subject']) ?> 카테고리</h2>
	        <ul id="bo_cate_ul">
	            <?php echo $category_option ?>
	        </ul>
	    </nav>
	    <?php } ?>
	    
		<form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
		<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
		<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
		<input type="hidden" name="stx" value="<?php echo $stx ?>">
		<input type="hidden" name="spt" value="<?php echo $spt ?>">
		<input type="hidden" name="sst" value="<?php echo $sst ?>">
		<input type="hidden" name="sod" value="<?php echo $sod ?>">
		<input type="hidden" name="page" value="<?php echo $page ?>">
		<input type="hidden" name="sw" value="">
		
		<div id="bo_li_top_op">
			<div id="bo_list_total">
			    <span>Total <?php echo number_format($total_count) ?> |</span>
			    <?php echo $page ?> Page
			</div>

			<?php if ($rss_href || $write_href) { ?>
			<ul class="<?php echo isset($view) ? 'view_is_list btn_top' : 'btn_top2 btn_top';?>">
				<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b02">RSS</a></li><?php } ?>
				<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01">Writing</a></li><?php } ?>
				<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">Admin</a></li><?php } ?>
			    
			    <?php if ($is_admin == 'super' || $is_auth) {  ?>
				<li>
					<button type="button" class="btn_more btn_b04"><span class="sound_only">글쓰기 옵션 더보기</span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
					<?php if ($list_href || $is_checkbox || $write_href) { ?>
					<ul class="btn_bo_adm">
				        <?php if ($list_href) { ?>
				        <li><a href="<?php echo $list_href ?>" class="btn_b01 btn">list</a></li>
				        <?php } ?>
				        <?php if ($is_checkbox) { ?>
			            <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value">선택삭제</button></li>
			            <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value">선택복사</button></li>
			            <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value">선택이동</button></li>
			            <?php } ?>
			        </ul>
			        <?php } ?>
			        <script>
						$(document).ready(function(){
							$(".btn_more").click(function(){
								$(".btn_bo_adm").toggle();
							});
						});
					</script>
				</li>
			    <?php } ?>	
			</ul>
			<?php } ?>
		</div>

	    <div id="bo_li_01">
	    	<ul class="list_head">
		        <?php if ($is_checkbox) { ?>
		        <li class="sel">
		            <?php if ($is_checkbox) { ?>
				    <div class="list_chk all_chk">
				        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
				        <label for="chkall"><span class="sound_only">현재 페이지 게시물 </span>전체선택</label>
				    </div>
				    <?php } ?>
	            </li>
	            <?php } ?>
	            <li class="num">number</li>
	            <li class="tit">title</li>
	            <li class="wri">Writer</li>
	            <li class="view"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>Lookup</a></th>
	            <li class="date"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>date</a></th>
	    	</ul>
	    	
			<div id="bo_li_01" class="list_03">   
				<ul>
		            <?php for ($i=0; $i<count($list); $i++) { ?>
		            <li class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?>">
	                
	                <?php if ($is_checkbox) { ?>
	                <span class="sel bo_chk li_chk">
	                	<label for="chk_wr_id_<?php echo $i ?>"><span class="sound_only"><?php echo $list[$i]['subject'] ?></span></label>
	                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>">   	
	                </span>
	                <?php } ?>
	
	                <div class="num cnt_left li_status">
	                	<?php
			            if ($list[$i]['is_notice']) // 공지사항
			                echo '<strong class="notice_icon">공지</strong>';
			            else if ($wr_id == $list[$i]['wr_id'])
			                echo "<span class=\"bo_current\">열람중</span>";
			            else
							echo $list[$i]['num'];
			            ?>
	                </div>
	                
	                <div class="tit cnt_left bo_subject">
	                	<?php if ($is_category && $list[$i]['ca_name']) { ?>
		                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link">[<?php echo $list[$i]['ca_name'] ?>]</a>
		                <?php } ?>
		                
	                    <a href="<?php echo $list[$i]['href'] ?>" style="<?php echo $list[$i]['wr_reply_style']; ?>">
	                        <?php echo $list[$i]['icon_reply']; ?>
	                        <?php echo $list[$i]['subject'] ?>
	                        <?php
	                        if (isset($list[$i]['icon_hot'])) echo $list[$i]['icon_hot'];
	                        if (isset($list[$i]['icon_file'])) echo $list[$i]['icon_file'];
	                        if (isset($list[$i]['icon_link'])) echo $list[$i]['icon_link'];
	                        if (isset($list[$i]['icon_secret'])) echo $list[$i]['icon_secret'];
	                        ?>
	                        <?php if ($list[$i]['icon_new']) { ?>
				            <span class="new_icon">N<span class="sound_only">새글</span></span>
					        <?php } ?>
					        <?php if ($list[$i]['comment_cnt']) { ?>
				        	<span class="bo_cmt"><span class="sound_only">댓글</span><i class="far fa-comment-dots"></i> <?php echo $list[$i]['comment_cnt']; ?><span class="sound_only">개</span></span>
				        	<?php } ?>
	                    </a>
	                </div>
					<div class="wri cnt_left bo_info">
			        	<span class="sound_only">작성자</span><span class="bo_guest"><?php echo $list[$i]['name'] ?></span>
			        </div>
			        <div class="view cnt_left">
			        	<span class="sound_only">조회</span><span class="bo_view"><i class="far fa-eye"></i> <?php echo $list[$i]['wr_hit'] ?></span>
			        </div>
			        <div class="date cnt_left">
			        	<span class="sound_only">날짜</span><span class="bo_date"><i class="far fa-clock"></i> <?php echo $list[$i]['datetime2'] ?></span>
			        </div>	
		            </li>
		            <?php } ?>
	            <?php if (count($list) == 0) { echo '<li class="empty_table">There are no posts.</li>'; } ?>
				</ul>
	    	</div>
		</div>
	
		<?php if ($rss_href || $write_href) { ?>
		<ul class="<?php echo isset($view) ? 'view_is_list btn_top' : 'btn_top2 btn_top_bottom';?>">
			<?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b02">RSS</a></li><?php } ?>
			<?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01">Writing</a></li><?php } ?>
			<?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">Admin</a></li><?php } ?>
		    
		    <?php if ($is_admin == 'super' || $is_auth) {  ?>
			<li>
				<button type="button" class="btn_more2 btn_b04"><span class="sound_only">글쓰기 옵션 더보기</span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button>
				<?php if ($list_href || $is_checkbox || $write_href) { ?>
				<ul class="btn_bo_adm2">
			        <?php if ($list_href) { ?>
			        <li><a href="<?php echo $list_href ?>" class="btn_b01 btn">list</a></li>
			        <?php } ?>
			        <?php if ($is_checkbox) { ?>
		            <li><button type="submit" name="btn_submit" value="Delete selection" onclick="document.pressed=this.value">Delete selection</button></li>
		            <li><button type="submit" name="btn_submit" value="Delete Copy" onclick="document.pressed=this.value">Delete Copy</button></li>
		            <li><button type="submit" name="btn_submit" value="Delete Move" onclick="document.pressed=this.value">Delete Move</button></li>
		            <?php } ?>
		        </ul>
		        <?php } ?>
		        <script>
					$(document).ready(function(){
						$(".btn_more").click(function(){
							$(".btn_bo_adm").toggle();
						});
					});
				</script>
			</li>
		    <?php } ?>	
		</ul>
		<?php } ?>
		</form>
	</div>
	<div id="bo_li_op">
		<fieldset id="bo_sch">
		    <legend>게시물 검색</legend>
		    <form name="fsearch" method="get">
		    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
		    <input type="hidden" name="sca" value="<?php echo $sca ?>">
		    <input type="hidden" name="sop" value="and">
		    <label for="sfl" class="sound_only">검색대상</label>
		    <select name="sfl" id="sfl">
		        <?php echo get_board_sfl_select_options($sfl); ?>
		    </select>
		    <input name="stx" value="<?php echo $list['input_search'] ?>" placeholder="search word" required id="stx" class="sch_input" size="15" maxlength="20">
		    <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i> <span class="sound_only">검색</span></button>
		    </form>
		</fieldset>
	</div>
</div>

<?php if($is_checkbox) { ?>
<noscript>
<p>If you don't use JavaScript, <br> please note that you'll be de-selected directly without a separate check.</p>
</noscript>
<?php } ?>

<!-- 페이지 -->
<?php echo $write_pages; ?>

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
        alert(document.pressed + "Please select at least one post to.");
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
        if (!confirm("Do you really want to delete the selected post?\n\nOnce deleted, the data cannot be recovered.\n\nIf you select a post that has a reply, you must also select a reply to delete the post."))
            return false;

        f.removeAttribute("target");
        f.action = g5_bbs_url+"/board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
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
<!-- 게시판 목록 끝 -->
