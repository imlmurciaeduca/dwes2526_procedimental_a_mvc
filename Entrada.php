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

        public function save() {
            $data = [
                'titulo' => $this->titulo,
                'contenido' => $this->contenido
            ];
            file_put_contents("{$this->titulo}.json", json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
        }
    }
?>