<?php

    class Rol{
        
        private $idRol;
        private $nombre;
        
        public function __construct($nombre){
            $this->nombre = $nombre;    
        }
        
        public function get($atributo){
            return $this->$atributo;
        } 
        
        public function set($atributo,$contenido){
            $this->$atributo = $contenido;
        }
    }