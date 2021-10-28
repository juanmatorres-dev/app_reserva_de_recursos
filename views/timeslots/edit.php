<?php


echo "<h1>Editar tramo horario</h1>";


foreach ($data['timeSlots'] as $timeSlots) {

  echo "<form enctype='multipart/form-data' action = 'index.php' method = 'POST'>
            <input type='hidden' name='action' value='editTimeslots'>
            <input type='hidden' name='controller' value='TimeSlotsController'>
				    <input type='hidden' name='id' value='" . $timeSlots['id'] . "'>
                    Día de la semana:<input class='form-control' type='date' name='dayOfWeek' size='85' value='" . $timeSlots['dayOfWeek'] . "' required><br>
                    Hora de inicio:<input class='form-control' type='datetime-local' name='startTime' size='85' value='" . $timeSlots['startTime'] . "' required><br>
                    Hora de finalización:<input class='form-control' type='datetime-local' name='endTime' size='85' value='" . $timeSlots['endTime'] . "' required><br>
                    ";

// Finalizamos el formulario
echo "  <input type='hidden' name='action' value='editTimeslots'>
  <input class='btn btn-outline-primary' type='submit' value='Modificar'>
</form>";
echo "<br/><p><a class='btn btn-primary btn-sm' href='index.php?action=showAllTimeSlots&controller=TimeSlotsController'>Volver</a></p>";


}



