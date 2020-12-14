<?php
    /*CONEXION CON MYSQL*/
    $dsn = 'mysql:dbname=paginacion;host:127.0.0.1';
    $user = 'root';
    $password = '1234';
    try{

        $pdo = new PDO( $dsn,
                        $user,
                        $password
                        );
        //echo 'Conexión Correcta';

    }catch( PDOException $e ){
        echo 'Error al conectarnos: '.$e->getMessage();
    }