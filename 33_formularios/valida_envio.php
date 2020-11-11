<?php
    //Podemos comprobar si los datos ha sido enviados por POST o GET
    // if($_SERVER['REQUEST_METHOD'] == 'GET'){
    //     echo "Se enviaron por GET";
    // } else {
    //     echo "Se enviaron por POST";
    // }

    #También podemos comprobar que el formulario ha enviado los datos

    if (isset($_POST['submit'])){
        echo "Se han enviado los datos correctamente...";
        print_r($_POST['submit']);
    }
?>