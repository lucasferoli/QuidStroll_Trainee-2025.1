<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="/public/css/Navbar.css">
</head>
<body>
    <nav class="navbar">
        <div class="logoNavbar">
            <img src="/public/assets/quidStroll-logo.png">
        </div>
        
        <button class="menuMobile" id="mobileMenu">
            <i class="fas fa-bars"></i>
        </button>

        <div class="botoesNavbar" id="botoesNavbar">
            <a href="/"><i class="fas fa-home"></i>Home</a>
            <a href="/lista"><i class="fas fa-newspaper"></i>Publicações</a>
            <a href="/login"><i class="fas fa-sign-in-alt"></i>Login</a>
        </div>
    </nav>

    <script src="/public/js/Navbar.js" defer></script>
</body>
</html>