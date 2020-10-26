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
            foreach($meses as $mes){
                echo '<li>'. $mes . '</li>';
            }
        ?>
    </ul>
</body>
</html>