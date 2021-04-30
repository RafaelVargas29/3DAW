
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Alunos - Adicionar</title>
</head>
<body>
    <h1>Adicionar Aluno</h1>
    <form action="adicionar.php" method="POST">
        Nome: <input type="text" name="nome"><br><br>
        email: <input type="text" name="email"><br><br>
        Matricula: <input type="text" name="matricula"><br><br>
        <input type="submit" value="Adicionar">
    </form>

</body>
</html>
<?php 
    //chamando o arquivo de conexão com banco de dados
    include_once("bd/conexaobd.php");
    /*$consulta: variável que recebe o comando que deve realizar no banco de dados
      Seleciona todas as linhas e todas as colunas do banco de dados informado
      INSERT INTO `alunos`(`nome`, `email`, `matricula`) VALUES ('$nome','$email','$matricula')": Insere os alunos no banco de dados
      LIMIT 2: limita a quantidade de linhas que vc quer pegar do banco de dados. no exemplo, 2 linhas*/
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $matricula = $_POST["matricula"];
    
    if($nome != "" && $email != "" && $matricula){
        $consulta = "INSERT INTO `alunos`(`nome`, `email`, `matricula`) VALUES ('$nome','$email','$matricula')";
        echo "Aluno $nome inserido com sucesso!";
    }
    else{
        echo "Nenhum aluno foi inserido!";
    }
    //Efetua a consulta ao banco de dados e se der algum erro ele para a execução e diz qual foi o erro
    //query: realiza uma colsuta simples ao banco de dados
    //$conn: objeto do banco de dados criado no arquivo "canexaobd" 
    $con = $conn->query($consulta) or die ($conn->error);
?>
