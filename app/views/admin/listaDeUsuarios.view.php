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
                    <tr>
                        <td data-cell = "ID">1344</td>
                        <td data-cell="Nome">Jonas Silva</td>
                        <td data-cell="Email">jonassilva@gmail.com</td>
                        <td class="acoes-listaDeUsuarios">
                            <button onclick="abrirModal('visualizarUsuario')"><img src="/public/assets/visualizar.png" alt="" id="visualizar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('editarUsuario')"><img src="/public/assets/editarUsuario-3.png" alt="" id="editar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('deletarUsuario')"><img src="/public/assets/delete.png" alt="" id="deletar-listaDeUsuarios"></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell = "ID">1694</td>
                        <td data-cell="Nome">Josten Silva</td>
                        <td data-cell="Email">jostensilva@gmail.com</td>
                        <td class="acoes-listaDeUsuarios">
                            <button onclick="abrirModal('visualizarUsuario')"><img src="/public/assets/visualizar.png" alt="" id="visualizar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('editarUsuario')"><img src="/public/assets/editarUsuario-3.png" alt="" id="editar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('deletarUsuario')"><img src="/public/assets/delete.png" alt="" id="deletar-listaDeUsuarios"></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell = "ID">1984</td>
                        <td data-cell="Nome">Joana Silva</td>
                        <td data-cell="Email">joanasilva@gmail.com</td>
                        <td class="acoes-listaDeUsuarios">
                            <button onclick="abrirModal('visualizarUsuario')"><img src="/public/assets/visualizar.png" alt="" id="visualizar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('editarUsuario')"><img src="/public/assets/editarUsuario-3.png" alt="" id="editar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('deletarUsuario')"><img src="/public/assets/delete.png" alt="" id="deletar-listaDeUsuarios"></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell = "ID">4644</td>
                        <td data-cell="Nome">João Silva</td>
                        <td data-cell="Email">joaosilva@gmail.com</td>
                        <td class="acoes-listaDeUsuarios">
                            <button onclick="abrirModal('visualizarUsuario')"><img src="/public/assets/visualizar.png" alt="" id="visualizar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('editarUsuario')"><img src="/public/assets/editarUsuario-3.png" alt="" id="editar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('deletarUsuario')"><img src="/public/assets/delete.png" alt="" id="deletar-listaDeUsuarios"></button>
                        </td>
                    </tr>
                    <tr>
                        <td data-cell = "ID">6232</td>
                        <td data-cell="Nome">Juca Silva</td>
                        <td data-cell="Email">jucasilva@gmail.com</td>
                        <td class="acoes-listaDeUsuarios">
                            <button onclick="abrirModal('visualizarUsuario')"><img src="/public/assets/visualizar.png" alt="" id="visualizar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('editarUsuario')"><img src="/public/assets/editarUsuario-3.png" alt="" id="editar-listaDeUsuarios"></button>
                            <button onclick="abrirModal('deletarUsuario')"><img src="/public/assets/delete.png" alt="" id="deletar-listaDeUsuarios"></button>
                        </td>
                    </tr>
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
        
        <form action="" method="">
            <div class="modal-listaDeUsuarios" id="criarUsuario">
                <h1>Criar</h1>
                <div>
                    <p>Nome:</p>
                    <input required type="text">
                </div>
                <div>
                    <p>Email:</p>
                    <input required type="email">
                </div>
                <div>
                    <p>Senha:</p>
                    <input required type="text">
                </div>
                <div class="botoesModais-listaDeUsuarios">
                    <button>SALVAR</button>
                    <button type="button" onclick="fecharModal('criarUsuario')">CANCELAR</button>
                </div>
            </div>
        </form>
        <form action="" method="">
            <div class="modal-listaDeUsuarios" id="editarUsuario">
                <h1>Editar</h1>
                <div>
                    <p>Nome:</p>
                    <input type="text">
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
                    <button type="button" onclick="fecharModal('editarUsuario')">CANCELAR</button>
                </div>
            </div>
        </form>
        <form action="" method=""> 
            <div class="modal-listaDeUsuarios" id="visualizarUsuario">
                <h1>Informações</h1>
                <div>
                    <p>Nome:</p>
                    <input type="text" value="Euzinho da Silva" disabled>
                </div>
                <div>
                    <p>Email:</p>
                    <input type="text" value="euzinhodasilva@gmail.com" disabled>
                </div>
                <div>
                    <p>Senha:</p>
                    <input type="text" value="40028922" disabled>
                </div>
                <div class="botoesModais-listaDeUsuarios">
                    <button type="button" onclick="fecharModal('visualizarUsuario')">FECHAR</button>
                </div>
            </div>
        </form>
        <form action="" method="">
            <div class="modal-listaDeUsuarios" id="deletarUsuario">
                <h1>Excluir</h1>
                <p>TEM CERTEZA QUE DESEJA <br> DELETAR O USUÁRIO?</p>
                <div class="botoesModais-listaDeUsuarios">
                    <button>SIM</button>
                    <button type="button" onclick="fecharModal('deletarUsuario')">NÃO</button>
                </div>
            </div>
        </form>
    </section>
    
</body>
<script src = "/public/js/listaDeUsuarios.js"></script>
</html>