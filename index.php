<?php

    require_once 'EntradaController.php';
    $controller = new EntradaController();

    $action = $_GET['action'] ?? 'mostrarEntradas';
    
    switch ($action) {
        case 'mostrarEntrada':
            $id = $_GET['id'];
            $controller->mostrarEntrada($id);
            break;
        case 'crearEntrada':
            $controller->crearEntrada();
            break;
        case 'guardarEntrada':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $titulo = $_POST['titulo'];
                $contenido = $_POST['contenido'];

                $controller->guardarEntrada($titulo, $contenido);
                header('Location: index.php?action=mostrarEntradas');
                exit();
            }
            break;
        case 'mostrarEntradas':
        default:
            $controller->mostrarEntradas();
            break;
    }
?>