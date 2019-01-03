<?php
require '../funciones.php';
$obj = new funciones();
$obj->verificar_sesion();
$palabraBuscada = $_GET['palabraBuscada'];
if (empty($palabraBuscada)) {
    echo "<script>
        window.location.href = 'consultaClientes.php';
        alert ('ingrese una palabra para buscar');
        </script>";
} else {
    include "../conexion.php";
    $resultado = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre LIKE '%" . $palabraBuscada . "%'
        OR apellidoPaterno LIKE '%" . $palabraBuscada . "%'
        OR apellidoMaterno LIKE '%" . $palabraBuscada . "%'
        OR telefono LIKE '%" . $palabraBuscada . "%'
        OR curp LIKE '%" . $palabraBuscada . "%'
        OR fechanacimiento LIKE '%" . $palabraBuscada . "%'
        OR familiares LIKE '%" . $palabraBuscada . "%'
        OR ruta LIKE '%" . $palabraBuscada . "%'
        OR descripcion LIKE '%" . $palabraBuscada . "%'");
    if ($registro = mysqli_fetch_array($resultado)) {
        require 'indexClientes.php';
        mysqli_close($conexion);
    } else {
        echo "<script>
        window.location.href = 'consultaClientes.php';
        alert ('No se encontraron resultados');
        </script>";
    }
}
?>
