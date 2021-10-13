<?php

echo "Mostrando todos los recursos 💻";

/*
while ($fila = $result->fetch_object()) {
    echo "<tr>";
    echo "<td>" . $fila->titulo . "</td>";
    echo "<td>" . $fila->genero . "</td>";
    echo "<td>" . $fila->pais . "</td>";
    echo "<td>" . $fila->anyo . "</td>";
    echo "<td>" . "<img src='" . $fila->cartel . "' width='50px'/>" . "</td>";

    echo "<td>";
    


    echo "</td>";

    echo "<td><a class='btn btn-outline-info' href='index.php?action=formularioModificarPelicula&id_peliculas=" . $fila->id_peliculas . "'>Modificar</a></td>";
    echo "<td><a class='btn btn-outline-danger confirmacion' href='index.php?action=borrarPelicula&id_peliculas=" . $fila->id_peliculas . "'>Borrar</a></td>";
    echo "</tr>";
}

foreach ($data['resources'] as $key => $value) {
    # code...
}

foreach ($data['permissions'] as $permission) {
    echo "<a href='index.php?action=" . $permission['action'] . "'>" . $permission['description'] . "</a><br>";
}
*/