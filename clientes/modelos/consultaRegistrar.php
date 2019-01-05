<?php
include "conexion.php";
$consulta = "INSERT INTO 
clientes (nombre,apellidoPaterno,apellidoMaterno,telefono,curp,fechanacimiento,familiares,ruta,descripcion) 
VALUES 
('$_POST[nombre]','$_POST[apellidoPaterno]','$_POST[apellidoMaterno]','$_POST[telefono]','$_POST[curp]','$_POST[fechanacimiento]','$_POST[familiares]','$_POST[ruta]','$_POST[descripcion]')";
?>