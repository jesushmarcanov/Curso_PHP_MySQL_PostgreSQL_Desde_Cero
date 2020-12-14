<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    <title>Paginación</title>
</head>
<body>
    <div class="contenedor">
        <h1>Artículos</h1>
        <section class="articulos">
            <ul>
                <!-- Traemos los articulos de la base de datos y los mostramos en pantalla -->
                <?php foreach ($articulos as $articulo): ?>
                    <li><?php echo $articulo['id_art'] . '.- ' . $articulo['articulo'] ?></li>
                <?php endforeach ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <!-- Establecemos cuando el boton "Anterior" estará deshabiliado -->
                <?php if ($pagina == 1): ?>
                    <li class="disabled">&laquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif ?>
            
                <!-- Ejecutamos el ciclo para mostrar las páginas -->
                <?php 
                    for ($i = 1; $i <= $numeroPaginas; $i++){
                        if ($pagina == $i) {
                            echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
                        } else {
                            echo "<li><a href='?pagina=$i'>$i</a></li>";
                        }
                    }
                ?>

                <!-- Establecemos cuando el boton "Siguiente" estará deshabiliado -->
                <?php if ($pagina == $numeroPaginas): ?>
                    <li class="disabled">&raquo;</li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif ?>
            </ul>    
        </section>
    </div>
</body>
</html>