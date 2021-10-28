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


    /**
     * Obtiene los datos de un usuario con un id concreto
     */
    public static function getUserById($id){
        $result = DB::dataQuery("SELECT * FROM users WHERE id = '$id';");
        return $result;
    }

    /**
     * Edita un usuario
     */
    public static function editUser($id, $username, $password, $realname){
        DB::dataManipulation("UPDATE users SET username = '$username',password = '$password',realname = '$realname'
                            WHERE id = '$id'");
    }


}
