<?php

/*
if(isset($errorLogin)){
    echo $errorLogin;
}
*/

echo "<h1>Iniciar sesión</h1>";

  echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
            <input type='hidden' name='action' value='checkLogin'>
            <input type='hidden' name='controller' value='MainMenuController'>
                    Nombre de usuario:<input class='form-control' type='text' name='username' size='85' required><br>
                    Contraseña:<input class='form-control' type='password' name='password' size='85' required><br>
                    ";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='checkLogin'>
  <input class='btn btn-outline-primary' type='submit' value='Iniciar sesión'>
</form>";
echo "<br/><p><a class='btn btn-primary btn-sm' href='index.php?action=getNewUserData&controller=UsersController'>Registrarse</a></p>";




