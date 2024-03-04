<?php
    include_once("class/aluno.php");
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>BrainTag</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">

        <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="assets/js/menu.js"></script>

</head>

<body>

    <?php
        include_once('./components/header.php')
    ?>

    <main>
        <h1>Faça seu Login</h1>

        <section class="form-login"">
            <img src="assets/img/login.svg" alt="">

            <form method="POST">
                <strong>Login</strong>

                <label for="usuario" class='form-login-label' >E-mail</label>
                <input type="text" name="usuario" placeholder="Insira seu e-mail" class='form-login-input' >
    
        
                <label for="senha" class='form-login-label' >Senha</label>
                <input type="password" name="senha" placeholder="Insira sua senha" class='form-login-input'>
 
                <div class="form-lembrar">
                    <input type="checkbox" name="invalidCheck">
                    <label for="invalidCheck">Lembrar da senha</label>
                </div>

                <button class="botao">Entrar</button>

                <section class="aaa">
                    <span class ='po'>Ainda não tem cadastro?</span> <a class='redirecionar' href="cadastro.php">Clique aqui</a>
                </section>


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

                    // if (isset($_REQUEST["inserir"]))
                    // {
                    //     $u = new User();
        
                    //     if ($u->autenticarUsuario($_REQUEST["email"], $_REQUEST["senha"]) == 0)
                    //     {
                    //         echo "<p>Usuário e/ou senha incorreto(s).</p>";                   
                    //     }
                    //     else {
                    //         ////Utilizando dados em sessão
                    //         // session_start();
                    //         // $_SESSION["nome"] = $u->getUsuario();
                    //         // header("Location: areaRestrita.php"); //redirecionando para outra página
                    //         $cookieName = "nome";
                    //         $cookieValue = $u->getNome();
                    //         setcookie($cookieName, $cookieValue, time() + 86400, "/");
                    //         header("Location: ../php/void.php");
                    //     }
                    // }
                ?>
            </form>
        </section>
    </main>

    <?php 
        include_once('./components/footer.php')
    ?>
</body>

</html>