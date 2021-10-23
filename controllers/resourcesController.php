<?php

include_once("view.php");
//include_once ("models/user.php");
include_once ("models/security.php");
include_once("models/resourceModel.php");

class ResourcesController {
    
    private $view;

    public function __construct()
    {
        $this->view = new View(); // Vistas
        DB::createConnection();
    }
    

    /**
    * Muestra todos los recursos
     */
    public function showAllResources(){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
       $data['resources'] = Resources::getAll();
        
        $this->view->show("resources/view_all" , $data);
    }


    /**
     * Edita el recurso seleccionado
     */
    public function editResource(){

    }

    /**
     * Borra un recurso
     */
    public function deleteResource(){
        $id = $_REQUEST["id"];
        echo $id;
        Resources::deleteResource($id);
    }

}



