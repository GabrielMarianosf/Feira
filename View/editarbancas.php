<!DOCTYPE html>
<body>
    <form action="../controler/cadastrarbanca.php" method="POST">
            <center>
                
                <h1>Editar uma Banca !!!!!!!! </h1>
                
                <b>Númedo do Box: *</b> <input type="text" id="box" name="box" placeholder="Digite o Box"
                    required /><br><br>
                <div class="g-recaptcha" data-sitekey="6LdXS_oUAAAAAIpAaqaWH7RlUhsWFi_GbPUWZdcm"></div>
                <input type="submit" value="Enviar" class="btn btn-primary" name="Cadastrar">
            </center>
        </form>
        <?php

            include_once("../Model/conecta.php");
        
            $sql = "select * from banca";
            $resultado = mysqli_query($conexao, $sql);
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<input type='text' value='$row['id']'/> ";
                echo "Nome: " . $row['nome']. "<br/>";
                echo "Categoria: " . $row['categoria']. "<br/>";
                echo "Telefone: " . $row['telefone']. "<br/>";
                echo "Box: " . $row['box']. "<br/>";
                echo "E-mail: " . $row['email']. "<br/>";
                echo "Descrição: " . $row['descricao']. "<br/><hr>";
            }
        ?>
</body>
</html>