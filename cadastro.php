<?php include("./class/Aluno.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fale-conosco.css">

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
    <script src="assets/js/validarSenha.js"></script>
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
                <input type="password" id="senha" name="senha" minlength="5" required placeholder="Insira a sua senha">

                <label>Confirmar Senha</label>
                <input type="password" id="confirmar-senha" name="confirmar-senha" minlength="5" required placeholder="Insira a sua senha novamente">
                <span class="mensagem-erro" id="erro-senha" style="visibility: hidden">As senhas não coincidem</span>

                <section class='botao'>
                    <button type="submit" name="cadastrar" onclick="return validarSenha()">Cadastrar</button>
                </section>
                
                <?php
                    if (isset($_REQUEST["cadastrar"]))
                    {
                        $a = new Aluno();
                        $a->create($_REQUEST["nome"], $_REQUEST["email"], $_REQUEST["senha"]);

                        echo $a->inserirAluno() == true ? "
                        <span class='mensagem-sucesso'>Cadastro efetuado com sucesso!</span>" : 
                        "<span class='mensagem-erro'>Ocorreu um erro! Tente novamente mais tarde</span>";
                    }
                ?>
                
                <section class="message">
                    <span>Já tem uma conta? <a href='login.php' class='redirecionar' >Entrar</a></span>
                </section>

            </form>
        </section>
    </main>

    <?php
        include_once('./components/footer.php')
    ?>
</body>
</html>