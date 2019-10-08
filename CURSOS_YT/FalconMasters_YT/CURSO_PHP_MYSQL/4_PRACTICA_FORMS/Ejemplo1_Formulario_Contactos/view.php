<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Formulario Contactos</title>
    <link href="https://fonts.googleapis.com/css?family=Lexend+Mega&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css" type="text/css">
   
</head>
<body>

    <div class="contenedor_universal">
    
    <form action="" method="POST">
        <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
        <input type="text" id="correo" class="form-control" name="correo" placeholder="Correo:" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
        <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

      

        <?php if(!empty($errores)): ?>
            <div class="alert error">  
                <?php echo $errores; ?>
            </div>
        <?php elseif($enviado): ?>
            <div class="alert exito">
                <b>Enviado Correctamente</b>
            </div>
        <?php endif ?>

        <input type="submit" name="EnviarDatos" value="EnviarDatos" class="btn btn-Primary">
    </form>
    
    
    </div>


    
</body>
</html>  