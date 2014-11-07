<?php
//Controle de Sessao
if (!isset($_SESSION)) session_start();

$nivel_necessario = 2;

if (!isset($_SESSION['UsuarioID']) OR ($_SESSION['UsuarioNivel'] < $nivel_necessario)) {
	session_destroy();
	header("Location: index.php"); exit;
}

include("conecta_banco.php");

$raiz = $_SERVER['DOCUMENT_ROOT'];

include($raiz ."/painel-/graf/conf.php");


//Exemplo com Dolar

$sql = "SELECT * FROM `cambio_dolar` order by `id`";


  $valoresdolar = mysql_query($sql);

while($valor = mysql_fetch_assoc($valoresdolar)){

  $valoresdecompra[] = floatval($valor['valor_compra']);
  $valoresdevenda[] = floatval($valor['valor_venda']);
}
?>
 <!DOCTYPE HTML>
 <html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/navbar-fixed-top.css" rel="stylesheet">
    <script src="../js/ie-emulation-modes-warning.js"></script>
    <!--script src="../js/jquery.js"></script-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/ie10-viewport-bug-workaround.js"></script>

    <title>Painel Cotacoes</title>

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
            <li ><a href="restrito.php">Home</a></li>
            <li><a href="editacotacoes.php">Ver/Editar Cotacoes</a></li>
            <li><a href="mercado.php" >Mercado Agora</a></li>
            <li class="active"><a href="#">Analise</a></li>
            <li><a href="logout.php">Sair</a></li>
        
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div>
        

      </div>
<div align="center" id="graf">
      <?php 
     
        
        $pc = new C_PhpChartX(array($valoresdecompra, $valoresdevenda),'basic_chart');
        $pc->set_animate(true);
        $pc->set_title(array('text'=>'Comparacoes Valor De Compra x Valor de Venda'));
        $pc->add_plugins(array('highlighter'));
        $pc->draw();

      ?>
    </div>


  </body>
</html>