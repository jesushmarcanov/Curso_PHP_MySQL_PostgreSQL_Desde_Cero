<?php
//Retornar valores en funciones: se hace con la sentencia return

// function sumar($num1, $num2){
//     $resultado = $num1 + $num2;
//     return $resultado; // REgresar o retornar el valor generado por a funcion
// }

// $resultado = sumar(10,15); //Aqui guardamos el valor que fue retornado por la funcion

/*
    NOTAS: .- Con return se puede retornar solo un valor, nunca más de uno
           .- Despues de la sentencia return no se debe escribir código ya que este no se ejecutará, el return corta la ejecución de la función.
*/

function saludo($nombre){
    echo 'Hola, ' . $nombre;
}

echo saludo('Jesús') . "\n";
echo saludo('Juan') . "\n";
echo saludo('José') . "\n";

