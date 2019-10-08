<?php

session_start();

$arreglo = ['Gel','Crema', 'Shampoo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Productos</title>
</head>
<body>

    <h1>Lista de Productos</h1> 

    <br>

    <h2><?php echo $_SESSION['nombre'] ?></h2>

    <?php
    foreach ($arreglo as $productos ) 
    {
     echo $productos . "<br>";   
    }
    ?>
    
</body>
</html>