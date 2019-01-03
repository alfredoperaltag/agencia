<?php
/* require "../funciones.php";
$obj = new funciones;
$obj->verificar_sesion(); */
class formulario
{
    /* function headerFormulario()
    {
        ?>        
            <head>
                <meta charset="utf-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>DavidTours | Formulario</title>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
                <script src="main.js"></script>
            </head>

        <?php

    } */
    function cuerpoFormulario($nombre, $descripcion)
    {
        ?>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Nombre de la Tarea: </label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Tarea" value="<?php echo $nombre ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion: </label>
                        <textarea name="descripcion" class="form-control" cols="30" rows="10" placeholder="Descripción"><?php echo $descripcion ?></textarea>
                    </div>                        
                    </div>    
            </div>
            <button type="submit" class="btn btn-success">Aceptar</button>
            <a href="consultaTareas.php"><button type="button" class="btn btn-secondary">Regresar</button></a>                    
            <style>
            .btn {
                float: right;
                margin: 5px;                        
            }
            </style>
           
        <?php

    }
}
?>