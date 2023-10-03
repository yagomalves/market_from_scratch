<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    // PEGAR DADOS
    $uid = htmlspecialchars($_POST["uid"], ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars($_POST["password"], ENT_QUOTES, 'UTF-8');
    $passwordRepeat = htmlspecialchars($_POST["passwordRepeat"], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');


    // INSTANCIAR SIGNUPCONTROLLER CLASS
    include '../classes/Dbh.classes.php';
    include '../classes/Signup.classes.php';
    include '../controllers/Signup_controller.classes.php';

    $signUp = new SignupController($uid, $password, $passwordRepeat, $email);
    

    // RUN ERRORS HANDLERS
    $signUp->SignupUser();

    $userId = $signUp->FetchUserId($uid);
 

    // INSTANTIATE PROFILE INFO CONTROLLER
    include '../classes/Profileinfo.classes.php';
    include '../controllers/Profileinfo_controller.classes.php';
    $profileInfo = new ProfileInfoController($userId, $uid);
    $profileInfo->DefaultProfileInfo();


    // VOLTAR PARA HOME PAGE
    header("Location: index.php?error=none");
}