<?php 
    //chamando o arquivo de conexão com banco de dados
    include_once("bd/conexaobd.php");
    /*$consulta: variável que recebe o comando que deve realizar no banco de dados
      Seleciona todas as linhas e todas as colunas do banco de dados informado
      "SELECT nome FROM alunos": Pega apenas os campos "nome" da tabela
      LIMIT 2: limita a quantidade de linhas que vc quer pegar do banco de dados. no exemplo, 2 linhas*/
    $listar = $_POST["listarAluno"];
    $consulta = "SELECT * FROM alunos";
    //Efetua a consulta ao banco de dados e se der algum erro ele para a execução e diz qual foi o erro
    //query: realiza uma colsuta simples ao banco de dados
    //$conn: objeto do banco de dados criado no arquivo "canexaobd" 
    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD Alunos | Listar</title>
    </head>
    <body>
        <h1>LISTA DE ALUNOS</h1>

        <table style="border: 1px solid black";>
            <tr>
                <td style="border: 1px solid black";>id</td>
                <td style="border: 1px solid black";>Nome</td>
                <td style="border: 1px solid black";>E-mail</td>
                <td style="border: 1px solid black";>Matricula</td>
                <td style="border: 1px solid black";>Ação</td>
            </tr>
            
            <?php
                //Pega cada uma das colunas do banco de dados e armazena na variavel $linha 
                //fetch_array(): Retorna uma matriz que corresponde a linha obtida ou null se não houverem mais linhas
                while($linha = $con->fetch_array()){ ?>
            <tr>
                <td style="border: 1px solid black";><?php echo $linha ["id"];?></td>
                <td style="border: 1px solid black";><?php echo $linha ["nome"];?></td>
                <td style="border: 1px solid black";><?php echo $linha["email"];?></td>
                <td style="border: 1px solid black";><?php echo $linha ["matricula"];?></td>
                <td style="border: 1px solid black";>
                <a href="editar.php?codigo=<?php echo $linha ["id"];?>">Editar</a> | 
                <a href="excluir.php?codigo=<?php echo $linha ["id"];?>">Excluir</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </body>
</html>