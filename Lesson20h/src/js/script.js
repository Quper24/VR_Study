$(function() {


    $(".form__input").mask("+7(999) 999-9999");


    imgHead = [
        'img/main/main-bg.jpg',
        'img/main/double-bg.jpg',
    ];
    i = 1

    function csaHead() {

        if (i > (imgHead.length - 1)) {
            i = 0;
        }

        $('.main').animate({ 'opacity': '1' }, 1200, function() {
            $('.main').css({ 'background': 'url(' + imgHead[i] + ')' });
            i++;
        });
        $('.main').animate({ 'opacity': '1' }, 1200);
    }
    var intervalCsaHead = setInterval(csaHead, 5000);


    img = ['img/main/main2-img.png', 'img/main/main-img.png'],
        arr = 1;

    setInterval(function() {
        if (arr == 0) { arr = 1; } else arr = 0;
        $('.main-img').animate({ 'opacity': '1' }, 1200, function() {
            $('.main-img').html('<img src="' + img[arr] + '" alt="коробки">');
        });
        $('.main-img').animate({ 'opacity': '1' }, 1200);

    }, 5000);
});