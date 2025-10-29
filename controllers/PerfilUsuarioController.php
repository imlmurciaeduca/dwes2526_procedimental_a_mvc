<?php
    require_once __DIR__ . '/../model/PerfilUsuario.php';

    class PerfilUsuarioController {
        public function getPerfil($nombre){
            return PerfilUsuario::find($nombre);
        }

        public function mostrarPerfil($nombre) {
            $perfil = $this->getPerfil($nombre);
            require __DIR__ . '/../views/perfil.php';
        }
    }
?>