<?php
/*
    Arreglos: es un tipo de dato o variable en el cual se pueden almacenar múltiples valores. Los arreglos se manejan por índices, que señalan la posicion de cada valor, este índice comienza desde el valor cero(0).
    Tipos de Arreglos:
    .- Indexados
    .- Asociativos
    .- Multidimensionales

    Se puede guardar cualquier topo de dato en un solo arreglo
 */

 $diasSemana = array('Lunes', 
                     'Martes', 
                     'Miercoles', 
                     'Jueves', 
                     'Viernes', 
                     'Sabado', 
                     'Domingo');
$semana = ['Lunes', 
           'Martes', 
           'Miercoles', 
           'Jueves', 
           'Viernes', 
           'Sabado', 
           'Domingo'];

$arreglo_variado = array('Cadena de texto',
                         1,
                         array('asd',123),
                         true);

echo $diasSemana[0] . '<br />';
echo $diasSemana[1] . '<br />';
echo $diasSemana[2] . '<br />';
echo $diasSemana[3] . '<br />';
echo $diasSemana[4] . '<br />';
echo $diasSemana[5] . '<br />';
echo $diasSemana[6] . '<br />';