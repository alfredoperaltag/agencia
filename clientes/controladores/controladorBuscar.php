<?php
require 'funciones.php';
$obj = new funciones();
$obj->verificar_sesion();
$palabraBuscada = $_GET['palabraBuscada'];
if (empty($palabraBuscada)) {
    echo "<script>
        window.location.href = 'controladorClientes.php';
        alert ('ingrese una palabra para buscar');
        </script>";
} else {
    require "../modelos/consultaBuscar.php";
    if ($registro = mysqli_fetch_array($resultado)) {
        require '../vistas/indexClientes.php';
    } else {
        echo "<script>
        window.location.href = 'controladorClientes.php';
        alert ('No se encontraron resultados');
        </script>";
    }
}
?>