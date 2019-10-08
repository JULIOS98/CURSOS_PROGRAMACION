<?php
    $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto', 'Septiembre','Noviembre','Diciembre'];
    echo "Arreglos Multidimensionales" . "<br>";
    $amigos = [ ['Alejandro',18], ['Daniel',21] , ['Brian',30] ];

    echo $amigos[0][0] . $amigos[0][1] ."<br>";
    echo $amigos[1][0] . "<br>";
    echo $amigos[2][0] . "<br>";

    echo "Meses: " .  count($meses) ."<br>";

    $ultimo_mes = count($meses) -1;
    echo "Ultimo Mes: ". $meses[$ultimo_mes] . "<br>"; 
?>