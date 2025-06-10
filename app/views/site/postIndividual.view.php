<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/css/postIndividual.css">
    <script src="/public/js/postIndividual.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body id="bodyPostIndividual">
    
<?php 
    require('app\views\site\componentes\navbar.view.php');
?>
    <div id="postIndividualVoltar">
        <a href="/lista"><img id="postIndividualSeta" src="/public/assets/seta.png" alt=""></a>
        <h1 id ="postIndividualTituloPagina">Post</h1>
    </div>

    <main id="postIndividualBackground">
        <section id="postIndividualConteudo">
            <div id="postIndividualAutor">
                <img src="/public/assets/foto-perfil.png" alt="">
                <?php $usuario = \App\Core\App::get('database')->selectOne('usuarios', $post->id_autor); ?>
                <p id="postIndividualNome"><?= $usuario->nome?></p>
                <p id="postIndividualBolinha"> • </p>
                <p id="postIndividualData"><?= date('d/m/Y', strtotime($post->criado_em))?></p>
            </div>
            <div id="postIndividualQuids"> 
                <div id="postIndividualImagem">
                    <img src="/<?= $post->imagem?>" alt="">
                </div>
                <div id="postIndividualTextual">
                    <h1 id="postIndividualTituloPost"> <?= $post->titulo?> </h1>
                    <p id="postIndividualTextoPost"><?= $post->descricao?>
                    </p>
                </div>
            </div>
        </section>   
    </main>

    <?php 
    require('app\views\site\componentes\footer.view.php');
    ?>
</body>
</html>