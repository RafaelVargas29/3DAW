<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
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
        $formInvalido = 0;
        
        function validaDadosAlpha($formDado) {
            if ($formDado == "" or ctype_alpha($formDado)) {
                $formInvalido = 1;
            }
        }
        function validaDadosDigit($formDado) {
            if ($formDado == "" or !ctype_digit($formDado)) {
                $formInvalido = 1;
            }
        }
        
        validaDadosDigit($codbarra);
        validaDadosAlpha($nome);
        validaDadosAlpha($nome);
        validaDadosAlpha($fabricante);
        validaDadosAlpha($cate);
        validaDadosDigit($preco);
        validaDadosDigit($quant);
        validaDadosDigit($peso);
        validaDadosAlpha($descr);

        if($formInvalido == 0){
            $consulta = "INSERT INTO `produtos`(`codbarra`, `nome`, `fabricante`, `categoria`, `tipo`, `precovenda`, `quantestoque`,`peso`,`descricao`,`dataincl`,`ativo`) VALUES ('$codbarra','$nome','$fabri','$cate','$tipo','$preco','$quant','$peso','$descr','$data','$ativo')";
        
            $con = $conn->query($consulta) or die ($conn->error);
        }
    }
    
?>