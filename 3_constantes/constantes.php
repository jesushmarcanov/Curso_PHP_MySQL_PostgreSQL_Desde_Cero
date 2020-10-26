<?php
/*
    Constantes: Nos permite asignarle un valor y utilizarla cuantas veces sea necesario, pero a diferencia de una variable, este valor no se puede cambiar nunca, es decir, va a ser el mismo valor a lo largo de todo el desarrollo.

    Las constantes se declaran con la funcion define(<nombre>','<valor>', y el nombre de estas debe ir prefreiblemente en letras mayusculas)

    scope: ámbito de variables
*/

// $nombre = "Jesús";
// $nombre = "Hilario";
// echo $nombre;

define('PI', 3.14);
define('NOMBRE', 'Jesús');
echo PI;
echo NOMBRE;