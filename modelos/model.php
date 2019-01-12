<?php
class EnlacesPaginas
{
    public function enlacesPaginasModel($enlacesModel)
    {
        if ($enlacesModel == "inicio" ||
            $enlacesModel == "clientes" ||
            $enlacesModel == "tareas") {
            $module = "views/modules/" . $enlacesModel . ".php";
        }
        return $module;
    }
}
?>