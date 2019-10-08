<?php

    $errores = ''; 

    if(isset($_POST['Enviar']))
    {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
    

    if(!empty($nombre))
    {
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre = stripslashes($nombre);

        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);

        echo "Su Nombre es: " . $nombre . "<br>";
    }
    else
    {
        $errores = 'Porfavor agrega un nombre <br>';
    }


    if(!empty($correo))
    {
     
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_SANITIZE_EMAIL))
        {
            $errores = 'Ingrese un Correo Valido <br>' ;
        }else
        {
            echo "Tu correo es: $correo";
        }
    }
    else
    {
        $errores = 'Porfavor agrega un Correo <br>';
    }

}
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEX</title>
</head>
<body>

    <form action="" method="POST">

        <input type="text" name="nombre" placeholder="Ingresar Nombre">

        <br>

        <input type="text" name="correo" placeholder="Ingresar Correo">
        <br>
        <input type="submit" name="Enviar" value="Enviar">

        <?php if(!empty($errores)): ?>
        <div class="error">  <?php echo $errores; ?></div>
        <?php endif; ?>
    </form>


    
</body>
</html>