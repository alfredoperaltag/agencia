<?php
include "../conexion.php";
$id = $_GET['id'];

$consulta = mysqli_query($conexion, "SELECT * FROM clientes WHERE id =('$_GET[id]')");
while ($registro = mysqli_fetch_array($consulta)) {
    $nombre = $registro['nombre'];
    $apellidoPaterno = $registro['apellidoPaterno'];
    $apellidoMaterno = $registro['apellidoMaterno'];
    $telefono = $registro['telefono'];
    $curp = $registro['curp'];
    $fechanacimiento = $registro['fechanacimiento'];
    $familiares = $registro['familiares'];
    $ruta = $registro['ruta'];
    $descripcion = $registro['descripcion'];
    ?>
<!DOCTYPE html>
<html>
    <?php
    require "../funciones.php";
    $obj = new funciones;
    $obj->head("Modificar");
    ?>

<body>
<?php
require "barraNavegacionClientes.html";
?>     
    <div class="container">
        <?php echo "<form action='consultaModificar.php?id=$id' method='POST'>";
        require "formulario.php";
        $obj = new formulario();
        $obj->cuerpoFormulario($nombre, $apellidoPaterno, $apellidoMaterno, $telefono, $curp, $fechanacimiento, $familiares, $ruta, $descripcion);
        ?> 
            <button type="submit" value=enviar class="btn btn-outline-primary">Modificar</button>
            <a href="consultaClientes.php"><button type="button" class="btn btn-secondary">Regresar</button></a>
            <style>
                .btn{
                    float: right;
                    margin: 5px;
                }
            </style>
        </form>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php

}
mysqli_close($conexion);
?>