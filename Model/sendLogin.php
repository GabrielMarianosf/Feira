<?php

    

    function validarLogin($login){
        
        $conexao = mysqli_connect ('localhost','root','','feira') or die ("Não foi possivel acessar o banco !");

        try {
        
        $sql = "SELECT * FROM `adm` WHERE `user` = '$login->user' AND `senha`= md5('$login->senha')"; 
        $result_id = mysqli_query($conexao , $sql) or die ("Erro na consulta ao banco de dados!");
        mysqli_close($conexao); 
        $total = mysqli_num_rows($result_id);
	    if($total > 0)  
	    { 
        mysqli_close($conexao);
        return true;
        }else {
        mysqli_close($conexao);
        return false;
        }
            
        } catch (Exception $e) {
            mysqli_close($conexao);
            echo $e;
        } 
        
    }

?>