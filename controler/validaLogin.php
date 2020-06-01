<?php

    require_once('../Model/classLogin.php');
    require_once('../Model/sendLogin.php');

    $login = new Login();

    $login->user = $_POST["user"];
    $login->senha = $_POST["senha"];

    $res = validarLogin($login);

    if ($res == true) {
        header("Location: ../View/paineladm.html");
    }else {
        header("Location: ../View/telalogin.html");
    }





?>