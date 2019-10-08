<?php

#Arreglos Indexados


#OTRA FORMA DE CREAR UN ARREGLO.
$arreglo = ['Lunes' , 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo'];
$semana = array('Lunes' , 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

echo $arreglo[5];

echo "<br>";

echo $semana[1];

echo "<br>";

$semana[7] = 'Julio';
echo $semana[7];

echo "<br>";

echo "Dias de la semana:";
echo "<br>";

echo $semana[0] . "<br>";
echo $semana[1] . "<br>";
echo $semana[2] . "<br>";
echo $semana[3] . "<br>";
echo $semana[4] . "<br>";
echo $semana[5] . "<br>";
echo $semana[6] . "<br>";



?>