<?php
    //Funciones para cadenas de texto

    // htmlspecialchars(): Convierte caracteres especiales en entidades html. Especial para evitar que el usuario pueda inyectar codigo malicioso.

    //$texto = '< > & ""';
    //echo htmlspecialchars($texto);

    // trim(): Elimina los espacios en blanco que estén al inicio y al final de una cadena de texto

    //$texto = ' Hola Espacios ';
    //echo trim($texto);

    // strlen(): Nos permite calcular el tamaño de un string o cadena.

    //$texto = 'Numero ';
    //echo strlen($texto);

    // substr(): Nos permite retornar un pedazo o un fragmento de una cadena de texto. A esta funcion se le deben pasar 3 parámetros: 
        // 1.- La variable que contiene la cadena.
        // 2.- La posicion desde donde comensará el fragmento
        // 3.- Cuantos caracteres debe retornar

    $texto = 'Hola Jesus';
    //echo substr($texto, 0, 4);

    // strtoupper(): nos convierte la cadena de texto en letras mayusculas

    //echo strtoupper($texto);

    // strtolower(): nos convierte la cadena de texto en letras minusculas

    //echo strtolower($texto);

    // strpos(): nos permite conocer en que posicion se encuentra una letra. Esta función recibe 2 parámetros:
        // 1.- la variable con la cadena a evaluar
        // 2.- La letra que quieres ubicar.
    
echo strpos($texto, 's');