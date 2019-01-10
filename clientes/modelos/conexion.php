<?php #para crear la conexion a la base de datos
    /* $conexion=mysqli_connect($host="localhost",$user="root",$pw="") or die ("problemas al conectar con la base de datos");#en la variable conexion se guarda la conexion al servidor
    mysqli_set_charset($conexion,'utf8');
    mysqli_select_db($conexion,$db="agencia") or die ("problemas al conectar con la base de datos"); */#para verificar la conexion a la base de datos
    #insertar en la tabla orden que contiene (nombre,direccion,orden) los valores nombre, direccion, orden

class Conexion
{
    function obtenerConexion()
    {
        $host = "localhost";
        $dbname = "agencia";
        $usuario = "root";
        $contrasena = "";
        $conexion = new PDO("mysql:host=$host;dbname=$dbname;", $usuario, $contrasena);
        return $conexion;
    }
}

/* try {
    $conexion = new PDO('mysql:host=$host;dbname=$dbname', $usuario, $contrasena);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} */
?>