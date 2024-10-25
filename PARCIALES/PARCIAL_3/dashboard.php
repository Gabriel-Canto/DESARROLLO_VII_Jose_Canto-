<?php

session_start();
//llamada a inicio_sesion para validar inicio de sesion 









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>Dashboard</title>
</head>
    <h2> Welcome inicio_sesion = $_GET[$_SESSION['username']]</h2>
<body>
    
</body>
</html>



//validar que ambos campos deben estar llenos
//Almacenar la nueva tarea en un array asociado a la sesión del usuario
//recuerda que puedes usar la fuincion "time" para validar la fecha de entrega (que sea un aentrega futura)



