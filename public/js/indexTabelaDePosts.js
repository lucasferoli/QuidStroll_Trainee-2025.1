function abrirModalEditar(idJanelaModalEditar, idFundoModal){
    document.getElementById(idJanelaModalEditar).style.display = "flex";
    document.getElementById(idFundoModal).style.display = "block";

}

function fecharModalEditar(idJanelaModalEditar, idFundoModal){
    document.getElementById(idJanelaModalEditar).style.display = "none";
    document.getElementById(idFundoModal).style.display = "none";
}

function abrirModalExcluir(idJanelaModalExcluir, idFundoModal){
    document.getElementById(idJanelaModalExcluir).style.display = "flex";
    document.getElementById(idFundoModal).style.display = "block";

}

function fecharModalExcluir(idJanelaModalExcluir, idFundoModal){
    document.getElementById(idJanelaModalExcluir).style.display = "none";
    document.getElementById(idFundoModal).style.display = "none";
}

//Abrir modal Adicionar
function abrirModal(idJanelaModalAdicionar, idFundoModalAdicionar){
    document.getElementById(idJanelaModalAdicionar).style.display = "flex";
    document.getElementById(idFundoModalAdicionar).style.display = "block";
}

function fecharModal(idJanelaModalAdicionar, idFundoModalAdicionar){
    document.getElementById(idJanelaModalAdicionar).style.display = "none";
    document.getElementById(idFundoModalAdicionar).style.display = "none";
}

//Abrir modal Visualizar
function abrirModal(idJanelaModalVisualizar, idFundoModalVizualizar){
    document.getElementById(idJanelaModalVisualizar).style.display = "flex";
    document.getElementById(idFundoModalVizualizar).style.display = "block";
}

function fecharModal(idJanelaModalVisualizar, idFundoModalVizualizar){
    document.getElementById(idJanelaModalVisualizar).style.display = "none";
    document.getElementById(idFundoModalVizualizar).style.display = "none";
}

//Abrir modal 3 pontinhos
function abrirModalVerMais(idjanelaModalVerMais, idfundoModalVerMais){
    document.getElementById(idjanelaModalVerMais).style.display = "flex";
    document.getElementById(idfundoModalVerMais).style.display = "block";
}
