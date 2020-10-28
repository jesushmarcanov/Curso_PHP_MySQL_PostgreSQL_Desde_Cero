<?php
    //Recorrer arrreglos con for y while

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    );

    //Recorrido del arreglo con le ciclo for
    //echo count($meses);
    // for($i = 0 ; $i < count($meses) ; $i++){
    //     echo $meses[$i] . "\n";
    // }

    //Recorrido dl arrreglo con el ciclo while
    $i = 0;
    while($i < count($meses)){
        echo $meses[$i] . "\n";
        $i++;
    }
    echo "Fin del Ciclo";