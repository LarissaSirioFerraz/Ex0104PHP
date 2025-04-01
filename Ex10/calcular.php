<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultados Exercício 10</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if ($n1 == "") {
        echo "Você não digitou nenhum número!";
    } 
    else if ($n2 == "") {
        echo "Você não digitou o intervalo desejado!";
    } 
    else
    {
        echo "Esse são os números de $n1 a 0 com o intervalo de $n2: <br />";
        // Laço de repetição para o intervalo
        for ($i = $n1; $i >= 0; $i -= $n2) 
        {
            echo "$i<br />";
        }
    } 
?>
</body>
</html>