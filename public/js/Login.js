document.addEventListener('DOMContentLoaded', function() {
    const esconderSenha = document.querySelector('.esconderSenha');
    const senha = document.getElementById('senha');
    const icone = document.getElementById('iconeOcultar');

    esconderSenha.addEventListener('click', function() {
        const type = senha.getAttribute('type') === 'password' ? 'text' : 'password';
        senha.setAttribute('type', type);

        icone.classList.toggle('fa-eye');
        icone.classList.toggle('fa-eye-slash');
    });
});