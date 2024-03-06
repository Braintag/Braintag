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

    <main>
        <h1>
            Veja todos os cursos disponíveis na plataforma
        </h1>

        <p class ='text-p'>
            Expanda o seu leque de conhecimentos com as tecnologias mais utilzadas no mercado.
        </p>

        <section class="container-flex">

            <div>
                <article class="card-class-course-available">

                    <div>
                    <img src="assets/img/js-white.png" alt="">
                    </div>
                    
                    <h3>
                    Curso de JavaScript
                    </h3>
                    <p class="cursos">
                    Um curso abrangente sobre a linguagem de <br> programação JavaScript, cobrindo desde os <br> fundamentos até tópicos avançados como <br> manipulação do DOM e programação orientada a <br> objetos.
                    </p>

                    <div>
                    <a href="">Acessar</a>
                    </div>
                </article>

                <article class="card-class-course-unavailable">
                    <div>
                    <img src="assets/img/Java-white.png" alt="">
                    </div>
                    <h3>
                    Curso de Java
                    </h3>
                    <p class="cursos">
                    Este curso ensina os conceitos fundamentais e avançados da linguagem de programação Java, abordando desde sintaxe básica até desenvolvimento Android e aplicativos corporativos.
                    </p>
                    <div>
                    <a href="">Indisponível</a>
                    </div>
                </article>

                <article class="card-class-course-unavailable">
                    <div>
                    <img src="assets/img/Desenvolvimento.png" alt="">
                    </div>
                    <h3>
                    Desenvolvimento Web
                    </h3>
                    <p class="cursos">
                    Um curso completo que abrange HTML, CSS, JavaScript e desenvolvimento do lado do servidor com tecnologias como PHP, Python ou Node.js, além de frameworks populares como Django e AngularJS.                
                    </p>
                    <div>
                    <a href="">Indisponível</a>
                    </div>
                </article>

                <article class="card-class-course-unavailable">
                    <div>
                    <img src="assets/img/Mysql-white.png" alt="">
                    </div>
                    <h3>
                    Curso de MySql
                </h3>
                    <p class="cursos">
                    Focado no sistema de gerenciamento de banco de dados MySQL, este curso ensina design de banco de dados, consultas SQL, otimização e integração com várias linguagens de programação para desenvolvimento web.    </p>
                    <div>
                    <a href="">Indisponível</a>
                    </div>
                </article>
            </div>
    </section>
    
</main>

<?php
        include_once('./components/footer.php')
    ?>
</body>
</html>