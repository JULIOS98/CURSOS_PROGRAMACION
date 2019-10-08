<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo.css">
    <title>PAGINACIOM</title>
</head>
<body>

    <div class="contenedor">
        <h1>Articulos</h1>
        <section class="articulos">
            <ul>
                <?php  foreach ($articulos as $key): ?>
                    <li> <?php  echo $key['id'] . '.- ' . $key['articulo']  ?></li>
                <?php endforeach ?>
            </ul>    
        </section>

        <section class="paginacion">
            <ul>

            <?php if($pagina == 1):  ?>
                <li class="disabled">&laquo;</li>
            <?php  else: ?>
                <li> <a href="?pagina == <?php echo $pagina - 1 ?>"></a>&laquo;</li>
            <?php   endif   ?>

            <?php
            
            for ($i=1; $i <= $numPaginas; $i++) { 
                if ($pagina == $i) 
                {
                    echo " <li class='active'><a href='?pagina=$i'>$i</a></li>";
                }
                else
                {
                    echo " <li><a href='?pagina=$i'>$i</a></li>";
                }
            }

            ?>

            <?php if($pagina == $numPaginas):  ?>
                <li class="disabled">&raquo;</li>
            <?php  else: ?>
                <li> <a href="?pagina == <?php echo $pagina + 1 ?>"></a>&raquo;</li>
            <?php   endif;    ?>

            </ul>
        </section>
    </div>
    
</body>
</html>