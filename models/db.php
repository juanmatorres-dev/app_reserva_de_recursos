<?php

include_once("config.php");

/**
 * Capa de abstracción de datos.
 * Accede a MySql o MariaDB, haciendo que el resto de la aplicación
 * no sepa qué gestor de bases de datos se está usando en realidad.
 */
class DB {

    private static $connection; // Aquí guardaremos la conexión con la base de datos

    /**
     * Crea la conexión con la base de datos
     * @return boolean true si la conexión se realiza con normalidad y false en caso de error
     */
    public static function createConnection() {
        self::$connection = new mysqli(Config::$dbhost, Config::$dbuser, Config::$dbpass, Config::$dbname);
        if (self::$connection->connect_errno) return false;
        else return true;
    }

    /**
     * Cierra la conexión con la base de datos
     */
    public static function closeConnection() {
        if (self::$connection) self::$connection->close();
    }

    /**
     * Lanza una consulta (SELECT) contra la base de datos.
     * ¡Ojo! Este método solo funcionará con sentencias SELECT.
     * @param $sql El código de la consulta que se quiere lanzar
     * @return array Un array bidimensional con los resultados de la consulta (o null si la consulta no devolvió nada)
     */
    
    public static function dataQuery($sql) {
        
        //echo "<br/>";
        //echo $sql;

        $res = self::$connection->query($sql);
        $resArray = array();
        if ($res->num_rows > 0) {
            while ($row = $res->fetch_array()) {
                $resArray[] = $row;
            }
        } else {
            
            $resArray = null;
        }
        return $resArray;
    }

    /**
     * Lanza una sentencia de manipulación de datos contra la base de datos.
     * ¡Ojo! Este método solo funcionará con sentencias INSERT, UPDATE, DELETE y similares.
     * @param $sql El código de la consulta que se quiere lanzar
     * @return integer El número de filas insertadas, modificadas o borradas por la sentencia SQL (0 si no produjo ningún efecto).
     */
    public static function dataManipulation($sql) {
        self::$connection->query($sql);
        return self::$connection->affected_rows;
    }
}
