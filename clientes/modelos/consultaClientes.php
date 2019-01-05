<?php
include "../modelos/conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM clientes ORDER BY apellidoPaterno");
$registro = mysqli_fetch_array($resultado);
?>