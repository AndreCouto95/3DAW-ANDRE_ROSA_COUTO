<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $resultado = 0;

    if ($_SERVER["REQUEST_METHOD"]  != "POST") {
        echo "Método inválido";
    }else if(!ctype_digit($num1)) {
        echo "1º número -> inválido<br>";
        echo "ERRO! Preencha novamente o formulário!";
    }else if(!ctype_digit($num2)){
        echo "2º número -> inválido<br>";
        echo "ERRO! Preencha novamente o formulário!";        
    }else {
        $operacao = $_POST['operacao'];
        switch($operacao){
            case "soma" :
                $resultado = $num1 + $num2;
                echo $num1." + ".$num2. " = ".$resultado;
                break;
    
            case "sub" :
                $resultado = $num1 - $num2;
                echo $num1." - ".$num2. " = ".$resultado;
                break;
    
            case "multi" :
                $resultado = $num1 * $num2;
                echo $num1." * ".$num2. " = ".$resultado;
                break;
    
            case "div" :
                if(($num2==0)){
                    echo "2º número -> inválido<br>";
                    echo "ERRO! Divisor nulo! Preencha novamente o formulário!";
                }
                else{
                    $resultado = $num1 / $num2;
                    echo $num1." / ".$num2. " = ".$resultado;
                }
                break;
        }
    }
?>
