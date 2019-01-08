<?php
/* include "../modelos/conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM clientes ORDER BY apellidoPaterno");
$registro = mysqli_fetch_array($resultado);
mysqli_close($conexion); */

require "../modelos/conexion.php";
$consulta = $conexion->prepare('SELECT * FROM clientes ORDER BY apellidoPaterno');
$consulta->execute();
$registro = $consulta->fetchAll();
?>