<?php
    //Sentencia Switch: Es una forma mas orddenada de crear sentencias condicionales, trabaja de forma similar al if.
    /* Sintaxis
        switch(<nombre_variable>){
        case '':
            //Instrucciones
        break;
    }
    
    */

    $mes = 'Enero';
    switch($mes){
        case 'Diciembre';
            echo 'Feliz Navidad';
        break;
        case 'Enero';
            echo 'Feliz año Nuevo';
        break;

        default:
            echo 'En este mes no se celebra nada';
        break;
    }

    //Misma funcion pero hecha con if
    // if ($mes == 'Diciembre'){
    //     echo 'Feliz Navidad';
    // }else if ($mes == 'Enero'){
    //     echo 'Feliz año Nuevo';
    // } else {
    //     echo 'En este mes no se celebra nada';
    // }

    