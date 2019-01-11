<?php
require 'funciones.php';
$obj = new funciones();
$obj->verificar_sesion();
$palabraBuscada = $_GET['palabraBuscada'];
if (empty($palabraBuscada)) {
    ?>
    <script>
        window.location.href = 'controladorClientes.php';
        alert ('ingrese una palabra para buscar');
    </script>";
    <?php

} else {
    require "../modelos/consultaBuscar.php";
    if ($registro) {
        require '../vistas/indexClientes.php';
    } else {
        ?>
        <script>
        window.location.href = 'controladorClientes.php';
        alert ('No se encontraron resultados');
        </script>";
        <?php

    }
}
?>