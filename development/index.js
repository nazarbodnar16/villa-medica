$(document).ready(function () {
	$('.bg-img').each(function() {
		$(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
	});

	$('.open-menu').click(function(){
		$('body').toggleClass('menu-opened');
		return false;
	});//btn-open-manu
	$('.btn-scroll').on('click', function(e) {
		e.preventDefault();
		if (!$('body').hasClass("small-header")) {
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 170}, 500, 'linear');
		} else {
			$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 50}, 500, 'linear');
		}

		$('body').removeClass('menu-opened');
	});

	$('.btn-scroll.scroll-top').on('click', function(e) {
		e.preventDefault();
		$('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top - 100}, 500, 'linear');
	});

	/*btn-scroll*/


	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 1,
		pagination: '.swiper-pagination',
		autoHeight: true,
		paginationClickable: true,
		loop: true,
	});


	$(window).on('scroll', function(){
		if ($(window).scrollTop() >= $('.visual').innerHeight()) {
			$('body').addClass('small-header');
		}
		else {
			$('body').removeClass('small-header');
		}
	});
});



