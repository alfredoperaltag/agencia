<?php
    $_POST['nombre'];
    $_POST['descripcion'];    
    include "../conexion.php";
    $consulta = "INSERT INTO tareas (nombre,descripcion) VALUES ('$_POST[nombre]','$_POST[descripcion]')";
    if (empty($_POST['nombre'] && $_POST['descripcion'])) {
        echo "<script>
                window.location.href = 'formulario.php';
                alert('Los campos no pueden estar vacios');
            </script>";
    } else {
        if (mysqli_query($conexion,$consulta)) {
            echo "<script>
                    window.location.href = 'tareas.php';                    
                </script>";
        } else {
            echo "<script>
                    window.location.href = 'formulario.php';
                </script>";
            echo "error" . $sql . "<br>" . mysqli_error($conexion);            
        }        
    }
    mysqli_close($conexion);
?>