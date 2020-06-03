<?php

session_start();
include_once("../Model/conecta.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$box = filter_input(INPUT_POST, 'box', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE banca SET nome='$nome', categoria='$categoria' , telefone='$telefone', 
box='$box', email='$email', descricao='$descricao' WHERE id='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);

if(mysqli_affected_rows($conexao)){
	$_SESSION['msg'] = "<script>alert('Banca atualizada com Sucesso!');</script>";
	header("Location: ../View/editarbancas.php");
}else{
	$_SESSION['msg'] = "<script>alert('Erro ao atualizar a banca, altere os valores ou preencha os campos vazios !');</script>";
    header("Location: ../View/editar_bancas.php?id=$id");
}
?>