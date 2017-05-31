<?php

class Suministro{

private $idSuministro;
private $material;
private $cantidad;
private $proveedor;

public function __construct($material, $cantidad, $proveedor){
$this->material = $material;
$this->cantidad = $cantidad;
$this->proveedor = $proveedor;
}

public function get($atributo){
return $this->$atributo;
}

public function set($atributo, $contenido){
$this->$atributo = $contenido;
}
}