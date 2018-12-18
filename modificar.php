<?php
include "conexion.php";
$_GET['id'];
$id=$_GET['id'];

$consulta = mysqli_query($conexion, "SELECT * FROM clientes WHERE id =('$_GET[id]')");
while ($registro = mysqli_fetch_array($consulta)) {
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
require 'barraNavegacion.php';    
    ?>

    <div class="container">
        <?php echo "<form action='formularioModificar.php?id=$id' method='POST'>"; ?>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre(s)</label>
                        <input type="text" class="form-control" name=nombre id="exampleFormControlInput1" value="<?php echo $registro['nombre'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Apellido Paterno del Cliente</label>
                        <input type="text" class="form-control" name=apellidoPaterno id="exampleFormControlInput1"
                            value="<?php echo $registro['apellidoPaterno'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Apellido Materno del Cliente</label>
                        <input type="text" class="form-control" name=apellidoMaterno id="exampleFormControlInput1"
                            value="<?php echo $registro['apellidoMaterno'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Numero de Telefono</label>
                        <input type="text" class="form-control" name=telefono id="exampleFormControlInput1" value="<?php echo $registro['telefono'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Curp</label>
                        <input type="text" class="form-control" name=curp id="exampleFormControlInput1" value="<?php echo $registro['curp'] ?>">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name=fechanacimiento id="exampleFormControlInput1" value="<?php echo $registro['fechanacimiento'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Familiares</label>
                        <input type="text" class="form-control" name=familiares id="exampleFormControlInput1"
                            value="<?php echo $registro['familiares'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ruta</label>
                        <input type="text" class="form-control" name=ruta id="exampleFormControlInput1" value="<?php echo $registro['ruta'] ?>"">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descripción</label>
                        <textarea class="form-control" id="descripción" name=descripcion value="<?php echo $registro['descripcion'] ?>" rows="5"></textarea>
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
}
mysqli_close($conexion);
?>