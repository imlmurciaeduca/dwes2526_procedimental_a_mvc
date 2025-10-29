<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <p><a href="index.php?action=crearEntrada">Crear nueva entrada</a></p>
    <?php foreach ($entradasObj as $archivo => $entrada) : ?>
        <h1><?= $entrada->getTitulo() ?></h1>
        <a href="index.php?action=mostrarEntrada&id=<?= $archivo ?>">Leer</a>
    <?php endforeach; ?>
</body>
</html>