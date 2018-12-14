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
<?php
require 'funciones.php';
$obj = new funciones();
$obj->barraNavegacion();
?>

<div class="container-fluid">
<?php
require 'tablaClientes.php';
?>
</div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>