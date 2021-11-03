<?php
echo "<br/>";
echo "🏠 Menú principal 🏠<br>";
echo "<br/>";

/*
foreach ($data['permissions'] as $permission) {
    echo "<a href='index.php?action=" . $permission['action'] . "'>" . $permission['description'] . "</a><br>";
}
*/

echo "<a href='index.php?action=showAllResources&controller=ResourcesController'>Mantenimiento de recursos</a>";

echo "<br/>";
echo "<br/>";

echo "<a href='index.php?action=showAllTimeSlots&controller=TimeSlotsController'>Mantenimiento de tramos horarios</a>";
echo "<br/>";
echo "<br/>";

echo "<a href='index.php?action=showAllUsers&controller=UsersController'>Mantenimiento de usuarios</a>";

echo "<br/>";
echo "<br/>";

//echo "<a href='index.php?action=closeSession&controller=MainMenuController'>Cerrar sesión</a>";



