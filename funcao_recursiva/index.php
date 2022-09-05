<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Funções Recursivas</title>
</head>
<body>

    <?php

    function exibe($num){
        if($num >= 1){
            echo "Valor passado para a função: $num <br>";
            $qnt = $num -1;
            exibe($qnt);
        }
    }
    
    exibe(10);

    ?>
    
</body>
</html>