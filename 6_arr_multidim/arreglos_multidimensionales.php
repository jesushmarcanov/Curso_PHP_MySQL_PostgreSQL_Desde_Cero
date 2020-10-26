<?php

//Arreglos multidimensionales
// Es un tipo de arreglo que nos permite guardar uno o mas arreglos dentro de otro

$amigos = array(
    array('Alejandro', 20), 
    array('Cesar', 21),
    array('Manuel', 18)
);

echo $amigos[0][0] . '<br />';
echo $amigos[1][0] . '<br />';
echo $amigos[2][0] . '<br />';