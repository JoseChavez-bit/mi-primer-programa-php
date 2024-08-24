<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio-3</title>
</head>
<body>
    <h1>Mensajes de error y éxito</h1>
    <p>
    <?php
    define("MENSAJE_EXITO", "Operación completada con éxito.");
    define("MENSAJE_ERROR", "Ha ocurrido un error. Por favor, inténtelo de nuevo.");
    
    $operacionExitosa = true;
    
    if ($operacionExitosa) {
    echo MENSAJE_EXITO;
} else {
    echo MENSAJE_ERROR;
}
?>
</p>
</body>
</html>