$(function() {        
	$('input[type=text]').addClass('box_shadow');
	$('input[type=email]').addClass('box_shadow');
	$('input[type=url]').addClass('box_shadow');
	$("input[type=number]").addClass('box_shadow');
	$("input[type=search]").addClass('box_shadow');
	$("input[type=password]").addClass('box_shadow');
	
	if($.browser.msie){
		$('.login-form').validator();
		$('.request-form').validator();
		$('.register-form').validator();
	}	
});


