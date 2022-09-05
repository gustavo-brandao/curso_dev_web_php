<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Função</title>
</head>
<body>

    <?php

    $codigo = "cursophpdev";

    promocao($codigo);

    function promocao($valor = null){
        echo "Acessou a função<br>";
        echo "Parametro: $valor<br>";
        if($valor == "cursophp"){
            //echo "Código válido.<br>";
            $msg = "Código válido.";
        }else{
            //echo "Código inválido.<br>";
            $msg = "Código inválido.";
        }

        return $msg;
    }

    echo "<hr>";

    $codigo_curso = "cursophp";
    $retorno_dados_funcao = promocao($codigo_curso);
    echo $retorno_dados_funcao . "<br>";

    echo "<hr>";

    $codigo_curso = "cursophp";
    $retorno_dados_funcao = promocao();
    echo $retorno_dados_funcao . "<br>";

    ?>
    
</body>
</html>