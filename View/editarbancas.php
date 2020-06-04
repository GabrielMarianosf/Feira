<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>Area Administrador - Editar Bancas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <form action="editar_busca_banca.php" method="POST">
            <center>
                
                <h1>Editar uma Banca !!!!!!!! </h1><br/>
                
                <b>Númedo do Box: *</b> <input type="text" id="box" name="box" placeholder="Digite o Box"
                    required />
                
                <input type="submit" value="Buscar" class="btn btn-primary" name="Cadastrar">
            </center>
        </form>
        <br/><br/>
        </div>
            <center>
            <div id="ff">
<?php
        session_start();
        if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
        
        include_once("../Model/conecta.php");
        $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
        //Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM banca";
		$resultado_pg = mysqli_query($conexao, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
        
        $max_links = 2;
		echo "<a href='editarbancas.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='editarbancas.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo " ".$pagina." ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='editarbancas.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='editarbancas.php?pagina=$quantidade_pg'>Ultima</a>";
?>
        </center>
        </div>
        <div id="conteudoo">
<?php
            include_once("../Model/conecta.php");
        //Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 3;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
        
            $sql = "SELECT * FROM banca LIMIT $inicio, $qnt_result_pg";
            $resultado = mysqli_query($conexao, $sql);
            while ($row = mysqli_fetch_assoc($resultado)) {

                //echo '<center><div id="result">'.'Nome: '.$row['id'].
                //'<br/>Categoria: '.$row['categoria'].
                //'<br/>Telefone: ' .$row['telefone'].
                //'<br/>Box: '. $row['box'].
                //'<br/>E-mail: '. $row['email'].
                //'<br/>Descrição: '. $row['descricao'].
                //'</div><br/></center>';
                echo "
                    <br/><center><div id='result'>
                    <table border='0px' class='tableb'>
                        <tr>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nome: </td>
                            <td>".$row['nome']."</td>
                        </tr>
                        <tr>
                            <td>Categoria: </td>
                            <td>".$row['categoria']."</td>
                        </tr>
                        <tr>
                            <td>Telefone: </td>
                            <td>".$row['telefone']."</td>
                        </tr>
                        <tr>
                            <td>Box: </td>
                            <td>".$row['box']."</td>
                        </tr>
                        <tr>
                            <td>E-mail: </td>
                            <td>".$row['email']."</td>
                        </tr>
                        <tr>
                            <td style='width:1%;'>Descricao: </td>
                            <td>".$row['descricao']."</td>
                        </tr>
                        <tr>
                            <td><a class='btn btn-info left-margin' href='editar_bancas.php?id=" . $row['id'] . "'><span class='glyphicon glyphicon-edit'></span>Editar</a></td>
                            <td><span class='glyphicon glyphicon-remove'></span><a class='btn btn-danger delete-object' href='deletar_bancas.php?id=" . $row['id'] . "'>Deletar</a></td>
                        </tr>
                    </table></div></center><br/>
                    ";
                //echo "ID: " . $row['id']. "<br/>";
                //echo "Nome: " . $row['nome']. "<br/>";
                //echo "Categoria: " . $row['categoria']. "<br/>";
                //echo "Telefone: " . $row['telefone']. "<br/>";
                //echo "Box: " . $row['box']. "<br/>";
                //echo "E-mail: " . $row['email']. "<br/>";
                //echo "Descrição: " . $row['descricao']. "<br/><hr>";
            }
?>
            </div>
            <center>
            <div id="ff">
<?php

        //Paginção - Somar a quantidade de usuários
		$result_pg = "SELECT COUNT(id) AS num_result FROM banca";
		$resultado_pg = mysqli_query($conexao, $result_pg);
		$row_pg = mysqli_fetch_assoc($resultado_pg);
		//echo $row_pg['num_result'];
		//Quantidade de pagina 
		$quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
		
		//Limitar os link antes depois
        
        $max_links = 2;
		echo "<a href='editarbancas.php?pagina=1'>Primeira</a> ";
		
		for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++){
			if($pag_ant >= 1){
				echo "<a href='editarbancas.php?pagina=$pag_ant'>$pag_ant</a> ";
			}
		}
			
		echo " ".$pagina." ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='editarbancas.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
        echo "<a href='editarbancas.php?pagina=$quantidade_pg'>Ultima</a>";
        
        
?>
        </center>
        </div>
</body>
</html>