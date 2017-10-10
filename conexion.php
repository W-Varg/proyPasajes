<?php
	$conect = mysql_connect('localhost','root','') or die ("no se pudo conectar con la base de datos");
	mysql_select_db('venta_pasajes',$conect);
?>
