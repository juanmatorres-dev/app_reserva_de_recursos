<?php
include("controller.php");
$controller = new Controller();

// Miramos a ver si hay alguna acci�n pendiente de realizar
if (!isset($_REQUEST['action'])) {
// No la hay. Usamos la acci�n por defecto (mostrar el formulario de login)
    $action = "showLoginForm";
} else {
// S� la hay. La recuperamos.
    $action = $_REQUEST['action'];
}

// Ejecutamos el m�todo del controlador que se llame como la acci�n
$controller->$action();
