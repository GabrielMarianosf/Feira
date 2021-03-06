<!DOCTYPE html>
<html>
<?php
session_start();
 if(empty($_SESSION['Logado'])){
		header("Location: telalogin.php");
		die();
}
?>
<head>
    <meta charset='utf-8'>
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastrar Banca</title>
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
            <a href="editar_bancas.php">Editar / Buscar Banca</a>
            <a href="deletarbancas.php">Deletar Banca</a>
            <a href="deslogar.php">Sair / Deslogar</a>
            <span class="line"></span>
        </nav>
    </header>
    <br><br><br><br /><br><br><br><br />
    <center>
        <p>
        <h1>Cadastrando sua banca</h1>
        </p>
    </center>

    <div id="texto">
        <br><br><br><br /><br><br><br><br />

        <form action="../controler/cadastrarbanca.php" method="POST">

            <b>Nome da banca: *</b> <input type="text" id="nome" name="nome" placeholder="Digite o nome da banca"
                required /><br><br>
            <b>Categoria da banca *</b>
            <select name="categoria" id="categoria">
                <option value="Selecione uma categoria" selected>-- Selecione uma Categoria --</option>
                <option value="Brinquedos">Brinquedos</option>
                <option value="Eletrodomesticos">Eletrodomésticos</option>
                <option value="Eletronicos">Eletrônicos</option>
                <option value="Variedades">Variedades</option>
                <option value="Papelaria">Papelaria</option>
                <option value="Infantil">Infantil</option>
            </select>
            <br><br>
            <b>Telefone: *</b> <input type="text" id="telefone" name="telefone" placeholder="Contato da banca"
                required /><br><br>
            <b>Númedo do Box: *</b> <input type="text" id="box" name="box" placeholder="Digite o Box"
                required /><br><br>
            <b>E-mail: *</b> <input type="email" class="form-control-inline" id="email" name="email"
                placeholder="exemplo@exemplo.com" required /><br><br>
            <b>Descrição da banca: * <br></b> <textarea class="form-control-inline" id="descricao" name="descricao"
                rows="5" cols="80" required></textarea><br><br>
            <input type="submit" value="Enviar" class="btn btn-primary" name="Cadastrar">

        </form>


</body>

</html>