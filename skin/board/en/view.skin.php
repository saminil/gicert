<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<article id="bo_v" style="width:<?php echo $width; ?>">
	<div class="bo_v_innr">
	    <header class="bo_top_hd">
	        <h2 id="bo_v_title">
	            <?php if ($category_name) { ?><span class="bo_v_cate">[<?php echo $view['ca_name']; // 분류 출력 끝 ?>]</span><?php } ?>
	            <span class="bo_v_tit"><?php echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력 ?></span>
	        </h2>
	        <div id="bo_v_info">
	        	<h2>페이지 정보</h2>
	        	<div class="profile_info">
	        		<div class="profile_img"><?php echo get_member_profile_img($view['mb_id']) ?></div>
	        		<span class="sound_only">작성자</span><?php echo $view['name'] ?>
	        		<span class="ip"><?php if ($is_ip_view) { echo "&nbsp;($ip)"; } ?></span>
	        		<span class="sound_only">조회</span><strong><i class="fa fa-eye" aria-hidden="true"></i> <?php echo number_format($view['wr_hit']) ?></strong>
	        		<span class="sound_only">작성일</span><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></span>
	        		<a href="#bo_vc" class="bo_vc_btn"><span class="sound_only">댓글</span><i class="far fa-comment-dots"></i> <?php echo number_format($view['wr_comment']) ?></a>
	        	</div>
	        </div>
	    </header>
	    
	    <section id="bo_v_atc">
        	<h2 id="bo_v_atc_title">본문</h2>
        	
        	<?php if ( $good_href || $nogood_href || $scrap_href || $sns_msg) { ?>
			<aside id="bo_v_aside">
		        <div id="bo_v_act">
		        	
		        	<?php if ( $good_href || $nogood_href) { //추천, 비추천 ?>
		        		
		            <?php if ($good_href) { ?>
		            <span class="bo_v_act_gng">
		                <a href="<?php echo $good_href.'&amp;'.$qstr ?>" id="good_button" class="bo_v_good"><i class="far fa-smile-wink"></i><br><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></a>
		                <b id="bo_v_act_good">이 글을 추천하셨습니다</b>
		            </span>
		            <?php } ?>
		            
		            <?php if ($nogood_href) { ?>
		            <span class="bo_v_act_gng">
		                <a href="<?php echo $nogood_href.'&amp;'.$qstr ?>" id="nogood_button" class="bo_v_nogood"><i class="far fa-angry"></i><br><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></a>
		                <b id="bo_v_act_nogood"></b>
		            </span>
		            <?php } ?>
	
		        <?php } else { if($board['bo_use_good'] || $board['bo_use_nogood']) { ?>

		        <?php if($board['bo_use_good']) { ?><span class="bo_v_good"><i class="far fa-smile-wink"></i><br><span class="sound_only">추천</span><strong><?php echo number_format($view['wr_good']) ?></strong></span><?php } ?>
		        <?php if($board['bo_use_nogood']) { ?><span class="bo_v_nogood"><i class="far fa-angry"></i><br><span class="sound_only">비추천</span><strong><?php echo number_format($view['wr_nogood']) ?></strong></span><?php } ?>

		        <?php
		            }
		        }
		        ?>
		        <?php if ($scrap_href) { ?><a href="<?php echo $scrap_href; ?>" target="_blank" class="btn_scrap" onclick="win_scrap(this.href); return false;"><i class="fa fa-thumb-tack" aria-hidden="true"></i><span class="sound_only">스크랩</span></a><?php } ?>
            	<div id="bo_v_share">
            		<?php include_once($board_skin_path. "/view.sns.skin.php"); ?>
		    	</div>
	    	</aside>
	        <?php } ?>
	        
	        <?php
	        // 파일 출력
	        $v_img_count = count($view['file']);
	        if($v_img_count) {
	            echo "<div id=\"bo_v_img\">\n";
	
	            for ($i=0; $i<=count($view['file']); $i++) {
	                if ($view['file'][$i]['view']) {
	                    //echo $view['file'][$i]['view'];
	                    echo get_view_thumbnail($view['file'][$i]['view']);
	                }
	            }
	            echo "</div>\n";
			}
			?>
			
			<div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        	<?php //echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>

        	<?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>
        	
        	<?php
		    if ($view['file']['count']) {
		        $cnt = 0;
		        for ($i=0; $i<count($view['file']); $i++) {
		            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
		                $cnt++;
		        }
		    }
			?>
			
			<?php if($cnt) { ?>
		    <section id="bo_v_file">
		        <h2>Attachments</h2>
		        <ul>
		        <?php
		        // 가변 파일
		        for ($i=0; $i<count($view['file']); $i++) {
		            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
		         ?>
		            <li>
		                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
		                    <i class="fa fa-download" aria-hidden="true"></i>
		                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
		                    <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
		                </a>
		                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>Downloads</span> |
		                <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
		            </li>
		        <?php
		            }
		        }
		         ?>
		        </ul>
		    </section>
		    <?php } ?>
		    
		    <?php if(isset($view['link'][1]) && $view['link'][1]) { ?>
		    <!-- 관련링크 시작 { -->
		    <section id="bo_v_link">
		        <h2>link</h2>
		        <ul>
		        <?php
		        // 링크
		        $cnt = 0;
		        for ($i=1; $i<=count($view['link']); $i++) {
		            if ($view['link'][$i]) {
		                $cnt++;
		                $link = cut_str($view['link'][$i], 70);
				?>
					<li>
		                <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
		                    <i class="fa fa-link" aria-hidden="true"></i>
		                    <strong><?php echo $link ?></strong>
		                </a>
		                <span class="bo_v_link_cnt"><?php echo $view['link_hit'][$i] ?>connects</span>
		            </li>
		        <?php
		            }
		        }
		         ?>
		        </ul>
		    </section>
		    <!-- } 관련링크 끝 -->
		    <?php } ?>
		    
		    <?php if ($prev_href || $next_href) { ?>
		    <ul class="bo_v_nb">
		        <?php if ($prev_href) { ?><li class="bo_v_prev"><a href="<?php echo $prev_href ?>"><i class="fa fa-angle-left" aria-hidden="true"></i> Prev <br><span><?php echo $prev_wr_subject;?></a></span></li><?php } ?>
		        <?php if ($next_href) { ?><li class="bo_v_next"><a href="<?php echo $next_href ?>">Next<i class="fa fa-angle-right" aria-hidden="true"></i><br><span><?php echo $next_wr_subject;?></a></span></li><?php } ?>
		    </ul>
		    <?php } ?>
		</section>
	</div>
	
	<div id="bo_btn">
		<div id="bo_v_option">
		<?php echo $view['btn_option'] // 게시물 옵션 ?>
		<?php if($update_href || $delete_href || $copy_href || $move_href || $search_href) { ?>
		<ul id="bo_v_opt">
			<?php ob_start(); ?>
	    	<?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="btn_b01">Modify</a></li><?php } ?>
	    	<?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" onclick="del(this.href); return false;" class="btn_b01">Delete</a></li><?php } ?>
	    	<?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" onclick="board_move(this.href); return false;" class="btn_b01">Copy</a></li><?php } ?>
	    	<?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" onclick="board_move(this.href); return false;" class="btn_b01">Move</a></li><?php } ?>
	    	<?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01">Search</a></li><?php } ?>
			<?php $link_buttons = ob_get_contents(); ob_end_flush(); ?>
		</ul>
		<?php } ?>
		</div>
		
		<div class="btn_top top">
			<a href="<?php echo $list_href ?>" class="btn_b02">List</a>
			<?php if ($reply_href) { ?><a href="<?php echo $reply_href ?>" class="btn_b02">Answer</a><?php } ?>
			<?php if ($write_href) { ?><a href="<?php echo $write_href ?>" class="btn_b01 btn">Writing</a><?php } ?>
		</div>
	</div>
	
	<?php
    // 코멘트 입출력
    include_once(G5_BBS_PATH.'/view_comment.php');
	?>
</article>

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("You do not have download privileges.\nIf you are a \n member, log in and try it.");
            return false;
        }

        var msg = "Download the file and the points will be deducted (<?php echo number_format($board['bo_download_point']) ?>points).\n\nPoint will be deducted once per post and will not be duplicated next time you download it.\n\nDo you still want to download it?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<!-- 게시글 보기 끝 -->

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
    
	//게시글 옵션
    $(".bo_v_opt").click(function(){
        $("#bo_v_opt").fadeIn();
    });

});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                 if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("You dismissed this article.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("I like this article.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>	    