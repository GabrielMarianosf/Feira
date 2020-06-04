<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-store" />
    <title>Area Administrador - Editar Bancas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
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
                            <td colspan='2'>
                            <input type='hidden' value='".$row['box']."' id='del_box' name='del_box'/>
                            <input type='submit' value='DELETAR' class='btn btn-danger delete-object' name='enviar'>
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