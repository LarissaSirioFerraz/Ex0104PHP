<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mensagem</title>
</head>
<body>
<fieldset>
    <legend>Mensagem</legend>
    <form method="post" action="calcular.php"> 
		Lhe desejo um/a:<br />
    <br />
<?php
		$i = 0;
		for ($i = 0; $i < 5; $i++)
		{
		echo "Bom dia, Boa tarde e Boa noite <br>";
		}	
?>
    </form>
</fieldset>
</body>
</head>
</html>