<?php
/****
  Para escribir la frase "Hola mundo" simplemente creamos un archivo .php, luego se escriben las
  etiquetas de apertura y cierre y, dentro de estas, se escribe la palabra reservada echo, seguido
  de las comillas (simples o dobles, es lo mismo), y dentro de las comillas se escribe a cadena o
  frase a mostrar. 
  .- En los archivos php puros, no es necesario colocar la etiqueta de cierre
  .- Los archivos php se pueden ejecutar desde la consola, utilizando la instruccion php, seguido del nombre del archivo junto con us extension, por ejemplo:
      c:\>php hola_mundo.php (pulsar enter)

// echo: palabra reservada que sirve para mostrar información en pantalla
# Otro tipo de comentario
/* 
Este es un comentario
de varias lineas
*/
 
    //echo "Hola Mundo";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo 'Hola Mundo de PHP'; ?></h1>
</body>
</html>