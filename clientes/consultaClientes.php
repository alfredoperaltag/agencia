<?php 
require '../../funciones.php';
$obj = new funciones();
$obj->verificar_sesion();
include "../../conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM clientes ORDER BY apellidoPaterno");
$registro = mysqli_fetch_array($resultado);
require 'indexClientes.php';
mysqli_close($conexion);
?>