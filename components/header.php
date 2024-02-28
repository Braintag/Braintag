<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="components/components.css">
<script src="./assets/js/menu.js"></script>

<header>
    <div>
        <button id="botao-hamburguer" onclick="handleMenu()" >☰</button>
        <img class="logos" src="assets/img/logo.png" alt="">
        
        <nav>
            <a href="index.php">Início</a>
            <a href="#">Cursos</a>
            <a href="#">Fale conosco</a>
            <a href="login.php">Entrar</a>
        </nav>
    </div>

    <hr />

    <section class="menu" style="display: none">
        <div class="menu__top">
            <button onclick="handleMenu()">
                <img src="assets/img/fechar.png" alt="">
            </button>
        </div>

        <div class="menu__options">
            <a href="#">Início</a>
            <a href="#">Cursos</a>
            <a href="#">Fale conosco</a>
            <a href="#" target="">Entrar</a>
        </div>
    </section>
</header>
