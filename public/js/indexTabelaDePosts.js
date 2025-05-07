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

function fecharModalExcluir(idJanelaModalExcluir, idFundoModalExcluir){
    document.getElementById(idJanelaModalExcluir).style.display = "none";
    document.getElementById(idFundoModal).style.display = "none";
}