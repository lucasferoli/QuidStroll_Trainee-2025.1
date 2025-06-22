function abrirModal(idModalUsuario, idFundoModal){
    document.getElementById(idModalUsuario).style.display = "flex";
    document.getElementById(idFundoModal).style.display = "block";

}

function fecharModal(idModalUsuario, idFundoModal){
    document.getElementById(idModalUsuario).style.display = "none";
    document.getElementById(idFundoModal).style.display = "none";
}

/*var input = document.querySelector('.inputTitulo-Adicionar');
var result = document.querySelector('.contadorTitulo-Adicionar');
var limit = 50;
result.textContent = 0 + '/' + limit;


input.addEventListener (
    'input', 
    function(){
        var textLength = input.value.length;
        result.textContent = textLength + '/' + limit;
         if(textLength > 0){
            document.querySelector('.botaoAdicionar').style.display = "flex";
        }
        else{
            document.querySelector('.botaoAdicionar').style.display = "none";

        }
        
}
);*/

/*function verificarCampos(inputs, botaoSelector) {
    const botao = document.querySelector(botaoSelector);

    const algumVazio = inputs.some(inputSelector => {
        const input = document.querySelector(inputSelector);
        return input.value.trim().length === 0;
    });

    if (algumVazio) {
        botao.style.display = 'none';
    } else {
        botao.style.display = 'flex';
    }
}

function aplicarContador(inputSelector, contadorSelector, limite, camposParaVerificar, botaoSelector) {
    const input = document.querySelector(inputSelector);
    const contador = document.querySelector(contadorSelector);

    contador.textContent = '0/' + limite;

    input.addEventListener('input', function() {
        const textLength = input.value.length;
        contador.textContent = textLength + '/' + limite;

        if (textLength > limite) {
            input.value = input.value.substring(0, limite);
            contador.textContent = limite + '/' + limite;
        }

        verificarCampos(camposParaVerificar, botaoSelector);
    });
}
    */


function verificarCampos(inputs, botaoSelector) {
    const botao = document.querySelector(botaoSelector);

    const algumVazio = inputs.some(inputSelector => {
        const input = document.querySelector(inputSelector);
        return input.value.trim().length === 0;
    });

    if (algumVazio) {
        botao.style.display = 'none';
    } else {
        botao.style.display = 'flex';
    }
}

function aplicarContador(inputSelector, contadorSelector, limite, camposParaVerificar, botaoSelector) {
    const input = document.querySelector(inputSelector);
    const contador = document.querySelector(contadorSelector);

    function atualizar() {
        const textLength = input.value.length;
        contador.textContent = textLength + '/' + limite;

        if (textLength > limite) {
            input.value = input.value.substring(0, limite);
            contador.textContent = limite + '/' + limite;
        }

        verificarCampos(camposParaVerificar, botaoSelector);
    }

    // 🔥 Atualiza imediatamente quando carrega a página
    atualizar();

    // 🔥 E também quando digita
    input.addEventListener('input', atualizar);
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




