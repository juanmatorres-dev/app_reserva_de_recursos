<?php

include_once("db.php");

class Users {

    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM users;");
        return $result;
    }
    


    /**
     * Borra un usuario
     */
    public static function deleteUser($id){
        DB::dataManipulation("DELETE FROM users WHERE id = '$id'");
    }


}
