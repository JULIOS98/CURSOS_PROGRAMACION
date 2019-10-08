<?php

$conexion = mysql_connect('localhost', 'root', '') or die ('NO SE PUDO CONECTAR');

mysql_select_db('upv', $conexion);
//$resultados = mysql_query('SELECT * FROM alumno');
$res = mysql_query('INSERT INTO alumno values( "92345" , "RUTHA", "ITI" )');

//$fila = mysql_fetch_object($resultados);
//echo $fila -> nombre;

//while($fila = mysql_fetch_object($resultados))
//{
  //  echo $fila -> nombre;
    //echo "<br>";
//}

?>
