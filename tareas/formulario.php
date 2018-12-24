<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DavidTours | Formulario</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        require "barraNavegacionTareas.php";
    ?>
    <div class="container">        
        <form action="consultaNueva.php" method="POST">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="nombre">Nombre de la Tarea: </label>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre de la Tarea"> 
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion: </label>
                        <textarea name="descripcion" class="form-control" cols="30" rows="10" placeholder="Descripción"></textarea>
                    </div>                        
                    </div>    
            </div>
            <button type="submit" class="btn btn-success">Aceptar</button>
            <a href="tareas.php"><button type="button" class="btn btn-secondary">Regresar</button></a>                    
            <style>
            .btn {
                float: right;
                margin: 5px;                        
            }
            </style>
        </form>
    </div>
    

    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.css"></script>
</body>
</html>