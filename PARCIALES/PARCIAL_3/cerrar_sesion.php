<?php
session_start();

// Destruir todas las sesiones
$_SESSION = array();
session_destroy();

// Enviar de vuelta a la panatalla de inicio_sesion
header("Location: inicio_sesion.php");