<?php

include_once("db.php");

class Reservations {

    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM reservations;");
        return $result;
    }
    

}
