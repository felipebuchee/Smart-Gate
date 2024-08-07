
document.addEventListener("DOMContentLoaded", function() {
    var modal = document.querySelector(".form-reg"); // Seleciona o elemento com a classe .form-reg
    var btn = document.getElementById(".btnCadt"); // Seleciona o botão de abrir o modal
    var span = document.getElementById("close-register"); // Seleciona o botão de fechar o modal

    btn.onclick = function() {
        modal.style.display = "block"; // Mostra o modal
    }

    span.onclick = function() {
        modal.style.display = "none"; // Esconde o modal
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none"; // Esconde o modal se o usuário clicar fora dele
        }
    }
});
