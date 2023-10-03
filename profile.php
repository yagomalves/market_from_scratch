<?php
include_once "header.php";

include './classes/Dbh.classes.php';
include './classes/profileinfo.classes.php';
include './views/profileinfo_view.classes.php';


    if (!isset($_SESSION["userid"])) {
        die("Você não pode acessar esta página porque não está logado(a).<p><a href='index.php'>Entrar</a></p>");
    } 

    $profileInfo = new ProfileInfoView();
    

  //echo $_SESSION["useruid"];
    echo "<br> <br>";
    $profileInfo->FetchTitle($_SESSION["userid"]);
    echo "<br> <br>";
    $profileInfo->FetchAbout($_SESSION["userid"]);
    echo "<br> <br>";
    $profileInfo->FetchText($_SESSION["userid"]);
    echo "<br> <br>";
?>






<p><a href="profilesettings.php">Settings</a></p>
<br>
<p><a href="index.php">HOME</a></p>
