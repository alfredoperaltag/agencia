<?php
require "../funciones.php";
$obj = new funciones;
$obj->verificar_sesion();
$_GET['id'];
include "../conexion.php";
$consulta = "DELETE FROM tareas WHERE idTarea = '$_GET[id]'";
if (mysqli_query($conexion, $consulta)) {
    header("location: consultaTareas.php");
} else {
    echo "<script>
    alert('Ocurrio un problema al eliminar');
    window.location.href = 'consultaTareas.php';
    </script";
    echo "Error " . mysqli_error($conexion);
}
mysqli_close($conexion);
?>