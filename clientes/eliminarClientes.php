<?php
require '../funciones.php';
$obj = new funciones();
$obj->verificar_sesion();
$_GET['id'];
include "../conexion.php";
$consulta = "DELETE FROM clientes WHERE id=('$_GET[id]')";
if (mysqli_query($conexion, $consulta)) {
    header('Location: consultaClientes.php');
} else {
    echo '<script type="text/javascript">
    alert("¡Ocurrio un problema al borrar!");
    window.location.href="consultaClientes.php";
    </script>';
    echo "Error deleting record: " . mysqli_error($conexion);
}
mysqli_close($conexion);
?>
