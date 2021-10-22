<?php

include_once("db.php");

class Users {

    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM users;");
        return $result;
    }
    

}
