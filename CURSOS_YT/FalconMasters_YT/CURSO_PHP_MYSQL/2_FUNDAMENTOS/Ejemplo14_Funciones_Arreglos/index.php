<?php

//Extrae los elementos de un arreglo asociativo como si fueran variables
$arr_aso = ['telefono' => 3125186, 'edad' => 21, 'pais' => 'mexico' ];
extract($arr_aso);
echo $telefono;

echo "<br>";

//extraer el ultimo elemento al final de un array
$arr_semana = ['Lunes' , 'Martes' , 'Miercoles', 'Jueves' , 'Viernes', 'Sabado' , 'Domingo'];
$ultimo_dia =  array_pop($arr_semana);
echo "<br>";
foreach ($arr_semana as $dia) 
{
    echo $dia . "<br>";
}

echo "<br>";


//Funcion Join juntar el arreglo separados por el caracter puesto
echo join('-', $arr_semana);

echo "<br>";







?>