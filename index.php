<?php
//include_once("controller.php");
include_once("controllers/resourcesController.php");


session_start();

//$controller = new Controller();



$controller = new ResourcesController();

// Miramos a ver si hay alguna acción pendiente de realizar
if (!isset($_REQUEST['action'])) {
// No la hay. Usamos la acción por defecto (mostrar el formulario de login)
    //$action = "showLoginForm";
    $action = "showAllResources";
    $action = "showAllResources";
} else {
// Sí la hay. La recuperamos.
    $action = $_REQUEST['action'];
}

// Ejecutamos el método del controlador que se llame como la acción
$controller->$action();
