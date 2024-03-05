<?php
    if (isset($_COOKIE["nome"])) {
        unset($_COOKIE["nome"]);
        setcookie("nome", null, -1);
    }

    header("Location: login.php");
?>
