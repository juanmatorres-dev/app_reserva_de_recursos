<?php

include_once("db.php");

class Resources {

    /**
     * Obtiene todos los datos de la tabla
     */
    public static function getAll(){
        $result = DB::dataQuery("SELECT * FROM resources;");
        return $result;
    }

    /**
     * Borra un recurso
     */
    public static function deleteResource($id){
        DB::dataManipulation("DELETE FROM resources WHERE id = '$id'");
    }
    

}
