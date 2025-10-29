<?php
    class Entrada {
        private $titulo;
        private $contenido;

        public function __construct($titulo, $contenido) {
            $this->titulo = $titulo;
            $this->contenido = $contenido;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getContenido() {
            return $this->contenido;
        }
        
        public static function find($filename) {
            $data = json_decode(file_get_contents($filename), true);
            return new Entrada($data['titulo'], $data['contenido']);
        }
    }
?>