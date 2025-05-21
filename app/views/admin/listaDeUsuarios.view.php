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
    <section class="sidebar-listaDeUsuarios">

        <!-- NECESSARIOS MELHORIAS EM RESPONSIVIDADE E BOTOES DE PAGINAÇÃO!!-->
    </section>
    <section class="listaDeUsuarios">
        <div class="titulo-listaDeUsuarios">
            <h1>Lista de Usuários</h1>
        </div>
        <div class="botaoAdicionar-listaDeUsuarios">
            <button onclick="abrirModal('criarUsuario')"><img src="/public/assets/novoUsuario.png" alt="" id="novoUsuario-listaDeUsuarios"></button>
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
                            <button type="button" onclick="abrirModal('visualizarUsuario<?= $usuario->id?>')" ><img src="/public/assets/visualizar.png" alt="" id="visualizar-listaDeUsuarios"></button>
                            <button type="button" onclick="abrirModal('editarUsuario<?php $usuario->id ?>')"><img src="/public/assets/editarUsuario-3.png" alt="" id="editar-listaDeUsuarios"></button>
                            <button type="button" onclick="abrirModal('deletarUsuario<?php $usuario->id ?>')"><img src="/public/assets/delete.png" alt="" id="deletar-listaDeUsuarios"></button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                    
                </tbody>

            </table>
        </div>
        <nav class="paginacao-listaDeUsuarios">
            <button>&lt</button>
            <button id="paginaEmUso-listaDeUsuarios">1</button>
            <button>2</button>
            <button>3</button>
            <button>&gt</button>
        </nav>
        
<!-------------------------------------MODAL-------------------------------------------->

        <form action="/ListaDeUsuarios/create" method="POST">
            <div class="modal-listaDeUsuarios" id="criarUsuario">
                <h1>Criar</h1>
                <div>
                    <p>Nome:</p>
                    <input required type="text" name = "nome">
                </div>
                <div>
                    <p>Email:</p>
                    <input required type="email" name = "email">
                </div>
                <div>
                    <p>Senha:</p>
                    <input required type="text" name = "senha">
                </div>
                <div class="botoesModais-listaDeUsuarios">
                    <button>SALVAR</button>
                    <button type="button" onclick="fecharModal('criarUsuario')">CANCELAR</button>
                </div>
            </div>
        </form>


        <?php foreach($usuarios as $usuario): ?>
        <form action="/ListaDeUsuarios/edit" method="POST">
            <div class="modal-listaDeUsuarios" id="editarUsuario">
                <h1>Editar</h1>
                <div>
                    <p>Nome:</p>
                    <input type="text" value= <?= $usuario->nome ?> disabled> 
                </div>
                <div>
                    <p>Email:</p>
                    <input type="email">
                </div>
                <div>
                    <p>Senha:</p>
                    <input type="text">
                </div>
                <div class="botoesModais-listaDeUsuarios">
                    <button>SALVAR</button>
                    <button type="button" onclick="fecharModal('editarUsuario<?= $usuario->id?>')">CANCELAR</button>
                </div>
            </div>
        </form>

            <div class="modal-listaDeUsuarios" id= "visualizarUsuario<?= $usuario->id ?>" >
                <h1>Informações</h1>
                <div>
                    <p>Nome:</p>
                    <input type="text" value= <?= $usuario->nome ?> disabled> 
                </div>
                <div>
                    <p>Email:</p>
                    <input type="email" value= <?= $usuario->email ?> disabled>
                </div>
                <div>
                    <p>Senha:</p>
                    <input type="password" value= <?= $usuario->senha ?> disabled>
                </div>
                <div class="botoesModais-listaDeUsuarios">
                    <button type="button" onclick="fecharModal('visualizarUsuario<?= $usuario->id?>')">FECHAR</button>
                </div>
            </div>

        <form action="" method="">
            <div class="modal-listaDeUsuarios" id="deletarUsuario">
                <h1>Excluir</h1>
                <p>TEM CERTEZA QUE DESEJA <br> DELETAR O USUÁRIO?</p>
                <div class="botoesModais-listaDeUsuarios">
                    <button>SIM</button>
                    <button type="button" onclick="fecharModal('deletarUsuario<?= $usuario->id?>')">NÃO</button>
                </div>
            </div>
        </form>
        <?php endforeach; ?>

    </section>
    
</body>
<script src = "/public/js/listaDeUsuarios.js"></script>
</html>