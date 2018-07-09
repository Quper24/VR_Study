//меню спасибо Артему Исламову (css-фичи)

let navMenu = document.querySelector('.menu-nav'),
    btn = document.querySelector('.menu-btn');

btn.addEventListener('click', function(e) {
    e.preventDefault();
    btn.classList.toggle('menu-btn_active');
    navMenu.classList.toggle('menu-nav_active');
})


//слайдер

let secondSlide = 1,
    slides = document.getElementsByClassName('slider-item');

showSlides(secondSlide);

function showSlides(n) {
    if (n > slides.length) {
        secondSlide = 1;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slides[secondSlide - 1].style.display = 'block';

    function changeSlides(n) {
        slides[n].style.display = 'none';
    }
}

function nextSlides(n) {
    showSlides(secondSlide += 1);
}

let timerID = setInterval(
    function() {
        nextSlides(1);
        slides[secondSlide - 1].classList.add('bounceInDown');
    }, 5000);


//плавная прокрутка

let linkNav = document.querySelectorAll('[href^="#"]'),
    V = 1;
for (let i = 0; i < linkNav.length; i++) {
    linkNav[i].addEventListener('click', function(e) {
        e.preventDefault();
        let w = window.pageYOffset,
            hash = this.href.replace(/[^#]*(.*)/, '$1');
        t = document.querySelector(hash).getBoundingClientRect().top,
            start = null;
        requestAnimationFrame(step);
        navMenu.classList.toggle('menu-nav_active');
        btn.classList.toggle('menu-btn_active');
        function step(time) {
            if (start === null) start = time;
            let progress = time - start,
                r = (t < 0 ? Math.max(w - progress / V, w + t) : Math.min(w + progress / V, w + t));
            window.scrollTo(0, r);
            if (r != w + t) {
                requestAnimationFrame(step)
            } else {
                location.hash = hash
            }
        }
    }, false);
}