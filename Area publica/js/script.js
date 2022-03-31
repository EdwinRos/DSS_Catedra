

let hidetext_btn = document.getElementById('hidetext_btn');

let hidetext = document.getElementById('hidetext');

hidetext_btn.addEventListener('click', toggleText);

function toggleText() {
    hidetext.classList.toggle('show');

if(hidetext.classList.contains('show')){
    hidetext_btn.innerHTML = 'Mostrar menos';
}
else{
    hidetext_btn.innerHTML = 'Mostrar mas'
}
}



let hidetext_btn1 = document.getElementById('hidetext_btn1');

let hidetext1 = document.getElementById('hidetext1');

hidetext_btn1.addEventListener('click', toggleText1);

function toggleText1() {
    hidetext1.classList.toggle('show');

if(hidetext1.classList.contains('show')){
    hidetext_btn1.innerHTML = 'Mostrar menos';
}
else{
    hidetext_btn1.innerHTML = 'Mostrar mas'
}
}


let hidetext_btn2 = document.getElementById('hidetext_btn2');

let hidetext2 = document.getElementById('hidetext2');

hidetext_btn2.addEventListener('click', toggleText2);

function toggleText2() {
    hidetext2.classList.toggle('show');

if(hidetext2.classList.contains('show')){
    hidetext_btn2.innerHTML = 'Mostrar menos';
}
else{
    hidetext_btn2.innerHTML = 'Mostrar mas'
}
}


