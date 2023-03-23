<?php

    class Persona
    {
        private $edad;
        private $nombre;
        private $telefono;

        function getEdad(){
            return $this->edad;
        }

        function setEdad($edad){
            $this->edad= $edad;
        }

        
        function getNombre(){
            return $this->nombre;
        }

        function setNombre($nombre){
            $this->nombre= $nombre;
        }

        
        function getTelefono(){
            return $this->telefono;
        }

        function setTelefono($telefono){
            $this->telefono= $telefono;
        }
        
    }
    $persona = new Persona();

?>