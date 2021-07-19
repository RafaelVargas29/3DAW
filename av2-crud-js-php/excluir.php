<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">

    <style>
        section{
                position: relative;
                top: 200px;
                border: 1px solid green;
                padding: 20px;
                text-align: center;
        }
        form{
            position:relative;
            padding: 15px;
            border: 1px solid green;
            width: 200px;
            margin-left: 538px;
        }
    </style>
</head>
<body>
    <header>
        <h1> Excluir produto</h1>
    </header>
    
    <nav>
        <a href="index.html"><button class="botao">Página inicial</button></a>
        <a href="listarum.php"><button class="botao">Listar produto</button></a>
        <a href="editar.php"><button class="botao">Editar produto</button></a>
        <a href="incluir.html"><button class="botao">Incluir produto</button></a>
        <a href="listartodos.php"><button class="botao">Listar todos os produtos</button></a>
    </nav>
    
    <section>
        <h3>Digite o nome do cliente</h3>
        <form action="excluir.php" method="POST">
            Código de barras:<br><input type="text" name="codbarra"><br><br>
            <input type="submit" value="Excluir">
        </form>
    </section>  

    <footer>
        <h3>Rafael Vargas - Matricula: 1820478300010</h3>   
    </footer>
</body>
</html>


<?php 
    include_once("conexaoprod.php");
    $cod = $_POST["codbarra"];
    
    if($cod != ""){
        $consulta = "DELETE FROM `produtos` WHERE `codbarra` = '$cod'";
    }
    
    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Excluir</title>
    </head>
    <body>
        <section>
         <a>produto excluído!</a>
        </section>
    </body>
</html>