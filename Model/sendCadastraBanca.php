<?php

    function cadastraBanca ($banca) {

        try {
            $conexao = mysqli_connect ('localhost','root','','feira') or die ("Não foi possivel acessar o banco !");
            
            $sql = "insert into banca (id,nome,categoria,telefone,box,email,descricao) values (null,'$banca->nome','$banca->categoria','$banca->telefone','$banca->box','$banca->email','$banca->descricao')";
            $result = mysqli_query($conexao, $sql) or die ("Erro na consulta ao banco de dados!");
            if($result == true){
                mysqli_close($conexao);
                return true;
            }else {
                mysqli_close($conexao);
                return false;
            }
        } catch (Exception $e) {
            mysqli_close($conexao);
            return false;
            echo $e;
        }


    }

?>