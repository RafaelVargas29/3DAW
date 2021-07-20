<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <style>
       section{
                position:relative;
                top:90px;
                border: 1px solid green;
                text-align: center;
                margin-top: 20px;
        }
        form{
            border: 1px solid green;
            width: 300px;
            margin-left: 500px;
            margin-bottom: 15px;
            padding: 15px;
        }
        table{
            border: 1px solid green;
            margin-left: 300px;
            margin-bottom: 15px;
            padding: 15px;
        }
    </style>

    
</head>
<body>
<header>
        <h1> Listar um produto</h1>
        </header>
        
        <nav>
            <a href="index.html"><button class="botao">Página inicial</button></a>
            <a href="listartodos.php"><button class="botao">Listar todos os produtos</button></a>
            <a href="excluir.php"><button class="botao">Excluir produto</button></a>
            <a href="editar.php"><button class="botao">Editar produto</button></a>
            <a href="criar.php"><button class="botao">Criar produto</button></a>
        </nav>
        <section>
            <h3>Digite o codigo de barras do produto</h3>
            <form action="listarum.php" method="POST">
                Codigo de barras:<br><input type="text" name="cod"><br><br>
                <input type="submit" value="Listar">
            </form>
        </section>
</body>
</html>


<?php 
    include_once("conexaoprod.php");
    $cod = $_POST["cod"];
    
    if($cod != ""){
        $consulta = "SELECT * FROM `produtos` WHERE `codbarra` = '$cod'";
    }


    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <section>
            <h4>Produto</h4>
            <table style="border: 1px solid green";>
                <tr>
                    <td style="border: 1px solid green";>CÓDIGO DE BARRA</td>
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
                    <td style="border: 1px solid green";><?php echo $linha["precovenda"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["quantestoque"];?></td>
                </tr>
                <?php }?>
            </table>
        </section>
    </body>
</html>