$(function() {

    $('.header-contacts__btn').on('click', () => {
        $('.overlay').show();
    });

    $('.popup-close').on('click', () => {
        $('.overlay').hide();
    });

    $(".form__input").mask("+7(999) 999-9999");

    new WOW().init();


    $('.production-slider_top').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.production-slider_bottom'
    });
    $('.production-slider_bottom').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.production-slider_top',
        focusOnSelect: true,
        arrows: true,
        prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_prod_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_prod_right"></div>',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
            }
        }]
    });


    $('.production-slider_mobile').slick({
        arrows: true,
        mobileFirst: true,
        prevArrow: '<div class="slider-arrow slider-arrow_mobile slider-arrow_mobile_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_mobile slider-arrow_mobile_right"></div>'

    });


    $('.feedback-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<div class="slider-arrow slider-arrow_feedback slider-arrow_feedback_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_feedback slider-arrow_feedback_right"></div>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                }
            }

        ]
    });
    let openclose = function() {
        $('.menu-link').toggleClass('menu-link_active');
        $('.menu').toggleClass('menu-active');
    };
       $('.menu-link').click(function(){
        $('.overlay').hide();
       }) 

    $('.menu-link').click(openclose);
    $('.menu a').click(openclose);



    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);
    function init(){ 
        // Создание карты.    
        var myMap = new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчнию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [55.76, 37.64],
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            zoom: 7
        });
    }

});