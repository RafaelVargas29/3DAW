<?php
    include_once("conexaopdt.php");

    $filename = 'C:\Users\Pichau\Desktop\FAETERJ\TERCEIRO PERIODO\3DAW\Produtos.csv';

    if(file_exists($filename)){
        if(mysqli_query($conn, "LOAD DATA INFILE '$filename' INTO TABLE produto
        FIELDS TERMINATED BY ';'
        LINES TERMINATED BY '\n'
        IGNORE 1 ROWS")){
            echo "Arquivo carregado com sucesso!";    
        }
        else{
            echo"O arquivo não foi carregado!";
        }
    }
    else{
        echo"esse arquivo não existe!";
    }

    $con = $conn->query($consulta) or die ($conn->error);
?>