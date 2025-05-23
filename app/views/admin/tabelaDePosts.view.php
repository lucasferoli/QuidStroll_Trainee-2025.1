<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="\public\css/tabelaDePosts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body id="bodyPaginaTabelaDePosts">
    <!------------------------- Cabeçalho ----------------------->
    <!----------------------------------------------------------->

    <div id="cabecalhoPaginaTabelaDePosts">
        <div id="tituloPaginaTabelaDePosts">
            <h1>Tabela de Posts</h1>
        </div>
        <div id="criarNovoPost">
            <button id="botaoCriarNovoPost" onclick="abrirModal('janelaModalAdicionar', 'fundoModalAdicionar')"><img src="\public\assets\Plus.png" alt="Criar novo post"></button>
        </div>
    </div>

    <!---------------------------- Tabela ----------------------->
    <!----------------------------------------------------------->

    <main id="conteudoTabelaDePosts">
        <table id="tabelaDePosts">
            <thead id="cabecalhoTabelaDePosts">
                <tr class="trTabelaDePosts">
                    <th class="idTabelaDePosts">ID</th>
                    <th class="tituloTabelaDePosts">TÍTULO</th>
                    <th class="autorTabelaDePosts">AUTOR</th>
                    <th class="dataTabelaDePosts">DATA</th>
                    <th class="acoesTabelaDePosts">AÇÕES</th>
                </tr>
            </thead>
            <tbody id="bodyTabelaDePosts">
               <?php foreach($posts as $post): ?>
                    <tr class="trTabelaDePosts">
                        <td class="idTabelaDePosts"><?= $post->id ?></td>
                        <td class="tituloTabelaDePosts"><?= $post->titulo ?></td>
                        <td class="autorTabelaDePosts">Teste</td>
                        <td class="dataTabelaDePosts"><?= $post->criado_em ?></td>
                        <td class="acoesTabelaDePosts">
                            <button onclick="abrirModal('janelaModalVisualizar<?= $post->id ?>', 'fundoModalVisualizar')" ><img class="visualizarTabelaDePosts" src="\public\assets\Eye.png" alt="Visualizar"></button>
                            <button onclick="abrirModal('janelaModalEditar<? $post->id ?>','fundoModal')"><img class="editarTabelaDePosts" src="/public/assets/Pen.png" alt="Editar"></button>
                            <button onclick="abrirModal('janelaModalVerMais<?= $post->id ?>','fundoModalVerMais')"><img class="TresPontosTabelaDePosts" src="/public/assets/3Pontos (2).png" alt="Ver Mais"></button>
                        <button onclick="abrirModal('janelaModalExcluir<?= $post->id ?>', 'fundoModal<?= $post->id ?>')"><img class="excluirTabelaDePosts" src="/public/assets/Trash.png" alt="Excluir"></button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>

    <!------------------------- Paginação ----------------------->
    <!----------------------------------------------------------->
    <div id="paginacao-tabelaDePosts">
        <div id="botoes-tabelaDePosts">
            <button>&lt</button>
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>&gt</button>
        </div>
    </div>

    <!----------------------Modal------------------------------->
    <!---------------------------------------------------------->
    <?php foreach($posts as $post): ?>

    <div class="fundoModal-tabelaDePosts" id="fundoModal"></div>
    <div class="modalEditar-tabelaDePosts" id="janelaModalEditar<?= $post->id ?>">
        <header class="cabecalhoModalEditar-tabelaDePosts">
            <h1>Editar Post</h1>
            <button onclick="fecharModal('janelaModalEditar', 'fundoModal')"><img src="/public/assets/simboloFecharPost.png" alt="Fechar Guia"></button>
        </header>
        <form class="formModalEditar-tabelaDePosts" method="POST"  action="admin/tabeladeposts/edit">
            <img src="/public/assets/imagemPost.jfif" alt="">
            <div class="corpoModalEditar-tabelaDePosts">
                <input class="tituloModalEditar-tabelaDePosts" value="Lorem Ipsum Lorem Ipsum">
            </input>
                <textarea class="textoModalEditar-tabelaDePosts">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum</textarea>
                <div class="autorModalEditar-tabelaDePosts">
                    <p>Lorem Ipsum</p>
                </div>
                <div class="dataModalEditar-tabelaDePosts">
                    <p>12/12/12</p>
                </div>
            </div>
        </form>
    </div>
