<?php
$palabraBuscada = $_GET['caja_busqueda'];
if (empty($palabraBuscada)) {
    echo '<script type="text/javascript">alert("Ingrese una palabra para buscar");</script>';
    echo '<script> window.location.href = "clientes.php"; </script>';
} else {
    include "conexion.php";
    $consulta = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre LIKE '%" . $palabraBuscada . "%'
OR apellidoPaterno LIKE '%" . $palabraBuscada . "%'
OR apellidoMaterno LIKE '%" . $palabraBuscada . "%'
OR telefono LIKE '%" . $palabraBuscada . "%'
OR curp LIKE '%" . $palabraBuscada . "%'
OR fechanacimiento LIKE '%" . $palabraBuscada . "%'
OR familiares LIKE '%" . $palabraBuscada . "%'
OR ruta LIKE '%" . $palabraBuscada . "%'
OR descripcion LIKE '%" . $palabraBuscada . "%'");

    if ($registro = mysqli_fetch_array($consulta)) {
        ?>
        <!DOCTYPE html>
        <html>

        <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Davidtours | Clientes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
        </head>

        <body>

        <div class="container-fluid">
        <?php
require 'funciones.php';
        $obj = new funciones();
        $obj->barraNavegacion();
        ?>
        <table class="table">
        <?php

        require 'funcionesTabla.php';
        $obj = new funcionesTabla();
        $obj->encabezadoTabla();
        ?>
            <tbody class="text-center">
                <tr>
        <?php
do {
            $id = $registro['id'];
            $obj = new funcionesTabla();
            $obj->cuerpoTabla($registro);
            ?>
                </tr>
        <?php
} while ($registro = mysqli_fetch_array($consulta));
        mysqli_close($conexion);
        ?>
            </tbody>
        </table>
</div>


<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php

    } else {
        echo '<script type="text/javascript">alert("No se encontraron resultados");</script>';
        echo '<script> window.location.href = "clientes.php"; </script>';
    }
}
