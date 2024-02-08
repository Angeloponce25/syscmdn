<?php
//Controladores
require_once "Controlador/plantillaC.php";
require_once "Controlador/co_sesion.php";
require_once "Controlador/co_menu.php";
//Modelos
require_once "Modelo/mo_sesion.php";
require_once "Modelo/mo_menu.php";

$plantilla = new Plantilla();
$plantilla -> LlamarPlantilla();

?>