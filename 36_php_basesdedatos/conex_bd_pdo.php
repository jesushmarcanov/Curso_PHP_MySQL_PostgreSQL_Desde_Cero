<?php
    //Conexion a Bases de Datos usando PDO
    $id = $_GET['id_usr'];
    try{
        //$dsn_my = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '1234');
        $dsn_pg = new PDO('pgsql:host=localhost;port=5432;dbname=prueba_datos', 'postgres', '0000');
        //echo "Conexión OK...";

        //Método Query
        // $st = $dsn_pg->query("SELECT * FROM usuarios where id_usr = $id");
        // foreach($st as $res){
        //     echo $res['id_usr'] . ' - ' .  $res['nombre'] . '<br />';
        // }

        //Prepared Statements
        //placeholder: valor temporal, se puede colocar tambien signo de interrogacion cerrando ?
        //Método fetch(): Devuelve un solo valor de la consulta
        //Método fetchAll(): Devuelve todos los valores de la consulta
        $statement = $dsn_pg->prepare('SELECT * FROM usuarios'); //Preparar consulta, colocar un placeholder como parámetro
        $statement->execute( array() ); // Ejecutar la consulta, se sustituye el placeholder por el valor del parámetro
        $result = $statement->fetchAll(); //Se guarda el resultado en una variable, en este caso muestra todos los registros
        foreach($result as $usuario){
            echo "<pre>";
            echo $usuario['nombre'] . '<br>';
            echo "</pre>";
        }
        
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }