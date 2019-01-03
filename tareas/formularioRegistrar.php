<!DOCTYPE html>
<html>
    <?php 
    require "../funciones.php";
    $obj = new funciones;
    $obj->head("Registrar");
    ?>

<body>
    <?php
    require "barraNavegacionTareas.html";
    ?>
    <div class="container">
        <form action="consultaNueva.php" method="POST">    
            <?php
            require "formulario.php";
            $obj = new formulario();
            $obj->cuerpoFormulario("", "");
            ?>
        </form>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>