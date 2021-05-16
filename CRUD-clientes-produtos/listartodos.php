<?php 
    include_once("conexaocl.php");
  
    $consulta = "SELECT * FROM cliente";

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