<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/comentario.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <?php foreach($comentarios as $comentario): ?>
    <div class="comentarioIndividual">
        <div class="cabecalhoComentarioIndividual">
            <h1>Anônimo</h1>
            <?= date('d/m/Y', strtotime($comentario->data))?>

            <form action="/postIndividual/<?= $comentario->id ?>/delete" method="POST">
    <input name="id_post" value="<?= $comentario->id_post ?>" type="hidden">
    <button type="submit">
        <img src="/public/assets/excluirComentario.png" alt="">
    </button>
</form>
        
        </div>
            <div class="conteudoComentarioIndividual"><?= $comentario->conteudo?></div>


    </div>
    <?php endforeach ?>
</body>
</html>