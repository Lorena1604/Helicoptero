<?php

class DetalleSolicitud {

    private $idDetalleSolicitud;
    private $solicitud;
    private $suministro;
    private $cantidad;

    public function __construct($solicitud, $suministro, $cantidad) {
        $this->solicitud = $solicitud;
        $this->suministro = $suministro;
        $this->cantidad = $cantidad;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

}
