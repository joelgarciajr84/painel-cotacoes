<?php

if (!isset($_SESSION)) session_start();

  $nivel_necessario = 2;
if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	session_destroy();
	header("Location: index.php"); exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Painel Cotacoes</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar-fixed-top.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="restrito.php">Cambio</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="restrito.php">Home</a></li>
            <li><a href="editacotacoes.php">Ver/Editar Cotacoes</a></li>
            <li><a href="mercado.php">Mercado Agora</a></li>
            <li><a href="analise.php">Analise</a></li>
            <li><a href="logout.php">Sair</a></li>
        
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="jumbotron">
        <h2>CAMBIO</h2>

        <?php echo "Ola " . $_SESSION['UsuarioNome'] . ", bom trabalho!"; ?>
       
        </p>
      </div>

    </div> 
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
