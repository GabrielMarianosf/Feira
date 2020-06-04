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
    <?php
            session_start();
            if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
        ?>  
    <form action="deletar_busca_bancas.php" id="form-pesquisa" method="POST">
            <center> 
                <b>Númedo do Box: *</b> <input type="text" id="box" name="box" placeholder="Digite o Box"
                    required /><br><br>
                <input type="submit" value="Buscar" class="btn btn-primary" name="Cadastrar">
            </center>
        </form><br/>
</body>
</html>