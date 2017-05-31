<?php

class Entrega {

    private $idEntrega;
    private $fechaEntrega;
    private $cantidad;
    private $jefeBodega;
    private $solicitud;

    public function __construct($fechaEntrega, $cantidad, $jefeBodega, $solicitud) {
        $this->fechaEntrega = $fechaEntrega;
        $this->cantidad = $cantidad;
        $this->jefeBodega = $jefeBodega;
        $this->solicitud = $solicitud;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

}
