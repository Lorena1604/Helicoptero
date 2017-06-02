<?php

require_once '../modelo/Entrega.php';
try {
    if (isset($_POST['btnEntregar'])) {
        $entrega = new Entrega();
        $entrega->registrarEntrega($_POST['fechaEntrega'], $_POST['cantidad'], $_POST['jefeBodega'], $_POST['solicitud']);
        $mensaje = $entrega->get('mensaje');
        header("Location:../vista/protegido/registrarentrega.php?mensaje= " . $mensaje);
    }
} catch (Exception $e) {
    $mensaje = 'Error: ' . $e->getMessage();
    header("Location:../vista/protegido/registrarentrega.php?mensaje= " . $mensaje);
}
?>