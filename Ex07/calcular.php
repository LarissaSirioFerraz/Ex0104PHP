<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados Exercício 07</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $n1 = $_POST['n1'];

    if ($n1 == "") {
        echo "Você não digitou nenhum número!";
    } 
    else 
    {
        echo "Os números pares entre $n1 e 0 são: <br />";
        // Laço de repetição para verificar os números pares
        for ($i = $n1; $i >= 0; $i--) 
        {
            if ($i % 2 == 0) 
            {
                echo "$i<br />";
            } 
        }
    } 
?>
</body>
</html>