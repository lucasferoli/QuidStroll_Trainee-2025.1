<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="\public\css\sidebar.css">
</head>
<body>
    <button class="menuBotaoMobile" id="menuMobile">
        <i class="fas fa-bars"></i>
    </button>

    <div class="sidebar collapsed" id="sidebar">
        <div class="sidebarHeader">
            <h3 class="sidebarTitle">Painel Admin</h3>
            <button class="sidebar-toggle" id="sidebarToggle">
                <i class="fas fa-chevron-left"></i>
            </button>
        </div>
        <nav class="sidebarNav">
            <a href="app\views\admin\dashboard.view.php" class="active" data-page="dashboard">
                <i class="fas fa-tachometer-alt"></i>
                <span class="link-text">Dashboard</span>
            </a>
            <a href="/tabeladeposts" data-page="posts">
                <i class="fas fa-newspaper"></i>
                <span class="link-text">Posts</span>
            </a>
            <a href="/ListaDeUsuarios" data-page="users">
                <i class="fas fa-users"></i>
                <span class="link-text">Usuários</span>
            </a>
        </nav>
        <div class="sidebarFooter">
            <form action="logout" method="POST">
            <a id="logout">
                <button style="all:unset" type="submit">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="link-text">Logout</span>
                </button>
            </a>
            </form>
        </div>
    </div>
    <script src="\public\js\sidebar.js"></script>
</body>
</html>
