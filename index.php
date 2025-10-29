<?php 
	// index.php
    $entrada = [
        "titulo" => "Mi primera entrada en este blog",
        "contenido" => "Este es el contenido de mi primera entrada. Lo he definido
        directamente como un un array porque el timing nos ha impedido ver POO y BBDD."
    ]
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <h1><?= $entrada["titulo"] ?></h1>
    <p><?= $entrada["contenido"] ?></p>
</body>
</html>