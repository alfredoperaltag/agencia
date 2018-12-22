<?php
require '../funciones.php';
$obj = new funciones();
$obj -> verificar_sesion();
$_POST['nombre'];
$_POST['apellidoPaterno'];
$_POST['apellidoMaterno'];
$_POST['telefono'];
$_POST['curp'];
$_POST['fechanacimiento'];
$_POST['familiares'];
$_POST['ruta'];
$_POST['descripcion'];
 
include("../conexion.php");
$consulta = "INSERT INTO clientes (nombre,apellidoPaterno,apellidoMaterno,telefono,curp,fechanacimiento,familiares,ruta,descripcion) VALUES ('$_POST[nombre]','$_POST[apellidoPaterno]','$_POST[apellidoMaterno]','$_POST[telefono]','$_POST[curp]','$_POST[fechanacimiento]','$_POST[familiares]','$_POST[ruta]','$_POST[descripcion]')";
if (empty($_POST["nombre"])) {
    echo'<script type="text/javascript">
    window.location.href="registrar.php";
    alert("¡El campo nombre es obligatorio!");    
    </script>';    
  } else {    
if (mysqli_query($conexion, $consulta)) {    
    header('Location: consultaClientes.php');
} else {
    echo'<script type="text/javascript">
    alert("¡Ocurrio un problema al registrar!");
    /* window.location.href="consultaClientes.php"; */
    </script>';
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);    
}
  }

mysqli_close($conexion);
?>