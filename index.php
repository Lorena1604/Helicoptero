<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HELIREP</title>
	<link rel="shortcut icon"  href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="estilos/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="estilos/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="estilos/img/apple-touch-icon-114x114.png">
	<link rel="stylesheet" type="text/css" href="estilos/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="estilos/fonts/font-awesome/css/font-awesome.css">
	<link href="estilos/css/owl.carousel.css" rel="stylesheet" media="screen">
	<link href="estilos/css/owl.theme.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="estilos/css/style.css">
	<link rel="stylesheet" type="text/css" href="estilos/css/responsive.css">

	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="estilos/js/modernizr.custom.js"></script>
</head>

<body style="background: url(estilos/img/01.jpg);
	background-position: center;
	background-attachment: fixed;
	background-repeat: no-repeat;
	color: #cfcfcf;
	background-size: 100% 100%;">
	<div style="background: #464545; width: 100%; height: 60px;"></div>
<div class="text-center">
		<div class="overlay">
			<div class="content">
			  <h1>BIENVENIDO A <strong><span class="color">HELIREP</span></strong></h1>
				<center>
					<form action="controlador/login.php" method="POST">
						<input class="inpu" type="text" id="codigo" placeholder="Codigo" required=""/>
						<input class="inpu" type="password" id="contrasena" placeholder="Contraseña" required=""/>
						<button type="submit" class="btn btn-warning" onclick="confirmar();">Entrar</button>
					</form>
				</center>
			</div>
		</div>
	</div>
	<style type="text/css">
		.inpu {
			border-radius: 5px;
			height: 40px;
			text-align: center;
			color: #000;
			margin-right: 10px;
		}
		body,html{
		height:100%; /*Siempre es necesario cuando trabajamos con alturas*/
		}
		 .inferior{
		color: #fff;
		background: #2D2C2C;
		position:absolute; /*El div será ubicado con relación a la pantalla*/
		left:0px; /*A la derecha deje un espacio de 0px*/
		right:0px; /*A la izquierda deje un espacio de 0px*/
		bottom:0px; /*Abajo deje un espacio de 0px*/
		height:50px; /*alto del div*/
		z-index:0;
		 }
	</style>
	<nav class="inferior">
        <div class="container">
          
            <div class="pull-left fnav">
                <p style="margin-top: 15px;margin-bottom: -15px;">Todos los derechos reservados. COPYRIGHT © 2017. Diseñado y codificado por <a href="#">Brayan, Lorena, Mario y Brenda</a></p>
            </div>
            <div class="pull-right fnav">
                <ul class="footer-social" style="margin-top: 15px;margin-bottom: -25px;">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
                
            </div>
            
        </div>
    </nav>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="estilos/js/jquery.1.11.1.js"></script>
	<script type="text/javascript" src="estilos/js/bootstrap.js"></script>
	<script type="text/javascript" src="estilos/js/SmoothScroll.js"></script>
	<script type="text/javascript" src="estilos/js/jquery.isotope.js"></script>
	<script src="estilos/js/owl.carousel.js"></script>
	<script type="text/javascript" src="estilos/js/main.js"></script>
	<script>
		function confirmar(){
			var email = $
		}
	</script>
</body>

</html>