<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agenda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css"> -->
    <link rel="stylesheet" href="vistas/assets/bootstrap.min.css">
    <!-- <script src="main.js"></script> -->
</head>

<body>
    <?php

    if (isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == "0k") {
        /* if (isset($_SESSION['perfil']) && $_SESSION['perfil'] == "Administrador") {
                include "modulos/cabezoteMobile.php";
                include "modulos/menu.php";
                include "modulos/cabezal.php";
            } else {
                include "modulos/cabezalUsuario.php";
            } */ } else {
        include "modulos/login.php";
    }

    ?>
</body>

</html> 