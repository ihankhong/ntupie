$(document).ready(function() {
	$(".owl-carousel").owlCarousel({
		items : 1,
		loop : true,
		autoplay : true,
		autoplayHoverPause:true,
		dots: true,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		animateOut: 'slideOutDown',
    	animateIn: 'bounceInRight',
		responsive:{
			0:{
				nav:false,
			},
			768:{
				nav:true,
			}
		}
	});
});