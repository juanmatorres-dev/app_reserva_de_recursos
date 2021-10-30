<?php

echo "<span id='type_of_content'>timeslots</span>";
echo "<br/>";
echo "Mostrando todos los tramos horarios ⌛";
echo "<br/> <br/><br/>";

/*
while ($fila = $result->fetch_object()) {
    echo "<tr>";
    echo "<td>" . $fila->name . "</td>";
    echo "<td>" . $fila->description . "</td>";
    echo "<td>" . $fila->location . "</td>";
    echo "<td>" . "<img src='" . $fila->image . "' width='50px'/>" . "</td>";

    echo "<td>";
    


    echo "</td>";

    //echo "<td><a class='btn btn-outline-info' href='index.php?action=formularioModificarPelicula&id_peliculas=" . $fila->id_peliculas . "'>Modificar</a></td>";
    //echo "<td><a class='btn btn-outline-danger confirmacion' href='index.php?action=borrarPelicula&id_peliculas=" . $fila->id_peliculas . "'>Borrar</a></td>";
    echo "</tr>";
}
*/

if (isset($data['mensaje'])) { // Mensaje de borrado
    echo $data['mensaje'];
}


if(empty($data['timeSlots']) != 1){
    echo "<table border=1>";
    foreach ($data['timeSlots'] as $timeSlots) {

        echo "<tr>";
        echo "<td>" . $timeSlots['dayOfWeek'] . "</td>";
        echo "<td>" . $timeSlots['startTime'] . "</td>";
        echo "<td>" . $timeSlots['endTime'] . "</td>";

        echo "<td><a class='btn btn-outline-info' href='index.php?controller=TimeSlotsController&action=getTimeSlotData&id=" . $timeSlots['id'] . "'>Modificar</a></td>";
        echo "<td><a class='btn btn-outline-danger confirmacion' href='index.php?controller=TimeSlotsController&action=deleteTimeSlots&id=" . $timeSlots['id'] . "'>Borrar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
}else{
    echo "No se han encontrado tramos horarios ❗";
}

echo "<br/><br/>";

echo "<a class='btn btn-outline-info' href='index.php?controller=TimeSlotsController&action=getNewTimeslotData'>Añadir</a>";

/* Borrar
foreach ($data['permissions'] as $permission) {
    echo "<a href='index.php?action=" . $permission['action'] . "'>" . $permission['description'] . "</a><br>";
}
*/