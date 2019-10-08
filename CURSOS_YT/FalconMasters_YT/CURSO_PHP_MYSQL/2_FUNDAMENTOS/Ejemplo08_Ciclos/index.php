<?php
#Clclo FOR

//Ciclo normal
echo "Ciclo Normal FOR." . "<br>";
for ($i=1; $i <= 10 ; $i++) 
{ 
    echo "HOLA " . $i . "<br>";

}

//ciclo Inverso
echo "Ciclo Inverso FOR." . "<br>";
for ($i=10; $i >=1; $i--) 
{ 
    echo $i . "<br>";
}

echo "<br>";

#Ciclo While

//Ciclo Normal
echo "Ciclo Normal While." . "<br>";
$x = 1;
while( $x <= 10)
{
    echo $x . "<br>";

    $x++;

}

echo "<br>";

//Ciclo Inverso
echo "Ciclo Inverso While." . "<br>";
$x = 10;
while( $x >= 1)
{
    echo $x . "<br>";

    $x--;

}

echo "<br>";

#DO WHILE
echo "CICLO: DO WHILE" . "<br>";

do
{
    echo $i . "<br>";
    $i++;

}while($i <= 10);

echo "<br>";


echo "CICLO INVERSO: DO WHILE" . "<br>";

$i = 10;

do
{
    echo $i . "<br>";
    $i--;

}while($i >= 1);

#FOR EACH
$meses = ['Enero', 'Febrero' , 'Marzo' , 'Abril' ,'Mayo' , 'Junio' , 'Julio' , 'Agosto' , 'Septiembre' , 'Octubre' , 'Noviembre' , 'Diciembre' ];
$julio = ['telefono' => 8341024904, 'edad' => 20, 'pais' => 'Mexico'];

echo "<br>";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Each</title>
</head>
<body>
 
    <h1>MESES</h1>

    <ul>
        <?php
        foreach ($meses as $mes) 
        {
              echo '<li>' . $mes .  '</li>';
        }

        ?>       
    
    
    </ul>

    <br>

    <h1>DATOS JULIO.</h1>

    <ul>
    
        <?php
        #RECORRER ARREGLOS ASOCIATIVOS
        foreach ($julio as $nom => $valor) 
        {
            echo '<li>' . $nom . ' : ' .$valor . '</li>';
        }

        ?>
    
    
    </ul>
    
</body>
</html>