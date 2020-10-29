<?php

//Funcion var_dump():  Esta funcion nos sirve para mostrar el contenido y tipo de dato de una variable en pantalla. En una cadena de texto (string), un caracter especial vale por dos caracteres, por ejemplo, el texto Jesús, tiene 6 caracteres, la vocal acentuada vale por dos. 
$nombre = 'Jesús';
$numero = 10;
$numero2 = '5';
$arreglo = array('Carlos','Cesar','Alejandro');
$arreglo_asociativo = array('nombre' => 'Carlos', 'edad' => 20);
$booleano = false;

echo "<pre>";
var_dump($booleano);
echo "</pre>";