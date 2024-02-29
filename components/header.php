<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="components/components.css">
<script src="./assets/js/menu.js"></script>

<header>
    <div class='header-internal'>
        <button id="button-hamburger" onclick="handleMenu()" >☰</button>
        <img id="logo" src="assets/img/logo.png" alt="">
        
        <nav>
            <a href="./index.php">Home</a>
            <a href="#">Cursos</a>
            <a href="#">Fale conosco</a>
            <a href="./login.php">Entrar</a>
        </nav>
    </div>

    <hr />

    <section class="menu" style="display: none">
        <button onclick="handleMenu()">
            <img src="assets/img/fechar.png" alt="">
        </button>

        <div class="menu-options">
            <a href="./index.php">Home</a>
            <a href="#">Cursos</a>
            <a href="#">Fale conosco</a>
            <a href="./login.php">Entrar</a>
        </div>
    </section>
</header>
