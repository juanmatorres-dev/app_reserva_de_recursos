<?php

include_once("db.php");

class Resources {

    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM resources;");
        return $result;
    }
    

}
    