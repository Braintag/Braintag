<link rel="stylesheet" href="css/global.css">
<link rel="stylesheet" href="components/components.css">
<script src="./assets/js/menu.js"></script>

<header>
    <div class='header-internal'>
        <button id="button-hamburger" onclick="handleMenu()" >☰</button>
        <img id="logo" src="assets/img/logo.png" alt="">
        
        <nav>
            <a href="./index.php">Home</a>
            <?php
                if(isset($_COOKIE["nome"])) {
                    echo "<a href='./cursos.php'>Cursos</a>";
                }
            ?>
            <a href="./fale-conosco.php">Fale conosco</a>
            <?php
                if(isset($_COOKIE["nome"])) {
                    echo "<a href='./sair.php'>Sair</a>";
                } else {
                    echo "<a href='./login.php'>Entrar</a>";
                }
            ?>
        </nav>
    </div>

    <hr />

    <section class="menu" style="display: none">
        <button onclick="handleMenu()">
            <img src="assets/img/fechar.png" alt="">
        </button>

        <div class="menu-options">
            <a href="./index.php">Home</a>
            <?php
                if(isset($_COOKIE["nome"])) {
                    echo "<a href='./cursos.php'>Cursos</a>";
                }
            ?>
            <a href="./fale-conosco.php">Fale conosco</a>
            <?php
                if(isset($_COOKIE["nome"])) {
                    echo "<a href='./sair.php'>Sair</a>";
                } else {
                    echo "<a href='./login.php'>Entrar</a>";
                }
            ?>
        </div>
    </section>
</header>
