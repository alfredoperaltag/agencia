<?php
require "../funciones.php";
$obj = new funciones;
$obj->verificar_sesion();
$palabraBuscada = $_POST['palabraBuscada'];
if (empty($palabraBuscada)) {
    echo "<script>
        window.location.href = 'consultaTareas.php';
        alert ('ingrese una palabra para buscar');
        </script>";
} else {
    include "../conexion.php";
    $consulta = mysqli_query($conexion, "SELECT * FROM tareas WHERE nombre LIKE '%" . $palabraBuscada . "%' OR descripcion LIKE '%" . $palabraBuscada . "%'");
    mysqli_close($conexion);
    if ($registro = mysqli_fetch_array($consulta)) {
        require "tablaTareas.php";
    } else {
        echo "<script>
        window.location.href = 'consultaTareas.php';
        alert ('No se encontraron resultados');
        </script>";
    }
}
?>