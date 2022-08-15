<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Switch</title>
</head>
<body>

    <?php

    $a = 4;

    switch($a){
        case 1:
            echo "Sacar dinheiro.<br>";
            break;
        
        case 2:
            echo "Depositar dinheiro.<br>";
            break;
        
        case 3:
            echo "Imprimir cheque<br>";
            break;

        default:
            echo "Opção não encontrada!<br>";
            break;
    }

    ?>

    
</body>
</html>