<?php

require_once('../conexion/Conexion.php');

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

    public function __construct($cedula, $nombres, $apellidos, $telefono, $direccion, $fechaNacimiento, $genero, $contrasena, $rol, $estado) {
        $this->bd = new Conexion();
        $this->bd = Conexion::conectarBd();
        $this->cedula = $cedula;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->direccion = $direccion;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->genero = $genero;
        $this->contrasena = $contrasena;
        $this->genero = $genero;
        $this->contrasena = $contrasena;
        $this->rol = $rol;
        $this->estado = $estado;
    }

    public function set($atributo, $contenido) {
        $this->$atributo = $contenido;
    }

    public function get($atributo) {
        return $this->$atributo;
    }

    public function crearUsuario() {
        
        try {
            $sql = "INSERT INTO usuarios VALUES(null,?,?,?,?,?,?,?,?,?,?)";
            $sentencia = $this->bd->prepare($sql);
            $sentencia->bindParam(1, $this->rol);
            $sentencia->bindParam(2, $this->cedula);
            $sentencia->bindParam(3, $this->nombres);
            $sentencia->bindParam(4, $this->apellidos);
            $sentencia->bindParam(5, $this->telefono);
            $sentencia->bindParam(6, $this->direccion);
            $sentencia->bindParam(7, $this->fechaNacimiento);
            $sentencia->bindParam(8, $this->genero);
            $sentencia->bindParam(9, $this->contrasena);
            $sentencia->bindParam(10, $this->estado);
            $sentencia->execute();
            return $this->bd->lastInsertId();
            
        } catch (PDOException $e) {
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

    public function listarUsuarios() {
        try {
            $consulta = $this->bd->query("select * from usuarios");
            while ($filas = $consulta->fetchAll(PDO::FETCH_ASSOC)) {
                $usuario[] = $filas;
            }
            return $usuario;
        } catch (Exception $e) {
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
