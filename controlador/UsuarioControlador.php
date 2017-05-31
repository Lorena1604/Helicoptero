<?php

require_once '../modelo/Usuario.php';


try {
    if (isset($_POST['btnRegistrar'])) {
        $usuario = new Usuario($_POST['cedula'], $_POST['nombres'], $_POST['apellidos'], 
                $_POST['telefono'], $_POST['direccion'], $_POST['fechaNacimiento'], 
                $_POST['genero'], $_POST['contrasena'], $_POST['rol'], $_POST['estado']);
        $usuario->crearUsuario();
        if (empty($usuario)) {
             $mensaje = 'El usuario no se pudo registrar';
        }else{
            $mensaje = 'El usuario se creo correctamente';
        }
        
        header("Location:../vista/formulariousuarioprueba.php?mensaje= " . $mensaje);
    }
} catch (Exception $e) {
    $mensaje = 'Error: ' . $e->getMessage();
    header("Location:../vista/formulariousuarioprueba.php?mensaje= " . $mensaje);
}

function listarUsuarios() {
    try {
        $this->uauario->listarUsuarios();
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function buscarUsuario($cedula) {
    try {
        if (isset($_POST['btnBuscar'])) {
            $this->uauario->buscarUsuario($cedula);
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function eliminarUsuario($usuario) {
    try {
        if (isset($_POST['btnEliminar'])) {
            $this->usuarioDTO = $usuario;
            $this->uauario->eliminarUsuario($this->usuarioDTO);
        }
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
