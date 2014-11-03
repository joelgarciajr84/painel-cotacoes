<?php 

	require("Extracao.class.php");

	$extracao = new Extracao();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Display Dolar Euro</title>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

<div id="principal">
	
	<p id="titulopainel" align="center">Painel Cotacoes</p>

	<div id="dolar">

		<p id="topo" align="center"> Dolar Agora </p id="topo">

		<p align="center" id="mostravalor"><?php echo "R$ ". $extracao->getValorDolar(); ?></p>
		<p align="center" id ="situacaoatual"> <?php echo $extracao->statusDolar; ?> </p>

	</div>
	<div id="euro">

		<p id="topo" align="center"> Euro Agora </p id="topo">

		<p align="center" id="mostravalor"><?php echo "R$ ". $extracao->getValorEuro(); ?></p>
		<p align="center" id ="situacaoatual"> Subindo </p>

	</div>
</div>
	
</body>
</html>