<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de perfil de usuario</title>
</head>
<body>
    <h1>Perfil de Usuario</h1>
    <p>Nombre: <?php echo $perfil->getNombre(); ?></p>
    <p>Email: <?php echo $perfil->getEmail(); ?></p>
</body>
</html>