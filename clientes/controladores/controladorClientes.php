<?php 
require 'funciones.php';
$obj = new funciones();
$obj->verificar_sesion();

require "../modelos/consultaClientes.php";
require '../vistas/indexClientes.php';
mysqli_close($conexion);
?>