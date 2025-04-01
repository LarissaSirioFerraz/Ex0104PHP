<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados Exercício 08</title>
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
        echo "A tabuada do $n1 é: <br />";
        // Laço de repetição para a tabuada
        for ($i = 0; $i <= 10; $i++) 
        {
            $resultado = $n1 * $i;
            echo "$n1 x $i = $resultado<br />";
        }
    } 
?>
</body>
</html>