<?php

echo "<h1>Registro de nuevo usuario</h1>";

  echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
            <input type='hidden' name='action' value='addNewUser'>
            <input type='hidden' name='controller' value='UsersController'>
                    Nombre de usuario:<input class='form-control' type='text' name='username' size='85' required><br>
                    Contraseña:<input class='form-control' type='password' name='password' size='85' required><br>
                    Nombre real:<input class='form-control' type='text' name='realname' size='85' required><br>
                    ";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='addNewUser'>
  <input class='btn btn-outline-primary' type='submit' value='Registrarse'>
</form>";
//echo "<br/><p><a class='btn btn-primary btn-sm' href='index.php?action=showAllUsers&controller=UsersController'>Volver</a></p>";




