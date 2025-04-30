document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const menuBotao = document.getElementById('menuMobile');
    
    menuBotao.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });
    
    document.getElementById('logout').addEventListener('click', (e) => {
        e.preventDefault();
        if(confirm('Tem certeza que deseja sair?')) {
            alert('Você foi desconectado!');
        }
    });
});

