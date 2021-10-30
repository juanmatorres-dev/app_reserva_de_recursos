<?php


echo "<h1>Añadir recurso</h1>";


  echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
            <input type='hidden' name='action' value='addNewResource'>
            <input type='hidden' name='controller' value='ResourcesController'>
                    Nombre:<input class='form-control' type='text' name='name' size='85' required><br>
                    Descripción:<input class='form-control' type='text' name='description' size='85' required><br>
                    Localización:<input class='form-control' type='text' name='location' size='85' required><br>
                    <input type='hidden' name='MAX_FILE_SIZE' value='500000' />
                    Imagen:<input class='form-control' type='file' name='image' required><br/>";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='addNewResource'>
  <input class='btn btn-outline-primary' type='submit' value='Modificar'>
</form>";
echo "<br/><p><a class='btn btn-primary btn-sm' href='index.php?action=showAllResources&controller=ResourcesController'>Volver</a></p>";






