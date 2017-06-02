<?php
require_once '../conexion/Conexion.php';
class Suministro {

    private $idSuministro;
    private $material;
    private $cantidad;
    private $proveedor;
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

    public function registrarSuministro($material, $cantidad, $proveedor) {

        try {
            $sql = "INSERT INTO suministros VALUES(null,?,?,?)";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->bindParam(1, $material);
            $sentencia->bindParam(2, $cantidad);
            $sentencia->bindParam(3, $proveedor);
            $sentencia->execute();
            $this->mensaje = "El suministro se registró correctamente";
        } catch (PDOException $e) {
            $this->mensaje = "Ocurrio el siguiente error " . $e->getMessage();
        }
    }
    
        public function listarUsuarios() {
        try {
            $consulta = $this->bd->query("select * from suministros");
            $consulta->execute();
            return $consulta->fetchAll();
        } catch (PDOException $e) {
            $this->mensaje = "Ocurrio el siguiente error " . $e->getMessage();
        }
    }

}
