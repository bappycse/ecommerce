(function ($) {
	$('.has-dropdown>a').on('click', function () {
		$(this).parent().toggleClass('active');
	});

	$(document).click(function (event) {
		if (!$(event.target).closest($('#nav-aside')).length) {
			if ($('#nav-aside').hasClass('active')) {
				$('#nav-aside').removeClass('active');
				$('#nav').removeClass('shadow-active');
			} else {
				if ($(event.target).closest('.aside-btn').length) {
					$('#nav-aside').addClass('active');
					$('#nav').addClass('shadow-active');
				}
			}
		}
	});

	$('.nav-aside-close').on('click', function () {
		$('#nav-aside').removeClass('active');
		$('#nav').removeClass('shadow-active');
	});


	$('.search-btn').on('click', function () {
		$('#nav-search').toggleClass('active');
	});

	$('.search-close').on('click', function () {
		$('#nav-search').removeClass('active');
	});

	$.stellar({
		responsive: true
	});

	$(window).scroll(function () {
		if ($(this).scrollTop() > 50) {
			$('#move-to-top').fadeIn();
		} else {
			$('#move-to-top').fadeOut();
		}
	});

	$('#move-to-top').click(function () {
		$('#move-to-top').css("display", "none");
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});

	$('#load-more-cat').on('click',function(e){
		$('.related-category .box-hidden').css('display','block');
		$(this).hide().fadeOut(500);
		$('.related-category a#load-more-cat-up').css('display','block');
	});
	$('#load-more-cat-up').on('click',function(e){
		$('.related-category .box-hidden').css('display','none');
		$('.related-category #load-more-cat').css('display','block');
		$(this).hide();
		
	});

	$('#load-more-video').on('click',function(e){
		$(".video-section .box-hidden").css('display','block');
		$(this).hide().fadeOut(500);
		$(".video-section a#load-more-video-up").css('display','block')

	});

	$('#load-more-video-up').on('click',function(e){
		$('.video-section .box-hidden').css('display','none');
		$('.video-section a#load-more-video-up').css('display','block');
		$(this).hide();
		$(".video-section a#load-more-video").css('display','block')
	});

})(jQuery);



