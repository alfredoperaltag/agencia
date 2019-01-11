<?php
$_POST['nombreUsuario'];
$_POST['contrasena'];

include "conexion.php";
$consulta = mysqli_query($conexion, "SELECT usuario,contrasena FROM usuarios WHERE usuario='$_POST[nombreUsuario]' and contrasena='$_POST[contrasena]'");
if($registro = mysqli_fetch_array($consulta)){
    session_start();
    $_SESSION['usuario'] = $_POST['nombreUsuario'];
    header('location: index.php');
} else {
    echo "<script>
    window.location.href = 'login.html';
    alert('Error en el nombre de usuario o contraseña');
    </script>";
}
?>