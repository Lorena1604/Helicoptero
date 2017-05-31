<?php

class Proveedor {

    private $idProveedor;
    private $nit;
    private $empresa;
    private $telefono;
    private $direccion;

    public function __construct($nit, $empresa, $telefono, $direccion) {
        $this->nit = $nit;
        $this->empresa = $empresa;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

}
