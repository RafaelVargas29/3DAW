<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        include_once("conexaoprod.php");
        
        $consulta = "SELECT * FROM categoria";

        $con = $conn->query($consulta) or die ($conn->error);

        $i = 0;

        $arrCate[] = array();

        while($linha = $con->fetch_assoc()){

            $arrCate[$i] = utf8_decode($linha["nome"]);
            $i++;
        }
    
        echo json_encode($arrCate);
    }
?>