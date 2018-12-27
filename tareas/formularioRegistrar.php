<!DOCTYPE html>
<html>
    <?php
    require "formulario.php";
    $obj = new formulario;
    $obj->headerFormulario();
    ?>

<body>
    <?php
    require "barraNavegaciontareas.php";
    ?>
    <div class="container">
        <form action="consultaNueva.php" method="POST">    
            <?php 
            $obj = new formulario();
            $obj->cuerpoFormulario("", "");
            ?>
        </form>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>