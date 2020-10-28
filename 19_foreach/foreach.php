<?php
    //Ciclo foreach: este cilo se ejecutará tantas veces como elementos tenga el arreglo, es ideal para trabajar con sentencias de bases de datos...

    //Arreglo Asociativo: Es aquel arreglo donde el indice se asocia a un valor, este puede ser de cualqueir tipo. ejemplo: $arreglo = array('indice1' => valor1, 'indice2' => 'valor2', 'indice3' => valor3 )

    $meses = array(
        'Enero', 'Febrero', 'Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    );

    $jesus = array('telefono' => 4148055174, 'edad' => 40, 'pais' => 'Venezuela');


    // echo "Meses del año '\n";
    // foreach($meses as $mes){
    //     echo $mes . "\n";
    // }

    foreach($jesus as $dato => $valor){
        echo "\n" . $dato . ': ' . $valor . "\n";
        
    }
?>