<?php

$edad = 18; 
$nombre = 'Julio';
if($edad >= 18 && $nombre == 'Julio')
{
    echo "<h1> Bienvenido $nombre </h1>";
}
else
{
    echo "<h1> Adios $nombre </h1>";
}

//Sentencia SWitch

$mes = 'Diciembre';
switch($mes)
{
    case 'Diciembre':
        //Instrucciones
        echo "Feliz navidad";
        break;
    case 'Febrero':
        echo "Feliz Cumpleaños";
        break;
    default:
        "No se Encontro nada";
        break;
}

echo "<br>";
//Condicion If Shortcut

$edad = (isset($edad)) ? $edad : "El usuario no establecio su edad" ;

echo 'Edad: ' . $edad;

?>