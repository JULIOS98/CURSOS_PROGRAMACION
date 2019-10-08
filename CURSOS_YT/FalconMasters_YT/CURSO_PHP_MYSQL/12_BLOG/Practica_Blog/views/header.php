<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
    <script src="https://kit.fontawesome.com/0c0b095874.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <title>Blog</title>
</head>
<body>

    <header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p> <a href="#">Mi Primer Blog</a> </p>
            </div>

            <div class="derecha">
                <form name="busqueda" class="buscar" action="<?php echo RUTA; ?> /buscar.php " method="GET">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icono fa fa-search" ></button>
                </form>

                <nav class="menu">
                    <ul>
                        <li> <a href="#"> Tw <i class="fa fa-twitter"> </i> </a>  </li>
                        <li> <a href="#">  Fb <i class="fa fa-facebook"> </i> </a> </li>
                        <li> <a href="#"> Contacto <i class="fa fa-envelope"> </i> </a> </li>                                    
                    </ul>
                </nav>
            
            </div>

        </div>
    </header>

    
    </div>
    
</body>
</html> 