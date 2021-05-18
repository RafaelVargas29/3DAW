<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Clientes | Adicionar</title>
    <link rel="stylesheet" href="estilo.css">

    <style>
        section{position: relative;
                border: 1px solid green;
                padding: 5px;
                top: 90px;
                text-align: center;
        }
        form{
            position: relative;
            border: double green;
            margin-left: 555px;
            padding: 10px;
            width: 200px;
        }
    </style>
</head>
<body>
    <header>
        <h1> Criar | CRUD - Clientes</h1>
    </header>
        
    <nav>
        <a href="index.html"><button>Página inicial</button></a>
        <a href="listarum.php"><button>Listar um cliente</button></a>
        <a href="excluir.php"><button>Excluir cliente</button></a>
        <a href="editar.php"><button>Editar cliente</button></a>
        <a href="listartodos.php"><button>Listar todos os clientes</button></a>
    </nav>
    <section>
        <h1>Adicionar Cliente</h1>
        <form action="criar.php" method="POST">
            Nome:<br><input type="text" name="nome"><br><br>
            CPF:<br><input type="text" name="cpf"><br><br>
            Endereço:<br><input type="text" name="endereco"><br><br>
            CEP:<br><input type="text" name="cep"><br><br>
            Cidade:<br><input type="text" name="cidade"><br><br>
            Estado:<br><input type="text" name="estado"><br><br>

            <input type="submit" value="Criar">
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
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];


    
    if($nome != "" && $endereco != "" && $cpf){
        $consulta = "INSERT INTO `cliente`(`nome`, `cpf`, `endereco`, `cep`, `cidade`, `estado`) VALUES ('$nome','$cpf','$endereco','$cep','$cidade','$estado')";
        echo "Cliente $nome inserido com sucesso!";
    }

    $con = $conn->query($consulta) or die ($conn->error);
?>