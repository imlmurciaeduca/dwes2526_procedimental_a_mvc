<?php
    require_once __DIR__ . '/../model/Entrada.php';
    require_once 'PerfilUsuarioController.php';

    class EntradaController {

        private static $instance = null;

        private function __construct(){
            # Se queda vacío porque no necesitamos inicializar nada
        }

        public static function getInstance(){
            if (self::$instance === null) {
                self::$instance = new EntradaController();
            }
            return self::$instance;
        }

        public function getAllEntradas(){
            $entradas = glob(__DIR__ . '/../data/*.json');
            $entradasObj = [];
            foreach ($entradas as $archivo) {
                $entradasObj[basename($archivo, '.json')] = Entrada::find($archivo);
            }
            return $entradasObj;
        }

        public function getEntrada($archivo){
            return Entrada::find(__DIR__ . '/../data/' . $archivo . '.json');
        }

        public function guardarEntrada($titulo, $contenido) {
            $entrada = new Entrada($titulo, $contenido);
            $entrada->save();
        }

        public function mostrarEntradas() {
            $entradasObj = $this->getAllEntradas();

            $user_controller = PerfilUsuarioController::getInstance();
            $perfil_usuario = $user_controller->getPerfil('Ignacio');

            require __DIR__ . '/../views/listado.php';
        }

        public function mostrarEntrada($id) {
            $entrada = $this->getEntrada($id);
            require __DIR__ . '/../views/entrada.php';
        }

        public function crearEntrada() {
            require __DIR__ . '/../views/crear_entrada.php';
        }
    }
?>