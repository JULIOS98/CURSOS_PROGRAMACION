<?php

try
{
    //Codigo
    $conexion = new PDO('mysql:host = localhost; dbname = upv', 'root', '');
    echo "Conexion OK <br>";

    $resultado = $conexion->query('SELECT nombre FROM alumno');


 
        foreach((array) $resultado as $value)
        {
            print_r($value);
        }

    
   
     
      
  
     


}
catch(PDOException $e)
{   
    //Mostrar Error
    echo "Error: " . $e -> getMessage();
}

?>