<?php
$frase = "hola mundo";
$contar_palabras = explode(" ", $frase);
echo "el numero de palabras es: ", count($contar_palabras), "<br><br>";


$contar_vocales = strtolower($frase); 


echo"el numero de vocales es: ", $contar_vocales, "<br><br>";

$invertir_palabras = explode(" ", $frase);
rsort($invertir_palabras);
echo "la frase de forma invertida es: ". implode(" ", $invertir_palabras);

?>