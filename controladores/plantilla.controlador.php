<?php
class ControladorPlantilla
{
    public function ctrPlantilla()
    {
        include "vistas/plantilla.html";
    }

    /* public function enlacesPaginasController()
    {
        $enlacesController = $_GET["action"];
        $respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
        include $respuesta;
    } */
}
?>