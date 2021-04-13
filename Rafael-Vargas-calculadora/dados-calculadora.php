<?php
    $valora = floatval($_POST['a']);
    $valorb = floatval($_POST['b']);
    $op = $_POST['operacao'];
    
    
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

        case "porcenta":
            $result = ($valora/100) * $valorb;
            echo "$valora% de $valorb é: $result";
        break;

        case "aoquad":
            if($valora == ""){
                echo "Você dexou o campo <em>--Digite A--</em> em branco. Por favor, siga as instruções para uso da calculadora!";
            }  
            else{
                if($valorb != ""){
                    echo "Você preencheu o campo <em>--Digite B--</em>, por favor, siga as instruções para uso da calculadora!";
                }
                else{
                    $result = pow($valora, 2);
                    echo "O resultado de $valora<sup>2</sup> é: $result";  
                }
            } 
        break;

        case "sobx":
            if($valorb == ""){
                echo "Você deixou o campo <em>--DIGITE B--</em> em branco. Por favor, siga as instruções para uso da calculadora!";
            }
            else{
                if($valora != "")
                {
                    echo "Você preencheu o campo <em>--Digite A--</em>, por favor, siga as instruções para uso da calculadora!";
                }
                else{
                    $result = 1/$valorb;
                    echo "O resultado de 1 sobre $valorb é: $result";
                }
            }
        break;

        case "raizquad":
            if($valora == ""){
                echo "Você dexou o campo <em>--Digite A--</em> em branco. Por favor, siga as instruções para uso da calculadora!";
            }  
            else{
                if($valorb != ""){
                    echo "Você preencheu o campo <em>--Digite B--</em>, por favor, siga as instruções para uso da calculadora!";
                }
                else{
                    $result = sqrt($valora);
                    echo "A Raiz quadrada de $valora é: $result"; 
                }
            }
        break;
    }

?>