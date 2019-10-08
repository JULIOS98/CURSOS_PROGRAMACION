<?php

function calcular_area_triangulo($base, $altura)
{
    $res = ($base * $altura) / 2;

    return $res;
}

$area_triangulo = calcular_area_triangulo(10,10);

echo "El triangulo tienen un area de "  . $area_triangulo . " Metros cuadrados";


echo "<br>";
$texto = '< > & ""';

//Convertir caracteres especiales en entidades html (> < "" '')
echo htmlspecialchars($texto);

echo "<br>";

 $texto2 = ' Hola ';

 //Eliminar espacios en blanco al inicio y al final de una cadena
 //de texto
 echo trim($texto2);

 echo "<br>";

 //Calcular cuantos caracteres tenemos en una cadena
 echo strlen($texto2);

 echo "<br>";

 //Retornarnos un pedazo de una linea de una cadena de texto
 echo substr($texto2, 1,2);

 echo "<br>";

$cadena = 'Hola Julio';

//Convierte la cadena a mayusculas
echo strtoupper($cadena);

echo "<br>";

//Convertir la cadena a minusculas
echo strtolower($cadena);

echo "<br>";

//Conocer en que posicion se encuentra una letra
echo strpos($cadena, 'o');




?>