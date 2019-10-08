<?php


  header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
  header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado

  $errores = '';
  $enviado = ''; 

if(isset($_POST['EnviarDatos']))
{
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
      
    if(!empty($nombre))
    {
        $nombre = trim($nombre);
        //$nombre = htmlspecialchars($nombre);
        //$nombre = stripslashes($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        
      
    }
    else
    {
      $errores .= 'Porfavor agrega un nombre <br>';
    }
    
    if(!empty($correo))
    {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
      
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL))
        {
          $errores = 'Ingrese un Correo Valido <br>' ;
        }
    }
    else
    {
      $errores .= 'Porfavor agrega un Correo <br>';
    }

    if(!empty($mensaje))
    {
        $mensaje = trim($mensaje);
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
        if(!filter_var($mensaje, FILTER_SANITIZE_STRING))
        {
          $errores = 'Ingrese un Mensaje Valido <br>' ;
        }
    }
    else
    {
      $errores .= 'Porfavor agrega un Mensaje <br>';
    }
    
    if(!$errores)
    {
      $enviar_a = '1630368@upv.edu.mx';
      $asunto = 'Correo Enviado desde Julio.com';
      
      $mensaje_preparado = "De: $nombre \n ";
      $mensaje_preparado .= "Correo: $correo \n";
      $mensaje_preparado .= "Mensaje: " .$mensaje;   
    
      //mail($enviar_a,$asunto,$mensaje_preparado);
      $enviado = 'true';
    }
    
}



require 'view.php';

?>


