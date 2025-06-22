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
    require('app\views\site\componentes\navbar.view.php')
    ?>
    <main>

    <div class="barraDePesquisa-Posts">
        <form method="GET"  action="/admin/tabeladeposts/search" id="form-inputSearch-Posts">
            <input type="text" name="busca" placeholder="Buscar" autocomplete="off">
        <button type="submit" id="botaoDePesquisa-Search"><img src="/public/assets/lupa.png" alt=""></button>
    </form>

    <form method="GET"  action="/admin/tabeladeposts/clean" id="form-refresh-Posts">
        <button type="submit" id="botaoLimpeza-Search"><img src="/public/assets/refreshPosts.png" alt=""></button>
    </form>

    </div>

    <div class="grid">
        <?php foreach($posts as $post):?>
        <?php $usuario = \App\Core\App::get('database')->selectOne('usuarios', $post->id_autor); ?>
        <a style="text-decoration: none;" class="link-listaDePosts" href="postIndividual/<?= $post->id ?>">
            <div class="card1">
                <img src="/<?= $post->imagem ?>" alt="Imagem do Post" onerror="this.src='/public/assets/default-fallback-image.png'; this.alt='';">
                <div class="conteudo">
                    <h3><?= $post->titulo ?></h3>
                    <p><?= $post->descricao?></p>
                </div>
                <div class="autor">Criado por: <?= $usuario->nome ?></div>
            </div>

        </a>
        <?php endforeach ?>

    </div>
        
    <!------------------------- Paginação ----------------------->
    <!----------------------------------------------------------->
    <nav class="paginacao-listaDeUsuarios">
        <ul>
            <!-- Página Anterior -->
            <a style="text-decoration: none;" href="?paginacaoNumero=<?= $page - 1 ?>">
                <li class="page-item <?= $page <= $total_pages ? ' class="disabled"' : '' ?>">
                    <?php if ($page > 1): ?>
                        
                            <span>&laquo;</span>
                        
                    <?php else: ?>
                        <span>&laquo;</span>
                    <?php endif; ?>
                </li>
            </a>
            <!-- Números das páginas -->
            <?php for ($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
                <a style="display: block; text-decoration: none;" href="?paginacaoNumero=<?= $page_number ?>">
                    <li class="<?= $page_number == $page ? 'active' : '' ?>">
                        <?= $page_number ?>
                    </li>
                </a>
            <?php endfor; ?>
                

            <!-- Página Seguinte -->
            <a style="text-decoration: none;" href="?paginacaoNumero=<?= $page + 1 ?>">
                <li class="page-item <?= $page >= $total_pages ? ' class="disabled"' : '' ?>">
                    <?php if ($page < $total_pages): ?>
                            <span>&raquo;</span>
                    <?php else: ?>
                        <span>&raquo;</span>
                    <?php endif; ?>
                </li>
            </a>
        </ul>
    </nav>


    </main>
    <?php 
    require('app\views\site\componentes\footer.view.php');
    ?>
</body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</html>