<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('Location: /login');

}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" href="/public/css/dashboard.css">
    <script src="/public/js/dashboard.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body id="bodyDashboard">
    <div id="conteudoDashboard"> 
        <div id="textoDashboard">
            <p>DASHBOARD</p>
        </div>
        <a class="linkDashboard" href="/">
                    <div class="cardDashboard">
                        <p>HOME</p>
                    </div>
                </a>
            <div id="cardsDashboard">
                <a class="linkDashboard" href="/tabeladeposts">
                    <div class="cardDashboard">
                        <p>POSTS</p>
                    </div>
                </a>
                <a class="linkDashboard" href="/ListaDeUsuarios">
                    <div class="cardDashboard">
                        <p>USUÁRIOS</p>
                    </div>
                </a>

                <form action="logout" method="POST">

                    
                    <button class="cardLogout" type="submit"><p>LOGOUT</p></button>    
                    
            
                </form>
            </div>
        <div id="logoDashboard">
            <img src = "/public/assets/QuidStroll-logo.png" alt="Logo">
        </div>
    </div>
</body>
</html>