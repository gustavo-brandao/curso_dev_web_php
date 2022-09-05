<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Cookies</title>
</head>
<body>

    <?php

    setcookie("afiliado", "5323", (time() + (7 * 24 * 3600)));

    
    if(isset($_COOKIE['afiliado'])){
        echo "Número do afiliado: " . $_COOKIE['afiliado'] . "<br>";
    }

    setcookie("logado", "Cesar", (time() + (7 * 3600)));
    if(isset($_COOKIE["logado"])){
        echo "Usuário " . $_COOKIE["logado"] . " logado. <br>";
    }else{
        echo "Cookies inválido!<br>";
    }

    ?>
    
</body>
</html>