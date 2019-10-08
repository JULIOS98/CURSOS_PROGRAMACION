<?php

    file_put_contents('documento.txt', '');
    for ($i=1; $i <= 10 ; $i++) 
    { 
        file_put_contents('documento.txt',"$i \n" , FILE_APPEND);
    }


?>