<?php

function saludo($nombre)
{
    echo "Saludo, $nombre";
}

saludo("Julio");

echo "<br>";

function sumar($num1, $num2)
{
    $resultado = $num1 + $num2;
    echo "Resultado = "  . $resultado;
}

sumar(5,5);

echo "<br>";

function sumar_return($num1, $num2)
{   
    $res = $num1 + $num2;
    return $res;
}

echo $res = sumar_return(100,100);

echo "<br>";

function saludo_return($nombre)
{
    return 'Saludo ' . $nombre;
}

echo saludo_return('Daniel');

?>