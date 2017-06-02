<?php $title = "Registrar suministro"; ?>
<?php include_once '../plantillas/head.php'; ?>
<?php include_once '../plantillas/nav.php'; ?>
<h4 class="title">REGISTRAR SUMINISTRO</h4>
</div>
<hr/>
<div class="content">
    <?php
    if (isset($_GET['mensaje'])) {
        echo '<div class="alert alert-info" style="color:#000">' . $mensaje = $_GET['mensaje'] . '</div>';
    }
    ?>
    <form action="../../controlador/SolicitudControlador.php" method="post" class="form-horizontal">
        <fieldset>
           
            <div class="col-md-5">

                <div class="form-group" title="Ingresar id usuario">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-user iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="usuario" name="usuario" type="number" placeholder="* Usuario" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar id helicoptero">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-plane iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="helicoptero" name="helicoptero" type="number" placeholder="* Helicoptero" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar id tipoSolicitud">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-check-square-o iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="tipoSolicitud" name="tipoSolicitud" type="number" placeholder="* Tipo solicitud" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="Ingresar fecha de solicitud">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-calendar-o iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="fechaSolicitud" type="date" name="fechaSolicitud" placeholder="* Fecha solicitud" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar suministro">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-child iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="estadoSolicitud" type="text" name="suministro" placeholder="* Suministro" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar cantidad">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-child iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="estadoSolicitud" type="text" name="cantidad" placeholder="* Cantidad" class="form-control">
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                        <span class="col-md-2 text-center"></span>
                        <div class="col-md-10">
                            <input type="submit" value="SOLICITAR" name="btnSolicitar" class="btn btn-warning btn-block">
                        </div>
                    </div>
                </div>
            </div>

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