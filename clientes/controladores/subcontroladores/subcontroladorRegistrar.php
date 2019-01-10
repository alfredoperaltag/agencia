<?php
$nombre = $_POST['nombre'];
$apellidoPaterno = $_POST['apellidoPaterno'];
$apellidoMaterno = $_POST['apellidoMaterno'];
$telefono = $_POST['telefono'];
$curp = $_POST['curp'];
$fechanacimiento = $_POST['fechanacimiento'];
$familiares = $_POST['familiares'];
$ruta = $_POST['ruta'];
$descripcion = $_POST['descripcion'];

if (empty($_POST["nombre"])) {
    ?>
    <script type="text/javascript">
    window.location.href="../controladorRegistrar.php";
    alert("¡El campo nombre es obligatorio!");
    </script>     
    <?php

} else {
    require "../../modelos/consultaRegistrar.php";
    if ($consulta) {
        header('Location: ../controladorClientes.php');
    } else {
        ?>
        <script type="text/javascript">
        alert("¡Ocurrio un problema al registrar!");
        /* window.location.href="../controladorRegistrar.php"; */
        </script>';
        <?php
        /* echo "Error: " . $sql . "<br>" . mysqli_error($conexion); */
    }
}
?>