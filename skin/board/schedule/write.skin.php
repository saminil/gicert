<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/custom.css">');
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/colorselector/bootstrap-colorselector.css">');
add_javascript('<script src="'.$board_skin_url.'/colorselector/bootstrap-colorselector.js"></script>');

$color_patten = array('#3788d8', '#A0522D', '#CD5C5C', '#FF4500', '#DC143C', '#FF8C00', '#C71585');
?>

<div>

	<blockquote><h3><?php echo $g5['title'] ?></h3></blockquote>

	<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off">
	<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
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

			$option .= '<div class="custom-control custom-checkbox custom-control-inline">'."\n".'<input type="checkbox" class="custom-control-input" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label class="custom-control-label" for="notice">공지</label></div>';
		}

		if ($is_html) {
			if ($is_dhtml_editor) {
				$option_hidden .= '<input type="hidden" value="html1" name="html">';
			} else {
				$option .= '<div class="custom-control custom-checkbox custom-control-inline">'."\n".'<input type="checkbox" class="custom-control-input" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label class="custom-control-label" for="html">HTML</label></div>';
			}
		}

		if ($is_secret) {
			if ($is_admin || $is_secret==1) {
				$option .= '<div class="custom-control custom-checkbox custom-control-inline">'."\n".'<input type="checkbox" class="custom-control-input" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label class="custom-control-label" for="secret">비밀글</label></div>';
			} else {
				$option_hidden .= '<input type="hidden" name="secret" value="secret">';
			}
		}

		if ($is_mail) {
			$option .= '<div class="custom-control custom-checkbox custom-control-inline">'."\n".'<input type="checkbox" class="custom-control-input" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label class="custom-control-label" for="mail">답변메일받기</label></div>';
		}
	}

	echo $option_hidden;
	?>

	<?php if ($is_category) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">분류</label>
		<div class="col-sm-10">
			<select class="form-control" name="ca_name" id="ca_name" required>
				<option value="">분류를 선택하세요</option>
				<?php echo $category_option ?>
			</select>
		</div>
	</div>
	<?php } ?>

	<?php if ($is_name) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">이름</label>
		<div class="col-sm-10">
			<input class="form-control" type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required placeholder="이름">
		</div>
	</div>
	<?php } ?>

	<?php if ($is_password) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">비밀번호</label>
		<div class="col-sm-10">
			<input class="form-control" type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> placeholder="비밀번호">
		</div>
	</div>
	<?php } ?>

	<?php if ($is_email) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">이메일</label>
		<div class="col-sm-10">
			<input class="form-control" type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email" placeholder="이메일">
		</div>
	</div>
	<?php } ?>

	<?php if ($is_homepage) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">홈페이지</label>
		<div class="col-sm-10">
			<input class="form-control" type="url" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" placeholder="홈페이지">
		</div>
	</div>
	<?php } ?>

	<?php if ($option) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">옵션</label>
		<div class="col-sm-10 pt-2">
			<?php echo $option ?>
		</div>
	</div>
	<?php } ?>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">날짜</label>
		<div class="col-sm-10">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">시작일</span>
				</div>
				<input class="form-control" type="date" name="wr_1" value="<?php echo $wr_1 ? $wr_1 : G5_TIME_YMD; ?>" required>
				<div class="input-group-prepend">
					<span class="input-group-text">종료일</span>
				</div>
				<input class="form-control" type="date" name="wr_2" value="<?php echo $wr_2 ? $wr_2 : G5_TIME_YMD; ?>" required>
			</div>
		</div>
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">제목</label>
		
		<div class="col-sm-10">
			<div id="autosave_wrapper">
				<div class="input-group">
					<input class="form-control" type="text" name="wr_subject" value="<?php echo $subject ?>" id="wr_subject" required maxlength="255" placeholder="제목">

					<select id="colorselector" name="wr_3">
						<?php foreach($color_patten as $color) { ?>
						<option value="<?php echo $color; ?>" data-color="<?php echo $color; ?>" <?php if($color==$wr_3) echo ' selected="selected"';?>><?php echo $color; ?></option>
						<?php } ?>
					</select>
					<script>
						$("#colorselector").colorselector();
					</script>

					<?php if ($is_member) { // 임시 저장된 글 기능 ?>
					<script src="<?php echo G5_JS_URL; ?>/autosave.js"></script>
					<?php if($editor_content_js) echo $editor_content_js; ?>
					<div class="input-group-append">
						<button type="button" id="btn_autosave" class="btn btn-outline-secondary" style="width:140px">임시저장 (<span id="autosave_count"><?php echo $autosave_count; ?></span>)</button>
					</div>
					<?php } ?>
				</div>

				<div id="autosave_pop">
					<strong>임시 저장된 글 목록</strong>
					<ul></ul>
					<div><button type="button" class="autosave_close">닫기</button></div>
				</div>
			</div>
		</div>        
	</div>

	<div class="form-group row">
		<label class="col-sm-2 col-form-label">내용</label>
		<div class="wr_content col-sm-10 <?php echo $is_dhtml_editor ? $config['cf_editor'] : ''; ?>">
			<?php if($write_min || $write_max) { ?>
			<!-- 최소/최대 글자 수 사용 시 -->
			<small>이 게시판은 최소 <strong><?php echo $write_min; ?></strong>글자 이상, 최대 <strong><?php echo $write_max; ?></strong>글자 이하까지 글을 쓰실 수 있습니다.</small>
			<?php } ?>
			<?php if(!$is_dhtml_editor) $editor_html = str_replace('<textarea id="wr_content" name="wr_content"', '<textarea id="wr_content" name="wr_content" class="form-control"', $editor_html); ?>
			<?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출 ?>
			<?php if($write_min || $write_max) { ?>
			<!-- 최소/최대 글자 수 사용 시 -->
			<div class="d-flex justify-content-end"><small><span id="char_count"></span> 글자</small></div>
			<?php } ?>
		</div>
	</div>

	<?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">링크<?php echo $i?></label>

		<div class="col-sm-10">
			<input class="form-control" type="url" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" placeholder="링크주소를 입력해주세요.">
		</div>
	</div>
	<?php } ?>

	<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">파일<?php echo $i+1 ?></label>

		<div class="col-sm-10">
			<div class="input-group">
				<div class="custom-file">
					<input type="file" class="custom-file-input" name="bf_file[]" id="bf_file_<?php echo $i+1 ?>" title="<?php echo $upload_max_filesize ?> 이하만 업로드 가능" data-default="<?php echo ($w == 'u') ? $file[$i]['source'] : ''; ?>">
					<label class="custom-file-label" for="bf_file_<?php echo $i+1 ?>"><?php if($w == 'u' && $file[$i]['file']) echo $file[$i]['source']; else echo '파일을 선택해주세요.'; ?></label>
				</div>

				<?php if ($is_file_content) { ?>
				<input class="form-control" type="text" name="bf_content[]" value="<?php echo ($w == 'u') ? $file[$i]['bf_content'] : ''; ?>" title="파일 설명을 입력해주세요." class="full_input frm_input" size="50" placeholder="파일 설명을 입력해주세요.">
				<?php } ?>
			</div>

			<?php if($w == 'u' && $file[$i]['file']) { ?>
			<div class="custom-control custom-checkbox custom-control-inline mt-1">
				<input type="checkbox" class="custom-control-input" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1">
				<label class="custom-control-label custom-checkbox" for="bf_file_del<?php echo $i ?>">파일 삭제</label>
			</div>
			<?php } ?>
		</div>
	</div>
	<?php } ?>

	<?php if ($is_use_captcha) { //자동등록방지  ?>
	<div class="form-group row">
		<label class="col-sm-2 col-form-label">보안</label>

		<div class="col-sm-10">
			<?php echo $captcha_html ?>
		</div>
	</div>
	<?php } ?>

	<div class="d-flex justify-content-end mb-4">
		<div class="btn-group xs-100">
			<input type="submit" value="작성완료" id="btn_submit" accesskey="s" class="btn btn-primary">
			<a href="<?php echo get_pretty_url($bo_table); ?>" class="btn btn-outline-primary">취소</a>
		</div>
	</div>

	</form>

</div>

<script>
<?php if($write_min || $write_max) { ?>
// 글자수 제한
var char_min = parseInt(<?php echo $write_min; ?>); // 최소
var char_max = parseInt(<?php echo $write_max; ?>); // 최대
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
	<?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

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

	if (document.getElementById("char_count")) {
		if (char_min > 0 || char_max > 0) {
			var cnt = parseInt(check_byte("wr_content", "char_count"));
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

	<?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

	document.getElementById("btn_submit").disabled = "disabled";

	return true;
}

$('.custom-file-input').on('change', function() {
	var fileName = $(this).data("default");

	if(this.files[0].size > <?php echo $board['bo_upload_size']; ?>) {
		alert("선택한 파일의 용량이 <?php echo $upload_max_filesize ?> 를 초과하였습니다!");
		$(this).val('');
	}else{
		fileName = $(this).val().split('\\').pop();
	}

	if(fileName=="") fileName = "파일을 선택해주세요.";

	$(this).next('.custom-file-label').addClass("selected").html(fileName); 
});

</script>
