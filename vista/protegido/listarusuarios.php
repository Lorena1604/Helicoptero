<?php $title = "Lista de Usuarios"; ?>
<?php include_once '../plantillas/head.php'; ?>
<?php include_once '../plantillas/nav.php'; ?>

<h4 class="title">LISTA DE USUARIOS</h4>
<div class="stats">
    <i class="fa fa-clock-o"></i> Campaña envió hace 2 días
</div>
</div>
<div class="content">
    <center>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
            </thead>
            <?php 
            include '../../controlador/UsuarioControlador.php';
            foreach (listarUsuarios() as $lista);
            ?>
            <tbody>
                <tr>
                    <td><?php $lista["cedula"]?></td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                </tr>
            </tbody>
        </table>
    </center>
    <div class="footer">
        <hr/>
        <input type="submit" value="Registrar" class="btn btn-warning" />
        <input type="submit" value="Cancelar" class="btn btn-default" />
    </div>
</div>
<?php include_once '../plantillas/footer.php'; ?>