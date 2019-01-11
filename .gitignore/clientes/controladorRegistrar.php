<?php
require 'funciones.php';
$obj = new funciones();
$obj->verificar_sesion();
require "../vistas/indexRegistrar.php";
?>