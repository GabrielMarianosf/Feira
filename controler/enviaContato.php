<?php
    require_once('../Model/sendEmail.php');
    require_once('../Model/classContato.php');


    try {

    $contato = new Contato();
    $contato->nome = $_POST["nome"];
    $contato->email = $_POST["email"];
    $contato->telefone = $_POST["telefone"];
    $contato->assunto = $_POST["assunto"];
    $contato->mensagem = $_POST["mensagem"];

    $res = enviaContato($contato);
    echo $res;

    if($res == true){
    header("Location: ../View/contato.html");
    }else {
    header("Location: ../index.html");
    }
    } catch (Exception $e) {
       echo $e;
    }
?>
