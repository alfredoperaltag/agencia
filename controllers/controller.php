<?php
class MvcController
{
    public function plantilla()
    {
        include "views/plantilla.php";
    }

    function enlacesPaginasController()
    {
        $enlaces = $_GET["action"];
    }
}
?>