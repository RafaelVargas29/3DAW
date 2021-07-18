<?php
    include_once("conexaoprod.php");
    
    $codbarra = $_GET["icodbarra"];
    $nome = $_GET["inome"];
    $fabri = $_GET["ifabricante"];
    $cate = $_GET["icategoria"];
    $tipo = $_GET["itipo"];
    $preco = $_GET["ipreco"];
    $quant = $_GET["iquantestoque"];
    $peso = $_GET["ipeso"];
    $descr = $_GET["idescricao"];
    $data = $_GET["idata"];
    $ativo = $_GET["iativo"];
    $varcase = $_GET["ivarcase"];

    $consulta = "INSERT INTO `produtos`(`codbarra`, `nome`, `fabricante`, `categoria`, `tipo`, `precovenda`, `quantestoque`,`peso`,`descricao`,`dataincl`,`ativo`) VALUES ('$codbarra','$nome','$fabri','$cate','$tipo','$preco','$quant','$peso','$descr','$data','$ativo')";

    if($varcase == 1){
        $consulta = "SELECT * FROM `categoria` WHERE `nome`";
        $i = 0;
        $arrCategorias = array();

        while($linha = $con->fetch_assoc()){
            $arrCategorias[$i] = utf8_decode($linha["nome"]);
            $i++;
        }

        echo json_encode($arrCategorias);
    }
    
    $con = $conn->query($consulta) or die ($conn->error);

?>