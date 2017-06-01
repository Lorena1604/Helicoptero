<?php

class acceso {

    protected $cedu;
    protected $contra;

    public function __construct($cedula, $contrasena) {
        $this->cedu = $cedula;
        $this->contra = $contrasena;
    }

    public function login() {
        $db = new Conexion();
        $dato = $db->recorrer($db->query("SELECT * FROM usuarios WHERE cedula='$this->cedu' AND contrasena='$this->contra';"));
        if ($dato['cedula'] == $this->cedu and $dato['contrasena'] == $this->contra) {
            session_start();
            $_SESSION['cedu'] = $dato['nombres'].' '.$dato['apellidos'];
            if ($dato['rol']=='1') {
                $respuesta = 'ADMINISTRADOR';
            }else if ($dato['rol']=='2') {
                $respuesta = 'JEFE DE MANTENIMIENTO';
            }else if ($dato['rol']=='3') {
                $respuesta = 'JEFE DE BODEGA';
            } else if ($dato['rol']=='0') {
                $respuesta = 'ROL NO ASIGNADO';
            }
            $_SESSION['contra'] = $respuesta;
            header('location: ../vista/protegido/bienvenido.php');
        } else {
            header('location: ../index.php?error=datos_incorrectos');
        }
    }

    public function registro() {
        
    }

    public function claveperdida() {
        
    }

}

?>