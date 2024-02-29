<?php
    include_once("class/Aluno.php");
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
        <section>



            <h1>Faça o seu Login</h1>

            <div class = "main-login">
            <img src="assets/img/login.svg" alt="">
            </div>

            <section id="poost">
                <form method="POST">

                    <label>E-mail:</label>
                    <input type="text" name="email" minlength="3" required
                        placeholder="Informe seu e-mail de cadastro"><br><br>

                    <label>Senha:</label>
                    <input type="password" name="senha" minlength="3" required placeholder="Informe sua senha"><br><br>

                    <button type="submit" name="inserir">Entrar</button>
                
                <div class="form-lembrar">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                Lembrar minha senha
                </label>
            </div>

                    <section class="aaa">
                        <span>Ainda não tem cadastro?<a href="../php/formUser.php">Clique aqui</a></span>
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
        </section>
    </main>

    <?php
        include_once('./components/footer.php')
    ?>


</body>

</html>