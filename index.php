<?php
    require_once 'Entrada.php';

    $entrada = new Entrada(
        "Mi primera entrada en este blog",
        "Este es el contenido de mi primera entrada. Lo he definido
        directamente como una instancia de una clase, pero seguimos sin
        tener BBDD."
    );
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1><?= $entrada->getTitulo() ?></h1>
    <p><?= $entrada->getContenido() ?></p>
</body>
</html>