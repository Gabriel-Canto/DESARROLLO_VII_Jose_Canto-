
<?php
// Definición de variables
$nombre = "Jose Canto";
$edad = 20;
$correo = "jose.canto6@utp.ac.pa";
$telefono = "6029-0564";

// Definición de constante
define("OCUPACION", "Estudiante");

// Creación de mensaje usando diferentes métodos de concatenación e impresión
$mensaje1 = "Hola, mi nombre es " . $nombre . "  tengo " . $edad . " años mi correo es" . $correo. "y mi telefono es" .$telefono ;
$mensaje2 = "soy " . OCUPACION . ".";

echo $mensaje1 . "<br>";
print($mensaje2 . "<br>");

printf("En resumen: %s, %d años, %s, %s<br>", $nombre, $edad, $correo, $telefono .OCUPACION);

echo "<br>Información de debugging:<br>";
var_dump($nombre);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump($telefono);
echo "<br>";
var_dump(OCUPACION);
echo "<br>";
?>
                    
