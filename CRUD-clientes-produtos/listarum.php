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
            <h1> Listar um| CRUD - Clientes</h1>
        </header>
        
        <nav>
            <a href="index.html"><button class="botao">Página inicial</button></a>
            <a href="listartodos.php"><button class="botao">Listar todos os clientes</button></a>
            <a href="excluir.php"><button class="botao">Excluir cliente</button></a>
            <a href="editar.php"><button class="botao">Editar cliente</button></a>
            <a href="criar.php"><button class="botao">Criar cliente</button></a>
        </nav>
        
        <section>
            <h3>Digite o nome do cliente</h3>
            <form action="listarum.php" method="POST">
                NOME:<br><input type="text" name="nome"><br><br>
                <input type="submit" value="Listar">
            </form>
        </section>

        <footer>
            <h3>Rafael Vargas - Matricula: 1820478300010</h3>   
        </footer>
        
</body>
</html>


<?php 
    include_once("conexaocl.php");
    $nome = $_POST["nome"];
    
    if($nome != ""){
        $consulta = "SELECT * FROM `cliente` WHERE `nome` = '$nome'";
    }


    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD Clientes/Produtos | Listar um</title>
    </head>
    <body>
        <section>
            <h4>CLIENTE</h4>
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
    </body>
</html>