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
    public function showAllTimeSlots($mensaje = null){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
        $data['timeSlots'] = TimeSlots::getAll();
        $data['mensaje'] = $mensaje; // Mensaje de borrado


        $this->view->show("timeslots/view_all" , $data);
    }

    /**
     * Borra un tramo horario
     */
    public function deleteTimeSlots(){
        $id = $_REQUEST["id"];
        //echo $id;
        TimeSlots::deleteTimeSlots($id);
        $this->showAllTimeSlots("Tramo horario borrado con éxito 🗑");
        
        //echo '<script src="js/redirect_to/timeslots.js"></script>'; 
    }


    
    /**
     * Obtiene los datos del tramo horario seleccionado
     */
    public function getTimeSlotData(){
        $id = $_REQUEST["id"];

        // Obtener datos aquí
        $data['timeSlots'] = TimeSlots::getTimeslotsById($id);

        $this->view->show("timeslots/edit", $data);

    }



    /**
     * Modifica los datos del tramo horario
     */
    public function editTimeslots() {
        $id = $_REQUEST["id"];
        $dayOfWeek =  $_REQUEST["dayOfWeek"];
        $startTime = $_REQUEST["startTime"];
        $endTime = $_REQUEST["endTime"];



        TimeSlots::editTimeslots($id, $dayOfWeek, $startTime, $endTime);

        $this->showAllTimeSlots("Tramo horario editado correctamente ✔");
    }

}



