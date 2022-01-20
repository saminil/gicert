<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>




<script language="JavaScript">

<!--
function startSearch(){
searchString = document.searchForm.searchText.value; 

if(searchString != ""){
searchEngine = document.searchForm.whichEngine.selectedIndex + 1;
finalSearchString = "";

if(searchEngine == 1){
finalSearchString = "http://search.naver.com/search.naver?where=nexearch&query=" + searchString;
}

if(searchEngine == 2){
finalSearchString = "http://search.empas.com/search/all.html?s=&f=&bd=&bw=&z=A&q=" + searchString +"&qn=&m=B&x=0&y=0";
}

if(searchEngine == 3){
finalSearchString = "http://search.daum.net/search?w=tot&DA=YZR&t__nil_searchbox=btn&sug=&o=&q=" + searchString;
}

if(searchEngine == 4){
finalSearchString = 
"http://saeru.kr/bbs/search.php?sfl=wr_subject||wr_content&sop=and&stx=" + searchString;
}
if(searchEngine == 5){
finalSearchString = "https://www.google.co.kr/search?newwindow=1&q="+searchString+"&ei=gThHVM68DsXYmAXk7ICoBw&emsg=NCSR&noj=1";
}
if(searchEngine == 6){
finalSearchString = "http://www.holybible.or.kr/cgi/biblesrch.php?VR=99&QR="+ searchString;
}
if(searchEngine == 7){
finalSearchString = "http://www.youtube.com/results?search_query="+ searchString;
}
window.open(encodeURI(finalSearchString),"_blank",'width=1000,height=680,toolbars=yes,resizable=yes,scrollbars=yes'); 

}
}

// -->

</script>
    <div id="hd_wrapper">

        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/liveLogo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>

<fieldset id="hd_sch">
<legend>사이트 내 전체검색</legend>
<form name="searchForm">
<table cellpadding=1 cellspacing=0 border=0>
<tr>
    	<td>
        	<select name="whichEngine" style="padding-left:5px;width:100%;height:24px;border:0;background:#fff;line-height:1.9em !important;line-height:1.6em">
				<option>네이버</option>
				<option>엠파스</option>
				<option>다음</option>
                <option selected>새루교회</option>
                <option>구글</option>
                <option>성경</option>
                <option>유튜브</option>
			</select>

		</td>
	<td>
     <input type="text" name="searchText" id="sch_stx" maxlength="20">
    <input type="button"  id="sch_submit" value="검색" onClick="startSearch()">
    </td>
    </tr>
</table>
</form>
</fieldset>


<?php
include_once(G5_THEME_PATH.'/tail.php');
?>