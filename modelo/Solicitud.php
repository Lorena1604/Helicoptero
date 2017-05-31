<?php

class Solicitud{

private $idSolicitud;
private $usuario;
private $helicoptero;
private $tipoSolicitud;
private $fechaSolicitud;
private $estadoSolicitud;
private $fechaRevision;

public function __construct($usuario, $helicoptero, $tipoSolicitud, $fechaSolicitud, $estadoSolicitud, $fechaRevision){
$this->usuario = $usuario;
$this->helicoptero = $helicoptero;
$this->tipoSolicitud = $tipoSolicitud;
$this->fechaSolicitud = $fechaSolicitud;
$this->estadoSolicitud = $estadoSolicitud;
$this->fechaRevision = $fechaRevision;
}

public function get($atributo){
return $this->$atributo;
}

public function set($atributo, $contenido){
$this->$atributo = $contenido;
}
}