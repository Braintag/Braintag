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
    <link rel="stylesheet" href="css/visualizar-curso.css">
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
                    $video = $info["videoAula"];
                }
            
                echo "
                    <div>
                        <h1>Curso de $nome</h1>

                        <div class='div-video'>
                            <iframe controls src='$video'></iframe>
                        </div>
                    </div>

                    <section class='text-curso'>
                        <h2>$nomeAula</h2>
                        <p>$descricao</p>
                    </section>
                ";
            }

                echo "<section class ='aula-curso'>";

                if ($listagensDeAulas != 0) {
                    foreach($listagensDeAulas as $aula) {
                        $idAula = $aula["idAula"];
                        $nome = $aula["nome"];
                        $video = $aula["video"];
                        $ordem = $aula["ordem"];
                        $idCurso = $aula["idCurso"];

                        echo "
                            <div class ='div-aula1'>
                                <a href='./visualizar-curso.php?cid=$idCurso&aid=$idAula'>$nome</a>
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