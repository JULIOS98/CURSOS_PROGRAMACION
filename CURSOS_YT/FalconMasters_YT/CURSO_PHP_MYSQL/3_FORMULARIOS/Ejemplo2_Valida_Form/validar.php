<?php

    //Validar Para un Form 
    /*if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        echo "Se enviaron por GET";
    }
    else
    {
        echo "Se enviaron por POST";

    }*/

    //Validar para varios Formularios
    if(isset($_GET['Enviar']))
    {
        echo "Se enviaron los datos correctamente";
    }


?>