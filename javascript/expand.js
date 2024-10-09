//expande o menu

var expand = document.querySelector('#expand')
var menuLateral = document.querySelector ('.menu-lat')

expand.addEventListener('click', function(){
    menuLateral.classList.toggle('expandir')
})