<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    
    <!-- CSS Compartido -->
    <link type="text/css" rel="stylesheet" href="./css/common.css">
    <link type="text/css" rel="stylesheet" href="./css/menu.css">
    <link type="text/css" rel="stylesheet" href="./css/navbar.css">
    
    <!-- Font Awesome -->
    <link type="text/css" rel="stylesheet" href="./css/lib/font-awesome/css/all.min.css">

    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="./assets/lib/datatables/datatables.min.css"/>

    <?php
        /*
            Obtiene el css de la pagina actual
        */
        if (empty($group)) {
            echo "<link rel=\"stylesheet\" href=\"./css/" . $page . ".css\">";
        } else {
            echo "<link rel=\"stylesheet\" href=\"./css/" . $group . "/" . $page . ".css\">";
        }
    ?>
</head>
<body>