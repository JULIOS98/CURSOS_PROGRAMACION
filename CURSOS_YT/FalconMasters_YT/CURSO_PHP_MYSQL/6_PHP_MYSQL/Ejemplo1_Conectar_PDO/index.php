<?php

function getPDO () 
{

    try 
    {
        $pdo = new PDO('mysql:host=localhost;dbname=upv', 'root', '');
        return $pdo;
    }
    catch (PDOException $e) 
    {
        print "¡Error!: <br/>";
        return null;
    }
}

$pdo=getPDO();

 if ($pdo) 
 {

      $sql = "SELECT id, nombre FROM alumno;";
      $sql2 = "INSERT INTO alumno VALUES('','12301','Minino','ITI');";
      $stmt = $pdo->prepare($sql);
      $stmt2 = $pdo->prepare($sql2);

      $stmt->execute();
      //$stmt2->execute(); 

      //Aquí, cualquiera de los dos procedimientos explicados en b1 y b2. 
      /*while ($arr = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $arr['id'] . " ";
        echo $arr['nombre'] . "<br>";
    
     }*/

    echo "<br>";

    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($arr as $row) {
    echo $row['id'] . " ";
    echo $row['nombre'] . "<br>";

    }


} else {
      echo "Hubo un problema con la conexión";
  }



?>