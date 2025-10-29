<?php
    class PerfilUsuario {
        private $nombre;
        private $email;

        public function __construct($nombre, $email) {
            $this->nombre = $nombre;
            $this->email = $email;
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getEmail() {
            return $this->email;
        }

        public static function find($username) {
            $data = [
                "nombre" => $username,
                "email" => strtolower($username) . "@email.com"
            ];
            return new PerfilUsuario($data['nombre'], $data['email']);
        }
    }
?>