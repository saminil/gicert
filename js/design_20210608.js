$(function(){ // 탭메뉴
	var tab = $('.tab01 ul');
	var tabMenu = tab.find('> li');
	var contents = $('.tab_con > article');
    /* 4depth tabmenu 변수추가 시작 20210604 책임자 : 이혜정 */
    var tabSub = $('.tab02 ul');
	var tabMenuSub = tabSub.find('> li');
	var contentsSub = $('.tab_con2 > section');
    /* 4depth tabmenu 변수추가 종료 20210604 책임자 : 이혜정 */  
	
	tabMenu.on('click', function(){
		tabMenu.removeClass('on');
		$(this).addClass('on');
		contents.css('display', 'none');
		var i = $(this).index();
		contents.eq(i).css('display', 'block');
	});
    
    /* 4depth tabmenu js추가 시작 20210604 책임자 : 이혜정*/
    tabMenuSub.on('click', function(){
		tabMenuSub.removeClass('on');
		$(this).addClass('on');
        
		contentsSub.css('display', 'none'); 
        var e = $(this).index();
		contentsSub.eq(e).css('display', 'block');
	});
});