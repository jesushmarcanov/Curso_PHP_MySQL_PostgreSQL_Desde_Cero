<?php
   //Ordenar arreglos 
   
   $meses = array(
       'Enero', 'Febrero', 'Marzo', 'Abril',
       'Mayo', 'Junio', 'Julio', 'Agosto',
       'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
   );

   $numeros = array(1, 2, 4, 9, 6, 8, 0, 11, 7);
  // sort($numeros); Ordenar elementos en orden ascendente
   rsort($numeros); //Ordenar elementos en orden descendente
?>

   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Meses del Año</title>
   </head>
   <body>
       <h1>Meses del año</h1>
       <ul>
           <?php
               foreach($numeros as $num){
                   echo '<li>'. $num . '</li>';
               }
           ?>
       </ul>
   </body>
   </html> 
