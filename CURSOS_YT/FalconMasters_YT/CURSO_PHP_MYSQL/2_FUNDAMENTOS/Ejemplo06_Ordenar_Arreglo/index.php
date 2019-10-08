<?php
$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto', 'Septiembre','Noviembre','Diciembre'];
$numeros = [4,3,1,4,8,6,7,2,5];

#Orrdenar Alfabeticamente desde A-Z
sort($numeros);

#Ordenar Al Revez Z-A
rsort($meses);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recorrer Arreglo</title>
</head>
<body>

    <h1>MESES DEL AÑO.</h1>

    <ul> 
        <?php 
            foreach($meses as $mes)
            {
                echo "<li>" . $mes . "</li>";   
            }
        
        ?>
    
    </ul>

    <h1>NUMEROS</h1>

    <ul> 
        <?php 
            foreach($numeros as $num)
            {
                echo "<li>" . $num . "</li>";   
            }
        
        ?>
    
    </ul>

    
</body>
</html> 