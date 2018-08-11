$(function() {

    $('.header-contacts__btn').on('click', () => {
        $('.overlay').show();
    });

    $('.popup-close').on('click', () => {
        $('.overlay').hide();
    });

    $(".form__input").mask("+7(999) 999-9999");
});