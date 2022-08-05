<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Estrutura de Controle - if ... elseif ... else</title>
</head>
<body>


    <?php

    $a = 3;

    if ($a == 2){
        echo "Depositar dinheiro.<br>";
    }elseif ($a == 1){
        echo "Sacar dinheiro.<br>";
    }elseif ($a == 3){
        echo "Extrato da conta corrente.<br>";
    }else{
        echo "Opção não encontrada.<br>";
    }

    ?>
    
</body>
</html>