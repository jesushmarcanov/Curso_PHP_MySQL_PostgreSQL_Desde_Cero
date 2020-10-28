<?php
    //Ciclos en PHP - For: Ciclo utilizado para iterar tantas veces sea definida en la condicion. Su sintaxis es la siguiente:
    /*
        SINTAXIS:
        for(<var_inicio>=<valor> ; <condicion> ; <incremento_var_inicio>){
            //instrucciones
        }
    */

    for($i = 1 ; $i <= 10 ; $i++){ //mostar los numeros de forma ascendente
        echo "Hola " . $i . "\n";
        echo "\n";
    }

    for($i = 10 ; $i >= 1 ; $i--){ //mostar los numeros de forma descendente
        echo "Hola " . $i . "\n";
        echo "\n";
    }

    for($i = 0 ; $i <= 50 ; $i = $i + 5){ //mostar los numeros de 5 en 5
        echo "Hola " . $i . "\n";
        echo "\n";
    }
?>