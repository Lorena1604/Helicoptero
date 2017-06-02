<?php $title = "Registrar helicóptero"; ?>
<?php include_once '../plantillas/head.php'; ?>
<?php include_once '../plantillas/nav.php'; ?>
<h4 class="title">REGISTRAR HELICÓPTERO</h4>
</div>
<hr/>
<div class="content">
    <?php
    if (isset($_GET['mensaje'])) {
        echo '<div class="alert alert-info" style="color:#000">' . $mensaje = $_GET['mensaje'] . '</div>';
    }
    ?>
    <form action="../../controlador/HelicopteroControlador.php" method="post" class="form-horizontal">
        <fieldset>
           
            <div class="col-md-5">

                <div class="form-group" title="Ingresar modelo">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-user iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="usuario" name="modelo" type="number" placeholder="* Modelo" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar peso">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-plane iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="helicoptero" name="peso" type="number" placeholder="* Peso" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar capacidad">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-check-square-o iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="tipoSolicitud" name="capacidad" type="number" placeholder="* Capacidad" class="form-control">
                    </div>
                </div>

                <div class="form-group" title="¿Tiene carretaje?">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-calendar-o iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <select name="carretaje" class="form-control">
                            <option>Seleccione</option>
                            <option value="Si">SI</option>
                            <option value="No">NO</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <span class="col-md-2 text-center"></span>
                        <div class="col-md-10">
                            <input type="submit" value="REGISTRAR" name="btnRegistrar" class="btn btn-warning btn-block">
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