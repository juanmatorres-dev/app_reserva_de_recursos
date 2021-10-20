<?php

include_once("db.php");

class TimeSlots {

    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM timeslots;");
        return $result;
    }
    

}
