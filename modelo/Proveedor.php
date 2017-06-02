<?php
require_once '../conexion/Conexion.php';
class Proveedor {

    private $idProveedor;
    private $nit;
    private $empresa;
    private $telefono;
    private $direccion;
    private $bd;

    public function __construct() {
        $this->bd = new Conexion();
        $this->bd = Conexion::conectarBd();
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

    public function listarProveedores() {
        try {
            $consulta = $this->bd->query("select * from proveedores");
            $consulta->execute();
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            $this->mensaje = "Ocurrio el siguiente error " . $e->getMessage();
        }
    }

}
