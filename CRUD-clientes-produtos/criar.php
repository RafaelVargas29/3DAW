<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Clientes | Adicionar</title>
</head>
<body>
    <h1>Adicionar Cliente</h1>
    <form action="criar.php" method="POST">
        Nome:<br><input type="text" name="nome"><br><br>
        CPF:<br><input type="text" name="cpf"><br><br>
        Endereço:<br><input type="text" name="endereco"><br><br>
        CEP:<br><input type="text" name="cep"><br><br>
        Cidade:<br><input type="text" name="cidade"><br><br>
        Estado:<br><input type="text" name="estado"><br><br>

        <input type="submit" value="Criar">
    </form>

</body>
</html>
<?php 
    include_once("conexaocl.php");
    
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];


    
    if($nome != "" && $endereco != "" && $cpf){
        $consulta = "INSERT INTO `cliente`(`nome`, `cpf`, `endereco`, `cep`, `cidade`, `estado`) VALUES ('$nome','$cpf','$endereco','$cep','$cidade','$estado')";
        echo "Cliente $nome inserido com sucesso!";
    }
    else{
        echo "Nenhum cliente foi inserido!";
    }
    $con = $conn->query($consulta) or die ($conn->error);
?>