<?php


echo "<h1>hola edit</h1>";




echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
				    <input type='hidden' name='id' value='$id'>
                    Nombre:<input class='form-control' type='text' name='name' value='$name' required><br>
                    Descripción:<input class='form-control' type='text' name='description' value='$description' required><br>
                    Localización:<input class='form-control' type='text' name='location' value='$location' required><br>
                    <input type='hidden' name='MAX_FILE_SIZE' value='500000' />
                    Imagen:<input class='form-control' type='file' name='image' required><br/>";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='editResource'>
  <input class='btn btn-outline-primary' type='submit' value='Modificar'>
</form>";
echo "<br/><p><a class='btn btn-primary btn-sm' href='index.php'>Volver</a></p>";
