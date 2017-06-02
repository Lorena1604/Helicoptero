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
    <form action="../../controlador/SuministroControlador.php" method="post" class="form-horizontal">
        <fieldset>

            <div class="col-md-5">
                <div class="form-group" title="Ingresar material">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-cogs iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="material" type="text" name="material" placeholder="* Material" class="form-control">
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
                <div class="form-group" title="Ingresar proveedor">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-truck iconColor"></i>
                    </span>
                    <div class="col-md-10">

                        <select name="proveedor" class="form-control">
                            <?php
                            require_once '../../conexion/Conexion.php';
                            $bd = new Conexion();
                            $bd = Conexion::conectarBd();

                            $consulta = $bd->query("select * from proveedores");
                            $consulta->execute();
                            $consulta->fetchAll();
                            foreach ($consulta as $lista) {
                                ?>
                                <option>Seleccione</option>
                                <option value="<?php $lista['idProveedor']; ?>"><?php echo $lista['empresa']; ?></option>
                                <option value="No">NO</option>

                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="form-group" title="Ingresar proveedor">
                    <span class="col-md-2 text-center">
                        <i class="fa fa-truck iconColor"></i>
                    </span>
                    <div class="col-md-10">
                        <input required="" id="proveedor" type="text" name="proveedor" placeholder="* Proveedor" class="form-control">
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