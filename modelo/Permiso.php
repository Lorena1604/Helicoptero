<?php

class Permiso {

    private $idPermiso;
    private $nombre;
    private $url;
    private $permisoPadre;
    private $icono;

    public function __construct($nombre, $url, $permisoPadre, $icono) {
        $this->nombre = $nombre;
        $this->url = $url;
        $this->permisoPadre = $permisoPadre;
        $this->icono = $icono;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

}
