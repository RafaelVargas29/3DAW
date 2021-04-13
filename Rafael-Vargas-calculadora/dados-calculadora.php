<?php
    $valora = floatval($_POST['a']);
    $valorb = floatval($_POST['b']);
    $op = $_POST['operacao'];
    
    if($valora == "" xor $valorb == ""){

        echo "Você deixou um campo em branco. Preencha-o para que o cálculo seja feito!";
    }
    else{
        switch($op) {
            case "soma":
                $result = $valora + $valorb;
                echo "O resultado da soma é: $result";
            break;
            case "sub":
                $result = $valora - $valorb;
                echo "O resultado da subtração é: $result";
            break;
            case "mult":
                $result = $valora * $valorb;
                echo "O resultado da multiplição é: $result";
            break;
            case "divisao":
                $result = $valora / $valorb;
                echo "O resultado da divisão é: $result";
            break;

            case "porcenta";
                $result = ($valora/100) * $valorb;
                echo "$valora% de $valorb é: $result";
            break;

            case "aoquad";
                $result = pow($valora, 2);
                echo "O resultado de $valora<sup>2</sup> é: $result";
            break;

            case "sobx";
                $result = 1/$valorb;
                echo "O resultado de 1 sobre $valorb é: $result";
            break;

            case "raizquad";
                $result = sqrt($valora);
                echo "A Raiz quadrada de $valora é: $result";
            break;
        }
    }
?>