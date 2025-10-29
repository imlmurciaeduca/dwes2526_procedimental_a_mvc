<?php
    require_once __DIR__ . '/controllers/PerfilUsuarioController.php';
    $controller = new PerfilUsuarioController();

    $action = $_GET['action'] ?? 'mostrarPerfil';

    switch ($action) {
        case 'mostrarPerfil':
            $nombre = $_GET['nombre'] ?? 'invitado';
            $controller->mostrarPerfil($nombre);
            break;
        default:
            echo "Acción no reconocida.";
            break;
    }
?>