$(function(){ // 탭메뉴
	var tab = $('.tab01 ul');
	var tabMenu = tab.find('> li');
	var contents = $('.tab_con > article');
	
	tabMenu.on('click', function(){
		tabMenu.removeClass('on');
		$(this).addClass('on');
		contents.css('display', 'none');
		var i = $(this).index();
		contents.eq(i).css('display', 'block');
	});
});