<?php
	require_once 'conexion/conexion.php';
	require_once 'controlador/indexcontrolador.php';

	$controlador = new indexcontrolador();

	$controlador->index();
?>