<!--Modal Excluir-->
<div class="fundoModal-tabelaDePosts" id="fundoModal<?= $post->id ?>"></div>
<div class="modalExcluir-tabelaDePosts" id="janelaModalExcluir<?= $post->id ?>">
    <div class="cabecalhoModalExcluir-tabelaDePosts">
        <h1>Excluir Post?</h1>
    </div>
    <form class="botoesModalExcluir-tabelaDePosts" method="POST" action="admin/tabeladeposts/delete" >
        <input name="id" value="<?= $post->id ?>" type="hidden">

            <button type="submit">Excluir</button>
            <button type="button" onclick="fecharModal('janelaModalExcluir<?= $post->id ?>', 'fundoModal<?= $post->id ?>')" >Cancelar</button>
        </form>
    </div>





     <!--Modal Visualizar-->
    <div class="fundoModalVisualizar-tabelaDePosts" id="fundoModalVisualizar"></div>
    <div class="modalVisualizar-tabelaDePosts" id="janelaModalVisualizar<?= $post->id ?>">
        <header class="cabecalhoModalVisualizar-tabelaDePosts">
            <h1>Visualizar Post</h1>
            <button onclick="fecharModal('janelaModalVisualizar<?= $post->id ?>', 'fundoModalVisualizar')"><img src="\public\assets\simboloFecharPost.png" alt="Fechar Guia"></button>
        </header>
        <div class="corpoModalVisualizar-tabelaDePosts">
            <img src="/public/assets/imagemPost.jfif" alt="Imagem do Post">
            <div class="conteudoModalVisualizar-tabelaDePosts">
                <div class="tituloModalVisualizar-tabelaDePosts">
                    <h2><?= $post->titulo ?></h2>
                </div>
                <div class="textoModalVisualizar-tabelaDePosts">
                <p><?= $post->descricao?></p>
                </div>
                <div class="infoModalVisualizar-tabelaDePosts">
                    <span class="autorModalVisualizar-tabelaDePosts">Autor: Leandro</span>
                    <span class="dataModalVisualizar-tabelaDePosts"><?= $post->criado_em ?></span>
                </div>
            </div>
        </div>
    </div>

        <?php endforeach ?>   

     <!--Modal Adicionar-->
    <div class="fundoModalAdicionar-tabelaDePosts" id="fundoModalAdicionar"></div>
    <div class="modalAdicionar-tabelaDePosts" id="janelaModalAdicionar">
        <header class="cabecalhoModalAdicionar-tabelaDePosts">
            <h1>Adicionar Novo Post</h1>
            <button onclick="fecharModal('janelaModalAdicionar', 'fundoModalAdicionar')"><img src="\public\assets\simboloFecharPost.png" alt="Fechar Guia"></button>
        </header>
        <form class="formModalAdicionar-tabelaDePosts" method="POST" action="tabeladeposts/create">
            <div class="campoFormModalAdicionar">
                <label for="tituloPost">Título:</label>
                <input type="text" id="tituloPost" name="titulo" required>
            </div>
            <!-- <div class="campoFormModalAdicionar">
                <label for="autorPost">Autor:</label>
                <input type="text" id="autorPost" name="id_autor" required>
            </div>
            <div class="campoFormModalAdicionar">
                <label for="dataPost">Data:</label>
                <input type="date" id="dataPost" name="criado_em" required>
            </div> -->
            <div class="campoFormModalAdicionar">
                <label for="imagemPost">Imagem:</label>
                <input type="file" id="imagemPost" name="imagem" accept="image/*">
            </div>
            <div class="campoFormModalAdicionar">
                <label for="conteudoPost">Conteúdo:</label>
                <textarea id="conteudoPost" name="descricao" rows="5" required></textarea>
            </div>
            <div class="botoesFormModalAdicionar">
                <button type="button" onclick="fecharModal('janelaModalAdicionar', 'fundoModalAdicionar')">Cancelar</button>
                <button type="submit">Adicionar</button>
            </div>
        </form>
    </div>


   

     


    <!----------------- MODAL DE TELAS PEQUENAS ------------------------------>
        <div class="ModalVerMais" id="fundoModalVerMais">
            <div class="corpo-do-VerMais" id="janelaModalVerMais">
                <button type="button" onclick="abrirModal('janelaModalVisualizar', 'fundoModalVisualizar')"><img class="visualizarTabelaDePosts" src="\public\assets\Eye.png" alt="Visualizar"></button>
                <button type="button" onclick="abrirModalEditar('janelaModalEditar','fundoModal')"><img class="editarTabelaDePosts" src="/public/assets/Pen.png" alt="Editar"></button>
                <button type="button" onclick="abrirModalExcluir('janelaModalExcluir', 'fundoModal')"><img class="excluirTabelaDePosts" src="/public/assets/Trash.png" alt="Excluir"></button>
                <button id = "botao-fechar-ver-mais" type="button" onclick="fecharModal('janelaModalVerMais', 'fundoModalVerMais')">fechar</button>   
            </div>
        </div>

</body>
<script src="/public/js/indexTabelaDePosts.js"></script>
</html>