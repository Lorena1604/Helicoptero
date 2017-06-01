<?php

require_once '../modelo/Solicitud.php';
try {
    if (isset($_POST['btnSolicitar'])) {
        $solicitar = new Solicitud();
        $solicitar->registrarSolicitud($_POST['usuario'], $_POST['helicoptero'], $_POST['tipoSolicitud'], $_POST['fechaSolicitud'], $_POST['estadoSolicitud']);
        if (empty($solicitar)) {
            $mensaje = 'La solicitud no se pudo registrar';
        } else {
            $mensaje = 'La solicitud se registro correctamente';
        }

        header("Location:../vista/protegido/registrarsolicitud.php?mensaje= " . $mensaje);
    }
} catch (Exception $e) {
    $mensaje = 'Error: ' . $e->getMessage();
    header("Location:../vista/protegido/registrarusuario.php?mensaje= " . $mensaje);
}
?>