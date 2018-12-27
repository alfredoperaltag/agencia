<?php
require "../funciones.php";
$obj = new funciones();
$obj->verificar_sesion();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DavidTours | Tareas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body >
    <div class="container-fluid"> 
        <?php
        require "barraNavegacionTareas.php";
        ?>
        <table class = table>
            <thead class="thead-dark">
                <tr class="text-center">                                           
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                    <th><a href="formularioRegistrar.php"><button class="btn btn-success">Nueva</button></a></th>                
                </tr> 
            </thead>
        <?php
        do {
            $id = $registro['idTarea'];
            ?> 
                        <tbody class = "text-center">
                            <tr>                   
                                <th><?php echo $registro['nombre'] ?></td>
                                <td><?php echo $registro['descripcion'] ?></td>                    
                                <td><?php echo "<a href='formularioModificar.php?id=$id'><button class='btn btn-outline-primary'>Modificar</button></a>" ?></td>
                                <td><button class="btn btn-outline-danger" onclick="confirmar(<?php echo $id ?>)">Eliminar</button></td>
                            </tr>                
                        </tbody>
                    <?php

                } while ($registro = mysqli_fetch_array($consulta));
                ?>          
        </table>        
    </div>

    <script>
    function confirmar(id){
        if (confirm("¿Estas seguro de eliminarlo?")) {
            window.location.href = "consultaEliminar.php?id=" + id;
        }
    }
    </script>

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.css"></script>
</body>
</html>    