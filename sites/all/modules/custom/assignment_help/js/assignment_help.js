var $ = jQuery;

$(document).ready(function () {
	$('#noofpages').bootstrapNumber({
		upClass: 'success',
		downClass: 'danger'
	})
});

$(window).scroll(function(){
	if ($(window).scrollTop() >= 150) {
		 $('.header-nav').addClass('fixed-header');
		 $('.header-student-post-form-wrapper').addClass('header-hide');
	}
	else {
		 $('.header-nav').removeClass('fixed-header');
		 $('.header-student-post-form-wrapper').removeClass('header-hide');
	}
});