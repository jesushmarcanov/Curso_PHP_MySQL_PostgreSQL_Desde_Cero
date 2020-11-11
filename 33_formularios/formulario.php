<?php

    $errores = '';
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
         if(!empty($nombre)){
            //  $nombre = trim($nombre);
            //  $nombre = htmlspecialchars($nombre);
            //  $nombre = stripslashes($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
             echo "Tu nombre es: $nombre <br />";
         } else {
             $errores .= 'Por avor agrega un nombre <br />';
         }
         if(!empty($correo)){
            $correo =  filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                $errores .= 'Por favor ingresa un correo válido <br />';
            } else {
                echo "Tu correo es: $correo";
            }
           
         } else {
            $errores .= 'Por avor agrega un correo';
         }   
    }

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .errores {color: red;}
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text" name="nombre" placeholder="Nombre" id="">
        <input type="text" name="correo" placeholder="Correo" id="">
        <?php if(!empty($errores)): ?>
            <!--CODIGO HTML A EJECUTAR-->
            <div class="errores"><?php echo $errores; ?></div>
        <?php endif; ?>    


        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>