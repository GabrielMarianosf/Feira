<!DOCTYPE html>
<?php
  session_start();
  if(empty($_SESSION['Logado'])){
		header("Location: telalogin.php");
		die();
  }
?>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Painel Admin Feira dos Goianos</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel='stylesheet' type='text/css' media='screen' href='css/estilo.css'>
</head>

<body>

  <header id="header">
    <nav class="links" style="--items: 5;">
      <a href="../index.html">Site da Feira</a>
      <a href="painelcadastrarbanca.php">Cadastrar Banca</a>
      <a href="editarbancas.php">Editar / Buscar Banca</a>
      <a href="deletarbancas.php">Deletar Banca</a>
      <a href="deslogar.php">Sair / Deslogar</a>
      <span class="line"></span>
    </nav>
  </header>
  <br><br><br><br /><br><br><br><br />
  <center>
    <p>
    <h1>Área do Administrador</h1>
    </p>
  </center>
</body>

</html>