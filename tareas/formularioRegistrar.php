<!DOCTYPE html>
<html>
<?php
require "formulario.php";
$obj = new formulario;
$obj->headerFormulario();
?>
<body>
<?
require "barraNavegaciontareas.php";
?>
    <div class="container">
    <form action="consultaNueva.php" method="POST">    
    <?
    $nombre = "";
    $descripcion = "";
    $obj = new formulario();
    $obj->cuerpoFormulario($nombre, $descripcion);
    ?>
    </form>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>