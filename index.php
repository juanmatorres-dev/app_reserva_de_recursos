<?php
//include_once("controller.php");
include_once("controllers/mainMenuController.php");
include_once("controllers/resourcesController.php");
include_once("controllers/timeSlotsController.php");
include_once("controllers/usersController.php");
include_once("controllers/reservationsController.php");

session_start();


/* Decidimos que tipo de controlador instanciamos */
if (!isset($_REQUEST['controller'])) {
    $controllerName = "MainMenuController";
} else {
    $controllerName = $_REQUEST['controller'];
}

$controller = new $controllerName();


//$controller = new Controller();



//$controller = new ResourcesController();
//$controller = new TimeSlotsController();
//$controller = new UsersController();
//$controller = new ReservationsController();

// Miramos a ver si hay alguna acción pendiente de realizar
if (!isset($_REQUEST['action'])) {
    // No la hay. Usamos la acción por defecto (mostrar el formulario de login)
    //$action = "showLoginForm";

    //$action = "showAllResources";
    //$action = "showAllTimeSlots";
    //$action = "showAllUsers";
    //$action = "showAllReservations";
    $action = "showMainMenu";
} else {
    // Sí la hay. La recuperamos.
    $action = $_REQUEST['action'];
}

// Ejecutamos el método del controlador que se llame como la acción
$controller->$action();
