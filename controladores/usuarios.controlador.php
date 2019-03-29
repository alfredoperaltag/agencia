<?php
class ControladorUsuarios
{
    public static function ctrIngresoUsuario()
    {
        if (isset($_POST['nombreUsuario'])) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nombreUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])
            ) {
                $encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
            }
        }
    }
}
