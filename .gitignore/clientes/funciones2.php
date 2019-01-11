<?php
class funciones
{
    function verificar_sesion()
    {
        session_start();
        if (!isset($_SESSION['usuario'])) {
            header('location: ../login.html');
        }
    }
    function head($cabezal)
    {
        ?>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <title>Davidtours | <?php echo $cabezal ?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <link
            rel="stylesheet"
            type="text/css"
            media="screen"
            href="../css/bootstrap.min.css"
            />
        </head>
        <?php

    }
}
?>