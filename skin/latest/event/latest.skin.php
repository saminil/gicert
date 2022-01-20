<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="latest animatedParent animateOnce" data-sequence="150">
	<header class="animated fadeInRightShort delay-1000" data-id="1">
		<h2><strong>New</strong> Event</h2>
		<a href="<?php echo get_pretty_url($bo_table); ?>" title="전체보기"><img src="<?php echo G5_THEME_URL ?>/img/btn_more02.png" alt="" /></a>
	</header>
	<div class="con">
		<?php for ($i=0; $i<$list_count; $i++) {  ?>       
		<p class="subj animated fadeInRightShort delay-1250 ellipsis" data-id="2"><?php echo $list[$i]['subject']; ?></p>
		<p class="animated fadeInRightShort delay-1250" data-id="3"><?php echo utf8_strcut(strip_tags($list[$i]['wr_8']), 88, '..'); ?></p>
		<p class="date animated fadeInRightShort delay-1250" data-id="4"><?php echo substr($list[$i]['wr_9'],5,5)." ~ ". substr($list[$i]['wr_10'],5,5)?></p>
		<a href="<?php echo $list[$i]['href'] ?>" class="animated fadeInRightShort delay-1250" data-id="5">자세히 보기</a>       
		<?php }  ?>
		<?php if ($list_count == 0) { //게시물이 없을 때  ?>
		<p>게시물이 없습니다.</p>
		<?php }  ?>
	</div>
</div>
   