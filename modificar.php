<?php
include "conexion.php";
$_GET['id'];

$consulta = mysqli_query ($conexion, "SELECT * FROM clientes WHERE id =('$_GET[id]')");
while ($registro = mysqli_fetch_array($consulta)) {
echo $registro['apellidoPaterno'];
}

if (mysqli_query($conexion, $consulta)) {
    /* header('Location: clientes.php'); */
} else {
    /* echo'<script type="text/javascript">
    alert("¡Ocurrio un problema al actualizar!");
    window.location.href="clientes.php";
    </script>'; */
    echo "Error actualizar record: " . mysqli_error($conexion);
}

/* mysqli_close($conexion); */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Davidtours | Modificar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
</head>
<body>
<?php
require 'funciones.php';
$obj = new funciones();
$obj->barraNavegacion();
?>


    <div class="container">
        <form action="registrar.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre completo del Cliente</label>
                        <input type="text" class="form-control" name=nombre id="exampleFormControlInput1" placeholder="<?php echo $registro['apellidoPaterno'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Numero de Telefono</label>
                        <input type="text" class="form-control" name=telefono id="exampleFormControlInput1" placeholder="7331234567">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Curp</label>
                        <input type="text" class="form-control" name=curp id="exampleFormControlInput1" placeholder="PEGA970710HGRLLL11">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name=fechanacimiento id="exampleFormControlInput1">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Familiares</label>
                        <input type="text" class="form-control" name=familiares id="exampleFormControlInput1" placeholder="nombre(s) Apellido Paterno Apellido Materno,">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ruta</label>
                        <input type="text" class="form-control" name=ruta id="exampleFormControlInput1" placeholder="Mex - Tij">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descripción</label>
                        <textarea class="form-control" id="descripción" name=descripcion placeholder="Descripción" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" value=enviar class="btn btn-outline-primary">Modificar</button>
            <a href="clientes.php"><button type="button" class="btn btn-secondary">Regresar</button></a>
            <style>
                .btn{
                    float: right;
                    margin: 5px;
                }
            </style>
        </form>
    </div>

    <!-- <?php echo "<a href='modificar.php?id=$id'>" ?><button class="btn btn-outline-primary">Modificar</button><?php "</a>"?> -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>