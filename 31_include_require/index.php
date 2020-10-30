<?php

    function suma($num1, $num2){
        return $num1 + $num2;
    }

    include_once('index.view.php'); //Aqui estamos incluyendo un archivo, en este caso, el archivo vista en el index.
    //include_once('index.view.php'); 

    //NOTA: Se usará include cuando se trate de un archivo que contenga una vista, o que de alguna manera no afecte el desarrollo, en cambio el require se utilizará cuando la ejecución deenda de ese archivo, por ejemplo un archivo de conexion a BD.
    //Tenemos tambien las sentencias include_once y require_once, las cuales ejecutan el código una sola vez.

?>