const botoes = document.querySelectorAll('.card');

botoes.forEach(botao => {
    botao.addEventListener('mouseover', () => {
    botao.style.backgroundColor ='rgb(46, 134, 193)'; 
    });

    botao.addEventListener('mouseout', () => {
    botao.style.backgroundColor = ''; 
    });
});