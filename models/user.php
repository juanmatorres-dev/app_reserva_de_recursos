<?php

include("db.php");

class User
{

    /**
     * Constructor de la clase.
     * Crea una conexión con la base de datos y la asigna a la variable $this->db
     */
    public function __construct()
    {
       DB::createConnection(); 
    }

    /**
     * Comprueba si un email y una password pertenecen a algún usuario de la base  de datos.
     * @param String $email El email del usuario que se quiere comprobar
     * @param String $pass La contraseña del usuario que se quiere comprobar
     * @return User $usuario Si el usuario existe, devuelve un array con todos los campos del usuario en su interior. Si no, devuelve un objeto null
     */
    public function checkLogin($email, $pass)
    {
       $result = DB::dataQuery("SELECT * FROM users WHERE email = '$email' AND password = '$pass'");
       if (count($result) > 0)
            return $result[0];
        else
            return null;
    }

    /**
     * Busca en la base de datos la lista de roles de un usuario
     * @param integer $idUser El id del usuario
     * @return array $resultArray Un array con todos los roles del usuario, o null si el usuario no existe o no tiene roles asignados
     */
    public function getUserRoles($idUser)
    {
        $resultArray = array();
        $result = DB::dataQuery("SELECT roles.* FROM roles
                                            INNER JOIN `roles-users` ON roles.id = `roles-users`.idRol
                                            WHERE `roles-users`.idUser = '$idUser'");
        if (count($result) > 0)
              return $result;
        else
              return null;
    }

    /**
     * Busca en la base de datos los permisos asociados a un rol
     * @param integer $idRol El id del rol
     * @return array $resultArray Un array con la lista de permisos asociados al rol, o null si el rol no existe o no tiene permisos asociados
     */
    public function getUserPermissions($idRol)
    {
        $resultArray = array();
        $result = DB::dataQuery("SELECT permissions.* FROM permissions 
                                            INNER JOIN `permissions-roles` ON permissions.id = `permissions-roles`.idPermission 
                                            WHERE `permissions-roles`.idRol = '$idRol'");
        if (count($result) > 0)
            return $result;
        else
            return null;

    }
}
?>