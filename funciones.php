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
}
?>