<?php
require 'funciones.php';
$obj = new funciones();
$obj -> verificar_sesion();
include "conexion.php";
$_GET['id'];

$consulta = "DELETE FROM clientes WHERE id=('$_GET[id]')";

if (mysqli_query($conexion, $consulta)) {
    header('Location: clientes.php');
} else {
    echo '<script type="text/javascript">
    alert("¡Ocurrio un problema al borrar!");
    window.location.href="clientes.php";
    </script>';
    echo "Error deleting record: " . mysqli_error($conexion);
}

mysqli_close($conexion);
