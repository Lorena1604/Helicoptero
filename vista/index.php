<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Dirección</th>
                <th>Fecha de Nacimiento</th>
                <th>Genero</th>
                <th>Contraseña</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $data): ?>
            <tr>
                <td><?php echo $data['cedula'] ?></td>
                <td><?php echo $data['nombres'] .' '.$data['apellidos'] ?></td>
                <td><?php echo $data['telefono'] ?></td>
                <td><?php echo $data['direccion'] ?></td>
                <td><?php echo $data['fechaNacimiento'] ?></td>
                <td><?php echo $data['genero'] ?></td>
                <td><?php echo $data['contrasena'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>