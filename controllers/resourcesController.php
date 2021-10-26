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
        $this->view->show("resources/edit");
        
        // Obtener datos aquí

        $id = $_REQUEST["id"];
        $name =  $_REQUEST["name"];
        $description = $_REQUEST["description"];
        $location = $_REQUEST["location"];
        $image = $_REQUEST["image"];

        Resources::editResource($id, $name, $description, $location, $image);

    }

    /**
     * Borra un recurso
     */
    public function deleteResource(){
        $id = $_REQUEST["id"];
        //echo $id;
        Resources::deleteResource($id);
        echo '<script src="js/redirect_to/resources.js"></script>'; 
    }

}



