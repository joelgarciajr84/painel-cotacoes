<?php
# Salvador -- Responsavel por inserir no banco os novos valores # #

//Salva os Novos Valores do Dolar
if ($_POST['dolar_compra'] || $_POST['dolar_venda']) {
  
	$dolarcompra = mysql_real_escape_string($_POST['dolar_compra']); 
	$dolarvenda = mysql_real_escape_string($_POST['dolar_venda']);
	$momento = $_POST["momento"];
	$usuario = $_SESSION['UsuarioUsuario'];


	
	$sql = mysql_query("INSERT INTO cambio_dolar (id,valor_compra,valor_venda,momento,usuario)
	VALUES ('','$dolarcompra','$dolarvenda','$momento', '$usuario') ") or die(mysql_error());  


}
//Salva os Novos Valores do EURO

if ($_POST['euro_compra'] || $_POST['euro_venda']) {
  
	$eurocompra = mysql_real_escape_string($_POST['euro_compra']); 
	$eurovenda = mysql_real_escape_string($_POST['euro_venda']);
	$momento = $_POST["momento"];
	$usuario = $_SESSION['UsuarioUsuario'];


	
	$sql = mysql_query("INSERT INTO cambio_euro (id,valor_compra,valor_venda,momento,usuario)
	VALUES ('','$eurocompra','$eurovenda','$momento', '$usuario') ") or die(mysql_error());  

             
}
//Salva os Novos Valores do Franco Suico

if ($_POST['francosuico_compra'] || $_POST['francosuico_venda']) {
  
	$francosuicocompra = mysql_real_escape_string($_POST['francosuico_compra']); 
	$francosuicovenda = mysql_real_escape_string($_POST['francosuico_venda']);
	$momento = $_POST["momento"];
	$usuario = $_SESSION['UsuarioUsuario'];


	
	$sql = mysql_query("INSERT INTO cambio_franco_suico (id,valor_compra,valor_venda,momento,usuario)
	VALUES ('','$francosuicocompra','$francosuicovenda','$momento', '$usuario') ") or die(mysql_error());  

             
}
//Salva os Novos Valores do Peso Argentino

if ($_POST['pesoargentino_compra'] || $_POST['pesoargentino_venda']) {
  
	$pesoargentinocompra = mysql_real_escape_string($_POST['pesoargentino_compra']); 
	$pesoargentinovenda = mysql_real_escape_string($_POST['pesoargentino_venda']);
	$momento = $_POST["momento"];
	$usuario = $_SESSION['UsuarioUsuario'];


	
	$sql = mysql_query("INSERT INTO cambio_peso_argentino (id,valor_compra,valor_venda,momento,usuario)
	VALUES ('','$pesoargentinocompra','$pesoargentinovenda','$momento', '$usuario') ") or die(mysql_error());  

             
}
//Salva os Novos Valores do Hong Kong Dolar

if ($_POST['hongkongdolar_compra'] || $_POST['hongkongdolar_venda']) {
  
	$hkdolarcompra = mysql_real_escape_string($_POST['hongkongdolar_compra']); 
	$hkdolarvenda = mysql_real_escape_string($_POST['hongkongdolar_venda']);
	$momento = $_POST["momento"];
	$usuario = $_SESSION['UsuarioUsuario'];


	
	$sql = mysql_query("INSERT INTO cambio_hk_dolar (id,valor_compra,valor_venda,momento,usuario)
	VALUES ('','$hkdolarcompra','$hkdolarvenda','$momento', '$usuario') ") or die(mysql_error());  

             
}