<!DOCTYPE html>
<head>
<?php
  session_start();
  if(empty($_SESSION['Logado'])){
		header("Location: telalogin.php");
		die();
  }
?>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>Area Administrador - Editar Bancas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <header id="header">
        <nav class="links" style="--items: 5;">
            <a href="../index.html">Site da Feira</a>
            <a href="painelcadastrarbanca.php">Cadastrar Banca</a>
            <a href="editar_bancas.php">Editar / Buscar Banca</a>
            <a href="deletarbancas.php">Deletar Banca</a>
            <a href="deslogar.php">Sair / Deslogar</a>
            <span class="line"></span>
        </nav>
    </header>
    <center>
    <br><br><br><br /><br><br><br><br />
    <h1>Deletar Bancas</h1>
    </center>
    <?php
            
            if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
        ?><br/><br/>  
    <form action="deletar_busca_banca.php" id="form-pesquisa" method="POST">
            <center> 
                <b>Númedo do Box: *</b> <input type="text" id="box" name="box" placeholder="Digite o Box"
                    required />     
                <input type="submit" value="Buscar" class="btn btn-primary" name="Cadastrar">
            </center>
        </form><br/>
</body>
</html>