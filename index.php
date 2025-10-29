<?php
    require_once 'EntradaController.php';

    $controller = new EntradaController();
    $entradasObj = $controller->getAllEntradas();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <p><a href="crear_entrada.php">Crear nueva entrada</a></p>
    <?php foreach ($entradasObj as $archivo => $entrada) : ?>
        <h1><?= $entrada->getTitulo() ?></h1>
        <a href="entrada.php?id=<?= $archivo ?>">Leer</a>
    <?php endforeach; ?>
</body>
</html>