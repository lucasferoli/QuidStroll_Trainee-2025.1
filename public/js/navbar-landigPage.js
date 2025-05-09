document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    const botoesNavbar = document.getElementById('botoesNavbar')
    mobileMenu.addEventListener('click', () => {botoesNavbar.classList.toggle('active');});
});