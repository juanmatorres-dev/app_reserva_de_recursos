<?php

include_once("view.php");
include_once ("models/user.php");
include_once ("models/security.php");

class MainMenuController {
    
    private $view;

    public function __construct()
    {
        $this->view = new View(); // Vistas
        DB::createConnection();
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

        //$this->view->show("mainMenu"); // Borrar después ❗❗❗❗❗❗❗❗❗❗❗❗
        
        if(Security::thereIsSession()){
            include_once('views/menu/openSession.php');
            $this->view->show("mainMenu"); // No le pasamos null, ya que en en view.php , tiene asignado null por defecto
        }else{
            //echo "<h1>No has iniciado sesión</h1>";
            include_once('views/menu/closedSession.php');
            $this->view->show("users/loguin_form");
            
            //$errorLogin = "<h1>No has iniciado sesión</h1>";
            //include_once("views/users/loguin_form.php");
        }

        
    }

    /**
     * Comprueba si el usuario existe
     */
    public function checkLogin(){
        //$id = $_REQUEST["id"];
        //$realname = $_REQUEST["realname"];

        $username =  $_REQUEST["username"];
        $password = $_REQUEST["password"];

        $userData = User::checkLogin($username, $password);

        $id = $userData['id'];
        $realname = $userData['realname'];

        /*
        echo "<br/>";
        echo "checkLogin";
        echo "<br/>";
        echo "id : " . $id . " | nombre : " . $realname;
        echo "<br/>";
        echo $username;
        echo "<br/>";
        echo $password;
        */


        if($userData == null){
            echo "<h1> ❌ El usuario o la contraseña son incorrectos ❌</h1>";
            $this->view->show("users/loguin_form");
        }else{
            //echo "<h1>Usuario validado ✔</h1>";
            Security::createSession($id, $username);
            //echo "<h1>Bienevenido $realname</h1>";
            include_once('views/menu/openSession.php');
            $this->view->show("mainMenu"); // No le pasamos null, ya que en en view.php , tiene asignado null por defecto
        }
        
    }


    public function closeSession(){
        Security::closeSession();
        include_once('views/menu/closedSession.php');
        //echo "<h1>Sesión cerrada con éxito</h1>";
        include_once('views/notifications/closedSession.php');
        $this->view->show("users/loguin_form");
    }

}



