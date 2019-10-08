<?php

session_start();

if($_SESSION)
{
    $nombre = $_SESSION['nombre'];
    echo "<h1> Hola, $nombre </h1>";
}
else
{
    echo "No has iniciado Sesion";   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAGINA 2</title>
</head>
<body>




<a href="productos.php"> Ver Productos</a>
<a href="cerrar_sesion.php">Cerrar Sesion</a>


</body>
</html>