<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fale-conosco.css">

    <script src="assets/js/menu.js"></script>

    <title>Cadastro</title>
</head>
<body>
    <header>
        <button id="botao-hamburguer" onclick="handleMenu()" >☰</button>
            <img class="logo" src="assets/img/logo (1).png" alt="">

            <nav>
                <span>
                    <a href="index.html">Início</a>
                </span>
                <span>
                    <a href="#">Cursos</a>
                </span>
                <span>
                    <a href="#">Fale conosco</a>
                </span>
                <span>
                    <a href="loginAluno.php">Entrar</a>
                </span>
            </nav>

            <section class="menu" style="display: none">
                <div class="menu__top">
                    <button onclick="handleMenu()">
                        <img src="assets/img/simbolo-x 1.png" alt="">
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

    <main>
        <h1>Faça seu cadastro</h1>

        <div class="form-cadastro">
            <img src="assets/img/cadastro.svg" alt="">

            <form method="POST">
                <strong>Cadastre-se</strong>

                <label>Nome</label>
                <input type="text" name="nome" minlength="3" required placeholder="Insira o seu nome completo">

                <label>Email</label>
                <input type="email" name="email" required placeholder="Insira o seu email">

                <label>Senha</label>
                <input type="password" name="senha" minlength="5" required placeholder="Insira a sua senha">

                <label>Confirmar Senha</label>
                <input type="password" name="confirmar-senha" minlength="5" required placeholder="Insira a sua senha novamente">

                <section class='botao'>
                    <button type="submit" name="inserir">Cadastrar</button>
                </section>
                
                <span>Já tem uma conta? <a href='loginaluno.php' class='redirecionar' >Entrar</a></span>

            <?php
                //if(isset($_REQUEST["inserir"]))
                //{
                    //$u = new User();

                    //if ($u->autenticarUsuario($_REQUEST["email"],$_REQUEST["senha"]) == 0)
                    //{
                        // echo "<p>E-mail e/ou senha incorreto(s)!</p>";                   
                    //}
                    //else 
                    //{
                        //session_start();
                        //$_SESSION["nome"] = $u->getNome();
                        //header("Location: ../php/void.php"); //*redirecionando para outra página
                    //}
                //}

                if (isset($_REQUEST["inserir"]))
                {
                    $u = new User();
    
                    if ($u->autenticarUsuario($_REQUEST["email"], $_REQUEST["senha"]) == 0)
                    {
                        echo "<p>Usuário e/ou senha incorreto(s).</p>";                   
                    }
                    else {
                        ////Utilizando dados em sessão
                        // session_start();
                        // $_SESSION["nome"] = $u->getUsuario();
                        // header("Location: areaRestrita.php"); //redirecionando para outra página
                        $cookieName = "nome";
                        $cookieValue = $u->getNome();
                        setcookie($cookieName, $cookieValue, time() + 86400, "/");
                        header("Location: ../php/void.php");
                    }
                }
                ?>
            </form>
        </div>
    </main>

    <footer>
        <p>© 2023 Braintag - Todos os Direitos Reservados. Desenvolvido com paixão pelo aprendizado.</p>
    </footer>
</body>
</html>