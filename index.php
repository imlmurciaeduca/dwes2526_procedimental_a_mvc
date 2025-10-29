<?php
    require_once 'Entrada.php';

    $entrada1 = Entrada::find('entrada01.json');
    $entrada2 = Entrada::find('entrada02.json');
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
    <h1><?= $entrada1->getTitulo() ?></h1>
    <a href="entrada.php?id=entrada01">Leer</a>
    <h1><?= $entrada2->getTitulo() ?></h1>
    <a href="entrada.php?id=entrada02">Leer</a>
</body>
</html>