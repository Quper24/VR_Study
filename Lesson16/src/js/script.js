$(function() {

    $('.header-contacts__btn').on('click', () => {
        $('.overlay').show('slow');
    });

    $('.popup-close').on('click', () => {
        $('.overlay').hide('slow');
    });

    $(".form__input").mask("+7(999) 999-9999");
});