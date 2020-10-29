<?php
    //Ejemplos de funciones

    //Función que Calcular el área de un triangulo
    //$b: Base del triangulo; $h: Altura del triangulo
    //NOTA: las funciones deben ser desarrolladas para una sola tarea...

    function calcular_area_triangulo($b, $h){
        $area = ($b * $h) / 2;
        return $area;
        //echo $area;
    }
    $area_triangulo = calcular_area_triangulo(10,10);

    echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados';

    