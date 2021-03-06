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
     * Obtiene los datos de recursos con un id concreto
     */
    public static function getResourceById($id){
        $result = DB::dataQuery("SELECT * FROM resources WHERE id = '$id';");
        return $result;
    }


    /**
     * Borra un recurso
     */
    public static function deleteResource($id){
        DB::dataManipulation("DELETE FROM resources WHERE id = '$id'");
    }

    /**
     * Edita un recurso
     */
    public static function editResource($id, $name, $description, $location, $image){
        DB::dataManipulation("UPDATE resources SET name = '$name',description = '$description',location = '$location',image = '$image'
                            WHERE id = '$id'");
    }
    
    /**
     * Añade un nuevo recurso
     */
    public static function addNewResource($name, $description, $location, $image) {
        DB::dataManipulation("INSERT INTO resources (name, description, location, image) VALUES ('$name', '$description', '$location', '$image')");
        
    }

}
