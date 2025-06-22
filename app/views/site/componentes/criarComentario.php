<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="/public/css/criarComentario.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
 <form action="/postIndividual/{id}/create" method="POST">
    <div class="titulo-Comentario">
        Comentários
    </div>
    <div class="campoCriar-Comentario">
        <div class="conteudo-Comentario">
            <label for="">
                <input type="text" name="conteudo" autocomplete="off" placeholder="Crie seu comentário..." class="inputComentario" maxlength="70">
            <input type="hidden" name="id_post" value="<?= $post->id ?>">
            <span class="inputCaracteres"></span>

            </label>

            <button type="submit" class="botaoEnviarComentario"><img src="/public/assets/setaEnviar.png" alt=""></button>
       
        </div>
    </div>
</form>
    
</body>
<script src="/public/js/comentario.js"></script>
</html>

