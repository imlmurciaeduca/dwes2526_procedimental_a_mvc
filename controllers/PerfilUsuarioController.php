<?php
    require_once __DIR__ . '/../model/PerfilUsuario.php';

    class PerfilUsuarioController {

        private static $instance = null;

        private function __construct(){
            # Se queda vacío porque no necesitamos inicializar nada
        }

        public static function getInstance(){
            if (self::$instance === null) {
                self::$instance = new PerfilUsuarioController();
            }
            return self::$instance;
        }

        public function getPerfil($nombre){
            return PerfilUsuario::find($nombre);
        }

        public function mostrarPerfil($nombre) {
            $perfil = $this->getPerfil($nombre);
            require __DIR__ . '/../views/perfil.php';
        }
    }
?>