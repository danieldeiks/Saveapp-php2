<?php
    session_start();
    //error_reporting(0);
    $varsesion = $_SESSION['usuario'];

    if($varsesion == null || $varsesion == ' '){
        echo "No se ha iniciado sesion";
        die();
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido a Saveapp</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="estilosbienvenido.css">
</head>
<body>
   <?php      
            include("header.html");      
    ?>
    <br>
    <br>
    <h1>Panel de administracion</h1>
    <h2>Bienvenido: <?php echo $_SESSION['usuario'] ?></h2>
    <a href="cerrar_sesion.php">Cerrar sesion</a>
</body>
</html>

<!ATAJOS ES !+TAB estructura de html, ATAJO meta:vp el meta basico de la pagina web>

