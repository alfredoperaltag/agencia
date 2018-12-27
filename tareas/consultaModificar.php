<?php
$id = $_GET['id'];
$_POST['nombre'];
$_POST['descripcion'];

if (empty($_POST['nombre'] && $_POST['descripcion'])) {
    echo "<script>
    alert ('Los campos no pueden estar vacios');
    window.location.href = 'formularioModificar.php?id=$id';
    </script>";
} else {
    include "../conexion.php";
    $consulta = "UPDATE tareas SET nombre = '$_POST[nombre]', descripcion = '$_POST[descripcion]' WHERE idTarea = $id";
    if (mysqli_query($conexion, $consulta)) {
        echo "<script>    
    alert ('Tarea actualizada correctamente');
    window.location.href = 'consultaTareas.php';
    </script>";
    } else {
        echo "<script> alert ('Ocurrio un problema al actualizar'); </script>";
        echo "Error: " . mysqli_error($conexion);
    }
    mysqli_close($conexion);
}
?>