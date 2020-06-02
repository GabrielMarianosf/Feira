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
    <form action="../controler/" method="POST">
            <center>
                
                <h1>Editar uma Banca !!!!!!!! </h1>
                
                <b>Númedo do Box: *</b> <input type="text" id="box" name="box" placeholder="Digite o Box"
                    required /><br><br>
                <div class="g-recaptcha" data-sitekey="6LdXS_oUAAAAAIpAaqaWH7RlUhsWFi_GbPUWZdcm"></div>
                <input type="submit" value="Enviar" class="btn btn-primary" name="Cadastrar">
            </center>
        </form>
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

                echo '<center><div id="result">'.'Nome: '.$row['id'].
                '<br/>Categoria: '.$row['categoria'].
                '<br/>Telefone: ' .$row['telefone'].
                '<br/>Box: '. $row['box'].
                '<br/>E-mail: '. $row['email'].
                '<br/>Descrição: '. $row['descricao'].
                '</div><br/></center>';
                //echo "ID: " . $row['id']. "<br/>";
                //echo "Nome: " . $row['nome']. "<br/>";
                //echo "Categoria: " . $row['categoria']. "<br/>";
                //echo "Telefone: " . $row['telefone']. "<br/>";
                //echo "Box: " . $row['box']. "<br/>";
                //echo "E-mail: " . $row['email']. "<br/>";
                //echo "Descrição: " . $row['descricao']. "<br/><hr>";
            }

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
			
		echo "$pagina ";
		
		for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++){
			if($pag_dep <= $quantidade_pg){
				echo "<a href='editarbancas.php?pagina=$pag_dep'>$pag_dep</a> ";
			}
		}
		
		echo "<a href='editarbancas.php?pagina=$quantidade_pg'>Ultima</a>";
        ?>
</body>
</html>