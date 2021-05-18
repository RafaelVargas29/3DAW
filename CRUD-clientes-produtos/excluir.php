<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Digite o nome do cliente</h1>
    <form action="excluir.php" method="POST">
        NOME:<br><input type="text" name="nome"><br><br>
        <input type="submit" value="Excluir">
    </form>
</body>
</html>


<?php 
    include_once("conexaocl.php");
    $nome = $_POST["nome"];
    
    if($nome != ""){
        $consulta = "DELETE FROM `cliente` WHERE `nome` = '$nome'";
    }
    else{
        echo "O campo nome não pode estar vazio!";
    }

    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD Clientes/Produtos | Excluir</title>
    </head>
    <body>
      <a>Cliente excluído!</a>
    </body>
</html>