<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Digite o nome do cliente</h1>
    <form action="listarum.php" method="POST">
        NOME:<br><input type="text" name="nome"><br><br>
        <input type="submit" value="Listar">
    </form>
</body>
</html>


<?php 
    include_once("conexaocl.php");
    $nome = $_POST["nome"];
    
    if($nome != ""){
        $consulta = "SELECT * FROM `cliente` WHERE `nome` = '$nome'";
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
        <title>CRUD Clientes/Produtos | Listar todos</title>
    </head>
    <body>
        <h1>LISTA DE CLIENTES</h1>

        <table style="border: 1px solid black";>
            <tr>
            <td style="border: 1px solid black";>ID</td>
                <td style="border: 1px solid black";>NOME</td>
                <td style="border: 1px solid black";>CPF</td>
                <td style="border: 1px solid black";>ENDEREÇO</td>
                <td style="border: 1px solid black";>CEP</td>
                <td style="border: 1px solid black";>CIDADE</td>
                <td style="border: 1px solid black";>ESTADO</td>
            </tr>
            
            <?php
                while($linha = $con->fetch_array()){ ?>
            <tr>
                <td style="border: 1px solid black";><?php echo $linha ["id"];?></td>
                <td style="border: 1px solid black";><?php echo $linha ["nome"];?></td>
                <td style="border: 1px solid black";><?php echo $linha ["cpf"];?></td>
                <td style="border: 1px solid black";><?php echo $linha["endereco"];?></td>
                <td style="border: 1px solid black";><?php echo $linha ["cep"];?></td>
                <td style="border: 1px solid black";><?php echo $linha ["cidade"];?></td>
                <td style="border: 1px solid black";><?php echo $linha ["estado"];?></td>  
            </tr>
            <?php }?>
        </table>
    </body>
</html>