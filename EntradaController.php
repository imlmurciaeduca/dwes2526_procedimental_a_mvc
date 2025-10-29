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
            return Entrada::find($archivo);
        }

        public function guardarEntrada($titulo, $contenido) {
            $entrada = new Entrada($titulo, $contenido);
            $entrada->save();
        }
    }
?>