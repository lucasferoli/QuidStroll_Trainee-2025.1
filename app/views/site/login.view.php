<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/Login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="corpoLogin">
        
          <form action="login" method="POST">
   
          <h1>Login</h1>
        
        
        <div class="campoEmail">
            <label>Email:</label>
            <input type="email" id="email" name="email">
        </div>
            
        <div class="campoSenha" >
            <label>Senha:</label>
            <div class="senhaOculta">
                <input type="password" id="senha" name="senha" autocomplete="off">
                <button type="button" class="esconderSenha">
                    <i class="fas fa-eye-slash" id="iconeOcultar"></i>
                </button>
            </div>
        </div>

        <div class="mensagem-erro-Login">
            <p><?php
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }
                if(isset($_SESSION['mensagem-erro'])){
                     echo($_SESSION['mensagem-erro']);
                }
                unset($_SESSION['mensagem-erro']);
                ?>
            </p>
        </div>

        <button class="botaoLogin" type="submit">LOGIN</button>

        </form>

        <div class="logoLogin">
            <img src="/public/assets/Logo QuidStroll Original.jpg">
        </div>
    </div>

    <script src="/public/js/Login.js"></script>
</body>
</html>