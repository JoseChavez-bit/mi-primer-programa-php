<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-2</title>
</head>
<body>
    <h1>Calcular el precio mediante una constante de porcentaje de descuento</h1>
    <p>
    <?php 
    define("DESCUENTO", 0.15); // 15% de descuento
    $precioOriginal = 100.00;
    $montoDescuento = $precioOriginal * DESCUENTO;
    $precioFinal = $precioOriginal - $montoDescuento;
    
    echo "Precio original: $" . number_format($precioOriginal, 2) . "<br>";
    echo "Descuento aplicado: " . (DESCUENTO * 100) . "%<br>";
    echo "Monto del descuento: $" . number_format($montoDescuento, 2) . "<br>";
    echo "Precio final: $" . number_format($precioFinal, 2);
?>

    </p>
</body>
</html>