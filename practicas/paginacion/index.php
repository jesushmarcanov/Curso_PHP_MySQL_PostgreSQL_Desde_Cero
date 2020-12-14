<?php
    require_once 'bd.php'; //Conexion con la BD

    /*Definir las variables que contendran el número de páginas*/
    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1; 
    $postPorPagina = 5;
    $inicio = ($pagina > 1) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

    /*Sentencias de SQL*/
    $articulos = $pdo->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulo LIMIT $inicio, $postPorPagina");
    $articulos->execute();
    $articulos = $articulos->fetchAll();
    if(!$articulos){
        header('Location: index.php');
    }

    $totalArticulos = $pdo->query('SELECT FOUND_ROWS() as total');
    $totalArticulos = $totalArticulos->fetch()['total'];
    $numeroPaginas = ceil($totalArticulos / $postPorPagina);
    

    require 'index.view.php';