<?php
    include_once("conexaoprod.php");
    
    $codbarra = $_GET["codbarra"];
    $nome = $_GET["nome"];
    $fabri = $_GET["fabricante"];
    $cate = $_GET["categoria"];
    $tipo = $_GET["tipo"];
    $preco = $_GET["preco"];
    $quant = $_GET["quantestoque"];
    $peso = $_GET["peso"];
    $descr = $_GET["descricao"];
    $data = $_GET["data"];
    $ativo = $_GET["ativo"];
    $varcase = $_GET["varcase"];

    $consulta = "INSERT INTO `produto`(`codbarra`, `nome`, `fabricante`, `categoria`, `tipo`, `precovenda`
    , `quantestoque`, `peso`, `descricao`, `dataincl`, `ativo`) VALUES ('$codbarra','$nome','$fabri','$cate',
    '$tipo','$preco','$quant','$peso','$descr','$data','$ativo')";

    $con = $conn->query($consulta) or die ($conn->error);
?>