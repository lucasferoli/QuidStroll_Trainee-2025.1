<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($comentarios as $comentario): ?>
    <div class="comentarioIndividual">
        <div class="fotoDePerfil-Comentario"></div>
        <div class="conteudoComentarioIndividual">
            <div class="nomeUsuarioComentario"><h1>Anonimo</h1></div>
            <div class="conteudoComentarioIndividual"><?= $comentario->conteudo?></div>
        </div>


    </div>
    <?php endforeach ?>
</body>
</html>