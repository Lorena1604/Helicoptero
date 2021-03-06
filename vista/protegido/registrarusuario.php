<?php $title = "Registrar Usuario";
include_once '../plantillas/head.php';
include_once '../plantillas/nav.php'; ?>
<h4 class="title">REGISTRAR USUARIO</h4>
<hr/>
<div class="content">
    <?php
    if (isset($_GET['mensaje'])) {
        echo '<div class="alert alert-info" style="color:#000">' . $mensaje = $_GET['mensaje'] . '</div>';
    }
    ?>
    <form action="../../controlador/UsuarioControlador.php" method="post" class="form-horizontal">
        <fieldset>
            <div class="col-md-1"></div>
            <div class="col-md-5">

                <div class="form-group" title="Ingresar número de cédula">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-sort-numeric-asc iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="cedula" name="cedula" type="number" placeholder="* Número de cédula" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar nombres completos">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-user iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="nombres" name="nombres" type="text" placeholder="* Nombres completos" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar apellidos completos">
                    <span class="col-md-2 text-center"></span>
                    <div class="col-md-10">
                        <input required="" id="apellidos" name="apellidos" type="text" placeholder="* Apellidos completos" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar numero telefonico">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-phone-square iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="telefono" type="number" name="telefono" placeholder="* Número de teléfono" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar direccion de la casa">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-home iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="direccion" type="text" name="direccion" placeholder="* Dirección" class="form-control">
                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <div class="form-group" title="Ingresar fecha de nacimiento">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-calendar-o iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="fechaNacimiento" type="date" name="fechaNacimiento" placeholder="* Fecha de nacimiento" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar tipo de rol">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-university iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="rol" type="number" name="rol" placeholder="* Asignar rol" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar genero">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-child iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="genero" type="text" name="genero" placeholder="* Genero" class="form-control">
                    </div>
                </div>
                
                <div class="form-group" title="Ingresar estado">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-child iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="estado" type="text" name="estado" placeholder="* Estado" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar contrasena">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-unlock-alt iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="contrasena" type="password" name="contrasena" placeholder="* Contraseña" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <span class="col-md-2 text-center"></span>
                    <div class="col-md-10">
                        <input type="submit" value="REGISTRAR" name="btnRegistrar" class="btn btn-warning btn-block">
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </fieldset>
    </form>
</div>
<style>
    .iconColor{
        font-size: 40px;
        color: #fcac45;
    }
</style>
<?php include_once '../plantillas/footer.php'; ?>