<?php 
ini_set('display_startup_errors',0);
ini_set('display_errors',0);
error_reporting(0);
require("Extracao.class.php");

	$extracao = new Extracao();

	//var_dump($extracao);
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

		<p align="center" id="mostravalor"><?php echo "R$ ". $extracao->getValorReal(); ?></p>
		<p align="center" id ="situacaoatual"> Caindo </p>

	</div>
	<div id="euro">

		<p id="topo" align="center"> Euro Agora </p id="topo">

		<p align="center" id="mostravalor"><?php echo "R$ ". $extracao->getValorEuro(); ?></p>
		<p align="center" id ="situacaoatual"> Subindo </p>

	</div>
</div>
	
</body>
</html>