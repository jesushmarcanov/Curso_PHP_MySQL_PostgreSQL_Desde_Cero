<?php
    /*
    //Sentencia else: Consiste en hacer cumplir una condición secundaria a la primera sentencia (condicion primaria) que se está ejecutando en el ciclo if, esta es su sintaxis
    if(condicion){ (Condicion primaria)
        instrucciones
    }else{ //(Condicion secundaria)
        instrucciones
    }
    Nota: se pueden poner un if dentro de otro, y dentro de otro, y asi sucecivamente, a estos se les llama if anidados. Ejm:
        if(condicion) {
            if(condicion){
                if(condicion){
                    instrucciones
                }
            }
        }
        else if -> sentencia que se usa cuando hay mas de dos condiciones a evaluar
    */
    // $edad = 16;

    // if ($edad >= 18){
    //     echo "Bienvenido";
    // } else {
    //     echo "no eres mayor de edad";
    // }
    // $mes = 'Enero';
    // if ($mes == 'Diciembre'){
    //     echo "Feliz Navidad";
    // } else if ($mes == 'Enero'){
    //     echo "Feliz Año Nuevo";        
    //   } else if ($mes == 'Junio'){
    //       echo "Feliz Julio";
    //   }else {
    //       echo "El mes que pusiste no tiene celebración";
    //   }

    $mes = 'Enero';
    $verdadero = false;

    if (!$verdadero){
        echo "Verdadero";
    } else {
        echo "Falso";
    }
?>