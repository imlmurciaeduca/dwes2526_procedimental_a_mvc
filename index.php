<?php
    require_once 'Entrada.php';

    $entrada = Entrada::find('entrada01.json');
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