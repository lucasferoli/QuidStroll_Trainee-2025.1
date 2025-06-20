<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="/public/css/criarComentario.css">
</head>
<body>
 <form action="postIndividual/{id}/create" method="POST">
    <div class="titulo-Comentario">
        Crie seu comentário:
    </div>

    <div class="campoCriar-Comentario">
        <div class="conteudo-Comentario">
            <h1>Conteúdo:</h1>
            <input type="text" name="conteudo">
            <input type="hidden" value="<?php echo $post->id ?>" name="id_post">
        </div>

        <div class="botaoEnviar-Comentario">
            <button type="submit">></button>
        </div>
    </div>
</form>
    
</body>
</html>

