<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HELIREP</title>
        <link rel="icon" type="image/png" href="estilos/img/helirep.png">
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
        <?php 
        session_start();
        if (isset($_SESSION['cedu'])) {
            header("Location:vista/protegido/bienvenido.php");
        }
        ?>
        <div style="background: #464545; width: 100%; height: 60px;">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <br/>
                <?php
                if (isset($_GET['error'])) {
                    echo '<div class="alert alert-danger alert-dismissable" style="width: 100%;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>!ERROR¡ </strong>' . $mensaje = $_GET['error'] . '
                          </div>';
                }
                ?>
            </div>
            <!--                <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>¡Cuidado!</strong> Es muy importante que leas este mensaje de alerta.
                            </div>-->
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="text-center">
        <div class="overlay">
            <div class="content">
                <h1>BIENVENIDO A <strong><span class="color">HELIREP</span></strong></h1>
                <center>
                    <form action="controlador/LoginControlador.php?modo=login" method="POST">
                        <input class="inpu" type="text" id="cedula" name="ced" placeholder="Cedula" required="" title="Cedula"/>
                        <input class="inpu" type="password" id="contrasena" name="contra" placeholder="Contraseña" required="" title="Contraseña"/>
                        <input type="hidden" name="login" value="1"/>
                        <input type="submit" class="btn btn-warning" onclick="confirmar();" value="Entrar"/>
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
                            function confirmar() {
                                var email = $
                            }
    </script>
</body>

</html>