<?php
    class Alumno{
        private $id;
        private $nombre;
        private $apellidos;
        private $imagen;

        public function __construct($id, $nombre, $apellidos, $imagen){
            $this->id = $id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->imagen = $imagen;
        }

        public function setId($id){
            //this.id = id; Ejemplo JAVA
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }

        public function getNombre () 
        {
            return $this->nombre;
        }

        public function setApellidos($apellidos)
        {
            $this->apellidos=$apellidos;
        }

        public function getApellidos ()
        {
            return $this->apellidos;
        }

        public function setImagen($imagen)
        {
            $this->imagen=$imagen;
        }

        public function getImagen ()
        {
            return $this->imagen;
        }
        
        public function toString(){
            return "$this->id - $this->nombre - $this->apellidos - $this->imagen";
        }

    }