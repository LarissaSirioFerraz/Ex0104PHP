<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Repetindo</title>
</head>
<body>
<?php
    //Declara as variáveis e captura os dados do formulário
    $algo = $_POST['algo'];
	$vezes = $_POST['vezes'];
	
    // Calculando
	$i = 0;
	for ($i = 1; $i <= $vezes; $i++)
	{
	echo" $algo<br>";
	}
?>
</body>
</html>