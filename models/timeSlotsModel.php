<?php

include_once("db.php");

class TimeSlots {

    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM timeslots;");
        return $result;
    }

    /**
     * Borra un tramo horario
     */
    public static function deleteTimeSlots($id){
        DB::dataManipulation("DELETE FROM timeslots WHERE id = '$id'");
    }
    

}
