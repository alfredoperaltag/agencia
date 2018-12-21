<?php
require 'funciones.php';
$obj = new funciones();
$obj -> verificar_sesion();
$_GET['id'];
$_POST['nombre'];
$_POST['apellidoPaterno'];
$_POST['apellidoMaterno'];
$_POST['telefono'];
$_POST['curp'];
$_POST['fechanacimiento'];
$_POST['familiares'];
$_POST['ruta'];
$_POST['descripcion'];

include "conexion.php";
$consulta = "UPDATE clientes SET nombre='$_POST[nombre]',apellidoPaterno='$_POST[apellidoPaterno]',apellidoMaterno='$_POST[apellidoMaterno]',telefono='$_POST[telefono]',curp='$_POST[curp]',fechanacimiento='$_POST[fechanacimiento]',familiares='$_POST[familiares]',ruta='$_POST[ruta]',descripcion='$_POST[descripcion]' WHERE id=$_GET[id]";
if (mysqli_query($conexion, $consulta)) {
    echo "<script>
    window.location.href='clientes.php';
    alert('Actualizado Correctamente');
    </script>";
} else {
    echo "<script> alert('Ocurrio un Problema al Actualizar'); </script>";
    echo "Error updating record: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>

