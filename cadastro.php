<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>BrainTag - Cadastro</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/cadastro.css">
    <script src="assets/js/menu.js"></script>
</head>
<body>
    <?php
        include_once('./components/header.php')
    ?>

    <main>
        <h1>Faça seu cadastro</h1>

        <section class="form-cadastro">
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
                
                <span>Já tem uma conta? <a href='login.php' class='redirecionar' >Entrar</a></span>

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
        </section>
    </main>

    <?php
        include_once('./components/footer.php')
    ?>
</body>
</html>