<?php

    require_once('../Model/classLogin.php');
    require_once('../Model/sendLogin.php');

    $login = new Login();

    $login->user = $_POST["user"];
    $login->senha = $_POST["senha"];

    $res = validarLogin($login);

    if ($res == true) {
        session_start();
        $_SESSION['Logado'] = true;
        header("Location: ../View/paineladm.php");
    }else {
        header("Location: ../View/telalogin.php");
    }





?>