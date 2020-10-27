<?php
//Shorhand if
//isset() Funcion que sirve para setear una variable, saber si una variable tiene un valor o no
//Este atajo funciona de la siguiente manera: dentr de los paréntesis debe ir una condicion, si esta se cumple, se ejecuta la instruccion que eta despues del ?, de lo contrario se ejecutará la instrucción que está después de los :.
$edad = 18;
$edad = (isset($edad)) ? $edad : 'El usuario no indicó si edad' ;

echo 'Edad: ' . $edad;


