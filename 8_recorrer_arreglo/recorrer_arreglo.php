<?php
//Recorrer arreglos 
//Se utiliza el ciclo foreach() para recorrer cada uno de los
//elementos que tiene el arreglo, se define una variable de tipo
//indice para oder acceder a cada una de las posiciones.
$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$jesus = array('telefono' => 4148055174, 'edad' => 40, 'pais' => 'Venezuela');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses del Año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php
            #Con foreach podemos recorrer arreglos de una manera muy facil
            // foreach($meses as $mes){
            //     echo '<li>'. $mes . '</li>';
            // }

            #El ciclo foreach tambien nos permite recorrer arreglo asociativos
            foreach($jesus as $dato => $valores){
                echo "\n" . $dato . ":" . $valores . "\n";
            }
        ?>
    </ul>
</body>
</html>