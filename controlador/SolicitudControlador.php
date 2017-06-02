<?php

require_once '../modelo/Solicitud.php';
try {
    if (isset($_POST['btnSolicitar'])) {
        $solicitar = new Solicitud();
        $solicitar->registrarSolicitud($_POST['usuario'], $_POST['helicoptero'], $_POST['tipoSolicitud'], $_POST['fechaSolicitud'], 'Pendiente', $_POST['cantidad'], $_POST['suministro']);
        $mensaje = $solicitar->get('mensaje');
        header("Location:../vista/protegido/registrarsolicitud.php?mensaje= " . $mensaje);
    }
} catch (Exception $e) {
    $mensaje = 'Error: ' . $e->getMessage();
    header("Location:../vista/protegido/registrarsolicitud.php?mensaje= " . $mensaje);
}
?>