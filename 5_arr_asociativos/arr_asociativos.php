<?php
    $datos = array('telefono' => '9654654', 
                   'edad' => 25,
                   'apellido' => 'Marcano', 
                   'pais' => 'Venezuela');

   
    $datos['telefono'] = '1111111';
    echo $datos['telefono'] . '<br />';               
    echo $datos['edad'] . '<br />';
    echo $datos['apellido'] . '<br />';
    echo $datos['pais'] . '<br />';