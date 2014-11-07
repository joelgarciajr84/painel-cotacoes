<?php

if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: index.php"); exit;
}

mysql_connect($host, $usuario, $senha) or trigger_error(mysql_error());
mysql_select_db($banco) or trigger_error(mysql_error());

$usuario = mysql_real_escape_string($_POST['usuario']);
$senha = mysql_real_escape_string($_POST['senha']);

$sql = "SELECT `id`, `nome`, `nivel`,`usuario` FROM `usuarios` WHERE (`usuario` = '". $usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
$query = mysql_query($sql);
if (mysql_num_rows($query) != 1) {
	
	header("Location: index.php");

} else {
	$resultado = mysql_fetch_assoc($query);

	if (!isset($_SESSION)) session_start();

	// Salva os dados encontrados na sessão
	$_SESSION['UsuarioID'] = $resultado['id'];
	$_SESSION['UsuarioNome'] = $resultado['nome'];
	$_SESSION['UsuarioNivel'] = $resultado['nivel'];
	$_SESSION['UsuarioUsuario'] = $resultado['usuario'];


	header("Location: restrito.php"); exit;
}

?>