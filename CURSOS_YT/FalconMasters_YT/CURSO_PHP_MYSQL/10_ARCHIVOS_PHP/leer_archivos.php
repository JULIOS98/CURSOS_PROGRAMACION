<?php

   //Validar si un archivo en txt existe
   if(file_exists('documento.txt'))
    {
        echo "El archivo existe";
        echo '<br>';
        $res = file_get_contents('documento.txt');
        echo $res;

        $palabra = file_put_contents('documento.txt', "Como estas corazon? \n" , FILE_APPEND);
    }
   else
   {
       echo "El archivo no existe";
   }




?>