<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'EntradaController.php';

        $titulo = $_POST['titulo'];
        $contenido = $_POST['contenido'];

        $controller = new EntradaController();
        $controller->guardarEntrada($titulo, $contenido);
        header('Location: index.php');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Entrada</title>
</head>
<body>
    <h1>Crear Nueva Entrada</h1>
    <form method="POST">
        <label for="titulo">Título:</label>
        <input type="text" id="titulo" name="titulo" required>
        <br>
        <label for="contenido">Contenido:</label>
        <textarea id="contenido" name="contenido" required></textarea>
        <br>
        <input type="submit" value="Guardar Entrada">
    </form>
</body>
</html>