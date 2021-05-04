<?php
    //chamando o arquivo de conexão com banco de dados
    include_once("bd/conexaobd.php");
    $id = $_GET["id"];
    $consulta = "DELETE FROM alunos WHERE id = $id";

    $con = $conn->query($consulta);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Alunos | Excluir</title>
</head>
<body>
    <p>Aluno removido com ssucesso</p>
    <a href="listar.php"><button>Voltar à lista</button></a>
</body>
</html>