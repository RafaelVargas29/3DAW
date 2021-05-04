<?php 
    include_once("bd/conexaobd.php");
    
    $id = $_GET["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    $consulta = "SELECT * FROM alunos WHERE id = $id";
    $resultado = $conn->query($consulta);
    $linha = $resultado->fetch_assoc();
    
    
    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Alunos | Editar</title>
</head>
<body>
    <h1>Editar Aluno</h1>
    <form action="pageditar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $linha["id"]?>"><br><br>
        Nome: <input type="text" name="nome" value="<?php echo $linha["nome"]?>"><br><br>
        email: <input type="text" name="email" value="<?php echo $linha["email"]?>"><br><br>
        <a href="editar.php?id=<?php echo $linha ["id"];?>"><input type="submit" value="Editar"></a>
    </form>

</body>
</html>
