<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados Exercício 06</title>
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
        echo "Os números pares entre 0 e $n1 são: <br />";
        // Laço de repetição para verificar os números pares
        for ($i = 0; $i <= $n1; $i++) 
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