<?php

include_once("view.php");
include_once ("models/user.php");
include_once ("models/security.php");
include_once("models/resources.php");

class ResourcesController {
    
    private $view, $resource;

    public function __construct()
    {
        $this->view = new View(); // Vistas
        $this->resource = new Resources(); // Modelo de recursos    
    }


    /**
    * Muestra todos los recursos
     */
    public function showAllResources(){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
        $data['resources'] = Resources::getAll();
        
        $this->view->show("allResources" , $data);
    }

}



