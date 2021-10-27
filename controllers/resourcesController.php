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
    * @param String $mensaje Mensaje de borrado de un recurso 
    */
    public function showAllResources($mensaje = null){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
        $data['resources'] = Resources::getAll();
        $data['mensaje'] = $mensaje; // Mensaje de borrado
        
        $this->view->show("resources/view_all" , $data);
    }


    /**
     * Edita el recurso seleccionado
     */
    public function editResource(){
        $id = $_REQUEST["id"];

        // Obtener datos aquí
        $data['resources'] = Resources::getResourceById($id);

        $this->view->show("resources/edit", $data);
        
        /*
        $name =  $_REQUEST["name"];
        $description = $_REQUEST["description"];
        $location = $_REQUEST["location"];
        $image = $_REQUEST["image"];
        */

        //Resources::editResource($id, $name, $description, $location, $image);

    }

    /**
     * Borra un recurso
     */
    public function deleteResource(){
        $id = $_REQUEST["id"];
        //echo $id;
        Resources::deleteResource($id);
        //$data['resources'] = Resources::getAll();
        $this->showAllResources("Recurso borrado con éxito 🗑");
        //echo '<script src="js/redirect_to/resources.js"></script>'; 
    }

}



