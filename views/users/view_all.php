<?php

echo "<span id='type_of_content'>users</span>";
echo "<br/>";
echo "Mostrando todos los usuarios 👫";
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

if(empty($data['users']) != 1){
    echo "<table border=1>";
    foreach ($data['users'] as $users) {

        echo "<tr>";
        echo "<td>" . $users['username'] . "</td>";
        echo "<td>" . $users['password'] . "</td>";
        echo "<td>" . $users['realname'] . "</td>";

        echo "<td><a class='btn btn-outline-info' href='index.php?action=formularioModificarPelicula&id_peliculas=" . $users['id'] . "'>Modificar</a></td>";
        echo "<td><a class='btn btn-outline-danger confirmacion' href='index.php?controller=UsersController&action=deleteUsers&id=" . $users['id'] . "'>Borrar</a></td>";
        echo "</tr>";
    }

    echo "</table>";
}else{
    echo "No se han encontrado usuarios ❗";
}

echo "<br/><br/>";

/* Borrar
foreach ($data['permissions'] as $permission) {
    echo "<a href='index.php?action=" . $permission['action'] . "'>" . $permission['description'] . "</a><br>";
}
*/