<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_SESSION["userid"];
    $uid = $_SESSION["useruid"];
    $about = htmlspecialchars($_POST["about"], ENT_QUOTES, "UTF-8");
    $introTitle = htmlspecialchars($_POST["introtitle"], ENT_QUOTES, "UTF-8");
    $introText = htmlspecialchars($_POST["introtext"], ENT_QUOTES, "UTF-8");

    include '../classes/Dbh.classes.php';
    include '../classes/profileinfo.classes.php';
    include '../controllers/profileinfo_controller.classes.php';
    
    $profileInfo = new ProfileInfoController($id, $uid);

    
    $profileInfo->UpdateProfileInfo($about, $introTitle, $introText);

    header("Location: ../profile.php?error=none");

}