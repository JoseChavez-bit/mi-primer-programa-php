<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-1</title>
</head>
<body>
    <h1>Definición y Uso de Constantes</h1>
    <p>
    <?php
define("PI", 3.14159);

define("SALUDO", "Hola, bienvenido a mi pagina PHP");

$radio = 5;
$area = PI * $radio * $radio;

echo SALUDO;
echo "<br>";
echo "El área de un círculo con radio $radio es: $area";
?>
    </p>
</body>
</html>