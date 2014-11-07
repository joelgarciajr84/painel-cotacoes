<?php 
ini_set('display_errors', 0);

if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	session_destroy();
	header("Location: index.php"); exit;
}
include ("conecta_banco.php");
include ("salvador.php");
include ("atualizador.php");
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

    <title>Sistema </title>

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
         <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="restrito.php">Home</a></li>
            <li class="active"><a href="editacotacoes.php">Ver/Editar Cotacoes</a></li>
            <li><a href="mercado.php">Mercado Agora</a></li>
            <li><a href="analise.php">Analise</a></li>
            <li><a href="logout.php">Sair</a></li>
            </li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">


        <h1>CAMBIO</h1>

      <p align="center" class="bg-primary">Atualizacao de Valores</p>

        <br>

        <form role="form" method="post">

        <input name="momento" type="hidden" value="<?php echo date("d/m/y G:i:s"); ?>">

        <div align="center" style="width: 100%" id="principal">
        
         <div style="width: 50%; float:left; id="valorcompra">

         <p>Valor de Compra</p>


            <?php
            $moedas = array("Dolar", "Euro", "Franco Suico" , "Peso Argentino", "Hong Kong Dolar");

            foreach ($moedas as $moeda) {
            ?>

            <div class="input-group"  style="width: 300px;">

              <span class="input-group-addon"><?php echo $moeda ?></span>
              <input type="text" value="<?php 

                switch ($moeda) {
                  case 'Dolar':
                    echo $valoresdolar["valor_compra"];
                  break;

                  case 'Euro':
                    echo $valoreseuro["valor_compra"];
                  break;

                  case 'Franco Suico':
                    echo $valoresfrancosuico["valor_compra"];
                  break;

                  case 'Peso Argentino':
                    echo $valorespesoargentino["valor_compra"];
                  break;

                  case 'Hong Kong Dolar':
                    echo $valoreshkdolar["valor_compra"];
                  break;
                }


              ?>" name="<?php echo str_replace(" ", "", strtolower($moeda))."_compra"; ?>" class="form-control">
               </div>
              <br>
          <?php } ?>
         
        </div>
        
         <div id="valorvenda">

            <p>Valor de Venda</p>

         
            <?php

            $moedas = array("Dolar", "Euro", "Franco Suico" , "Peso Argentino", "Hong Kong Dolar");

            foreach ($moedas as $moeda) {
            ?>

            <div class="input-group"  style="width: 300px;">

              <span class="input-group-addon"><?php echo $moeda ?></span>
 <input type="text" value="<?php 

                switch ($moeda) {

                  case 'Dolar':
                    echo $valoresdolar["valor_venda"];
                  break;

                  case 'Euro':
                   echo $valoreseuro["valor_venda"];
                  break;

                   case 'Franco Suico':
                   echo $valoresfrancosuico["valor_venda"];
                  break;

                  case 'Peso Argentino':
                   echo $valorespesoargentino["valor_venda"];
                  break;

                  case 'Hong Kong Dolar':
                   echo $valoreshkdolar["valor_venda"];
                  break;
                }


              ?>" name="<?php echo str_replace(" ", "", strtolower($moeda))."_venda"; ?>" class="form-control">              </div>
              <br>
            <?php } ?>        
          </div>
          <button type="submit" formaction="editacotacoes.php" class="btn btn-default">Salvar</button>
</form>
        </div>

           

       
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
