<?php
require_once '../conexion/Conexion.php';
class Solicitud {

    private $idSolicitud;
    private $usuario;
    private $helicoptero;
    private $tipoSolicitud;
    private $fechaSolicitud;
    private $estadoSolicitud;
    private $fechaRevision;
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

    public function registrarSolicitud($usuario, $helicoptero, $tipoSolicitud, $fechaSolicitud, $estadoSolicitud) {

        try {
            $sql = "INSERT INTO solicitudes VALUES(null,?,?,?,?,?,null)";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->bindParam(1, $usuario);
            $sentencia->bindParam(2, $helicoptero);
            $sentencia->bindParam(3, $tipoSolicitud);
            $sentencia->bindParam(4, $fechaSolicitud);
            $sentencia->bindParam(5, $estadoSolicitud);
            $sentencia->execute();
            return 1;
        } catch (PDOException $e) {
            $mensaje = "Ocurrio el siguiente error " . $e->getMessage();
            header("Location:../vista/protegido/registrarusuario.php?mensaje= " . $mensaje);
        }
    }

}
