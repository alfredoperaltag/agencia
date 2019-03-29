<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/tareas.controlador.php";

require_once "modelos/usuario.modelo.php";
/* require_once "modelos/clientes.modelo.php";
require_once "modelos/tareas.modelo.php"; */

/* require_once "models/model.php"; */
$plantilla = new ControladorPlantilla();
$plantilla->ctrPlantilla();
 