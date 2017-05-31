<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
</head>
<body>
	<?php
		if(isset($_GET['mensaje'])){
			echo '<h4>'.$mensaje = $_GET['mensaje'].'</h4>';
		}
	?>
    
	<form  action="../controlador/UsuarioControlador.php" method="POST">
		Ingrese numero de cedula:
		<input type="number" name="cedula"/><br/>
		Ingrese nombres:
		<input type="text" name="nombres"/><br/>
		Ingrese apellidos:
		<input type="text" name="apellidos"/><br/>
		Ingrese numero de telefono:
		<input type="number" name="telefono"/><br/>
		Ingrese direccion:
		<input type="text" name="direccion"/><br/>
		Ingrese fecha de nacimiento:
		<input type="text" name="fechaNacimiento"/><br/>
		Ingrese rol:
		<input type="number" name="rol"/><br/>
		Ingrese genero:
		<input type="text" name="genero"/><br/>
		Ingrese estado:
		<input type="text" name="estado"/><br/>
		Ingrese contraseña:
		<input type="number" name="contrasena"/><br/>
		<input type="submit" value="Registrar" name="btnRegistrar">
	</form>
</body>
</html>