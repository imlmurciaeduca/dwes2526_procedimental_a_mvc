<?php
    require_once 'Entrada.php';

    $data = json_decode(file_get_contents('entrada01.json'), true);
    $entrada = new Entrada($data['titulo'], $data['contenido']);
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