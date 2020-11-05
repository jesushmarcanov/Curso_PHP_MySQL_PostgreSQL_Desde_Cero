<?php
    //var_dump($_POST);
    //Esto se puede hacer tambien con print_r();

    //Ejemplo Sencillo
    //Aquí pregunta si no hay $_POST, es decir, si el arreglo $_POST está vacío, redirige el proceso al formulario.
    if(!$_POST){
        header('Location: localhost:8000');
    }
        
        $nombre = $_POST["nombre"];
        $sexo = $_POST["sexo"];
        $year = $_POST["year"];
        $terminos = $_POST["terminos"];

        echo 'Hola, ' . $nombre . ' eres ' .$sexo;

/*
    POST nunca enviará los valores por la URL, los enviará por detrás del navegador por así decirlo; con este método se peuden enviar archivos, y se utilizará para mostrar información importante que el usuario no pueda acceder.
    GET no envía arhivos, los valores solo los envia por la URL. Este método se utiliza ms que todo para tomar los valores o parámetros de la URL y mostrará información dependiendo de los parámetros, por ejemplo.
*/

    