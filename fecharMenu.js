var formReg = document.querySelector('.form-reg');
var btnCadt = document.querySelector('.btnCadt');
var fechar = document.querySelector('.fechar');

btnCadt.addEventListener('click', ()=>{
    formReg.classList.add('ativoTela');
});

fechar.addEventListener('click', ()=>{
    formReg.classList.remove('ativoTela');
});
