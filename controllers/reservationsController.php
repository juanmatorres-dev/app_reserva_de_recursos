<?php

include_once("view.php");
//include_once ("models/user.php");
include_once ("models/security.php");
include_once("models/reservationsModel.php");

class ReservationsController {
    
    private $view;

    public function __construct()
    {
        $this->view = new View(); // Vistas
        DB::createConnection();
    }
    

    /**
    * Muestra todos los recursos
     */
    public function showAllReservations(){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
       $data['reservations'] = Reservations::getAll();
        
        $this->view->show("reservations/view_all" , $data);
    }

    /**
    * Guarda el id de un recurso en una reserva
     */
    public function createNewReservations(){
        //$data['resources'] = DB::dataQuery("SELECT * FROM resources;");
        //$this->view->show("allResources" , $data);
        
        $idResource = $_REQUEST["idResource"];
        $idTimeSlot = $_REQUEST["idTimeSlot"];
        $idUser = Security::getUserId();
        $date = null;
        $remarks = "";

       $data['reservations'] = Reservations::addNewResource($idResource, $idUser, $idTimeSlot, $date, $remarks);
        
        $this->view->show("reservations/view_all" , $data);
    }

}



