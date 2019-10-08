
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIOS</title>
</head>
<body>

    <form action="recibe.php" method="POST">

        <input type="text" placeholder="Ingrese su Nombre" name="nombre">
        <br>
        
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="Hombre">

        <label for="mujer">Hombre</label>
        <input type="radio" name="sexo" value="Mujer">

        <br>

        <select name="year" id="year">
            <option value="2001"> 2001 </option>
            <option value="2002"> 2002</option>
            <option value="2003"> 2003</option>
        </select>

        <br>

        <label for="terminos"> Aceptar Terminos.</label>
        <input type="checkbox" name="terminos" id="terminos" value="true">

        <input type="submit" value="Enviar" name="Enviar">
    
    </form>

    <?php

    /*for ($i=1998; $i <2020; $i++) { 
        echo $i ."<br>";

    }*/
    ?>

    
</body>
</html>