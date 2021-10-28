<?php


echo "<h1>Editar usuario</h1>";


foreach ($data['users'] as $users) {

  echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
            <input type='hidden' name='action' value='editUser'>
            <input type='hidden' name='controller' value='UsersController'>
				    <input type='hidden' name='id' value='" . $users['id'] . "'>
                    Nombre de ususario:<input class='form-control' type='text' name='name' size='85' value='" . $users['username'] . "' required><br>
                    Contraseña:<input class='form-control' type='password' name='description' size='85' value='" . $users['password'] . "' required><br>
                    Nombre real:<input class='form-control' type='text' name='location' size='85' value='" . $users['realname'] . "' required><br>
                    ";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='editUser'>
  <input class='btn btn-outline-primary' type='submit' value='Modificar'>
</form>";
echo "<br/><p><a class='btn btn-primary btn-sm' href='index.php?action=showAllUsers&controller=UsersController'>Volver</a></p>";


}



