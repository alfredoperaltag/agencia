<?php
    $registro['apellidoPaterno']="";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Davidtours | Registrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
</head>

<body>
    <?php
require 'barraNavegacion.php';
?>


    <div class="container">
        <form action="formularioRegistrar.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre(s)</label>
                        <input type="text" autocomplete="no" class="form-control" name=nombre id="exampleFormControlInput1" placeholder="nombre(s)"
                        value="<?php echo $registro['apellidoPaterno'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Apellido Paterno del Cliente</label>
                        <input type="text" autocomplete="no" class="form-control" name=apellidoPaterno id="exampleFormControlInput1"
                            placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Apellido Materno del Cliente</label>
                        <input type="text" autocomplete="no" class="form-control" name=apellidoMaterno id="exampleFormControlInput1"
                            placeholder="Apellido Materno">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Numero de Telefono</label>
                        <input type="tel" autocomplete="no" class="form-control" name=telefono id="exampleFormControlInput1" placeholder="7331234567">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Curp</label>
                        <input type="text" autocomplete="no" class="form-control" name=curp id="exampleFormControlInput1" placeholder="PEGA970710HGRLLL11">
                    </div>                    
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Fecha de Nacimiento</label>
                        <input type="date" autocomplete="no" class="form-control" value="0001-01-01" name=fechanacimiento id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Familiares</label>
                        <input type="text" autocomplete="no" class="form-control" name=familiares id="exampleFormControlInput1"
                            placeholder="nombre(s) Apellido Paterno Apellido Materno,">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Ruta</label>
                        <input type="text" autocomplete="no" class="form-control" name=ruta id="exampleFormControlInput1" placeholder="Mex - Tij">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Descripción</label>
                        <textarea autocomplete="no" class="form-control" id="descripción" name=descripcion placeholder="Descripción" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" value=enviar class="btn btn-success">Registrar</button>
            <a href="clientes.php"><button type="button" class="btn btn-secondary">Regresar</button></a>
            <style>
                .btn {
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