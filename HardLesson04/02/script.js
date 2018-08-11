let width,
    height,
    btn = document.querySelector('.button'),
    window_size = "height=400, width=400",
    myWindow;

let square = () => {
    window.open('newwindow.html', 'newWindow', 'height=400, width=400');

}



btn.addEventListener('click', square);