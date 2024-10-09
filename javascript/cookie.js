document.addEventListener('DOMContentLoaded', function () {
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptCookiesButton = document.getElementById('accept-cookies');

    // Função para criar um cookie
    function setCookie(name, value, days) {
        const date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + date.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    // Função para verificar se o cookie já foi aceito
    function getCookie(name) {
        const cookieArr = document.cookie.split(';');
        for (let i = 0; i < cookieArr.length; i++) {
            let cookie = cookieArr[i].trim();
            if (cookie.indexOf(name + "=") == 0) {
                return cookie.substring(name.length + 1);
            }
        }
        return "";
    }

    // Mostrar o banner se o cookie não estiver definido
    if (getCookie("cookies_accepted") === "") {
        cookieBanner.style.display = "block";
    }

    // Aceitar os cookies e esconder o banner
    acceptCookiesButton.addEventListener('click', function () {
        setCookie("cookies_accepted", "true", 30); // Cookie dura 30 dias
        cookieBanner.style.display = "none";
    });
});
