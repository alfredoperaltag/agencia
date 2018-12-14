<?php
class funcionesTabla
{

    public function encabezadoTabla()
    {
        ?>
            <thead class="thead-dark">
                <tr class="text-center">
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Curp</th>
                    <th scope="col">Fecha Nacimiento</th>
                    <th scope="col">Familiares</th>
                    <th scope="col">Ruta</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Acciones</th>
                    <th scope="col"><a href="registrar.php"><button class="btn btn-success">Registrar</button></a></th>
                </tr>
            </thead>
        <?php
}

    public function cuerpoTabla($registro)
    {
        $id = $registro['id'];
        ?>
        <th><?php echo $registro['apellidoPaterno'] ?></th>
            <td><?php echo $registro['apellidoMaterno'] ?></td>
            <td><?php echo $registro['nombre'] ?></td>
            <td><?php echo $registro['telefono'] ?></td>
            <td><?php echo $registro['curp'] ?></td>
            <td><?php setlocale(LC_TIME, 'spanish');
        echo strftime('%d-%b-%Y', strtotime($registro['fechanacimiento']))?></td>
            <td><?php echo $registro['familiares'] ?></td>
            <td><?php echo $registro['ruta'] ?></td>
            <td><?php echo $registro['descripcion'] ?></td>
            <td><?php echo "<a href='modificar.php?id=$id'><button class='btn btn-outline-primary'>Modificar</button></a>"?></td>
            <td><button class="btn btn-outline-danger" onclick="confirmar(<?php echo $registro['id'] ?>)">Eliminar</button></td>
            <?php
}

}
?>
<script>
        function confirmar(id) {
            if (confirm("¿Estas seguro de eliminarlo?")) {
                window.location.href = "eliminar.php?id=" + id;
            }
        }
    </script>