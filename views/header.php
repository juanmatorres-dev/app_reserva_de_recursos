<!DOCTYPE html>
<html lang="es">

<head>
    <title>Gestor de recursos</title>
    <!-- Aquí incluiría cualquier CSS o JS que vaya a usar por toda la web -->
    <!-- Por ejemplo: <link rel="stylesheet" type="text/css" href="assets/style.css"> -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/bootswatch/cerulean/bootstrap.css" /> <!-- https://bootswatch.com/cerulean/ -->
    <link rel="stylesheet" type="text/css" href="assets/forms/forms.css" />
    <link rel="stylesheet" type="text/css" href="assets/menu/menu.css" />
    <link rel="stylesheet" type="text/css" href="assets/notifications/notifications.css" />
</head>

<body>
    <div class='header'>
        <!--
            Esta es la cabecera de mi web
            <a href="index.php">🏠 Home 🏠</a>
        -->
    </div>


    <div class='nav'>
        <!--Esta es la barra de navegación<br>-->
        <?php
        if (Security::thereIsSession()) {
            echo "User id: " . Security::getUserId() . "<br>";
        }
        ?>
    </div>
    <div class='container'>