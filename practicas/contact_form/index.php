<?php
    $errores = '';
    $enviado = '';
    if(isset($_POST['submit'])){ //Seteamos las variables que pasaremos po el form
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $mensaje = $_POST['mensaje'];
        /*****Validacion del nombre *****/
        if(!empty($nombre)){ //Preguntamos si por lo menos el nombre viene con algo de contenido
            $nombre = trim($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        } else { //De lo contrario, se le pide al usuario que ingrese su nombre
            $errores .= 'Por favor ingresa tu nombre <br />';
        }
        /*****Validacion del correo *****/
        if(!empty($correo)){ //Preguntamos si el correo viene con algo de contenido
            $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
            if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){ //PReguntamos si el correo esta escrito correctamente
                $errores .= 'Por favor ingresa un correo válido... <br />';
            }
        } else { //De lo contrario, se le pide al usuario que ingrese su correo
            $errores .= 'Por favor ingresa un correo <br />';
        }

        /*****Validacion del mensaje *****/
        if (!empty($mensaje)){ //Preguntamos si el mensake viene con algo de contenido
            $mensaje = htmlspecialchars($mensaje);
            $mensaje = trim($mensaje);
            $mensaje = stripslashes($mensaje);
        } else { //De lo contrario, se le pide al usuario que ingrese el mensaje
            $errores .= 'Por favor ingresa el mensaje <br />';
        }

         /*****Validacion de errores *****/
        if(!$errores){ //En caso de que no haya ningun errror en el formulario, enviarlo por correo
            $enviar_a = 'jhmarcano@gmail.com';
            $asunto   = 'Correo enviado desde miPagina.com';
            $mensaje_preparado  = "De: $nombre \n";
            $mensaje_preparado .= "Correo. $correo \n";
            $mensaje_preparado = "Mensaje: " . $mensaje;
            mail($enviar_a, $asunto, $mensaje_preparado);
            $enviado = 'true';
        }
    }
    require'index.view.php';
?>