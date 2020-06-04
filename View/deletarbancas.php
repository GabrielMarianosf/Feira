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
    <header id="header">
        <nav class="links" style="--items: 5;">
            <a href="painelcadastrarbanca.html">Cadastrar Banca</a>
            <a href="editar_bancas.php">Editar / Buscar Banca</a>
            <a href="deletarbancas.php">Deletar Banca</a>
            <a href="">Sair / Deslogar</a>
            <a href=""></a>
            <span class="line"></span>
        </nav>
    </header>
    <br><br><br><br /><br><br><br><br />
    <?php
            session_start();
            if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
        ?>  
    <form action="deletar_bancas.php" id="form-pesquisa" method="POST">
            <center> 
                <b>Númedo do Box: *</b> <input type="text" id="box" name="box" placeholder="Digite o Box"
                    required /><br><br>
                <input type="submit" value="Buscar" class="btn btn-primary" name="Cadastrar">
            </center>
        </form><br/>
</body>
</html>