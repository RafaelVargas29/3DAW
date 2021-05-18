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
        <h1> Excluir | CRUD - Clientes</h1>
    </header>
    
    <nav>
        <a href="index.html"><button>Página inicial</button></a>
        <a href="listarum.php"><button>Listar um cliente</button></a>
        <a href="editar.php"><button>Editar cliente</button></a>
        <a href="criar.php"><button>Criar cliente</button></a>
        <a href="listartodos.php"><button>Listar todos os clientes</button></a>
    </nav>
    
    <section>
        <h3>Digite o nome do cliente</h3>
        <form action="excluir.php" method="POST">
            NOME:<br><input type="text" name="nome"><br><br>
            <input type="submit" value="Excluir">
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
        $consulta = "DELETE FROM `cliente` WHERE `nome` = '$nome'";
    }
    
    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD Clientes/Produtos | Excluir</title>
    </head>
    <body>
        <section>
         <a>Cliente excluído!</a>
        </section>
    </body>
</html>