<?php 
    include_once("bd/conexaobd.php");
    
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $consulta = "UPDATE `alunos` SET `nome` = '$nome', `email` = '$email' WHERE `alunos`.`id` = '$id'";
    
    $con = $conn->query($consulta) or die ($conn->error);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Aluno| Editar</title>
</head>
<body>
    <h3>Aluno Editado com sucesso</h3>
    <a href="listar.php"><button>Voltar à Lista</button></a>
</body>
</html>