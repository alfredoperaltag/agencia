<?php
require "../funciones.php";
$obj = new funciones;
$obj->verificar_sesion();
$_POST['nombre'];
$_POST['descripcion'];

if (empty($_POST['nombre'] && $_POST['descripcion'])) {
    echo "<script>
    window.location.href = 'formularioRegistrar.php';
    alert('Los campos no pueden estar vacios');
    </script>";
} else {
    include "../conexion.php";
    $consulta = "INSERT INTO tareas (nombre,descripcion) VALUES ('$_POST[nombre]','$_POST[descripcion]')";
    if (mysqli_query($conexion, $consulta)) {
        header('Location: consultaTareas.php');
    } else {
        echo '<script type="text/javascript">
        alert("¡Ocurrio un problema al registrar!");
        /* window.location.href="formularioRegistrar.php"; */
        </script>';
        echo "error" . $sql . "<br>" . mysqli_error($conexion);
    }
}
mysqli_close($conexion);
?>