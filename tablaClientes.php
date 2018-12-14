<table class="table">
<?php
require 'funcionesTabla.php';
$obj = new funcionesTabla();
$obj->encabezadoTabla();
?>
    <tbody class="text-center">
        <tr>
<?php
include "conexion.php";
$resultado = mysqli_query($conexion, "SELECT * FROM clientes ORDER BY apellidoPaterno");
while ($registro = mysqli_fetch_array($resultado)) {
    $obj = new funcionesTabla();
    $obj->cuerpoTabla($registro);
    ?>
        </tr>
<?php
}
mysqli_close($conexion);
?>
    </tbody>
</table>