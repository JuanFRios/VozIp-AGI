#!/usr/bin/php -q
<?php
require('phpagi.php');
$agi=new AGI();
$agi->answer();
sleep(1);
$agi->text2wav("Bienvenido");
require ('definiciones.inc');
//$link=mysql_connect(localhost, usrbiblioteca, passbiblioteca);
$link=mysql_connect(MAQUINA,USUARIO,CLAVE);
//mysql_select_db(biblioteca, $link);
mysql_select_db(DB,$link);
$result=mysql_query("SELECT nombre FROM libros", $link);
while($row=mysql_fetch_array($result)){
$agi->text2wav($row['nombre']);sleep(1);}
$agi->text2wav("Gracias por utilizar el sistema de audiorespuesta. 
Hasta pronto");
sleep(5);
$agi->hangup();
?>
