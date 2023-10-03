<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    if(!isset($_SESSION["userid"])) {
        die("Você não pode acessar esta página porque não está logado(a).<p><a href='index.php'>Entrar</a></p>");
    }

?>