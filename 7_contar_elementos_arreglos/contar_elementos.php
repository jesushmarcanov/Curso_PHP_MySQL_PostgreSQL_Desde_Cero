<?php
//CONTAR ELEMENTOS EN ARREGLOS
/*
    COUNT(): funcion que cuenta el numero de elementos o valores de un arreglo

*/

$meses = array(
	'Enero', 'Febrero', 'Marzo', 'Abril',
	'Mayo', 'Junio', 'Julio', 'Agosto',
	'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

//echo count($meses);
$ultimoMes = count($meses) - 1;
$meses[$ultimoMes];