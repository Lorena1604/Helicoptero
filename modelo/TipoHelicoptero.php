<?php

class TipoHelicoptero {

    private $idTipoHelicoptero;
    private $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

}
