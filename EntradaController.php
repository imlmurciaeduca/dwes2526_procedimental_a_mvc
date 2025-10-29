<?php
    require_once 'Entrada.php';

    class EntradaController {

        public function getAllEntradas(){
            $entradas = glob('*.json');
            $entradasObj = [];
            foreach ($entradas as $archivo) {
                $entradasObj[basename($archivo, '.json')] = Entrada::find($archivo);
            }
            return $entradasObj;
        }

        public function getEntrada($archivo){
            return Entrada::find($archivo . '.json');
        }

        public function guardarEntrada($titulo, $contenido) {
            $entrada = new Entrada($titulo, $contenido);
            $entrada->save();
        }

        public function mostrarEntradas() {
            $entradasObj = $this->getAllEntradas();
            require 'listado.php';
        }

        public function mostrarEntrada($id) {
            $entrada = $this->getEntrada($id);
            require 'entrada.php';
        }

        public function crearEntrada() {
            require 'crear_entrada.php';
        }
    }
?>