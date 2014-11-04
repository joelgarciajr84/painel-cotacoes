<?php

#A sess�o precisa ser iniciada em cada p�gina diferente
if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

// Verifica se n�o h� a vari�vel da sess�o que identifica o usu�rio
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	// Destr�i a sess�o por seguran�a
	session_destroy();
	// Redireciona o visitante de volta pro login
	header("Location: index.php"); exit;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Area Administrativa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
     <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </head>
  <body>
  <h1 align="center">Area Administrativa</h1>
    <p><?php echo "Ola " . $_SESSION['UsuarioNome']; ?></p>

    <div class="form-group input-group">
    <span class="input-group-addon">R$</span>
    <input type="text" class="form-control">
    <label for="">Real</label>


</div>

  </body>
</html>