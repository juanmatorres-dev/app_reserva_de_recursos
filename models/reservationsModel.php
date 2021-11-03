<?php

include_once("db.php");

class Reservations {

    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM reservations;");
        return $result;
    }

    /**
     * 
     */
    public static function addNewResource($idResource, $idUser, $idTimeSlot, $date, $remarks) {
        DB::dataManipulation("INSERT INTO resources (idResource, idUser, idTimeSlot, date , remarks) VALUES ('$idResource', '$idUser', '$idTimeSlot', '$date' , '$remarks')");
        
    }
    

}
