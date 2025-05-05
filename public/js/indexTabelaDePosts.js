function abrirModal(idJanelaModalEditar, idFundoModalEditar){
    document.getElementById(idJanelaModalEditar).style.display = "flex";
    document.getElementById(idFundoModalEditar).style.display = "block";

}

function fecharModal(idJanelaModalEditar, idFundoModalEditar){
    document.getElementById(idJanelaModalEditar).style.display = "none";
    document.getElementById(idFundoModalEditar).style.display = "none";
}