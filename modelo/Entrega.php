<?php
require_once '../conexion/Conexion.php';

class Entrega {

    private $idEntrega;
    private $fechaEntrega;
    private $cantidad;
    private $jefeBodega;
    private $solicitud;
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

    public function registrarEntrega($fechaEntrega, $cantidad, $jefeBodega, $solicitud) {

        try {
            $sql = "INSERT INTO entregas VALUES(null,?,?,?,?)";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->bindParam(1, $fechaEntrega);
            $sentencia->bindParam(2, $cantidad);
            $sentencia->bindParam(3, $jefeBodega);
            $sentencia->bindParam(4, $solicitud);
            $sentencia->execute();
            $this->mensaje = "La entrega se realizó correctamente";
        } catch (PDOException $e) {
            $this->mensaje = "Ocurrio el siguiente error " . $e->getMessage();
        }
    }

}
