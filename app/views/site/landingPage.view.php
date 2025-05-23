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

     <nav class="navbar">
        <div class="logoNavbar">
            <img src="/public/assets/Logo QuidStroll Original.png">
        </div>
        
        <button class="menuMobile" id="mobileMenu">
            <i class="fas fa-bars"></i>
        </button>

        <div class="botoesNavbar" id="botoesNavbar">
            <a href="#"><i class="fas fa-home"></i>Home</a>
            <a href="#"><i class="fas fa-newspaper"></i>Publicações</a>
            <a href="#"><i class="fas fa-sign-in-alt"></i>Login</a>
        </div>
    </nav>
    
<!---->



    <section class="hero-section-landingPage">
        <div class="texto-hs-landingPage">
            <h1>A regra é opinar!</h1>
            <div class="logo-descricao-landingPage">
                <div class="balao-descricao-landingPage">
                    <p>Um lugar feito para liberar seus pontos de vista, filosofia ou qualquer conclusão da sua mente. Vem fazer um quid!</p>
                </div>
                <img src="/public/assets/quidStroll-logo.png" alt="">
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
                <p>Juca Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>
            <div class="post-landingPage"> 
                <img src="/public/assets/fazenda-porteira.webp" alt="">
                <h1>Cripto fazendas são o futuro</h1>
                <p>João Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>
            <div class="post-landingPage"> 
                <img src="/public/assets/casa.jpg" alt="">
                <h1>Cripto casas que são o futuro</h1>
                <p>Jonas Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>
            <div class="post-landingPage"> 
                <img src="/public/assets/futuro.jpg" alt="">
                <h1>Não haverá futuro</h1>
                <p>Jô Silva</p>
                <div class = "botao-ver-mais-landingPage">Ver mais</div>
            </div>


        </div>
    </section>
<!---->

<section id="bodyFooter">
    <footer> 
        <div id="redesFooter">
            <div id="tituloRedesFooter">                
                <p class="textoFooter"> Redes Sociais</p>
            </div>
            <div id="logosFooter">
                <a class="logoFooter facebookFooter" href="https://www.google.com/">
                    <img src="/public/assets/Facebook.png" alt="">
                </a>
                <a class="logoFooter twitterFooter" href="https://www.google.com/">
                    <img src="/public/assets/Twitter.png" alt="">
                </a>
                <a class="logoFooter instagramFooter" href="https://www.google.com/">
                    <img src="/public/assets/Instagram.png" alt="">
                </a>
            </div>
        </div>

        <div id="objetivosFooter">
            <div>
                <p class="textoFooter">Quid Stroll – Um espaço para compartilhar pensamentos, 
                    reflexões e desabafos sobre o cotidiano e o mundo. Aqui, toda experiência tem voz, 
                    das pequenas situações do dia a dia aos grandes acontecimentos globais.
                </p>
            </div>
        </div>

        <div id="desenvolvedorFooter">
            <div id="tituloDesenvolvedorFooter">
                <p class="textoFooter">Desenvolvedor</p>
            </div>
            <div id= "codeFooter">
                <img src="/public/assets/code-logo.png" alt="">
            </div>
        </div>        
    </footer>







</section>
      
    
</body>
<script src="/public/js/navbar-landigPage.js" defer></script>
</html>