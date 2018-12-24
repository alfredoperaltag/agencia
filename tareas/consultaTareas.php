<?php
include "../conexion.php";
$consulta = mysqli_query($conexion, "SELECT * FROM tareas");
$registro = mysqli_fetch_array($consulta);
require "tablaTareas.php"
?>