<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários | QuidStroll</title>
    <link rel="stylesheet" href="/public/css/listaDeUsuarios.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="tela"></div>

    <?php require('app\views\admin\componentes\sidebar.php'); ?>

        <!-- NECESSARIOS MELHORIAS EM RESPONSIVIDADE E BOTOES DE PAGINAÇÃO!!-->
    <section class="listaDeUsuarios">
        <div class="titulo-listaDeUsuarios">
            <h1>Tabela de Usuários</h1>
            <div class="botaoAdicionar-listaDeUsuarios">
                <button onclick="abrirModal('criarUsuario')"><img src="/public/assets/novoUsuario.png" alt="" id="novoUsuario-listaDeUsuarios"></button>
            </div>
        </div>

        <!-- BARRA DE PESQUISA-->

         <div class="barraDePesquisa-Posts">
        <form method="GET"  action="/ListaDeUsuarios/search" id="form-inputSearch-Posts">
            <input type="text" name="busca" placeholder="Buscar" autocomplete="off">
        <button type="submit" id="botaoDePesquisa-Search"><img src="/public/assets/lupa.png" alt=""></button>
    </form>

    <form method="GET"  action="/ListaDeUsuarios/clean" id="form-refresh-Posts">
        <button type="submit" id="botaoLimpeza-Search"><img src="/public/assets/refreshPosts.png" alt=""></button>
    </form>

    </div>

        <div class="campoTabela-listaDeUsuarios">
            <table class="tabela-listaDeUsuarios">
                <thead class="cabecalhoTabela-listaDeUsuarios">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="corpoTabela-listaDeUsuarios">
                <?php foreach($usuarios as $usuario): ?>
                    <tr>
                        <td data-cell = "ID"><?= $usuario->id ?></td>
                        <td data-cell = "Nome"><?= $usuario->nome ?></td>
                        <td data-cell = "Email"><?= $usuario->email ?></td>
                        <td class="acoes-listaDeUsuarios">
                            <button type="button" onclick="abrirModal('visualizarUsuario<?= $usuario->id?>')" ><img src="/public/assets/eye_9352623.png" alt="" id="visualizar-listaDeUsuarios"></button>
                            <button type="button" onclick="abrirModal('editarUsuario<?= $usuario->id ?>')"><img src="/public/assets/editor_11168974.png" alt="" id="editar-listaDeUsuarios"></button>
                            <button type="button" onclick="abrirModal('deletarUsuario<?= $usuario->id ?>')"><img src="/public/assets/trash-bin_6880490.png" alt="" id="deletar-listaDeUsuarios"></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    
                </tbody>

            </table>
        </div>
        <?php if (!isset($_GET['busca'])): ?>
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
    
    <?php endif; ?>
    
    
    <!-------------------------------------MODAL-------------------------------------------->
    
    <form action="/ListaDeUsuarios/create" method="POST">
        <div class="modal-listaDeUsuarios" id="criarUsuario">
            <h1>Criar</h1>
                <div class="modalConteudo-listaDeUsuarios">
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Nome:</p>
                            <input required type="text" name = "nome">
                        </div>
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Email:</p>
                            <input required type="email" name = "email">
                        </div>
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Senha:</p>
                            <input required type="text" name = "senha">
                        </div>
                </div>
                <div class="botoesModais-listaDeUsuarios">
                        <button class="confirmar-listaDeUsuarios">SALVAR</button>
                        <button class="cancelar-listaDeUsuarios" type="button" onclick="fecharModal('criarUsuario')">CANCELAR</button>
                </div>
        </div>
    </form>


        <?php foreach($usuarios as $usuario): ?>
        <form action="/ListaDeUsuarios/edit" method="POST">
            <div class="modal-listaDeUsuarios" id="editarUsuario<?= $usuario->id ?>">
                <h1>Editar</h1>
                    <div class="modalConteudo-listaDeUsuarios">
                        <input type="hidden" value ="<?= $usuario->id ?>" name = 'id'>
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Nome:</p>
                            <input type="text" value="<?= $usuario->nome ?>" name = 'nome'> 
                        </div>
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Email:</p>
                            <input type="email" value="<?= $usuario->email ?>" name = 'email'>
                        </div>
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Senha:</p>
                            <input type="text" value="<?= $usuario->senha ?>" name = 'senha'>
                        </div>
                    </div>
                    <div class="botoesModais-listaDeUsuarios">
                        <button class="confirmar-listaDeUsuarios">SALVAR</button>
                        <button class="cancelar-listaDeUsuarios" type="button" onclick="fecharModal('editarUsuario<?= $usuario->id?>')">CANCELAR</button>
                    </div>
            </div>
        </form>

            <div class="modal-listaDeUsuarios" id= "visualizarUsuario<?= $usuario->id ?>" >
                <h1>Informações</h1>
                    <div class="modalConteudo-listaDeUsuarios">
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Nome:</p>
                            <input type="text" value="<?= $usuario->nome ?>" disabled> 
                        </div>
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Email:</p>
                            <input type="email" value="<?= $usuario->email ?>" disabled>
                        </div>
                        <div class="nomeInput-listaDeUsuarios">
                            <p>Senha:</p>
                            <input type="password" value="<?= $usuario->senha ?>" disabled>
                        </div>
                    </div>
                    <div class="botoesModais-listaDeUsuarios">
                            <button class="confirmar-listaDeUsuarios"type="button" onclick="fecharModal('visualizarUsuario<?= $usuario->id?>')">FECHAR</button>
                    </div>
            </div>

        <form action="ListaDeUsuarios/delete" method="POST">
            <div class="modal-listaDeUsuarios modal-deletarUsuario" id="deletarUsuario<?= $usuario->id ?>">
                    <input name="id" value="<?= $usuario->id ?>" type="hidden">
                <h1>Excluir</h1>
                <p>TEM CERTEZA QUE DESEJA <br> EXCLUIR O USUÁRIO?</p>
                <div class="botoesModais-listaDeUsuarios botoesModais-deletarUsuario">
                    <button class="confirmar-listaDeUsuarios">SIM</button>
                    <button class="cancelar-listaDeUsuarios" type="button" onclick="fecharModal('deletarUsuario<?= $usuario->id?>')">NÃO</button>
                </div>
            </div>
        </form>
        <?php endforeach; ?>

    </section>
    
</body>
<script src = "/public/js/listaDeUsuarios.js"></script>
</html>