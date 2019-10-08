<?php

$meses = ['Enero', 'Febrero' , 'Marzo' , 'Abril' ,'Mayo' , 'Junio' , 'Julio' , 'Agosto' , 'Septiembre' , 'Octubre' , 'Noviembre' , 'Diciembre' ];

echo count($meses) . "<br>";

echo "RECORRER CON FOR" . "<br>";
for ($i=0; $i < count($meses) ; $i++) 
{ 
    echo "MESES: " . $meses[$i] . "<br>";
}

echo "<br>";

echo "REOCORRER COM WHILE" . "<br>";

$contador = 0;

while($contador < count($meses))
{
    echo "MESES: " . $meses[$contador] . "<br>";
    $contador++;
}

?>