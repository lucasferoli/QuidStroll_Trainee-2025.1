<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quid Stroll</title>
    <link rel="stylesheet" href="/public/css/listaDePosts.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <?php 
    require('app\views\site\componentes\navbar.view.php');
    ?>
    <main>
    
    <!--
    <div class="segBarraDePesquisa">
        <div class="barraDePesquisa">
            <input type="text" placeholder="Barra de pesquisa...">
            <i class="fas fa-search"></i>
        </div>
    </div>  -->


    <div class="barraDePesquisa-Posts">
        <form method="GET"  action="/lista/search" id="form-inputSearch-Posts">
            <input type="text" name="busca" placeholder="Buscar" autocomplete="off">
        <button type="submit" id="botaoDePesquisa-Search"><img src="/public/assets/lupa.png" alt=""></button>
    </form>

    <form method="GET"  action="/lista/clean" id="form-refresh-Posts">
        <button type="submit" id="botaoLimpeza-Search"><img src="/public/assets/refreshPosts.png" alt=""></button>
    </form>

    </div>

    <div class="grid">
        <?php foreach($posts as $post):?>
        <?php $usuario = \App\Core\App::get('database')->selectOne('usuarios', $post->id_autor); ?>
        <div class="card1">
            <img src="/<?= $post->imagem ?>" alt="Imagem do Post">
            <div class="conteudo">
                <h3><a href="/postIndividual/<?= $post->id ?>"><?= $post->titulo ?></a></h3>
                <p><?= $post->descricao?></p>
            </div>
            <div class="autor"><?= $usuario->nome ?></div>
        </div>
        <?php endforeach ?>

    </div>
        
    <!------------------------- Paginação ----------------------->
    <!----------------------------------------------------------->
    <nav class="paginacao-listaDeUsuarios">
        <ul>
            <!-- Página Anterior -->
            <li class="page-item <?= $page <= $total_pages ? ' class="disabled"' : '' ?>">
                <?php if ($page > 1): ?>
                    <a style="text-decoration: none;" href="?paginacaoNumero=<?= $page - 1 ?>">
                        <span>&laquo;</span>
                    </a>
                <?php else: ?>
                    <span>&laquo;</span>
                <?php endif; ?>
            </li>

            <!-- Números das páginas -->
            <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
                <li>
                    <a style="text-decoration: none;" href="?paginacaoNumero=<?= $page_number ?>" 
                    class="<?= $page_number == $page ? 'active' : '' ?>">
                        <?= $page_number ?>
                    </a>
                </li>
            <?php endfor; ?>

            <!-- Página Seguinte -->
            <li class="page-item <?= $page >= $total_pages ? ' class="disabled"' : '' ?>">
                <?php if ($page < $total_pages): ?>
                    <a style="text-decoration: none;" href="?paginacaoNumero=<?= $page + 1 ?>">
                        <span>&raquo;</span>
                    </a>
                <?php else: ?>
                    <span>&raquo;</span>
                <?php endif; ?>
            </li>
        </ul>
    </nav>


    </main>
    <?php 
    require('app\views\site\componentes\footer.view.php');
    ?>
</body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</html>