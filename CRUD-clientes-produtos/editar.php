<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Clientes | Editar</title>
</head>
<body>
    <h1>Digite o nome do cliente que deseja editar</h1>
    <form action="editar.php" method="POST">
        Nome:<br><input type="text" name="nome"><br><br>
        <input type="submit" value="Pesquisar">
    </form>

</body>
</html>
<?php 
    include_once("conexaocl.php");
    
    $nome = $_POST["nome"];

    $consulta = "SELECT * FROM `cliente` WHERE `nome` = '$nome'";
    $resultado = $conn->query($consulta);
    $linha = $resultado->fetch_assoc();
    
    
    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Clientes/Produtos | Editar</title>
</head>
<body>
    <h1>Editar Cliente</h1>
    <form action="editar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $linha["id"]?>"><br><br>
        Nome:<br><input type="text" name="nome" value="<?php echo $linha["nome"]?>"><br><br>
        CPF:<br><input type="text" name="cpf" value="<?php echo $linha["cpf"]?>"><br><br>
        Endereco:<br><input type="text" name="endereco" value="<?php echo $linha["endereco"]?>"><br><br>
        CEP:<br><input type="text" name="cep" value="<?php echo $linha["cep"]?>"><br><br>
        Cidade:<br><input type="text" name="cidade" value="<?php echo $linha["cidade"]?>"><br><br>
        Estado:<br><input type="text" name="estado" value="<?php echo $linha["estado"]?>"><br><br>
        <input type="submit" value="Editar"></a>
    </form>

</body>
</html>

<?php 
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado= $_POST["estado"];

    $consulta = "UPDATE `cliente` SET `nome` = '$nome', `cpf` = '$cpf', `endereco` = '$endereco', `cep` = '$cep', `cidade` = '$cidade', `estado` = '$estado' WHERE `cliente`.`id` = '$id'";
    
    $con = $conn->query($consulta) or die ($conn->error);
?>