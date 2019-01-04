<?php
require '../funciones.php';
$obj = new funciones;
$obj->verificar_sesion();
$id = $_GET['id'];
$_POST['nombre'];
$_POST['apellidoPaterno'];
$_POST['apellidoMaterno'];
$_POST['telefono'];
$_POST['curp'];
$_POST['fechanacimiento'];
$_POST['familiares'];
$_POST['ruta'];
$_POST['descripcion'];

if (empty($_POST['nombre'])) {
    echo "<script>
    alert('El campo Nombre es obligatorio');
    window.location.href = 'modificar.php?id=$id';
    </script>";
} else {
    include "../conexion.php";
    $consulta = "UPDATE clientes SET nombre='$_POST[nombre]',apellidoPaterno='$_POST[apellidoPaterno]',apellidoMaterno='$_POST[apellidoMaterno]',telefono='$_POST[telefono]',curp='$_POST[curp]',fechanacimiento='$_POST[fechanacimiento]',familiares='$_POST[familiares]',ruta='$_POST[ruta]',descripcion='$_POST[descripcion]' WHERE id=$_GET[id]";
    if (mysqli_query($conexion, $consulta)) {
        echo "<script>
        window.location.href='consultaClientes.php';
        alert('Actualizado Correctamente');
        </script>";
    } else {
        echo "<script> alert('Ocurrio un Problema al Actualizar'); </script>";
        echo "Error updating record: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}
?>

