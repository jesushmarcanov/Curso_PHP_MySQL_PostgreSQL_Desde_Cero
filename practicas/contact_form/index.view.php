<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Práctica #1 - Formularo de Contacto</title>
</head>
<body>
    <div class="wrap">
    <h1>Formulario de Contacto</h1> 
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Nombre:" id="" value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>">
            <input type="text" class="form-control" name="correo" placeholder="Correo:" id="" value="<?php if(!$enviado && isset($correo)) echo $correo ?>">
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>
             <?php if (!empty($errores)): ?> <!-- Emitimos mensaje de error en caso de que se envíen campos vacíos -->
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
            <?php elseif($enviado): ?> <!-- Emitimos mensaje de aprobacion -->
                <div class="alert success">
                    <p>Formulario Enviado Correctamente...</p>
                </div>    
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Mensaje">
        </form>
    </div>
</body>
</html>