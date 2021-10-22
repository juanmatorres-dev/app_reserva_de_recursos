<?php
//include_once("controller.php");
include_once("controllers/resourcesController.php");
include_once("controllers/timeSlotsController.php");

session_start();

/* Decidimos que tipo de controlador instanciamos */
if (!isset($_REQUEST['controller'])) {
    $controllerName = "TimeSlotsController";
} else {
    $controllerName = $_REQUEST['controller'];
}

$controller = new $controllerName;

//$controller = new Controller();



//$controller = new ResourcesController();
//$controller = new TimeSlotsController();

// Miramos a ver si hay alguna acción pendiente de realizar
if (!isset($_REQUEST['action'])) {
// No la hay. Usamos la acción por defecto (mostrar el formulario de login)
    //$action = "showLoginForm";
    
    //$action = "showAllResources";
    $action = "showAllTimeSlots";
} else {
// Sí la hay. La recuperamos.
    $action = $_REQUEST['action'];
}

// Ejecutamos el método del controlador que se llame como la acción
$controller->$action();
