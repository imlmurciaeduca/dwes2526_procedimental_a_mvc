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
    }
?>