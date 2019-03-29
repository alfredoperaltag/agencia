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
                $tabla = "usuarios";
                $item = "usuario";
                $valor = $_POST['nombreUsuario'];

                $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

                if ($respuesta['usuario'] == $_POST['nombreUsuario'] && $respuesta['password'] == $encryptar) {
                    $_SESSION['iniciarSesion'] = "ok";
                    $_SESSION['id'] = $respuesta['id'];
                    $_SESSION['nombre'] = $respuesta['nombre'];
                    $_SESSION['usuario'] = $respuesta['usuario'];
                    $_SESSION['perfil'] = $respuesta['perfil'];
                    echo '<script> window.location = "inicio"; </script>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>¡Usuario o contraseña incorrecta!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span class="fa fa-times"></span>
					</button>
				</div>';
                }
            }
        }
    }
}
