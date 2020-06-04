<?php

session_start();
include_once("../Model/conecta.php");

$del_box = $_POST['del_box'];

$result_usuario = "DELETE FROM `banca` WHERE box='$del_box'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
if(mysqli_affected_rows($conexao)){
	$_SESSION['msg'] = "<script>alert('Banca deletada com Sucesso!');</script>";
	header("Location: ../View/deletarbancas.php");
}else{
	$_SESSION['msg'] = "<script>alert('Erro ao deletar a banca !');</script>";
    header("Location: ../View/deletarbancas.php");
}

?>