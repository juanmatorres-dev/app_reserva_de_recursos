<?php

class Resources {

    public static function getAll(){
        return DB::dataQuery("SELECT * FROM resources;");
    }
    

}
    