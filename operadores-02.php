<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operaciones 2</title>
</head>
<body>
    <h1>concatenacion de cadenas</h1>
    <p>
        <?php
        $nombre="Jose";
        $espacio=" ";
        $apellido="Chavez";

        $concatenacion=$nombre.$espacio.$apellido;
        ?>
        <p>nombre completo: <?php echo $concatenacion;?></p>
    </p>
</body>
</html>