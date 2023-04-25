#!/usr/bin/php -q
<?php
set_time_limit(30);
$param_error_log = '/tmp/notas.log';
$param_debug_on = 1;
require('phpagi.php');
$agi = new AGI();
$agi->answer();
sleep(1);
$agi->exec_agi("googletts.agi,\"Bienvenido\",es");

require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("SELECT nombre FROM libros", $link); 

while ($row = mysql_fetch_array($result)){ 
	$agi->exec_agi("googletts.agi,\"".$row['nombre']."\",es");
	sleep(1);
} 

$agi->exec_agi("googletts.agi,\"Gracias por utilizar el sitema de audiorespuesta, hasta pronto\",es");
$agi->hangup();
