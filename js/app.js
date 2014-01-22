$(function() {
	
	
	$(window).on('scroll resize',function() {
		
        var scroll = $(window).scrollTop();
		
		if (scroll < 100 ) {
			$('body').removeClass('collapsed');
		}
		
		if (scroll >= 200 & !$('body').hasClass('collapsed')) {
			$('body').addClass('collapsed');			
		}
				
	});
	
	
	$('.hamburger').on('click',function(e) {
		e.preventDefault();
		$('#nav').toggleClass('open');
	});
	
});