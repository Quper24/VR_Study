let btn1 = document.getElementById('btn1'),
    btn2 = document.getElementById('btn2'),
    main = document.getElementById('main'),
    myList = document.getElementById('list'),
    ul = document.getElementsByTagName('ul'),
    story = myList.getElementsByClassName('item'),
    popup = document.getElementsByClassName('popup')[0],
    close = document.querySelector('.close');

console.log(btn1);
console.log(btn2);
console.log(story)

let addItem = () => {
    let newLi = document.createElement('li');
    newLi.innerHTML = 'Новая задача';
    newLi.className = 'item';
    myList.appendChild(newLi);
    popup.style.display = 'none';
}

let delItem = () => {
    myList.removeChild(story[0]);

    if (story.length == 0) {
        popup.style.display = 'block';
    }
}

btn1.addEventListener('click', addItem);
btn2.addEventListener('click', delItem);
close.addEventListener('click', () => {
    popup.style.display = 'none';
});


//Усложненное

let age = +prompt('Ваш возраст?'),
    name = prompt('Ваше имя?'),
    bul = confirm(`${name} вы подписаны на рассылку?`);

console.log(bul);

let accept = () => {
    if (age > 17 && bul == true) {
        alert(`${name} вам доступ к сайту разрешен`);
        console.log('Пользователь допущен');
    } else {
        main.style.display = 'none';
        alert(`${name} вам доступ к сайту запрещен`);

    };
};

accept();