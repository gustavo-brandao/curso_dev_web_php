<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Do ... While</title>
</head>
<body>

    <?php

        $a = 11;

        do{
            echo "E-mail enviado: $a <br>";
            $a++;
        }while($a <= 10);

        $b = 11;
        while($b <= 10){
            echo "Senha gerada: $b <br>";
            $b++;
        }

    ?>
    
</body>
</html>