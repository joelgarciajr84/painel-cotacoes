<?php 
 # Retorna os valores atualizados das cotacoes


// Retorna os valores atuais do Dolar

	$sql = "SELECT * FROM `cambio_dolar` order by `id` desc limit 1";


	$valoresdolar = mysql_query($sql);

	$valoresdolar = mysql_fetch_array($valoresdolar);

//Retorna os valores atuais do Euro

	$sql = "SELECT * FROM `cambio_euro` order by `id` desc limit 1";


	$valoreseuro = mysql_query($sql);

	$valoreseuro = mysql_fetch_array($valoreseuro);


//Retorna os valores atuais do Franco Suico

	$sql = "SELECT * FROM `cambio_franco_suico` order by `id` desc limit 1";


	$valoresfrancosuico = mysql_query($sql);

	$valoresfrancosuico = mysql_fetch_array($valoresfrancosuico);

//Retorna os valores atuais do Peso Argentino

	$sql = "SELECT * FROM `cambio_peso_argentino` order by `id` desc limit 1";


	$valorespesoargentino = mysql_query($sql);

	$valorespesoargentino = mysql_fetch_array($valorespesoargentino);

//Retorna os valores atuais do Hong Kong Dolar

$sql = "SELECT * FROM `cambio_hk_dolar` order by `id` desc limit 1";


$valoreshkdolar = mysql_query($sql);

$valoreshkdolar = mysql_fetch_array($valoreshkdolar);
?>