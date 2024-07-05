const telaLogin = document.querySelector('.telaLogin');
const linkLogin = document.querySelector('.link-login');
const linkRegistro = document.querySelector('.link-registro');

linkRegistro.addEventListener('click', ()=>{
    telaLogin.classList.add('ativoMenu');
});

linkLogin.addEventListener('click', ()=>{
    telaLogin.classList.remove('ativoMenu');
});