<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="recibe.php" method="get">
        <input type="text" placeholder="Nombre:" name="nombre"><br>
        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" value="hombre" id="hombre">
        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" value="mujer" id="mujer"><br>
        <select name="year" id="year">
            <option value="2000">2000</option>
            <option value="2000">2001</option>
            <option value="2000">2002</option>
        </select><br>
        <label for="terminos">Aceptas los Términos ?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>