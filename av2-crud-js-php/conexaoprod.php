<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "root";
    $nomeBanco = "dawfaeterj";

    $conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);

    if ($conn->connect_error) {
        die("Conexao falhou: " . $conn->connect_error);
    }
?>