<?php
$_GET['id'];

include "../conexion.php";
$consulta = mysqli_query($conexion, "SELECT nombre,descripcion FROM tareas WHERE idTarea =('$_GET[id]')");
while ($registro = mysqli_fetch_array($consulta)) {
    $nombre = $registro['nombre'];
    $descripcion = $registro['descripcion'];
    ?>
    <!DOCTYPE html>
    <html>
    <?php
    require "formulario.php";
    $obj = new formulario;
    $obj->headerFormulario();
    require "barraNavegacionTareas.php";
    ?>
    <body>    
        <div class="container">
        <form action="consultaModificar.php" method="POST">
        <?php
        $obj = new formulario;
        $obj->cuerpoFormulario($nombre, $descripcion);
        ?>
        </div>        
        </form> 

        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/bootstrap.min.css"></script>
    </body>
    <?php

}
mysqli_close($conexion)
?>
    </html>
