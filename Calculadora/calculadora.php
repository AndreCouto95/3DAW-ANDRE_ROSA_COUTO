<?php
    if ($_SERVER["REQUEST_METHOD"]  == "POST") {
        
        $num1 = isset($_POST['num1']) ? $_POST['num1'] : "";
        $num2 = isset($_POST['num2']) ? $_POST['num2'] : "";
        $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : "soma";
        $resultado = 0;
        $erroMsg = "";
        $printOp = "";
        function validaDados( $num1, $num2, $operacao) {
            
            $erroMsg1 = "";
            
            if (!ctype_digit($num1)) {
                $erroMsg1 = "1º número não é numerico";
                
            }
            if (!ctype_digit($num2)) {
                $erroMsg1 = "2º número não é numerico";
            }
    
            if ($operacao == "divisao" && $num2 == 0) {
                $erroMsg1 = "2º numero não pode ser 0 para divisão";
                    
            }
            return $erroMsg1;
        }
    
    function somar(int $num1, int $num2){
        return $num1 + $num2;
    }
    function subtrair(int $num1, int $num2){
        return $num1 - $num2;
    }
    function multiplicar(int $num1, int $num2){
        return $num1 * $num2;
    }
    function dividir(int $num1, int $num2){
        return $num1 / $num2;
    }
    function exponenciacao(int $num1, int $num2){
        return $num1 ** $num2;
    }
    function raiz_quadrada(int $num1){
        return sqrt($num1);
    }
    function inverso(int $num1 ){
        return (1/$num1);
    }
    function percentagem (int $num1, int $num2){
        $resul = 0;
        $resul = 100*$num2/$num1;
        return $resul;
    }
    
    $erroMsg = validaDados($num1, $num2, $operacao);
    
    if ($erroMsg == ""){
        if ($operacao == "soma"){
            $resultado = somar($num1, $num2);
            $printOp = "+";
        } else if ($operacao == "sub"){
            $resultado = subtrair($num1, $num2);
            $printOp = "-";
        } else if ($operacao == "multi"){
            $resultado = multiplicar($num1, $num2);
            $printOp = "*";
        } else if ($operacao == "div"){
            $resultado = dividir($num1, $num2);
            $printOp = "/";
        } else if ($operacao == "exp"){
            $resultado = exponenciacao($num1, $num2);
            $printOp = "^";
        }else if ($operacao == "raiz"){
            $resultado = raiz_quadrada($num1);
            $printOp = "√";
        }else if($operacao == "inverso"){
            $resultado = inverso($num1);
            $printOp = "1/x";
        }else if($operacao == "perc"){
            $resultado = percentagem($num1, $num2);
            $printOp = "%";
        }
    }
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
        <style>
            .corpo {
                text-align : "center";
                margin-left: auto;
                margin-right: auto;
                width: 20em;
            }
        </style>
    </head>
    <body class="corpo">
        <h2><b>Calculadora</b></h2>
        <form action="calculadora.php" method="POST">
            <input required type="number" name="num1"><br>           
            
            <input type="radio" id="soma" name="operacao" value="soma" checked>
            <label for="soma">+</label>
            <input type="radio" id="subtracao" name="operacao" value="sub">
            <label for="subtracao">-</label>
            <input type="radio" id="multiplicacao" name="operacao" value="multi" >
            <label for="multiplicacao">*</label>
            <input type="radio" id="divisao" name="operacao" value="div">
            <label for="divisao">/</label><br>
            <br>
            <input type="radio" id="exp" name="operacao" value="exp">
            <label for="exp">^</label>
            <input type="radio" id="raiz" name="operacao" value="raiz">
            <label for="raiz">√</label>
            <input type="radio" id="inverso" name="operacao" value="inverso">
            <label for="inverso">1/x</label>
            <input type="radio" id="perc" name="operacao" value="perc">
            <label for="perc">%</label>
            
            <br> 
            <input required type="number" name="num2"><br>
            
            <input type="submit" value="Calcular">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"]  == "POST") {
                if ($resultado !== 0) {
                echo "<br>";
                echo "Resultado: $num1 $printOp $num2 = $resultado";
                } else {
                    echo $erroMsg;
                }
            }
        ?>
    </body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> d0bd29dd7ba4ef5dacde8c584b3a5c3da6385cfb
