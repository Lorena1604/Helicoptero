<?php 
	//Aqui, implementa todos los modelos
	require_once 'modelo/usuarioModelo.php';

	class IndexControlador{
		private $model_e;
		private $model_d;

		function __construct(){
			$this->model_e = new usuarioModelo();
		}

		function index(){
			$title = "Usarios";
			$query = $this->model_e->get();
			require_once 'Vista/header.php';
			require_once 'Vista/index.php';
			require_once 'Vista/footer.php';
		}
	}
 ?>