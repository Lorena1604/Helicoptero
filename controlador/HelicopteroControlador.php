<?php

require_once '../modelo/Helicoptero.php';
try {
    if (isset($_POST['btnRegistrar'])) {
        $helicoptero = new Helicoptero();
        $helicoptero->registrarHelicoptero($_POST['modelo'], $_POST['peso'], $_POST['capacidad'], $_POST['carretaje']);
        $mensaje = $helicoptero->get('mensaje');
        header("Location:../vista/protegido/registrarhelicoptero.php?mensaje= " . $mensaje);
    }
} catch (Exception $e) {
    $mensaje = 'Error: ' . $e->getMessage();
    header("Location:../vista/protegido/registrarhelicoptero.php?mensaje= " . $mensaje);
}
?>