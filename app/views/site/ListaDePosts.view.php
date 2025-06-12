<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quid Stroll</title>
    <link rel="stylesheet" href="/public/css/listaDePosts.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <main>
    <?php 
    require('app\views\site\componentes\navbar.view.php');
    ?>
    <div class="segBarraDePesquisa">
        <div class="barraDePesquisa">
            <input type="text" placeholder="Barra de pesquisa...">
            <i class="fas fa-search"></i>
        </div>
    </div>

    <div class="grid">
        <?php foreach($posts as $post):?>
        <?php $usuario = \App\Core\App::get('database')->selectOne('usuarios', $post->id_autor); ?>
        <div class="card1">
            <img src="/<?= $post->imagem ?>" alt="Imagem do Post">
            <div class="conteudo">
                <h3><a href="postIndividual/<?= $post->id ?>"><?= $post->titulo ?></a></h3>
                <p><?= $post->descricao?></p>
            </div>
            <div class="autor"><?= $usuario->nome ?></div>
        </div>
        <?php endforeach ?>

    </div>
        

    </main>
    <?php 
    require('app\views\site\componentes\footer.view.php');
    ?>
</body>
</html>