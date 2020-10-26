<?php
    /*
        Variable:  Contenedor para información que se quiera guardar para usarla cuantas veces sea necesario, a lo largo de todo el desarrollo.
        Las variables deben cumplir cierto tipo de reglas, como por ejemplo, deben tener un nombre técnico o acorde al tipo de dato asociado; su nombre debe ser preferiblemente todo en minúsculas, a menos que sean dos palabras, entonces se usará la notación de camello (primera palabra comienza con minúscula y la segunca comienza con mayúscula). Todas las variables comienzan en php con el signo de dolar ($)
        En PHP no necesariamente se debe hacer una declaración de la variable, simplemente con asignarle el valor dirrectamente, el lenguaje interpreta el tipo de dato asociado.

        Otros tipos de datos
        #Array: Arreglo
        #Object: objeto
        #Class: Clase
        #Null: Cuando a una variable no se le a asignado nungun valor

    */
    $nombre = "Jesús"; //Cadena de texto
    $numero = 7; //Numero entero
    $numeroDecimal = 7.7; //Numero decimal o double
    $boolean = false; //Booleano (verdadero o falso)
    $edad; //Esta variable toma por defecto e valor null

    //echo $nombre;
   // echo $numero;
//Diferencias entre comillas simples y dobles
/*
   Las comillas dobles nos sirven para mostrar valores de variables
   Las comillas sencillas nos mustran solo su contenido, como una cadena.
    Es rrecomendable siempre utilizar las comillas simples, y para pasar o mostrar el valor de la variable, se debe separar la cadena en comillas y concatenar con el punto (.) la variable a mostrar.

    gettype(): Muestra el tipo de dato de una variable
*/
    //echo "Hola, Mundo";
    //echo 'Hola, $nombre';
    //echo "Hola, $nombre";
    //echo 'Hola, '. $nombre;
    echo gettype($numeroDecimal);

