<?php
    include_once("conexaoprod.php");

    $consulta = "INSERT INTO `cliente`(`nome`, `cpf`, `endereco`, `cep`, `cidade`, `estado`) VALUES 
    ('$nome','$cpf','$endereco','$cep','$cidade','$estado')";

    $con = $conn->query($consulta) or die ($conn->error);
?>