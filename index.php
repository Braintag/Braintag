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

        <section class='introduction-home'>
            <h2>Conheça alguns dos nossos cursos da Braintag</h2>
            <p>Independente da sua escolha, o seu conhecimento sobre tecnologia vai além.</p>
        </section>


        <section class="cards-course-simple">
            <div class="card-course-simple">
                <article>
                    <div class="image-course-simple">
                        <img src="./assets/img/js-dark.png" alt="Imagem remetente ao curso de JavaScript">
                    </div>
                    <div class="name-course-simple">
                        <span>Curso de JavaScript</span>
                    </div>
                </article>
            </div>

            <div class="card-course-simple">
                <article>
                    <div class="image-course-simple">
                        <img src="./assets/img/java.png" alt="Imagem remetente ao curso de Java">
                    </div>
                    <div class="name-course-simple">
                        <span>Curso de Java</span>
                    </div>
                </article>
            </div>

            <div class="card-course-simple">
                <article>
                    <div class="image-course-simple">
                        <img src="./assets/img/desenvolvimento-web.png" alt="Imagem remetente ao curso de Desenvolvimento Web">
                    </div>
                    <div class="name-course-simple">
                        <span>Desenvolvimento Web</span>
                    </div>
                </article>
            </div>

            <div class="card-course-simple">
                <article>
                    <div class="image-course-simple">
                        <img src="./assets/img/mysql.png" alt="Imagem remetente ao curso de MySql">
                    </div>
                    <div class="name-course-simple">
                        <span>Curso de MySql</span>
                    </div>
                </article>
            </div>

        </section>

        <section class="study-home">
            <h2>Estude com a gente!</h2>

            <p>Estamos empenhados em ampliar o conhecimento sobre as mais recentes tecnologias e integrá-las ao mercado de trabalho. Como aluno de nossa plataforma, você terá acesso a uma ampla gama de recursos educacionais projetados para capacitar e prepará-lo para os desafios do mundo profissional moderno.</p>

            <p> Nossa plataforma oferece aulas gravadas ministradas por especialistas de renome, que compartilham seu conhecimento e experiência de forma acessível e envolvente. Além disso, atualizamos constantemente nosso material didático para garantir que você tenha acesso às informações mais recentes e relevantes.</p>

            <p>Acreditamos na importância da aprendizagem prática, por isso oferecemos uma variedade de atividades dinâmicas que permitem que você aplique o que aprendeu em situações do mundo real. Essas atividades são projetadas para desafiar e desenvolver suas habilidades, preparando-o para enfrentar os desafios do mercado de trabalho com confiança e competência.</p>
        </section>

        
        <section class="class-home">
            <h2>Seguimentos em aula</h2>
            
            <div>   
                <article class="card-class-home">
                    <img src="assets/img/aulas-gravadas.png" alt="">
                    
                    <h3>Aulas Gravadas</h3>
                    
                    <p>Estude no seu ritmo com as aulas  disponibilizadas na nossa plataforma a qualquer momento</p>
                </article>
                
                <article class="card-class-home">
                    <img src="assets/img/conteudo.png" alt="">
                    
                    <h3>Conteúdo</h3>
                    
                    <p>Domine aquilo que é necessário para ser referência no seu mercado de atuação.</p>
                </article>
                
                <article class="card-class-home">
                    <img src="assets/img/praticando.png" alt="">
                    
                    <h3>Praticando</h3>
                    
                    <p>Saia do campo teórico e descubra como aplicar o conhecimento no seu dia a dia de trabalho.</p>
                </article>
            </div>
        </section>

        <section class="course-home">
            <h2>Acesse agora todos os cursos!</h2>
            <?php
                if(isset($_COOKIE["nome"])) {
                    echo "<a href='./cursos.php'>Clique aqui para saber mais</a>";
                } else {
                    echo "<a href='./login.php'>Clique aqui para saber mais</a>";
                }
            ?>
        </section>
    </main>

    <?php
        include_once('./components/footer.php')
    ?>
    
</body>

</html>