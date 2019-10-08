<?php
    
    
    try
    {
        $conexion = new PDO('mysql:host=localhost;dbname=paginacion_practica', 'root', '');
    }
    catch(PDOException $e)
    {
        echo "ERROR: " . $e->getMessage();
        die();
    }


    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;    
    $postporpagina = 5;

    $inicio = ($pagina > 1) ? ($pagina * $postporpagina - $postporpagina) : 0;
    
    $articulos = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio,$postporpagina");
    $articulos->execute();
    $articulos = $articulos->fetchAll();

    //print_r($articulos) . "<br>";


    if(!$articulos)
    {
        header('Location: index.php');
    }

    $totalArticulos = $conexion->query('SELECT FOUND_ROWS() AS total');
    $totalArticulos = $totalArticulos->fetch()['total'];

   $numPaginas = ceil($totalArticulos / $postporpagina);

   //  echo $numPaginas;




    require 'index.view.php';

?>