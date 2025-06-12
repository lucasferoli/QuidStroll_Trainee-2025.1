<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial | QuidStroll</title>
    <link rel="stylesheet" href="/public/css/landingPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/public/css/navbar-LandingPage.css">
<link rel="stylesheet" href="/public/css/footer-landinPage.css">
</head>
<body>

<?php
require('app\views\site\componentes\navbar.view.php')
?>



    <section class="hero-section-landingPage">
        <div class="texto-hs-landingPage">
            <h1>A regra é opinar!</h1>
            <div class="logo-descricao-landingPage">
                <div class="balao-descricao-landingPage">
                    <p>Um lugar feito para liberar seus pontos de vista, filosofia ou qualquer conclusão da sua mente. Vem fazer um quid!</p>
                </div>
                <img src="/public/assets/quidStroll-logo-Nome.png" alt="">
            </div>
        </div>
            <div class="imagem-mascote-landingPage">
            <img src="/public/assets/personagem-computador.webp" alt="Usuario" id="img-user-landingPage">
            <img src="/public/assets/guitarra.png" alt="Guitarra" id="img-guitarra-landingPage">
            <img src="/public/assets/notas.webp"  alt="Notas"  id="img-notas-landingPage">
            <img src="/public/assets/coracao.webp" alt="Coracao" id="img-coracao-landingPage">
            <img src="/public/assets/bola.webp" alt="Bola" id="img-bola-landingPage">
            <img src="/public/assets/batata-frita.webp" alt="Batata Frita" id="img-batata-landingPage">
            <img src="/public/assets/semaforo.webp" alt="Semaforo" id="img-semaforo-landingPage">
            </div>
    </section>

    <section class="posts-recentes-landingPage">
        <h1 id="titulo-pr-landingPage">Quidies recentes</h1>
        
        <div class="carrossel-posts-landingPage">
            <div class="post-landingPage"> 
                <img src="/public/assets/GTN1H5JWEAAq7Kx.jfif" alt="">
                <h1>Cortar o cabelo é muito estranho</h1>
                <p>Jose Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>
            <div class="post-landingPage"> 
                <img src="/public/assets/118-1187209_black-hat-png-stock-by-doloresminette-pluspng-fedora.png" alt="">
                <h1>Chapéus fedora precisam acabar</h1>
                <div class="containerAutorBotao-ladingPage">

                </div>
                <p>Juca Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>
            <div class="post-landingPage"> 
                <img src="/public/assets/fazenda-porteira.webp" alt="">
                <h1>Cripto fazendas são o futuro</h1>
                <div class="containerAutorBotao-ladingPage">
                    
                </div>
                <p>João Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>
            <div class="post-landingPage"> 
                <img src="/public/assets/casa.jpg" alt="">
                <h1>Cripto casas que são o futuro</h1>
                <div class="containerAutorBotao-ladingPage">
                    
                </div>
                <p>Jonas Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>
            <div class="post-landingPage"> 
                <img src="/public/assets/futuro.jpg" alt="">
                <h1>Não haverá futuro</h1>
                <div class="containerAutorBotao-ladingPage">
                    
                </div>
                <p><br>Jô Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>


        </div>
    </section>


<?php
require('app\views\site\componentes\footer.view.php');
?>







      
    
</body>
<script src="/public/js/navbar-landigPage.js" defer></script>
</html>