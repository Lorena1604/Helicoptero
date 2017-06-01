<?php

require_once '../../modelo/Usuario.php';

class ListasControlador {

    function listarUsuarios() {
        try {
            $usuario = new Usuario();
            $lista = $usuario->listarUsuarios();
            return $lista;
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

}
