<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        <h1> Editar produto</h1>
    </header>
    <nav>
        <a href="index.html"><button class="botao">Página inicial</button></a>
        <a href="listarum.php"><button class="botao">Listar um produto</button></a>
        <a href="excluir.php"><button class="botao">Excluir produto</button></a>
        <a href="incluir.html"><button class="botao">Incluir produto</button></a>
        <a href="listartodos.php"><button class="botao">Listar todos os produtos</button></a>
    </nav>

    <section>
        <a>Digite o codigo de barras do produto que deseja editar</a><br><br>
        <form action="editar.php" method="POST">
            Codigo de barras:<br><input type="text" name="codbarra"><br><br>
            <input type="submit" value="Pesquisar">
        </form>
    </section>
</body>
</html>
<?php 
    include_once("conexaoprod.php");
    
    $cod = $_POST["codbarra"];
    if($cod != ""){
        $consulta = "SELECT * FROM `produtos` WHERE `codbarra` = '$cod'";
        $resultado = $conn->query($consulta);
        $linha = $resultado->fetch_assoc();
    }
    else{
        echo "<h4>O campo não pode estar vazio!</h4>"; 
    }
    
    
    $con = $conn->query($consulta) or die ($conn->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <section>
        <a>Editar produto</a>
        <form action="editar.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $linha["id"]?>"><br>
            Codigo de barras:<br><input type="text" name="codbarra" value="<?php echo $linha["codbarra"]?>"><br>
            Nome:<br><input type="text" name="nome" value="<?php echo $linha["nome"]?>"><br>
            Fabricante:<br><input type="text" name="fabricante" value="<?php echo $linha["fabricante"]?>"><br>
            Categoria:<br><input type="text" name="categoria" value="<?php echo $linha["categoria"]?>"><br>
            Tipo:<br><input type="text" name="tipo" value="<?php echo $linha["tipo"]?>"><br>
            Preço de venda:<br><input type="text" name="preco" value="<?php echo $linha["precovenda"]?>"><br>
            Quantidade em Estoque:<br><input type="text" name="quantestoque" value="<?php echo $linha["quantestoque"]?>"><br>
            Peso:<br><input type="text" name="peso" value="<?php echo $linha["peso"]?>"><br>
            Descrição:<br><input type="text" name="descricao" value="<?php echo $linha["descricao"]?>"><br>
            Data de inclusão:<br><input type="text" name="dataincl" value="<?php echo $linha["dataincl"]?>"><br>
            <input type="submit" value="Editar" name="editado"></a>
        </form>
    </section>
</body>
</html>

<?php 
    $id = $_GET["id"];
    $codbarra = $_GET["codbarra"];
    $nome = $_GET["nome"];
    $fabri = $_GET["fabricante"];
    $cate = $_GET["categoria"];
    $tipo = $_GET["tipo"];
    $preco = $_GET["precovenda"];
    $quant = $_GET["quantestoque"];
    $peso = $_GET["peso"];
    $descr = $_GET["descricao"];
    $data = $_GET["dataincl"];
    $ativo = $_GET["ativo"];
    $resposta = $_POST["editado"];
    $consulta = "UPDATE `produtos` SET `id` = '$id',`codbarra` = '$codbarra', `nome` = '$nome', `fabricante` = '$fabri', `categoria` = '$cate', `tipo` = '$tipo', `precovenda` = '$preco', `quantestoque` = '$quant', `peso` = '$peso', `descricao` = '$descr', `dataincl` = '$data' WHERE `produtos`.`id` = '$id'";

    if($resposta == 'Editar'){
        echo"<h4>Cliente editado!</h4>";
    }
    $con = $conn->query($consulta) or die ($conn->error);
?>