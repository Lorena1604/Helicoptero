<?php

class Helicoptero {

    private $idHelicoptero;
    private $modelo;
    private $peso;
    private $capacidad;
    private $carretaje;

    public function __construct($modelo, $peso, $capacidad, $carretaje) {
        $this->modelo = $modelo;
        $this->peso = $peso;
        $this->capacidad = $capacidad;
        $this->carretaje = $carretaje;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

}
