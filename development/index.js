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
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
    /*btn-scroll*/


    var swiper = new Swiper('.team .swiper-container', {
        slidesPerView: 1,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        loop: true,
    });

    var testimonialSwiper = new Swiper('.testimonial .swiper-container', {
        slidesPerView: 1,
        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true,
    });
});



