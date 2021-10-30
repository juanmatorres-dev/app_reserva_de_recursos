<?php


echo "<h1>Añadir tramo horario</h1>";


  echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
            <input type='hidden' name='action' value='addNewTimeslot'>
            <input type='hidden' name='controller' value='TimeSlotsController'>
                    Día de la semana:<input class='form-control' type='date' name='dayOfWeek' size='85' required><br>
                    Hora de inicio:<input class='form-control' type='datetime-local' name='startTime' size='85' required><br>
                    Hora de finalización:<input class='form-control' type='datetime-local' name='endTime' size='85' required><br>
                    ";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='addNewTimeslot'>
  <input class='btn btn-outline-primary' type='submit' value='Modificar'>
</form>";
echo "<br/><p><a class='btn btn-primary btn-sm' href='index.php?action=showAllTimeSlots&controller=TimeSlotsController'>Volver</a></p>";





