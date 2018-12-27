<!DOCTYPE html>
<html>
    <?php
    require "formulario.php";
    $obj = new formulario();
    $obj->encabezadoFormulario();
    ?>

<body>    
    <div class="container">
        <form action="consultaRegistrar.php" method="POST">
            <?php
            $obj = new formulario();
            $obj->cuerpoFormulario("", "", "", "", "", "0001-01-01", "", "", "");
            ?>       
            <button type="submit" value=enviar class="btn btn-success">Registrar</button>
            <a href="consultaClientes.php"><button type="button" class="btn btn-secondary">Regresar</button></a>
            <style>
                .btn {
                    float: right;
                    margin: 5px;
                }
            </style>
        </form>
    </div>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>