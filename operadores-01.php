<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operaciones 1</title>
</head>
<body>
    <h1>operaciones artimetricas</h1>
    <?php
    $a=2;
    $b=10;
    $suma=$a+$b;
    $resta=$a-$b;
    $multiplicaion=$a*$b;
    $division=$a/$b;
    ?>
    <p>resultados de las operaciones</p>
    <p>la suma es:
        <?php
        echo $suma
        ?>
    </p>
    <p>la resta es:
        <?php
        echo $resta
        ?>
    </p>
    <p>la multiplicacion es:
        <?php 
        echo $multiplicaion
        ?>
    </p>
    <p>la division es:
        <?php
        echo $division
        ?>
    </p>
</body>
</html>