<?php
//Ciclos Break y Continue
/*
Break: Nos sirve para cortar la ejecucion de un ciclo
Continue: 

*/

$paises = array('Mexico', 'España', 'Colombia', 'Peru',
                'Argentina', 'Venezuela', 'Guatemala'
);

// foreach($paises as $pais){
//     if ($pais == 'España'){
//         break;
//     }
//     echo $pais . "\n";
    
// }

foreach($paises as $pais){
    if ($pais == 'España'){
        continue;
    }
    echo $pais . "\n";
}