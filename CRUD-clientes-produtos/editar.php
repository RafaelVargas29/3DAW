<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD Clientes | Editar</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        section{
            position: relative;
            top:90px;
            border: 1px solid green;
            padding: 5px;
            text-align: center;
            margin-top: 10px;
        }
        a{
            font-size: 20px;
            font-weight: bold;
        }
        form{
            position:relative;
            border: 1px solid green;
            width: 200px;
            margin-left: 555px;
        }
    </style>
</head>
<body>
    <header>
        <h1> Editar | CRUD - Clientes</h1>
    </header>
    <nav>
        <a href="index.html"><button class="botao">Página inicial</button></a>
        <a href="listarum.php"><button class="botao">Listar um cliente</button></a>
        <a href="excluir.php"><button class="botao">Excluir cliente</button></a>
        <a href="criar.php"><button class="botao">Criar cliente</button></a>
        <a href="listartodos.php"><button class="botao">Listar todos os clientes</button></a>
    </nav>

    <section>
        <a>Digite o nome do cliente que deseja editar</a><br><br>
        <form action="editar.php" method="POST">
            Nome:<br><input type="text" name="nome"><br><br>
            <input type="submit" value="Pesquisar">
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

    $consulta = "SELECT * FROM `cliente` WHERE `nome` = '$nome'";
    $resultado = $conn->query($consulta);
    $linha = $resultado->fetch_assoc();
    
    
    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <section>
        <a>Editar Cliente</a>
        <form action="editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $linha["id"]?>"><br>
            Nome:<br><input type="text" name="nome" value="<?php echo $linha["nome"]?>"><br>
            CPF:<br><input type="text" name="cpf" value="<?php echo $linha["cpf"]?>"><br>
            Endereco:<br><input type="text" name="endereco" value="<?php echo $linha["endereco"]?>"><br>
            CEP:<br><input type="text" name="cep" value="<?php echo $linha["cep"]?>"><br>
            Cidade:<br><input type="text" name="cidade" value="<?php echo $linha["cidade"]?>"><br>
            Estado:<br><input type="text" name="estado" value="<?php echo $linha["estado"]?>"><br>
            <input type="submit" value="Editar"></a>
        </form>
    </section>
</body>
</html>

<?php 
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $endereco = $_POST["endereco"];
    $cep = $_POST["cep"];
    $cidade = $_POST["cidade"];
    $estado= $_POST["estado"];

    $consulta = "UPDATE `cliente` SET `nome` = '$nome', `cpf` = '$cpf', `endereco` = '$endereco', `cep` = '$cep', `cidade` = '$cidade', `estado` = '$estado' WHERE `cliente`.`id` = '$id'";
    
    $con = $conn->query($consulta) or die ($conn->error);
?>