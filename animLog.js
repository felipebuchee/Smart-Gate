document.addEventListener('DOMContentLoaded', () => {
    const telaLogin = document.querySelector('.telaLogin');
    const linkRegistro = document.querySelector('.link-registro');
    const linkLogin = document.querySelector('.link-login');
    const btnCadt = document.querySelector('.btnCadt');
    const btnLogin = document.querySelector('.btnLogin');

    // Verificar se os elementos existem antes de adicionar ouvintes de eventos
    if (linkRegistro) {
        linkRegistro.addEventListener('click', () => {
            telaLogin.classList.add('show-registration');
            telaLogin.classList.remove('show-login');
        });
    }

    if (linkLogin) {
        linkLogin.addEventListener('click', () => {
            telaLogin.classList.add('show-login');
            telaLogin.classList.remove('show-registration');
        });
    }

    if (btnCadt) {
        btnCadt.addEventListener('click', () => {
            telaLogin.classList.remove('show-registration');
        });
    }

    if (btnLogin) {
        btnLogin.addEventListener('click', () => {
            telaLogin.classList.add('show-login');
        });
    }
});
