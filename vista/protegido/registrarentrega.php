<?php $title = "Registrar entrega"; 
include_once '../plantillas/head.php'; 
include_once '../plantillas/nav.php'; ?>
<h4 class="title">REGISTRAR ENTREGA DE SUMINISTRO</h4>
</div>
<hr/>
<div class="content">
    <?php
    if (isset($_GET['mensaje'])) {
        echo '<div class="alert alert-info" style="color:#000">' . $mensaje = $_GET['mensaje'] . '</div>';
    }
    ?>
    <form action="../../controlador/EntregaControlador.php" method="post" class="form-horizontal">
        <fieldset>

            <div class="col-md-5">
                <div class="form-group" title="Fecha entrega">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-calendar-o iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="fechaEntrega" type="date" name="fechaEntrega" placeholder="* Fecha de entrega" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar cantidad">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-plus iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="cantidad" type="number" name="cantidad" placeholder="* Cantidad" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar Jefe de bodega">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-user iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="jefeBodega" type="number" name="jefeBodega" placeholder="* Jefe de bodega" class="form-control">
                    </div>
                </div>
                <div class="form-group" title="Ingresar solicitud">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-send iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="solicitud" type="text" name="solicitud" placeholder="* Solicitud" class="form-control">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <span class="col-md-2 text-center"></span>
                        <div class="col-md-10">
                            <input type="submit" value="ENTREGAR" name="btnEntregar" class="btn btn-warning btn-block">
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