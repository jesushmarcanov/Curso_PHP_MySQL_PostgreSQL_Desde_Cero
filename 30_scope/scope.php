<?php
    //Scope (ambito de variables) en php

    /*
        Variables Globales: Se puede acceder a ellas desde cualquier parte del código
        Variables Locales: Se puede acceder solo por medio de funciones.
    */
    //En este ejemplo, se debe pasar la variable $numero como parámetro a la funcion, de lo contrario, mustra un error porque dicha variable es global
    // $numero = 7;
    // function mostrarNumero($numero){
    //     echo $numero;
    // }

    // mostrarNumero($numero);

    //En este caso, el código escrito mostrará un error, ya que se pretende acceer a la variable $número desde afuera de la función, esto se soluciona con la sentencia return, para que el valor de la variable se pueda mostrar sin problema.

    //Nota. Las funciones no pueden acceder a las variables que estan fuera de estas, estas variables se deben pasar como parámetros;  desde afuera tampoco se puede acceder a las variables que hayan sido creadas dentro de una función, para esto se debe utilizar la sentencia return.
    
    function mostrarNumero(){
        $numero = 10;
        return $numero;
    }
    echo mostrarNumero();