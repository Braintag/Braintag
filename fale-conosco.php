<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainTag</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/fale-conosco.css">
    <script src="assets/js/menu.js"></script>

</head>
<body>
    
<?php
        include_once('./components/header.php')
        ?>
        <main>
            <h1>Fale Conosco</h1>

            <img src="assets/img/contato.svg" alt="">
        <div class="form-fale-conosco">

            <form method="POST">
            <strong>Entre em contato</strong> 

                <label>Nome</label>
                <input type="text" name="nome" minlength="3" required placeholder="Insira o seu nome completo">

                <label>Email</label>
                <input type="email" name="email" required placeholder="Insira o seu email">

                <label>Assunto</label>
                <input type="text" name="assunto" minlength="5" required placeholder="Insira o assunto">

                <label>Mensagem</label>
                <input type="text" name="Mensagem" minlength="5" required placeholder="Insira a sua mensagem">

                <section class='botao'>
                    <button type="submit" name="inserir">Enviar</button>
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
        </div>
    </main>
    <div class="suport-fale-conosco">
                <h1>Central de atendimento</h1>
                <h2>(Seg á sex das 8h ás 18h)</h2>
        <div class="suport-fale-conosco2">
                <img src="assets/img/Telefone.png" alt="">
                <p>(13)99622-9144</p>
                <img src="assets/img/email.png" alt="">
                <p>suporte@braintag.com.br</p>
        </div>
    </div>
    
<?php
        include_once('./components/footer.php')
?>
</body>