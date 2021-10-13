<?php
include("controller.php");
$controller = new Controller();

// Miramos a ver si hay alguna acción pendiente de realizar
if (!isset($_REQUEST['action'])) {
// No la hay. Usamos la acción por defecto (mostrar el formulario de login)
    //$action = "showLoginForm";
    $action = "showAllResources";
} else {
// Sí la hay. La recuperamos.
    $action = $_REQUEST['action'];
}

// Ejecutamos el método del controlador que se llame como la acción
$controller->$action();
