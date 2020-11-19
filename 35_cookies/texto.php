<?php
    if (isset($_COOKIE['font-size'])){
        $tamanho = htmlspecialchars($_COOKIE['font-size']);
    } else {
        $tamanho = '15px';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: <?php echo $tamanho; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem totam qui delectus harum magnam doloribus iste! Odio atque rerum dolore nisi assumenda voluptas velit, cum quidem, nesciunt aliquam earum sunt.</p>
</body>
</html>