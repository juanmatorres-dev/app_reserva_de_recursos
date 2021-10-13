<?php

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

echo "<table border=1>";
foreach ($data['resources'] as $resources) {

    echo "<tr>";
    echo "<td>" . $resources['name'] . "</td>";
    echo "<td>" . $resources['description'] . "</td>";
    echo "<td>" . $resources['location'] . "</td>";
    echo "<td>" . "<img src='" . $resources['image'] . "' width='50px'/>" . "</td>";

    echo "<td><a class='btn btn-outline-info' href='index.php?action=formularioModificarPelicula&id_peliculas=" . $resources['id'] . "'>Modificar</a></td>";
    echo "<td><a class='btn btn-outline-danger confirmacion' href='index.php?action=borrarPelicula&id_peliculas=" . $resources['id'] . "'>Borrar</a></td>";
    echo "</tr>";
}

echo "</table>";

/* Borrar
foreach ($data['permissions'] as $permission) {
    echo "<a href='index.php?action=" . $permission['action'] . "'>" . $permission['description'] . "</a><br>";
}
*/