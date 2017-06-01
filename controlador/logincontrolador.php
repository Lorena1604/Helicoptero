<?php

require_once('../conexion/Conexion.php');

$modo = isset($_GET['modo']) ? $_GET['modo'] : 'default';

switch ($modo) {
    case 'login':
        if (isset($_POST['login'])) {
            if (!empty($_POST['ced']) and ! empty($_POST['contra'])) {

                include ('acces.php');
                $login = new acceso($_POST['ced'], $_POST['contra']);
                $login->login();
            } else {
                header('location: ../index.php?error=campos_vacios');
            }
        } else {
            header('location: ../index.php');
        }
        break;
    case 'registro':
        echo 'Esto es el registro';
        break;
    case 'claveperdida':
        echo 'Clave perdida';
        break;
    default:
        if (isset($_GET['error']) and $_GET['error'] == 'campos_vacios') {
            $template = new Prinick();
            $template->assign(array('error' => '¡ERROR! Debes llenar los campos.'));
            $template->display('../index.php');
        } else if (isset($_GET['error']) and $_GET['error'] == 'datos_incorrectos') {
            $mensaje = 'datos incorrectos';
        } else if (isset($_GET['error']) and $_GET['error'] == 'sin_acceso') {
            $template = new Prinick();
            $template->assign(array('error' => 'La sesión ha caducado o no ha iniciado sesión.'));
            $template->display('../index.php');
        } else {
            $template = new Prinick();
            $template->display('../index.php');
        }
        break;
}
?>