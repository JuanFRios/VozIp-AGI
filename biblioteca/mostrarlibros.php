<html> 
<body> 
<br>
<br>
<br>
<br>
<body bgcolor="#769AB4">
<b>
<?php 
require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("SELECT libro, nombre, autor, tema, comentario FROM libros", $link); 
if ($row = mysql_fetch_array($result)){ 
   echo "<table border = '10' bgcolor = '#FFFFCC'> \n"; 
   echo "<tr><td><b>LIBRO</b></td><td><b>NOMBRE</b></td><td><b>AUTOR</b></td><td><b>TEMA</b></td><td><b>COMENTARIO</b></td></tr> \n"; 
   do { 
      echo "<tr><td>".htmlentities($row["libro"])."</td><td>".$row["nombre"]."</td><td>".$row["autor"]."</td><td>".htmlentities($row["tema"])."</td><td>".htmlentities($row["comentario"])."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($result)); 
   echo "</table> \n"; 
} else { 
echo "No se ha encontrado ning&uacute;n registro!";
} 
?> 
  </body> 
</html>

