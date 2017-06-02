<?php

require_once '../modelo/Suministro.php';
try {
    if (isset($_POST['btnRegistrar'])) {
        $suministro = new Suministro();
        $suministro->registrarSuministro($_POST['material'], $_POST['cantidad'], $_POST['proveedor']);
        $mensaje = $suministro->get('mensaje');
        header("Location:../vista/protegido/registrarsuministro.php?mensaje= " . $mensaje);
    }
} catch (Exception $e) {
    $mensaje = 'Error: ' . $e->getMessage();
    header("Location:../vista/protegido/registrarsuministro.php?mensaje= " . $mensaje);
}
?>