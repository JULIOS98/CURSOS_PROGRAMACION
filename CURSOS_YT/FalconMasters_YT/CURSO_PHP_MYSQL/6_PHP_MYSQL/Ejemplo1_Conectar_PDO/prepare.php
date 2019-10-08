<?php

       //$id = $_GET['id'];

try
{
    //Codigo
    
    $conexion = new PDO('mysql:host = localhost; dbname = upv', 'root', '');
    echo "Conexion OK <br>";

    //Prepare Statetments

    $statement = $conexion->prepare('SELECT id FROM alumno WHERE id = :id');
    $statement->execute(
            array(':id' => $id)
            );
    $res = $statement->fetch(); 
    
    print_r($res);
  
     


}
catch(PDOException $e)
{   
    //Mostrar Error
    echo "Error: " . $e -> getMessage();
}

?>