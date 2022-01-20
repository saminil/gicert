$(document).ready(function() { 
    var slider = $('.tab_con2 .slider').bxSlider(); 
    var mql = window.matchMedia("screen and (max-width: 1920px)"); 
    mql.addListener(function(e) { 
        if(!e.matches) { 
            slider.reloadSlider();
        } 
    }); 
});

$(document).ready(function(){
	$('.tab_con2 .slider').bxSlider({
		mode: 'horizontal',
		auto: false,
		autoControls: false,
		stopAutoOnClick: false,
		speed: 300, 
		pager: true,
		touchEnabled: true,		
		pause: 8000,
        controls: false,
	});
});
