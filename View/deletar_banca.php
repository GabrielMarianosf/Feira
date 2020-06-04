<!DOCTYPE html>
<html lang="en">
<?php
session_start();
 if(empty($_SESSION['Logado'])){
		header("Location: telalogin.php");
		die();
}
?>
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
            <a href="../index.html">Site da Feira</a>
            <a href="painelcadastrarbanca.html">Cadastrar Banca</a>
            <a href="editar_bancas.php">Editar / Buscar Banca</a>
            <a href="deletarbancas.php">Deletar Banca</a>
            <a href="">Sair / Deslogar</a>
            <span class="line"></span>
        </nav>
    </header>
    <br><br><br><br /><br><br><br><br />
    <center>
    <h1>Deletar Bancas</h1>
    </center><br/><br/>
    <div id="conteudoo">
<?php
            session_start();
            include_once("../Model/conecta.php");

		    $busca = filter_input(INPUT_GET,'box', FILTER_SANITIZE_NUMBER_INT);		
            $sql = "SELECT * FROM banca where box='$busca'";
            $resultado = mysqli_query($conexao, $sql);
            if(!empty($resultado)){
                while ($row = mysqli_fetch_assoc($resultado)) {
                echo "
                    <br/> <center> <div id='result'>
                    <form action='../controler/proc_deleta_banca.php' method='POST'>
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
                            <td>
                                <input type='hidden' value='".$row['box']."' id='del_box' name='del_box'/>
                                <input type='submit' value='DELETAR' class='btn btn-danger delete-object' name='deletar'>
                            </td>
                            <td>
                                
                            <a class='btn btn-primary' href='deletarbancas.php' role='button'>Cancelar</a>
                            </td>
                        </tr>
                    </table>
                    </form></div></center><br/>
                    ";
                }
            }else {
                    $_SESSION['msg'] = " <script>alert('Não foi encontrado nenhuma banca');</script> ";
                    }
                
            
?>
        </div>
    
</body>
</html>