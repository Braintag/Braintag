<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/global.css">
    <script src="assets/js/menu.js"></script>
    <link rel="stylesheet" href="css/cursos.css">
</head>

<body>

    <?php
        include_once('./components/header.php')
    ?>

    <section id="banner"></section>

    <main class="background-cursos">
        <section class="top-cursos">
            <?php
                if(isset($_COOKIE["nome"])) {
                    echo "<span class='message-user'> Olá, " . $_COOKIE['nome'] . "</span>";
                }
            ?>
            <h1 class="title-cursos">
                Veja todos os cursos disponíveis na plataforma
            </h1>
            <p class="subtitle-cursos">
                Expanda o seu leque de conhecimentos com as tecnologias mais utilzadas no mercado.
            </p>
        </section>

        <section class="container-flex">

            <div>

            <?php
        include_once('./class/aluno.php')
    ?>


                    <?php

                                $aluno = new Aluno();

                                $idCurso = 1;

                                $curso = $aluno->listarCurso();

                                if ($curso != 0)
                                {

                                    $article = array(
                                        array("img" => "image1.jpg", "title" => "Título 1", "content" => "Conteúdo 1"),
                                        array("img" => "image2.jpg", "title" => "Título 2", "content" => "Conteúdo 2"),
                                    );

                                    foreach ($curso as $article) {
                                        echo '<article>';
                                        echo '<div>';
                                        echo '<img src="' . $article['imagem'] . '" alt="Imagem">';
                                        echo '<h3>' . $article['nome'] . '</h3>';
                                        echo '<p>' . $article['descricao']. '</p>';
                                        echo '</div>';
                                        echo '</article>';
                                    
                                    }
                                }
                            ?>

                

                
            </div>
        </section>

    </main>

    <?php
        include_once('./components/footer.php')
    ?>
</body>

</html>