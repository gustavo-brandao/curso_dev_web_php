<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celke - Operadores Lógicos</title>
</head>
<body>

    <?php
    $a = 10;
    $b = 8;
    $c = "";

    if (($a == 10) AND ($b == 8)){
        echo "Utilizando AND: Verdadeiro <br><br>";
    }else{
        echo "Utilizando AND: Falso <br><br>";
    }

    if (($a == 10) OR ($b == 7)){
        echo "Utilizando OR: Verdadeiro <br><br>";
    }else{
        echo "Utilizando OR: Falso <br><br>";
    }

    if (($a == 10) XOR ($b == 7)){
        echo "Utilizando XOR: Verdadeiro <br><br>";
    }else{
        echo "Utilizando XOR: Falso <br><br>";
    }

    if(!empty($c)){
        echo("Utilizado !: Verdadeiro <br><br>");
    }else{
        echo("Utilizado !: Falso <br><br>");
    }

    if (($a == 10) || ($b == 7)){
        echo "Utilizando ||: Verdadeiro <br><br>";
    }else{
        echo "Utilizando ||: Falso <br><br>";
    }

    ?>
    
</body>
</html>