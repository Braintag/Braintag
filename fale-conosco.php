<?php
        include('./class/aluno.php')
        ?>
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

        <div class="form-fale-conosco">
            <div class="fale-conosco-topo">
                <h1>Fale Conosco</h1>
                <img src="assets/img/contato.svg" alt="">
            </div>

            <form method="POST">
                <strong>Entre em contato</strong>

                <label>Nome</label>
                <input type="text" name="nome" minlength="3" required placeholder="Insira o seu nome completo">

                <label>Email</label>
                <input type="email" name="email" required placeholder="Insira o seu email">

                <label>Assunto</label>
                <input type="text" name="assunto" required placeholder="Insira o assunto">

                <label>Mensagem</label>
                <textarea name="mensagem" rows="4" required placeholder="Insira a sua mensagem"></textarea>

                <?php
                    if ( isset($_REQUEST["enviarForm"]) ) 
                        {
                            $f = new Aluno();
                            $f->create($_REQUEST["nome"], $_REQUEST["email"], ''); 

                            echo $f->faleConosco( $_REQUEST["assunto"], $_REQUEST["mensagem"]) == true ?
                                    "<p class='mensagem-sucesso'>Mensagem enviada!</p>" :
                                    "<p class='mensagem-erro'>Ocorreu um erro!</p>";
                        }
                ?>

                <section class='botao'>
                    <button type="submit" name="enviarForm">Enviar</button>
                </section>



            </form>
        </div>



        </form>



        <div class="suport-fale-conosco">
            <p class="central-suport">Central de atendimento</p>
            <p class="clock-suport">(Seg a sex das 8h ás 18h)</p>

            <div class="card-suport">
                <img src="assets/img/Telefone.png" alt="">
                <p>(13)3210-9876</p>
            </div>

            <div class="card-suport">
                <img src="assets/img/email.png" alt="">
                <p>suporte@braintag.com.br</p>
            </div>
        </div>
    </main>

    <?php
        include_once('./components/footer.php')
    ?>
</body>