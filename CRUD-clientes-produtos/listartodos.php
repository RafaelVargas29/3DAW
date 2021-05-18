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
            <h1> Lista de Clientes | CRUD - Clientes/Produtos</h1>
        </header>
        <nav>
            <a href="index.html"><button class="botao">Página inicial</button></a>
            <a href="listarum.php"><button class="botao">Listar um cliente</button></a>
            <a href="excluir.php"><button class="botao">Excluir cliente</button></a>
            <a href="editar.php"><button class="botao">Editar cliente</button></a>
            <a href="criar.php"><button class="botao">Criar cliente</button></a>
        </nav>
        <section>
            <table style="border: 1px solid green";>
                <tr>
                <td style="border: 1px solid green";>ID</td>
                    <td style="border: 1px solid green";>NOME</td>
                    <td style="border: 1px solid green";>CPF</td>
                    <td style="border: 1px solid green";>ENDEREÇO</td>
                    <td style="border: 1px solid green";>CEP</td>
                    <td style="border: 1px solid green";>CIDADE</td>
                    <td style="border: 1px solid green";>ESTADO</td>
                </tr>
                
                <?php
                    while($linha = $con->fetch_array()){ ?>
                <tr>
                <td style="border: 1px solid green";><?php echo $linha ["id"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["nome"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["cpf"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha["endereco"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["cep"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["cidade"];?></td>
                    <td style="border: 1px solid green";><?php echo $linha ["estado"];?></td>  
                </tr>
                <?php }?>
            </table>
        </section>

        <footer>
            <h3>Rafael Vargas - Matricula: 1820478300010</h3>   
        </footer>
    </body>
</html>