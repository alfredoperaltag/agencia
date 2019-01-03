<?php
require "../funciones.php";
$obj = new funciones();
$obj->verificar_sesion();
include "../conexion.php";
$consulta = mysqli_query($conexion, "SELECT * FROM tareas");
$columna = mysqli_fetch_field($consulta);
$registro = mysqli_fetch_array($consulta);
require "tablaTareas.php";
mysqli_close($conexion);
?>