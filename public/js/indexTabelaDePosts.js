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
    const limiteConteudo = 700;

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



function aplicarContador(inputSelector, contadorSelector, limite, camposParaVerificar, botaoSelector) {
    const input = document.querySelector(inputSelector);
    const contador = document.querySelector(contadorSelector);
    const botao = document.querySelector(botaoSelector);

    if (!input || !contador || !botao) return;

    function atualizarContador() {
        let tamanho = input.value.length;
        contador.textContent = tamanho + '/' + limite;
        if (tamanho > limite) {
            input.value = input.value.substring(0, limite);
            contador.textContent = limite + '/' + limite;
        }
    }

    function verificarCampos() {
        const algumVazio = camposParaVerificar.some(selector => {
            const campo = document.querySelector(selector);
            return !campo || campo.value.trim().length === 0;
        });

        if (algumVazio) {
            botao.style.display = 'none';
        } else {
            botao.style.display = 'flex';
        }
    }

    atualizarContador();
    verificarCampos();

    input.addEventListener('input', () => {
        atualizarContador();
        verificarCampos();
    });
}

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
    700, 
    ['.inputTitulo-Adicionar', '.inputConteudo-Adicionar'], 
    '.botaoAdicionar'
);









