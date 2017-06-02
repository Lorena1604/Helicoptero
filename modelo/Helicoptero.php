<?php
require_once '../conexion/Conexion.php';
class Helicoptero {

    private $idHelicoptero;
    private $modelo;
    private $peso;
    private $capacidad;
    private $carretaje;
    private $mensaje;
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

    public function registrarHelicoptero($modelo, $peso, $capacidad, $carretaje) {

        try {
            $sql = "INSERT INTO helicopteros VALUES(null,?,?,?,?)";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->bindParam(1, $modelo);
            $sentencia->bindParam(2, $peso);
            $sentencia->bindParam(3, $capacidad);
            $sentencia->bindParam(4, $carretaje);
            $sentencia->execute();
            $this->mensaje = "El helicóptero se registró correctamente";
        } catch (PDOException $e) {
            $this->mensaje = "Ocurrio el siguiente error " . $e->getMessage();
        }
    }
}
