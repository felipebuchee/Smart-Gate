
var formReg = document.querySelector('.form-reg');
var btnCadt = document.querySelector('.btnCadt');
var fechar = document.querySelector('.fechar');

btnCadt.addEventListener('click', ()=>{
    telaLogin.classList.add('ativoTela');
});

fechar.addEventListener('click', ()=>{
    telaLogin.classList.remove('ativoTela');
});
