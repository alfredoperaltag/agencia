<?php
require "conexion.php";
$consulta = $conexion->prepare(
    "INSERT INTO clientes 
    (nombre,apellidoPaterno,apellidoMaterno,telefono,curp,fechanacimiento,familiares,ruta,descripcion) 
    VALUES 
    (:nombre, :apellidoPaterno, :apellidoMaterno, :telefono, :curp, :fechanacimiento, :familiares, :ruta, :descripcion)"
);
$consulta->execute(array(
    ':nombre' => $nombre,
    ':apellidoPaterno' => $apellidoPaterno,
    ':apellidoMaterno' => $apellidoMaterno,
    ':telefono' => $telefono,
    ':curp' => $curp,
    ':fechanacimiento' => $fechanacimiento,
    ':familiares' => $familiares,
    ':ruta' => $ruta,
    ':descripcion' => $descripcion
));
?>