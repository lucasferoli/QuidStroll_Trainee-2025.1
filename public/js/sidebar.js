document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.getElementById('sidebar');
    const menuBotao = document.getElementById('menuMobile');
    const sidebarToggle = document.getElementById('sidebarToggle');
    
    
    menuBotao.addEventListener('click', () => {
        sidebar.classList.toggle('active');
    });
    
    
    sidebarToggle.addEventListener('click', () => {
        if (window.innerWidth > 768) {
            sidebar.classList.toggle('collapsed');
            const isCollapsed = sidebar.classList.contains('collapsed');
            localStorage.setItem('sidebarCollapsed', isCollapsed);
        }
    });
    
    if (window.innerWidth > 768) {
        const savedState = localStorage.getItem('sidebarCollapsed');
        if (savedState === 'true') {
            sidebar.classList.add('collapsed');
        }
    }
    
    document.getElementById('logout').addEventListener('click', (e) => {
        e.preventDefault();
        if(confirm('Tem certeza que deseja sair?')) {
            alert('Você foi desconectado!');
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth <= 768) {
            sidebar.classList.remove('collapsed');
        } 
        else {
            const savedState = localStorage.getItem('sidebarCollapsed');
            if (savedState === 'true') {
                sidebar.classList.add('collapsed');
            } 
            else {
                sidebar.classList.remove('collapsed');
            }
        }
    });
});