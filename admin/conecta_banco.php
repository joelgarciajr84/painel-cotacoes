<?php

	mysql_connect($host, $usuario, $senha) or trigger_error(mysql_error());

	mysql_select_db($banco) or trigger_error(mysql_error());

?>