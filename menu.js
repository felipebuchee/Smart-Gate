//seleciona os itens e deixa ativo
var menuItem = document.querySelectorAll('.item-menu')

function selecao() {
    menuItem.forEach((item)=>
        item.classList.remove('ativo'))

    this.classList.add('ativo')
}

menuItem.forEach((item)=>item.addEventListener('click', selecao))