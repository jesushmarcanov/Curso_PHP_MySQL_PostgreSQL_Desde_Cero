<?php
    session_start();
    $_SESSION['nombre'] = 'Jesús Marcano';
    $_SESSION['nombre'] = 'Juan David';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h1>Pagina de inicio</h1>
    <p></p>
    <a href="pagina2.php">Ir  a página #2</a>

</body>
</html>