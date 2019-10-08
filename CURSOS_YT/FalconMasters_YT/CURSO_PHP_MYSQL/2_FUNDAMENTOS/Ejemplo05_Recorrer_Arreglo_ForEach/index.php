<?php
$meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto', 'Septiembre','Noviembre','Diciembre'];

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
    
</body>
</html>