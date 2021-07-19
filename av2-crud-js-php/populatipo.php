<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        include_once("conexaoprod.php");
        
        $consulta = "SELECT * FROM tipo";

        $con = $conn->query($consulta) or die ($conn->error);

        $i = 0;

        $arrTipo[] = array();

        while($linha = $con->fetch_assoc()){

            $arrTipo[$i] = utf8_decode($linha["nome"]);
            $i++;
        }

        echo json_encode($arrTipo);
    }

?>