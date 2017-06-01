<?php

require_once '../conexion/Conexion.php';

class Usuario {

    private $idUsuario;
    private $cedula;
    private $nombres;
    private $apellidos;
    private $telefono;
    private $direccion;
    private $fechaNacimiento;
    private $genero;
    private $contrasena;
    private $rol;
    private $estado;
    private $bd;

   
    public function __construct() {
        $this->bd = new Conexion();
        $this->bd = Conexion::conectarBd();
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function crearUsuario($cedula, $nombres, $apellidos, $telefono, $direccion, $fechaNacimiento, $genero, $contrasena, $rol, $estado) {
        
        try {
            $sql = "INSERT INTO usuarios VALUES(null,?,?,?,?,?,?,?,?,?,?)";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->bindParam(1, $rol);
            $sentencia->bindParam(2, $cedula);
            $sentencia->bindParam(3, $nombres);
            $sentencia->bindParam(4, $apellidos);
            $sentencia->bindParam(5, $telefono);
            $sentencia->bindParam(6, $direccion);
            $sentencia->bindParam(7, $fechaNacimiento);
            $sentencia->bindParam(8, $genero);
            $sentencia->bindParam(9, $contrasena);
            $sentencia->bindParam(10, $estado);
            $sentencia->execute();
            return $this->bd->lastInsertId();
            
        } catch (PDOException $e) {
            $mensaje = "Ocurrio el siguiente error " . $e->getMessage();
            header("Location:../vista/protegido/registrarusuario.php?mensaje= " . $mensaje);
        }
    }

    public function listarUsuarios() {
        try {
            $consulta = $this->bd->query("select * from usuarios");
            $consulta->execute();
            return $consulta->fetchAll();
        }  catch (PDOException $e) {
            $mensaje = "Ocurrio el siguiente error " . $e->getMessage();
            header("Location:../vista/protegido/registrarusuario.php?mensaje= " . $mensaje);
        }
    }

    public function eliminarUsuario($id) {
        try {
            $sql = "DELETE FROM usuarios WHERE idUsuario=?";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->bindColumn(1, $id);
            $sentencia->execute();
        } catch (PDOException $e) {
            echo "Error " . $e->getMessage();
        }
    }
    public function buscarUsuario($cedula) {
        try {
            $sql = "SELECT * FROM usuarios WHERE idUsuario=?";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->execute(array($cedula));
            $resultado->$sentencia->fetchAll(PDO::FETCH_OBJ);
            $sentencia->closeCursor();
            return $resultado;
            $this->conectar = null;
        } catch (Exception $e) {
            echo "Error " . $e->getMessage();
        }
    }

}
