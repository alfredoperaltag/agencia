<?php
$_POST['nombre'];
$_POST['apellidoPaterno'];
$_POST['apellidoMaterno'];
$_POST['telefono'];
$_POST['curp'];
$_POST['fechanacimiento'];
$_POST['familiares'];
$_POST['ruta'];
$_POST['descripcion'];

if (empty($_POST["nombre"])) {
    echo '<script type="text/javascript">
    window.location.href="../controladorRegistrar.php";
    alert("¡El campo nombre es obligatorio!");    
    </script>';
} else {
    require "../../modelos/consultaRegistrar.php";
    if (mysqli_query($conexion, $consulta)) {
        mysqli_close($conexion);
        header('Location: ../controladorClientes.php');
    } else {
        echo '<script type="text/javascript">
        alert("¡Ocurrio un problema al registrar!");
        /* window.location.href="../controladorRegistrar.php"; */
        </script>';
        echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
}
?>