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
               <?php foreach($posts as $posts): ?>
                    <tr class="trTabelaDePosts">
                        <td class="idTabelaDePosts"><?= $posts->id ?></td>
                        <td class="tituloTabelaDePosts"><?= $posts->titulo ?></td>
                        <td class="autorTabelaDePosts"><?= $posts->autor ?></td>
                        <td class="dataTabelaDePosts"><?= $posts->data ?></td>
                        <td class="acoesTabelaDePosts">
                            <button onclick="abrirModal('janelaModalVisualizar<?= $posts->id ?>', 'fundoModalVisualizar')"><img class="visualizarTabelaDePosts" src="\public\assets\Eye.png" alt="Visualizar"></button>
                            <button onclick="abrirModalEditar('janelaModalEditar','fundoModal')"><img class="editarTabelaDePosts" src="/public/assets/Pen.png" alt="Editar"></button>
                            <button onclick="abrirModalExcluir('janelaModalExcluir', 'fundoModal')"><img class="excluirTabelaDePosts" src="/public/assets/Trash.png" alt="Excluir"></button>
                        </td>
                    </tr>
                <?php endforeach ?>    
                <!--<tr class="trTabelaDePosts">
                    <td class="idTabelaDePosts">1</td>
                    <td class="tituloTabelaDePosts">Ah nao vei ah nao</td>
                    <td class="autorTabelaDePosts">Yan</td>
                    <td class="dataTabelaDePosts">28/04/2025</td>
                    <td class="acoesTabelaDePosts">
                        <button onclick="abrirModal('janelaModalVisualizar', 'fundoModalVisualizar')"><img class="visualizarTabelaDePosts" src="\public\assets\Eye.png" alt="Visualizar"></button>
                        <button onclick="abrirModalEditar('janelaModalEditar','fundoModal')"><img class="editarTabelaDePosts" src="/public/assets/Pen.png" alt="Editar"></button>
                        <button onclick="abrirModalExcluir('janelaModalExcluir', 'fundoModal')"><img class="excluirTabelaDePosts" src="/public/assets/Trash.png" alt="Excluir"></button>
                    </td>
                </tr>
                <tr class="trTabelaDePosts">
                    <td class="idTabelaDePosts">1</td>
                    <td class="tituloTabelaDePosts">Ah nao vei ah nao</td>
                    <td class="autorTabelaDePosts">Yan</td>
                    <td class="dataTabelaDePosts">28/04/2025</td>
                    <td class="acoesTabelaDePosts">
                        <button onclick="abrirModal('janelaModalVisualizar', 'fundoModalVisualizar')"><img class="visualizarTabelaDePosts" src="\public\assets\Eye.png" alt="Visualizar"></button>
                        <button onclick="abrirModalEditar('janelaModalEditar','fundoModal')"><img class="editarTabelaDePosts" src="/public/assets/Pen.png" alt="Editar"></button>
                        <button onclick="abrirModalExcluir('janelaModalExcluir', 'fundoModal')"><img class="excluirTabelaDePosts" src="/public/assets/Trash.png" alt="Excluir"></button>
                    </td>
                </tr>
                <tr class="trTabelaDePosts">
                    <td class="idTabelaDePosts">1</td>
                    <td class="tituloTabelaDePosts">Ah nao vei ah nao</td>
                    <td class="autorTabelaDePosts">Yan</td>
                    <td class="dataTabelaDePosts">28/04/2025</td>
                    <td class="acoesTabelaDePosts">
                        <button onclick="abrirModal('janelaModalVisualizar', 'fundoModalVisualizar')"><img class="visualizarTabelaDePosts" src="\public\assets\Eye.png" alt="Visualizar"></button>
                        <button onclick="abrirModalEditar('janelaModalEditar','fundoModal')"><img class="editarTabelaDePosts" src="/public/assets/Pen.png" alt="Editar"></button>
                        <button onclick="abrirModalExcluir('janelaModalExcluir', 'fundoModal')"><img class="excluirTabelaDePosts" src="/public/assets/Trash.png" alt="Excluir"></button>
                    </td>
                </tr>
                <tr class="trTabelaDePosts cincoTP">
                    <td class="idTabelaDePosts">1</td>
                    <td class="tituloTabelaDePosts">Ah nao vei ah nao</td>
                    <td class="autorTabelaDePosts">Yan</td>
                    <td class="dataTabelaDePosts">28/04/2025</td>
                    <td class="acoesTabelaDePosts">
                        <button onclick="abrirModal('janelaModalVisualizar', 'fundoModalVisualizar')"><img class="visualizarTabelaDePosts" src="\public\assets\Eye.png" alt="Visualizar"></button>
                        <button onclick="abrirModalEditar('janelaModalEditar','fundoModal')"><img class="editarTabelaDePosts" src="/public/assets/Pen.png" alt="Editar"></button>
                        <button onclick="abrirModalExcluir('janelaModalExcluir', 'fundoModal')"><img class="excluirTabelaDePosts" src="/public/assets/Trash.png" alt="Excluir"></button>
                    </td>
                </tr>-->
            </tbody>
        </table>
    </main>

    <!------------------------- Paginação ----------------------->
    <!----------------------------------------------------------->

    <div id="paginacaoTabelaDePosts">
        <button><img src="/public/assets/arrowLeftShort.png" alt=""></button>
        <button><img src="/public/assets/1.png" alt=""></button>
        <button><img src="/public/assets/2.png" alt=""></button>
        <button><img src="/public/assets/3.png" alt=""></button>
        <button><img src="/public/assets/arrowRightShort.png" alt=""></button>
    </div>

    <!----------------------Modal------------------------------->
    <!---------------------------------------------------------->
    <div class="fundoModal-tabelaDePosts" id="fundoModal"></div>
    <div class="modalEditar-tabelaDePosts" id="janelaModalEditar">
        <header class="cabecalhoModalEditar-tabelaDePosts">
            <h1>Editar Post</h1>
            <button onclick="fecharModalEditar('janelaModalEditar', 'fundoModal')"><img src="/public/assets/simboloFecharPost.png" alt="Fechar Guia"></button>
        </header>
        <form class="formModalEditar-tabelaDePosts" action="">
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
    <div class="fundoModal-tabelaDePosts" id="fundoModal"></div>
    <div class="modalExcluir-tabelaDePosts" id="janelaModalExcluir">
        <div class="cabecalhoModalExcluir-tabelaDePosts">
            <h1>Excluir Post?</h1>
        </div>
        <form class="botoesModalExcluir-tabelaDePosts" method="POST" action="/admin/tabelaDePosts/delete" >
            <button>Excluir</button>
            <button onclick="fecharModalExcluir('janelaModalExcluir', 'fundoModal')" >Cancelar</button>
        </form>
    </div>

    <!--Modal Adicionar-->
    <div class="fundoModalAdicionar-tabelaDePosts" id="fundoModalAdicionar"></div>
    <div class="modalAdicionar-tabelaDePosts" id="janelaModalAdicionar">
        <header class="cabecalhoModalAdicionar-tabelaDePosts">
            <h1>Adicionar Novo Post</h1>
            <button onclick="fecharModal('janelaModalAdicionar', 'fundoModalAdicionar')"><img src="\public\assets\simboloFecharPost.png" alt="Fechar Guia"></button>
        </header>
        <form class="formModalAdicionar-tabelaDePosts" method="POST" action="/admin/tabelaDePosts/create">
            <div class="campoFormModalAdicionar">
                <label for="tituloPost">Título:</label>
                <input type="text" id="tituloPost" name="tituloPost" required>
            </div>
            <div class="campoFormModalAdicionar">
                <label for="autorPost">Autor:</label>
                <input type="text" id="autorPost" name="autorPost" required>
            </div>
            <div class="campoFormModalAdicionar">
                <label for="dataPost">Data:</label>
                <input type="date" id="dataPost" name="dataPost" required>
            </div>
            <div class="campoFormModalAdicionar">
                <label for="imagemPost">Imagem:</label>
                <input type="file" id="imagemPost" name="imagemPost" accept="image/*">
            </div>
            <div class="campoFormModalAdicionar">
                <label for="conteudoPost">Conteúdo:</label>
                <textarea id="conteudoPost" name="conteudoPost" rows="5" required></textarea>
            </div>
            <div class="botoesFormModalAdicionar">
                <button type="button" onclick="fecharModal('janelaModalAdicionar', 'fundoModalAdicionar')">Cancelar</button>
                <button type="submit">Adicionar</button>
            </div>
        </form>
    </div>

    <!--Modal Visualizar-->
    <div class="fundoModalVisualizar-tabelaDePosts" id="fundoModalVisualizar"></div>
    <div class="modalVisualizar-tabelaDePosts" id="janelaModalVisualizar">
        <header class="cabecalhoModalVisualizar-tabelaDePosts">
            <h1>Visualizar Post</h1>
            <button onclick="fecharModal('janelaModalVisualizar', 'fundoModalVisualizar')"><img src="\public\assets\simboloFecharPost.png" alt="Fechar Guia"></button>
        </header>
        <div class="corpoModalVisualizar-tabelaDePosts">
            <img src="/public/assets/imagemPost.jfif" alt="Imagem do Post">
            <div class="conteudoModalVisualizar-tabelaDePosts">
                <div class="tituloModalVisualizar-tabelaDePosts">
                    <h2>Título do Post</h2>
                </div>
                <div class="textoModalVisualizar-tabelaDePosts">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor, nisl eget ultricies tincidunt, nisl nisl aliquam nisl, eget ultricies nisl nisl eget nisl.</p>
                </div>
                <div class="infoModalVisualizar-tabelaDePosts">
                    <span class="autorModalVisualizar-tabelaDePosts">Autor: Leandro</span>
                    <span class="dataModalVisualizar-tabelaDePosts">Data: 01/05/2025</span>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="/public/js/indexTabelaDePosts.js"></script>
</html>