<?php
include_once "header.php";



if (!isset($_SESSION["userid"])) {
    die("Você não pode acessar esta página porque não está logado(a).<p><a href='index.php'>Entrar</a></p>");
} 



include './classes/Dbh.classes.php';
include './classes/profileinfo.classes.php';
include './views/profileinfo_view.classes.php';
$profileInfo = new ProfileInfoView();




echo $_SESSION["useruid"];
?>
<section>
    <br>
    <form action="includes/profileinfo.inc.php" method="post">


        <input type="text" placeholder="Title" name="introtitle" value="
<?php
        $profileInfo->FetchTitle($_SESSION["userid"]);
?>
">

        <br><br>

        <textarea name="about" cols="30" rows="10" placeholder="Type something about you right here!!">
<?php
        $profileInfo->FetchAbout($_SESSION["userid"]);
?>
        </textarea>

        <br><br>

        <textarea name="introtext" cols="30" rows="10" placeholder="Type a text as your introduction">
<?php
        $profileInfo->FetchText($_SESSION["userid"]);
?>
        </textarea>

        <br><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>
</section>



<p><a href="profile.php">Profile</a></p>
<br>
<p><a href="index.php">HOME</a></p>