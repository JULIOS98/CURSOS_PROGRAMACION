<?php

var_dump($_POST);


if($_POST)
{
    $nombre = $_POST['nombre'];
    $sexo  = $_POST['sexo'];
    $year  = $_POST['year'];
    $terminos = $_POST['terminos'];
}
else
{
    header('Location: http://www.google.com');

}


echo "<br>";

echo "Hola: " . $nombre . "<br>" .
     "Eres: " . $sexo . "<br>" . 
     "Naciste el: " . $year . "<br>" .
     "Aceptaste Terminos" . $terminos . "<br>"


?>