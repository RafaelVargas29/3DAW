<?php 
    include_once("conexaoprod.php");
  
    $consulta = "SELECT * FROM produtos WHERE ativo='1'";

    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Listar todos os Produtos</title>
        <link rel="stylesheet" href="estilo.css">

        <style>
            section{Position: relative;
                    top: 110px;
                    margin-left: 320px;
            }
        </style>
    </head>
    <body>
        <header>
            <h1> Lista de produtos</h1>
        </header>
        <nav>
            <a href="index.html"><button class="botao">Página inicial</button></a>
            <a href="listarum.php"><button class="botao">Listar um produto</button></a>
            <a href="excluir.php"><button class="botao">Excluir produto</button></a>
            <a href="editar.php"><button class="botao">Editar produto</button></a>
            <a href="criar.php"><button class="botao">Incluir produto</button></a>
        </nav>
        <section>
            <table style="border: 1px solid green";>
                <tr>
                    <td style="border: 1px solid green";>CÓDIGO DE BARRAS</td>
                    <td style="border: 1px solid green";>NOME</td>
                    <td style="border: 1px solid green";>CATEGORIA</td>
                    <td style="border: 1px solid green";>PREÇO DE VENDA</td>
                    <td style="border: 1px solid green";>QUANTIDADE EM ESTOQUE</td>
                </tr>
                
                <?php
                    while($linha = $con->fetch_array()){ ?>
                <tr>
                    <td style="border: 1px solid green";><?php echo $linha ["codbarra"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["nome"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["categoria"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["precovenda"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["quantestoque"];?></td>
                </tr>
                <?php }?>
            </table>
        </section>
    </body>
</html>