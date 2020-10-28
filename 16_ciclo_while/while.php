<?php
 //Ciclos en PHP - Ciclo While: Se ejecutarán las instrucciones dada la condición definida en el ciclo. a diferencia de for, en el while se define una sola condición.
 /* SINTAXIS:
    while(condicion){
        instrucciones a ejecutar
    }
 */

 //While en forma ascendente
 $x = 1;
 while($x <= 10){
    echo "Hola " .$x . "\n";
    $x++;
 }
 echo "Fin del ciclo \n";


 $y = 10;
 while($y >= 1){
    echo "Hola " .$y . "\n";
    $y--;
 }
 echo "Fin del ciclo";