<?php
	//Incluir a conexão com banco de dados
	include_once('../Model/conecta.php');
	
	//Recuperar o valor da palavra
	$box = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$sql = "select * from banca where nome LIKE ' %$box% ' ";
	$resultado_cursos = mysqli_query($conexao, $sql);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhum curso encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cursos)){
			echo "<li>".$rows['nome']."</li>";
		}
	}
?>