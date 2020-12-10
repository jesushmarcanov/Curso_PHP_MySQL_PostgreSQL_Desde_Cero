<?php
    //CONEXION A BASES DE DATOS MYSQL (MYSQL_CONNECT YA NO SE USA, ESTA ELIMINADA DE PHP7)
    // $conexion = mysql_connect('localhost', 'root', '1234') or die('No se pudo conectar a l abase de datos...');
    // mysql_select_db('prueba_consola', $conexion);
    // $resultados = mysql_query('SELECT * FROM usuarios');
    // $fila = mysql_fetch_object($resultados);
    // echo $fila->nombre;

    //CONEXION A BASES DE DATOS MYSQL CON MySQLi (procedimental)
    // $conexion = mysqli_connect('localhost', 'root', '1234', 'prueba_consola');
    // if(mysqli_connect_errno($conexion)){
    //     echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    // }
    // $resultados = mysqli_query($conexion, 'SELECT * FROM usuarios');
    //mostramos los datos como un objeto
    // while($fila = mysqli_fetch_object($resultados)){
    //     echo $fila->nombre;
    //     echo "<br>";
    // }
    //Mostramos los datos como un arreglo
    // while($fila = mysqli_fetch_assoc($resultados)){
    //     echo $fila['nombre'];
    //     echo "<br>";
    // }

    //CONEXION A BASES DE DATOS CON MySQLi (Orientado a Objetos)
    $conexion = new mysqli("localhost", "root", "1234", "prueba_consola");
    if($conexion->connect_errno){
        echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
    }

    $resultados = $conexion->query('SELECT * FROM usuarios');
    while($fila = $resultados->fetch_assoc()) {
        //echo $fila->nombre;
        echo $fila['nombre'];
        echo "<br>";
    }
    