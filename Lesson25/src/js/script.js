$(function() {
    $(".header-contacts__btn").on("click", () => {
        $(".overlay").show();
    });

    $(".contacts-block__btn").on("click", () => {
        $(".overlay").show();
    });
    $(".products-block__popup").on("click", () => {
        $(".overlay").show();
    });

    $(".popup-close").on("click", () => {
        $(".overlay").hide();
    });

    $(".form__input").mask("+7(999) 999-9999");

    new WOW().init();

    $(".production-slider_top").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: ".production-slider_bottom"
    });
    $(".production-slider_bottom").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".production-slider_top",
        focusOnSelect: true,
        arrows: true,
        prevArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_prod_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_prod slider-arrow_prod_right"></div>',
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3
            }
        }]
    });

    $(".production-slider_mobile").slick({
        arrows: true,
        mobileFirst: true,
        prevArrow: '<div class="slider-arrow slider-arrow_mobile slider-arrow_mobile_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_mobile slider-arrow_mobile_right"></div>'
    });

    $(".feedback-slider").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<div class="slider-arrow slider-arrow_feedback slider-arrow_feedback_left"></div>',
        nextArrow: '<div class="slider-arrow slider-arrow_feedback slider-arrow_feedback_right"></div>',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    let openclose = function() {
        $(".menu-link").toggleClass("menu-link_active");
        $(".menu").toggleClass("menu-active");
    };
    $(".menu-link").click(function() {
        $(".overlay").hide();
    });

    $(".menu-link").click(openclose);
    $(".menu a").click(openclose);

    ////////maps
    ymaps.ready(function() {
        let myMap = new ymaps.Map(
                "map", {
                    center: [54.752656, 56.002053],
                    zoom: 16
                }, {
                    searchControlProvider: "yandex#search"
                }
            ),
            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
            ),
            myPlacemark = new ymaps.Placemark(
                myMap.getCenter(), {
                    hintContent: "Добрый картон",
                    balloonContent: "ДК"
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: "default#image",
                    // Своё изображение иконки метки.
                    iconImageHref: "./img/contacts/mark.png",
                    // Размеры метки.
                    iconImageSize: [35, 35],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-30, -29]
                }
            );
        myMap.behaviors.disable("scrollZoom");

        myMap.geoObjects.add(myPlacemark);
    });

    $("form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "mailer/smart.php",
            data: $(this).serialize()
        }).done(function() {
            $(this)
                .find("input")
                .val("");
            alert("Заявка отправлена! Спасибо!");

            $("form").trigger("reset");
            $(".overlay").hide();

        });
        return false;
    });
});