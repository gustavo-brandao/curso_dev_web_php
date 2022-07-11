<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Operadores de Comparação</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 8;
        $c = 10;

        if($a == $b){
            echo "Verdadeiro: o número $a é igual ao valor $b <br><br>";
        }else{
            echo "Falso: o número $a não é igual ao valor $b <br><br>";
        }

        if($a != $b){
            echo "Verdadeiro: o número $a é diferente do valor $b <br><br>";
        }else{
            echo "Falso: o número $a não é diferente do valor $b <br><br>";
        }

        if($a < $b){
            echo "Verdadeiro: o número $a é menor que o valor $b <br><br>";
        }else{
            echo "Falso: o número $a não é menor que o valor $b <br><br>";
        }

        if($a > $b){
            echo "Verdadeiro: o número $a é maior que o valor $b <br><br>";
        }else{
            echo "Falso: o número $a não é maior que o valor $b <br><br>";
        }

        if($a <= $b){
            echo "Verdadeiro: o número $a é menor ou igual ao valor $b <br><br>";
        }else{
            echo "Falso: o número $a não é menor ou igual ao valor $b <br><br>";
        }

        if($a >= $b){
            echo "Verdadeiro: o número $a é maior ou igual ao valor $b <br><br>";
        }else{
            echo "Falso: o número $a não é maior ou igual ao valor $b <br><br>";
        }

        if($a >= $c){
            echo "Verdadeiro: o número $a é maior ou igual ao valor $c <br><br>";
        }else{
            echo "Falso: o número $a não é maior ou igual ao valor $c <br><br>";
        }
    ?>


</body>

</html>