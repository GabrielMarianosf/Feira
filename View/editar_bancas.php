<?php

session_start();
include_once("../Model/conecta.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM banca WHERE id = '$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>Area Administrador - Editar Bancas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="View/css/estilo.css">
</head>
<body>
    <form action="../controler/cadastrarbanca.php" method="POST">
            <center>
                <b>Nome da banca: *</b> <input type="text" value="<?php echo $row_usuario['nome'];?>" id="nome" name="nome" placeholder="Digite o nome da banca"
                    required /><br><br>
                <b>Categoria da banca *</b>
                <select name="categoria" id="categoria">
                    <option value="<?php echo $row_usuario['categoria'];?>" selected><?php echo $row_usuario['categoria'];?></option>
                    <option value="Brinquedos">Brinquedos</option>
                    <option value="Eletrodomesticos">Eletrodomésticos</option>
                    <option value="Eletronicos">Eletrônicos</option>
                    <option value="Variedades">Variedades</option>
                    <option value="Papelaria">Papelaria</option>
                    <option value="Infantil">Infantil</option>
                </select>
                <br><br>
                <b>Telefone: *</b> <input type="text" value="<?php echo $row_usuario['telefone'];?>" id="telefone" name="telefone" placeholder="Contato da banca"
                    required /><br><br>
                <b>Númedo do Box: *</b> <input type="text" value="<?php echo $row_usuario['box'];?>" id="box" name="box" placeholder="Digite o Box"
                    required /><br><br>
                <b>E-mail: *</b> <input type="email" value="<?php echo $row_usuario['email'];?>" class="form-control-inline" id="email" name="email"
                    placeholder="exemplo@exemplo.com" required /><br><br>
                <b>Descrição da banca: * <br></b> <textarea id="descricao" name="descricao" rows="5" cols="80"
                    required><?php echo $row_usuario['descricao'];?></textarea><br><br>
                <input type="submit" value="Editar" class="btn btn-primary" name="Cadastrar">
            </center>
        </form>
    
</body>
</html>