<?php

include_once("view.php");
//include_once ("models/user.php");
include_once ("models/security.php");
include_once("models/usersModel.php");

class UsersController {
    
    private $view;

    public function __construct()
    {
        $this->view = new View(); // Vistas
        DB::createConnection();
    }
    

    /**
    * Muestra todos los recursos
     */
    public function showAllUsers(){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
       $data['users'] = Users::getAll();
        
        $this->view->show("users/view_all" , $data);
    }


    /**
     * Borra un usuario
     */
    public function deleteUsers(){
        $id = $_REQUEST["id"];
        //echo $id;
        Users::deleteUser($id);
        echo '<script src="js/redirect_to/users.js"></script>'; 
    }

}



