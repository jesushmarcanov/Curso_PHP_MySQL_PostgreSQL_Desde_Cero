<?php
//Funciones para arreglos

//extract(): extrae los elementos de un arreglo asociativo como si fuesen variables.

// $amigo = array('telefono' => 6545647, 
//                    'edad' => 20,
//                    'pais' => 'Mexico' 
// );

// extract($amigo);

// echo $telefono;

// array_pop(): Nos permite extraer el ultimo elemento de un arreglo. podemos eliminarlo o guardarlo en una variable

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

//$ultimo_mes = array_pop($meses);
// foreach ($meses as $mes){
//     echo $mes . "\n";
// }

//echo $ultimo_mes;

// join(): Recibe el arreglo y lo separa dependiendo del caracter usado. Esta funcion recibe 2 parametros:
//     1.- El caracter usado para separar los elementos del arreglo
//     2.- la variable que contiene el arreglo

//echo join( ' - ', $meses);

//count(): Nos permite conocer cuantos elementos tiene el arreglo.

//echo count($meses);

//sort(): Funcion que nos ordena e arreglo en orden alfabetico ascendente.

// sort($meses);
// echo join(' - ', $meses) . "\n";

//rsort(): Funcion que nos ordena e arreglo en orden alfabetico descendente.

// rsort($meses);
// echo join(' - ', $meses) . "\n";

// array_reverse(): Funcion que ordena el arreglo en forma inversa, es decir, desde el ultimo al primero.

$mes = array_reverse($meses);
echo join(' - ', $mes);