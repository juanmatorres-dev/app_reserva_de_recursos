<?php

include_once("view.php");
//include_once ("models/user.php");
include_once ("models/security.php");
//include_once("models/");

class MainMenuController {
    
    private $view;

    public function __construct()
    {
        $this->view = new View(); // Vistas
    }
    

    /**
    * Muestra el menú
     */
    public function showMainMenu(){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
        /*
        $data['reservations'] = Reservations::getAll();
        
        $this->view->show("reservations/view_all" , $data);
        */

        $this->view->show("mainMenu"); // No le pasamos null, ya que en en view.php , tiene asignado null por defecto
    }

}



