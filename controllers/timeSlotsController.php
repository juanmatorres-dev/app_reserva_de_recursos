<?php

include_once("view.php");
//include_once ("models/user.php");
include_once ("models/security.php");
include_once("models/timeSlotsModel.php");

class TimeSlotsController {
    
    private $view;

    public function __construct()
    {
        $this->view = new View(); // Vistas
        DB::createConnection();
    }
    

    /**
    * Muestra todos los recursos
     */
    public function showAllTimeSlots(){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
       $data['timeSlots'] = TimeSlots::getAll();
        
        $this->view->show("timeslots/view_all" , $data);
    }

    /**
     * Borra un tramo horario
     */
    public function deleteTimeSlots(){
        $id = $_REQUEST["id"];
        //echo $id;
        TimeSlots::deleteTimeSlots($id);
        echo '<script src="js/redirect_to/timeslots.js"></script>'; 
    }

}



