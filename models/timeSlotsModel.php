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

    
    
    /**
     * Obtiene los datos de un tramo horario con un id concreto
     */
    public static function getTimeslotsById($id){
        $result = DB::dataQuery("SELECT * FROM timeslots WHERE id = '$id';");
        return $result;
    }

    
    /**
     * Edita un tramo horario
     */
    public static function editTimeslots($id, $dayOfWeek, $startTime, $endTime){
        DB::dataManipulation("UPDATE timeslots SET dayOfWeek = '$dayOfWeek',startTime = '$startTime',endTime = '$endTime'
                            WHERE id = '$id'");
    }


}
