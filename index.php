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
    <link rel="stylesheet" href="css/index.css">
    <script src="assets/js/menu.js"></script>

</head>

<body>
    
    <?php
        include_once('./components/header.php')
    ?>

    <main>

    <section id="banner"></section>

    <h2>
        Conheça alguns dos nossos cursos da BrainTag
    </h2>

    <p>
        Independente da sua escolha, o seu conhecimento sobre tecnologia vai além.
    </p>


    <section class="card">

        <div class="container-flex">
        <article>
            <div class="ig">
                <img src="/assets/img/js.png" alt="">
            </div>
            <div class="sp">
                <span>
                    Curso de JavaScrip
                </span>
            </div>
        </article>
    </div>

    <div class="container-flex">
        <article>
            <div class="ig">
                <img src="/assets/img/java 1.png" alt="">
            </div>
            <div class="sp">
                <span>
                    Curso de Java
                </span>
            </div>
        </article>
    </div>

    <div class="container-flex">
        <article>
            <div class="ig">
                <img src="/assets/img/Rectangle 88 (1).png" alt="">
            </div>
            <div class="sp">
                <span>
                    Desenvolvimento Web
                </span>
            </div>
        </article>
    </div>

    <div class="container-flex">
        <article>
            <div class="ig">
                <img src="/assets/img/mysql 1.png   " alt="">
            </div>
            <div class="sp">
                <span>
                    Curso de MySql
                </span>
            </div>
        </article>
    </div>

    </section>


    <section class="txt">
        <h2>
            Estude com a gente!
        </h2>

        <p>
            Queremos expandir o conhecimento sobre novas tecnologias e envolve-los no mercado de trabalho, sendo aluno
            da
            nossa plataforma terá acesso ás aulas gravadas, materias atualizados e ativadades dinamicas reforçando na
            prática.
        </p>

    </section>


    <h2>
        Seguimentos em aula
    </h2>

    <section id="ff">

        <div class="container">



            <img src="assets/img/Imagem.png" alt="">

            <h3 class="al">
                Aulas Gravadas
            </h3>

            <p>
            
            Estude no seu ritmo com <br> as aulas 
            disponibilizadas <br>  na nossa plataforma a <br> qualquer momento
            </p>



        </div>

        <div class="container">

            <img src="assets/img/Imagem (1).png" alt="">

            <h3 class="co">
                Conteúdo
            </h3>

            <p>
                Domine aquilo que é <br> necessário para ser <br> referência no seu <br> mercado de atuação.
            </p>


        </div>

        <div class="container">

            <img src="assets/img/Imagem (2).png" alt="">

            <h3 class="pr">
                Praticando
            </h3>

            <p>
                Saia do campo teórico e <br> descubra como aplicar o <br> conhecimento no seu <br> dia a dia de trabalho.
            </p>


        </div>



    </section>

    <section class="curso">

        <h2>
            Acesse agora todos os cursos!
        </h2>

        <a href="">Cursos</a>

    </section>


</main>

    <?php
        include_once('./components/footer.php')
    ?>
</body>

</html>