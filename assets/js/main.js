$(document).ready(function(){
    $('.header__topbar__left__item__icon').each(function () {
        $(this).click(function () {
            $('.header__topbar__left__item__icon').toggleClass('d-none');
            $('.language').toggleClass('d-none');
            $(this).removeClass('d-none');
            $(this).parent().find('.header__topbar__left__item__infor').toggleClass('d-block');
        });
    });


    $('.content__sell__slider').slick({
        autoplay: true,
        autoplaySpeed: 9000,
        slideToShow: 2,
        arrows: false,
    });
    $('#prev').on('click', function() {
        $('.product-slider').slick('slickPrev');
    });
    $('#next').on('click', function() {
        $('.product-slider').slick('slickNext');
    });

    /* Add a Click event listener to btn-select */
    $('.header__navbar__left__button').click(function () {
        $('.header__navbar__left-options').slideToggle('slow')
    });
    $('.header__navbar__right__button').click(function () {
        $('.header__navbar__right-options').slideToggle('slow')
    });
});

