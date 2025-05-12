const botoes = document.querySelectorAll('.cardDashboard');

botoes.forEach(botao => {
    botao.addEventListener('mouseover', () => {
    botao.style.backgroundColor ='rgb(46, 134, 193)'; 
    });

    botao.addEventListener('mouseout', () => {
    botao.style.backgroundColor = ''; 
    });
});