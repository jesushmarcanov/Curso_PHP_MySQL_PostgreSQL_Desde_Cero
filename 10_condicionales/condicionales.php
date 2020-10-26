<?php
//Estructuras o ciclos condicionales
//if(condicion){
    //instrucciones
//}

/*
    Operadores de comparación
    == Igualdad
    < Menor que
    > Mayor que
    <= Menor o igual que
    >= Mayor o igual que
    != Diferente de
    ! Negación

    Operadores lógicos
    && - Evalua que se cumpla una de las dos condiciones
    ||, OR - Evalua que se cumpla al menos una condicion
    xor - Evalua que se cumpla una y solo una condicion 

*/

$edad = 18;
$nombre = 'Jesús';
if($edad >= 18 && $nombre == 'Jesús'){
    echo '<h1> Bienvenido </h1>';
}

if ($edad < 18 || $nombre != 'Jesús'){
    echo '<h1> Eres menor de edad </h1>';
}

?>