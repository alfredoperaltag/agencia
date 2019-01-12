<?php
require "../modelos/conexion.php";
$consulta = $conexion->prepare("SELECT * FROM clientes 
WHERE nombre LIKE :palabraBuscada
OR apellidoPaterno LIKE :palabraBuscada
OR apellidoMaterno LIKE :palabraBuscada
OR telefono LIKE :palabraBuscada
OR curp LIKE :palabraBuscada
OR fechanacimiento LIKE :palabraBuscada
OR familiares LIKE :palabraBuscada
OR ruta LIKE :palabraBuscada
OR descripcion LIKE :palabraBuscada");
$consulta->execute(array(':palabraBuscada' => "%$palabraBuscada%"));
$registro = $consulta->fetchAll();
/* $resultado = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre LIKE ' % " . $palabraBuscada . " % '
OR apellidoPaterno LIKE ' % " . $palabraBuscada . " % '
OR apellidoMaterno LIKE ' % " . $palabraBuscada . " % '
OR telefono LIKE ' % " . $palabraBuscada . " % '
OR curp LIKE ' % " . $palabraBuscada . " % '
OR fechanacimiento LIKE ' % " . $palabraBuscada . " % '
OR familiares LIKE ' % " . $palabraBuscada . " % '
OR ruta LIKE ' % " . $palabraBuscada . " % '
OR descripcion LIKE ' % " . $palabraBuscada . " %'");
mysqli_close($conexion); */
?>