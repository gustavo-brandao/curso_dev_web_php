<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <title>Celke - Foreach</title>
</head>
<body>

    <?php

    $alunos = ["A", "B", "C", "D"];
    var_dump($alunos);

    echo"<br>";

    foreach($alunos as $aluno){
        echo "Nome: $aluno <br>";
    }

    ?>
    
</body>
</html>