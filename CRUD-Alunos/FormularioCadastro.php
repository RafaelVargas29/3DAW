
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBanco = "3dawalunos";

    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
    if ($conn->connect_error) {
        die("Conexao falhou: " . $conn->connect_error);
    }
    $sql = "INSERT INTO `alunos`(`nome`, `email`, `matricula`) VALUES ('$nome','$email','$matricula')";
    //$result = $conn->query($sql);
    echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "aluno $nome inserido com sucesso";
        //echo "id: " . $result->fetch_assoc()["id"] . " Nome: " . $result->fetch_assoc()["nome"];
    } else {
        echo "Erro no insert";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario Cadastro de Aluno</title>
</head>
<body>
<form action="FormularioCadastro.php" method="POST">
    Nome: <input type="text" name="nome">
    <br><br>
    email: <input type="text" name="email">
    <br><br>
    Matricula: <input type="text" name="matricula">
    <br><br>
    <input type="checkbox" value="listarAluno">Listar Aluno
    <br><br>
    <input type="submit" value="enviar">
</form>

</body>
</html>
<?php

?>