<?php

echo "<span id='type_of_content'>resources</span>";
echo "<br/>";
echo "Mostrando todos los recursos 💻";
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

echo "<span id='information'></span>";
echo "<br/>";
echo "<br/>";

if (isset($data['mensaje'])) { // Mensaje de borrado
    echo $data['mensaje'];
}

echo '<div class="center_step">';
echo '<p>';
echo '<span class="badge bg-secondary">Paso : <span class="badge bg-primary badge-pill"> 1</span></span>';
echo '</p>';
echo '<p>';
echo '<span class="badge bg-secondary"><span class="badge bg-primary badge-pill"></span>Elige un recurso</span>';
echo '</p>';
echo '</div>';

echo "<br/>";
echo "<br/>";

if(empty($data['resources']) != 1){ // Comprobamos si hay datos
    echo "<table border=1>";
    foreach ($data['resources'] as $resources) {

        echo "<tr>";
        echo "<td>" . $resources['name'] . "</td>";
        echo "<td>" . $resources['description'] . "</td>";
        echo "<td>" . $resources['location'] . "</td>";
        echo "<td>" . "<img src='" . $resources['image'] . "' width='50px'/>" . "</td>";

        echo "<td><a class='btn btn-outline-info' href='index.php?controller=TimeSlotsController&action=showAllTimeSlotsForReservation&idResource=" . $resources['id'] . "'>Reservar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
}else{
    echo "No se han encontrado recursos ❗";
}


//echo "<br/><br/>";

//echo "<a class='btn btn-outline-info' href='index.php?controller=ResourcesController&action=getNewResourceData'>Añadir</a>";//

/* Borrar
foreach ($data['permissions'] as $permission) {
    echo "<a href='index.php?action=" . $permission['action'] . "'>" . $permission['description'] . "</a><br>";
}
*/