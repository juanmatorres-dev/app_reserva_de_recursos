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
        
        include_once('views/menu/openSession.php');

        $data['resources'] = Resources::getAll();
        $data['mensaje'] = $mensaje; // Mensaje de borrado
        
        $this->view->show("resources/view_all" , $data);
    }


    /**
    * Muestra todos los recursos
    * @param String $mensaje Mensaje de borrado de un recurso 
    */
    public function showAllResourcesForReservation($mensaje = null){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
        include_once('views/menu/openSession.php');

        $data['resources'] = Resources::getAll();
        $data['mensaje'] = $mensaje; // Mensaje de borrado
        
        $this->view->show("resources/view_all_reservation" , $data);
    }



    /**
     * Obtiene los datos del recurso seleccionado
     */
    public function getResourceData(){
        $id = $_REQUEST["id"];

        // Obtener datos aquí
        $data['resources'] = Resources::getResourceById($id);
        
        include_once('views/menu/openSession.php');

        $this->view->show("resources/edit", $data);

    }

    /**
     * Modifica los datos del recurso
     */
    public function editResource() {
        $id = $_REQUEST["id"];
        $name =  $_REQUEST["name"];
        $description = $_REQUEST["description"];
        $location = $_REQUEST["location"];
        $image = "uploaded_images/resources/" . basename($_FILES['image']['name']);

        //echo $image .  "❗";


        /* Carga del archivo */

        $dir_subida = 'uploaded_images/resources/';
        $fichero_subido = $dir_subida . basename($_FILES['image']['name']);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Error en la subida del fichero!\n";
        }

        

        Resources::editResource($id, $name, $description, $location, $image);
        

        $this->showAllResources("Recurso editado correctamente ✔");
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


    /**
     * Obtiene los datos de un nuevo recurso por el formulario
     */
    public function getNewResourceData(){
        
        include_once('views/menu/openSession.php');

        $this->view->show("resources/add");

    }

    /**
     * Añade un nuevo recurso
     */
    public function addNewResource() {

        $name =  $_REQUEST["name"];
        $description = $_REQUEST["description"];
        $location = $_REQUEST["location"];
        $image = "uploaded_images/resources/" . basename($_FILES['image']['name']);

        //echo $image .  "❗";


        /* Carga del archivo */

        $dir_subida = 'uploaded_images/resources/';
        $fichero_subido = $dir_subida . basename($_FILES['image']['name']);


        if (move_uploaded_file($_FILES['image']['tmp_name'], $fichero_subido)) {
            echo "El fichero es válido y se subió con éxito.\n";
        } else {
            echo "¡Error en la subida del fichero!\n";
        }


        Resources::addNewResource($name, $description, $location, $image);
        
        $this->showAllResources("Recurso añadido correctamente ✔");
    }


}



