function abrirModal(idModalUsuario, idFundoModal){
    document.getElementById(idModalUsuario).style.display = "flex";
    document.getElementById(idFundoModal).style.display = "block";

}

function fecharModal(idModalUsuario, idFundoModal){
    document.getElementById(idModalUsuario).style.display = "none";
    document.getElementById(idFundoModal).style.display = "none";
}




document.querySelectorAll('.modalEditar-tabelaDePosts').forEach(modal => {
    const tituloInput = modal.querySelector('.tituloModalEditar-tabelaDePosts');
    const conteudoInput = modal.querySelector('.textoModalEditar-tabelaDePosts');
    const contadorTitulo = modal.querySelector('.contadorTitulo-Editar');
    const contadorConteudo = modal.querySelector('.contadorConteudo-Editar');
    const botao = modal.querySelector('.botaoSalvarEdicao-tabelaDePosts');
    const limiteTitulo = 50;
    const limiteConteudo = 200;

    function atualizarContador(input, contador, limite) {
        let tamanho = input.value.length;
        contador.textContent = tamanho + '/' + limite;
        if (tamanho > limite) {
            input.value = input.value.substring(0, limite);
            contador.textContent = limite + '/' + limite;
        }
    }

    function verificarCampos() {
        if (tituloInput.value.trim().length > 0 && conteudoInput.value.trim().length > 0) {
            botao.style.display = 'flex';
        } else {
            botao.style.display = 'none';
        }
    }

   
    atualizarContador(tituloInput, contadorTitulo, limiteTitulo);
    atualizarContador(conteudoInput, contadorConteudo, limiteConteudo);
    verificarCampos();

  
    tituloInput.addEventListener('input', () => {
        atualizarContador(tituloInput, contadorTitulo, limiteTitulo);
        verificarCampos();
    });

    conteudoInput.addEventListener('input', () => {
        atualizarContador(conteudoInput, contadorConteudo, limiteConteudo);
        verificarCampos();
    });
});











aplicarContador(
    '.inputTitulo-Adicionar', 
    '.contadorTitulo-Adicionar', 
    50, 
    ['.inputTitulo-Adicionar', '.inputConteudo-Adicionar'], 
    '.botaoAdicionar'
);

aplicarContador(
    '.inputConteudo-Adicionar', 
    '.contadorConteudo-Adicionar', 
    200, 
    ['.inputTitulo-Adicionar', '.inputConteudo-Adicionar'], 
    '.botaoAdicionar'
);




aplicarContador(
    '.tituloModalEditar-tabelaDePosts', 
    '.contadorTitulo-Editar', 
    50, 
    ['.tituloModalEditar-tabelaDePosts', '.textoModalEditar-tabelaDePosts'], 
    '.botaoSalvarEdicao-tabelaDePosts'
);

aplicarContador(
    '.textoModalEditar-tabelaDePosts', 
    '.contadorConteudo-Editar', 
    200, 
    ['.tituloModalEditar-tabelaDePosts', '.textoModalEditar-tabelaDePosts'], 
    '.botaoSalvarEdicao-tabelaDePosts'
);




