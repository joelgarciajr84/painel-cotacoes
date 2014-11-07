<?php

include ("./admin/conecta_banco.php");
include ("./admin/atualizador.php");

?>
<html lang="en">
<head>

<script src="./news/includes/jquery.js" type="text/javascript"></script>

<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/home.css" rel="stylesheet">

	<meta charset="UTF-8">
   <meta http-equiv="refresh" content="300">


	<script>
function startTime() {
    var today=new Date();
    var h=today.getHours();
    var m=today.getMinutes();
    var s=today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h+":"+m+":"+s;
    var t = setTimeout(function(){startTime()},500);
}

function checkTime(i) {
    if (i<10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}
</script>

	<title>Painel </title>

</head>
<body onload="startTime()">

<div id="topo">
	
	<p></p>


	<div id="txt">
	</div>

</div>
<div id="principal">

<div class="panel panel-default">

      <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>Moeda <br><br></th>
            <th>Compra <br><br></th>
            <th>Venda <br><br></th>
            
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dolar</td>
            <td><?php echo "R$ " .  $valoresdolar["valor_compra"];  ?></td>
            <td><?php echo "R$ " . $valoresdolar["valor_venda"];  ?></td>
            
          </tr>
          <tr>
             <td>Euro</td>
            <td><?php echo "R$ " . $valoreseuro["valor_compra"]; ?></td>
            <td><?php echo "R$ " . $valoreseuro["valor_venda"]; ?></td>
            
          </tr>
          <tr>
             <td>Franco Suico</td>
            <td><?php echo "R$ " . $valoresfrancosuico["valor_compra"]; ?></td>
            <td><?php echo "R$ " . $valoresfrancosuico["valor_venda"]; ?></td>
            
          </tr>
          <tr>
             <td>Peso Argentino</td>
            <td><?php echo "R$ " . $valorespesoargentino["valor_compra"]; ?></td>
            <td><?php echo "R$ " . $valorespesoargentino["valor_venda"]; ?></td>
            
          </tr>
          <tr>
             <td>Hong Kong Dolar</td>
            <td><?php echo "R$ " . $valoreshkdolar["valor_compra"]; ?></td>
            <td><?php echo "R$ " . $valoreshkdolar["valor_venda"]; ?></td>
            
          </tr>
        </tbody>
      </table>

      
    </div>
<div class="bc_ticker" style="overflow: auto;border-style: none;border-width: 0;border-color: #FFFFFF;;">
<table width="100%">
  <tr>
    <td width="10" style="vertical-align: top;" ><a id="TickerPrevBC11735024" href="javascript: ;" onclick="PrevTickerBC11735024();" class="bc_tickerarrow" style="text-decoration: none; ">&laquo;</a></td>
    <td id="TickerContentBC11735024" class="bc_tickercontent" style="vertical-align: top;">
      <a id="TickerLinkBC11735024" href="javascript: ;" class="bc_tickerlink" style="text-decoration: none;" target="_top"><b><span id="TickerTitleBC11735024" class="bc_tickertitle" ></span></b></a>      <span id="TickerSummaryBC11735024" class="bc_tickersummary" ></span>
    </td>
    <td width="10" style="vertical-align: top;" ><a id="TickerNextBC11735024" href="javascript: ;" onclick="NextTickerBC11735024();" class="bc_tickerarrow" style="text-decoration: none; ">&raquo;</a></td>
  </tr>
</table>
<!-- DO NOT CHANGE OR REMOVE THE FOLLOWING NOSCRIPT SECTION OR THE BLASTCASTA NEWS TICKER WILL NOT FUNCTION PROPERLY. -->
<noscript><a href="http://www.blastcasta.com/" title="News Ticker by BlastCasta"><img src="http://www.poweringnews.com/images/tp.gif" border="0" /></a></noscript>
</div>

<script id="scr11735024" type="text/javascript"></script>
<script type="text/javascript"> /* <![CDATA[ */ 
setTimeout('document.getElementById(\'scr11735024\').src = (document.location.protocol == \'https:\' ? \'https\' : \'http\') + \'://www.poweringnews.com/ticker-js.aspx?feedurl=http%3A//rss.uol.com.br/feed/economia.xml&changedelay=5&maxitems=-1&showsummary=0&objectid=11735024\'', 500);
 /* ]]> */ </script>
</div>


</body>
</html>