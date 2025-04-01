<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Repetindo</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $algo = $_POST['nome'];
	
    // Calculando
	$i = 0;
	for ($i = 1; $i <= 10; $i++)
	{
	echo" $algo<br>";
	}
?>
</body>
</html>