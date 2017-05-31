<?php

class ModeloHelicoptero {

    private $idModeloHelicoptero;
    private $modelo;
    private $tipoHelicoptero;

    public function __construct($modelo, $tipoHelicoptero) {
        $this->modelo = $modelo;
        $this->tipoHelicoptero = $tipoHelicoptero;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

}
