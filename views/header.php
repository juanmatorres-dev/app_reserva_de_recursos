<!DOCTYPE html> 
<html lang="es-ES"> 
<head>
    <title>ACL</title>
    <!-- Aquí incluiría cualquier CSS o JS que vaya a usar por toda la web -->
    <!-- Por ejemplo: <link rel="stylesheet" type="text/css" href="assets/style.css"> -->
</head>
<body>
    <div class='header'>
        Esta es la cabecera de mi web
    </div>
    <div class='nav'>
        Esta es la barra de navegación<br>
        <?php
            if (Security::thereIsSession()) {
                echo "User id: ".Security::getUserId()."<br>";
            }
        ?>
    </div>
    <div class='container'>
