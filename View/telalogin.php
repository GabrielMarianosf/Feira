<!DOCTYPE html>
<html>
<?php
    session_start();
  if(isset($_SESSION['Logado'])){
		header("Location: paineladm.php");
		die();
  }
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title> Login </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <form action="../controler/validaLogin.php" method="POST">
        <div>
            <center>
                <br /><br /><br />
                <h1>
                    Login
                </h1>
                <br /><br /><br /><br />
                <b>Usuario: </b> <input type="text" id="user" name="user" placeholder="Digite o seu usuário"
                    required /><br><br>
                <b>Senha: </b> <input type="password" id="senha" name="senha" placeholder="Digite sua senha"
                    required /><br><br>
                <input type="submit" class="btn btn-primary" value="Enviar" name="Entrar">
            </center>
        </div>
    </form>
</body>

</html>