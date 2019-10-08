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

    <?php require 'views/header.php'; ?>
  
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"> Titulo del Articulo</h2>
                <p class="fecha"> 1 de Enero del 2019</p>
                
                <div class="thumb">
                <a href="#">
                    <img src="<?php echo RUTA; ?>/imagenes/1.PNG" alt="">
                </a>
                </div>
                <p class="estracto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum facere ipsum odio, commodi repellendus, labore at deserunt quisquam veritatis totam corrupti nobis neque omnis, ut nostrum placeat iste praesentium deleniti?</p>
                <a href="#">Continuar Leyendo</a>
            </article>
        </div>
        <?php require 'paginacion.php'; ?>

    </div>

    <?php require 'views/footer.php' ?>


    
</body>
</html> 