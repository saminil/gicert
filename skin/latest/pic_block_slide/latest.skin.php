<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 500;
$thumb_height = 400;
$list_count = (is_array($list) && $list) ? count($list) : 0;
$tabmenu_row = sql_fetch("select bo_category_list from g5_board where bo_table='".$bo_table."'") ;
$tabmenu_str = $tabmenu_row["bo_category_list"] ;
$tabmenu_arr = array() ;
if($tabmenu_str != "") {
	$tabmenu_arr = explode("|", $tabmenu_str);
}
?>

<nav class="tab_menu catg">
	<? if(count($tabmenu_arr) > 0) { ?>
	<ul>
		<?
			for($i=0; $i<count($tabmenu_arr); $i++) {
		?>
		<li data-table-id="<?=$bo_table?>" data-ca-name="<?=$tabmenu_arr[$i]?>"><a href="javascript:"><?=$tabmenu_arr[$i]?></a></li>
		<?
			} 
		?>
	</ul>
	<? } else { ?>
	<p>It can get guidance such as management system certification, product certification, and ISO certification.</p>
	<? } ?>
</nav>

<div class="tab_con">
	<div class="pic_lt">		
		<div id="touchSlider">
			<ul>
			<?php
			for ($i=0; $i<$list_count; $i++) {
			$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
		
			if($thumb['src']) {
				$img = $thumb['src'];
			} else {
				$img = G5_IMG_URL.'/no_img.png';
				$thumb['alt'] = '이미지가 없습니다.';
			}
			$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
			?>
				<li class="galley_li">
					<a href="<?php echo $list[$i]['href'] ?>" class="lt_img"><?php echo $img_content; ?></a>
					<?php
					if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
		
					echo "<div class=\"lt_name\"><a href=\"".$list[$i]['href']."\"> ";
					if ($list[$i]['is_notice'])
						echo "<strong>".$list[$i]['subject']."</strong>";
					else
						echo $list[$i]['subject'];
					echo "</a></div>";		
					?>		
					<div class="lt_info">
						<span class="lt_nick"><?php echo $list[$i]['name'] ?></span>
						<span class="lt_date"><?php echo $list[$i]['datetime2'] ?></span>              
					</div>
				</li>
			<?php }  ?>
			</ul>
		</div>
	</div>
</div>

<script type="text/javascript">
	
	var size = $(window).width() ;
	if(size < 1024 && size > 800){
		int_view = 3 ;
	} else if(size <= 800 && size > 600) {
		int_view = 2 ;
	} else if(size <= 600) {
		int_view = 1 ;
	} else {
		int_view = 4 ;
	}

	(function($) {
		
		$(document).ready(function() {         
					
			// tab menu click
			$(document).on("click", ".tab_menu li", function(e) {
				e.preventDefault();
				$(".tab_menu li").removeClass("on");
				var on_index = $(this).index() ;
				$(".tab_menu li").eq(on_index).addClass("on");
				var bo_table = $(".tab_menu li").eq(on_index).attr("data-table-id");
				var ca_name = $(".tab_menu li").eq(on_index).attr("data-ca-name");
				//alert("<?=$latest_skin_url?>/main.product.slide.json.php");
				$.ajax({
					url : "<?=$latest_skin_url?>/main.product.slide.json.php",
					type : "post",
					data : {"bo_table":bo_table, "ca_name":ca_name},
					async : false,
					dataType : "html",
					success : function(rst) {
						//alert(rst);
						$("#touchSlider").html(rst);
						$("#touchSlider").touchSlider({  
							speed : 800,
							gap: 20,
							view : int_view
						}); 
						return ;
					},
					error : function(xhr, ajaxOptions, throwns) {
						alert(xhr.responseText) ;
					}
				});

			});

			$("#touchSlider").touchSlider({  
				speed : 800,
				gap: 20,
				useMouse: false,
				view : int_view
			}); 

		});

	})(jQuery);


</script>