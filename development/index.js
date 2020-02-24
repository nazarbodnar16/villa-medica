$(document).ready(function () {
	$('.bg-img').each(function() {
		$(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
	});

	$('.open-menu').click(function(){
		$('body').toggleClass('menu-opened');
		return false;
	});//btn-open-manu


	$('.main-nav-list li').each(function(){
		if ($(this).find('.drop').length){
			$(this).prepend('<span class="opener"></span>');
		}
	});//main-nav-dropdown

	$('.main-nav-list .opener').click(function(){
		if ($(this).parent().hasClass('opened')) {
			$(this).parent().removeClass('opened');
			$(this).siblings('.drop').stop().slideUp(300);
		} else{
			$(this).parent().addClass('opened').siblings('.opened').removeClass('opened').children('.drop').stop().slideUp(300);
			$(this).siblings('.drop').stop().slideDown(300);
		};
		return false;
	});//main-nav-accordion



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


	var swiper = new Swiper('.bottom-slider-swiper', {
		slidesPerView: 1,
		speed: 1000,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		loop: true,
		freeMode: true,
		breakpoints: {
			640: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 3,
			},
			1024: {
				slidesPerView: 5,
			}
		}
	});

	var swiper = new Swiper('.price-slider-swiper', {
		slidesPerView: 1,
		speed: 1000,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		loop: true
	});

	var swiper = new Swiper('.cl-slider-swiper', {
		slidesPerView: 1,
		speed: 1000,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		loop: true,
		spaceBetween: 30,
		breakpoints: {
			640: {
				slidesPerView: 1,
			},
			768: {
				slidesPerView: 2,
				spaceBetween: 20,
			},
			1024: {
				slidesPerView: 3,
				spaceBetween: 20,
			}
		}
	});


	var interleaveOffset = 0.5;

	var swiperOptions = {
		loop: true,
		speed: 1000,
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
	};

	var swiper = new Swiper(".visual-swiper", swiperOptions);



/*	$(window).on('scroll', function(){
		if ($(window).scrollTop() >= $('.visual').innerHeight()) {
			$('body').addClass('small-header');
		}
		else {
			$('body').removeClass('small-header');
		}
	});*/

	
$(function(){
    var Accordion = function(el, multiple) {
        this.el = el || {};
        this.multiple = multiple || false;

        // Variables
        var link = this.el.find('.link');
        // Eventos
        link.on('click', {el: this.el, multiple: this.multiple},this.dropdown)
    }

    Accordion.prototype.dropdown = function(e) {
        var $el = e.data.el;
            $this = $(this),
            $next = $this.next();

        // Desencadena evento de apertura en los elementos siguientes a la clase link = ul.submenu
        $next.slideToggle();
        // Agregar clase open a elemento padre del elemento con clase link = li
        $this.parent().toggleClass('open');
        
        //Parametro inicial que permite ver 1 solo submenu abierto 
        if(!e.data.multiple){
            $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
        }
    
    }
    // Elegir submenus multiples (true) submenus uno a la vez (false)
    var accordion = new Accordion($('#accordion'), false);
});
});



