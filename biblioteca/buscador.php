<html> 
<body> 
<form> 
<br>
<br>
<br>
<br>
<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Palabra Clave:&nbsp;&nbsp;
 <input type="text" name="T1" size="20"><br><br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" value="Buscar" name="buscar"> 
</form> 
<body bgcolor="#769AB4">
<b>
<?php 
if (!isset($buscar)){ 
    
      echo "</html></body> \n"; 
      exit; 
} 
require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("SELECT * FROM libros WHERE nombre LIKE '%$T1%' ORDER BY nombre", $link); 
if ($row = mysql_fetch_array($result)){ 
      echo "<table border = '10' bgcolor='#FFFFCC'> \n"; 
//Mostramos los nombres de las tablas 
echo "<tr> \n"; 
while ($field = mysql_fetch_field($result)){ 
            echo "<td>$field->name</td> \n"; 
} 
      echo "</tr> \n"; 
echo "<tr><td><b>LIBRO</b></td><td><b>NOMBRE</b></td><td><b>AUTOR</b></td><td><b>TEMA</b></td><td><b>COMENTARIO</b></td></tr> \n"; 
do { 
            echo "<tr> \n"; 
            echo "<td>".$row["libro"]."</td> \n"; 
            echo "<td>".$row["nombre"]."</td> \n"; 
            echo "<td>".$row["autor"]."</td> \n"; 
            echo "<td>".$row["tema"]."</td> \n"; 
            echo "<td>".$row["comentario"]."</td> \n";
            echo "</tr> \n"; 
      } while ($row = mysql_fetch_array($result)); 
            echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?> 
  
</body> 
</html> 
