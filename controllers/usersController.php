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
    public function showAllUsers($mensaje = null){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
        $data['users'] = Users::getAll();
        $data['mensaje'] = $mensaje; // Mensaje de borrado

        $this->view->show("users/view_all" , $data);
    }


    /**
     * Borra un usuario
     */
    public function deleteUsers(){
        $id = $_REQUEST["id"];
        //echo $id;
        Users::deleteUser($id);
        $this->showAllUsers("Usuario borrado con éxito 🗑");
        //echo '<script src="js/redirect_to/users.js"></script>'; 
    }


    /**
     * Obtiene los datos del usuario seleccionado
     */
    public function getUserData(){
        $id = $_REQUEST["id"];

        // Obtener datos aquí
        $data['users'] = Users::getUserById($id);

        $this->view->show("users/edit", $data);

    }


    /**
     * Modifica los datos del usuario
     */
    public function editUser() {
        $id = $_REQUEST["id"];
        $username =  $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $realname = $_REQUEST["realname"];



        Users::editUser($id, $username, $password, $realname);

        $this->showAllUsers("Usuario editado correctamente ✔");
    }


    /**
     * Obtiene los datos de un nuevo usuario por el formulario
     */
    public function getNewUserData(){

        $this->view->show("users/add");

    }

    /**
     * Añade un nuevo usuario
     */
    public function addNewUser() {

        $username =  $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $realname = $_REQUEST["realname"];
        
        Users::addNewUser($username, $password, $realname);
        
        $this->showAllUsers("Usuario registrado correctamente ✔");
    }



}



