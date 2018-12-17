<?php
    $palabraBuscada = $_GET['palabraBuscada'];
    if (empty($palabraBuscada)) 
    {
        echo '<script type="text/javascript">alert("Ingrese una palabra para buscar");</script>';
        echo '<script> window.location.href = "clientes.php"; </script>';
    } else 
    {
        include "conexion.php";
        $resultado = mysqli_query($conexion, "SELECT * FROM clientes WHERE nombre LIKE '%" . $palabraBuscada . "%'
        OR apellidoPaterno LIKE '%" . $palabraBuscada . "%'
        OR apellidoMaterno LIKE '%" . $palabraBuscada . "%'
        OR telefono LIKE '%" . $palabraBuscada . "%'
        OR curp LIKE '%" . $palabraBuscada . "%'
        OR fechanacimiento LIKE '%" . $palabraBuscada . "%'
        OR familiares LIKE '%" . $palabraBuscada . "%'
        OR ruta LIKE '%" . $palabraBuscada . "%'
        OR descripcion LIKE '%" . $palabraBuscada . "%'");

        if ($registro = mysqli_fetch_array($resultado)) 
        {
            require 'tablaClientes.html';        
        } else 
        {
            echo '<script type="text/javascript">alert("No se encontraron resultados");</script>';
            echo '<script> window.location.href = "clientes.php"; </script>';
        }
    }
?>
