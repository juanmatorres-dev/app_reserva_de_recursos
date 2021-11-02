<?php

/*
if(isset($errorLogin)){
    echo $errorLogin;
}
*/

echo '<article class="card bg-light mb-3 login_center" style="max-width: 20rem;">';

//echo '<div class="card-header">Iniciar sesión</div>';

echo '
<div class="card-body">
  <h4 class="card-title form_title">Iniciar sesión</h4>';

 // echo '<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>';

  echo '
  </div>';

echo '<p>';
echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
            <input type='hidden' name='action' value='checkLogin'>
            <input type='hidden' name='controller' value='MainMenuController'>
                    Nombre de usuario:<input class='form-control' type='text' name='username' size='85' required><br>
                    Contraseña:<input class='form-control' type='password' name='password' size='85' required><br>
                    ";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='checkLogin'>
<p class='button_container'>
  <input class='btn btn-outline-primary buttons' type='submit' value='Iniciar sesión'>
  </p>
</form>
</p>";

echo "<br/><p class='button_container'><a class='btn btn-primary btn-sm buttons' href='index.php?action=getNewUserData&controller=UsersController'>Registrarse</a></p>";

