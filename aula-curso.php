<?php  
    include_once("class/Aluno.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter&family=Poppins&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet">
    <title>Visualização do Curso</title>
    <link rel="stylesheet" href="css/aula-curso.css">
</head>

<body>

    <?php
        include_once('./components/header.php');
    ?>

    <main>

        <?php
            $aluno = new Aluno();

            $informacaoDoCurso = $aluno->informacaoDoCurso($_GET["cid"], $_GET["aid"]);
            $listagensDeAulas = $aluno->listarAulas($_GET["cid"]);
      
            if ($informacaoDoCurso != 0) {
                foreach($informacaoDoCurso as $info) {
                    $nome = $info["nomeCurso"];
                    $nomeAula = $info["nomeAula"];
                    $descricao = $info["descricaoAula"];
                    $link = $info["linkAula"];
                }

                echo "
                    <div class='info-curso'>
                        <h1>Curso de $nome</h1>

                        <div class='div-video'>
                            <iframe controls src='$link'></iframe>
                        </div>

                        <div>
                            <p class = 'men'>
                                Esse vídeo foi usado como um mero exemplo para o nosso projeto, todos os direitos reservados do Curso em Video e de seu proprietário Gustavo Guanabara.
                            </p>
                        </div>

                    </div>

                    <section class='info-aula'>
                        <h2>$nomeAula</h2>
                        <p>$descricao</p>
                    </section>
                ";
            }

                echo "<section class ='listagens-aulas'>";

                if ($listagensDeAulas != 0) {
                    foreach($listagensDeAulas as $aula) {
                        $idAula = $aula["idAula"];
                        $nome = $aula["nome"];
                        $idCurso = $aula["idCurso"];

                        echo "
                            <div class ='aulas-links'>
                                <a href='./aula-curso.php?cid=$idCurso&aid=$idAula'>$nome</a>
                            </div>
                        ";
                    }

                echo "</section>";
            }
        ?>

    </main>

    <?php
        include_once('./components/footer.php');
    ?>

</body>

</html>