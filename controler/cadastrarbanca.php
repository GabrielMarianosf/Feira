<?php
    require_once('../Model/classCadastrarBanca.php');
    require_once('../Model/sendCadastraBanca.php');

    
    try {
    
    $banca = new Banca();

    $banca->nome = $_POST["nome"];
    $banca->categoria = $_POST["categoria"];
    $banca->telefone = $_POST["telefone"];
    $banca->box = $_POST["box"];
    $banca->email = $_POST["email"];
    $banca->descricao = $_POST["descricao"];

    $res = cadastraBanca($banca);

    if ($res == true) {
        header("Location: ../View/painelcadastrarbanca.html");
    }else {
        header("Location: ../View/paineladm.html");
    }
        
    } catch (Exception $e) {
        echo $e;
    }
  
?>