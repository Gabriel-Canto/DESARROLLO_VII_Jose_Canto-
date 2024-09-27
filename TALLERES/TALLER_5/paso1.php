
<?php
// 1. Crear un arreglo de 10 nombres de ciudades
$ciudades = ["Nueva York", "Tokio", "Londres", "París", "Sídney", "Río de Janeiro", "Moscú", "Berlín", "Ciudad del Cabo", "Toronto"];

// 2. Imprimir el arreglo original
echo "Ciudades originales:<br>";
print_r($ciudades);

// 3. Agregar 2 ciudades más al final del arreglo
array_push($ciudades, "Dubái", "Singapur");

// 4. Eliminar la tercera ciudad del arreglo
array_splice($ciudades, 2, 1);

// 5. Insertar una nueva ciudad en la quinta posición
array_splice($ciudades, 4, 0, "Mumbai");

// 6. Imprimir el arreglo modificado
echo "<br>Ciudades modificadas:<br>";
print_r($ciudades);

// 7. Crear una función que imprima las ciudades en orden alfabético
function imprimirCiudadesOrdenadas($arr) {
    $ordenado = $arr;
    sort($ordenado);
    echo "<br>Ciudades en orden alfabético:<br>";
    foreach ($ordenado as $ciudad) {
        echo "- $ciudad\n";
    }
}



// 8. Llamar a la función
imprimirCiudadesOrdenadas($ciudades);

// TAREA: Crea una función que cuente y retorne el número de ciudades que comienzan con una letra específica
// Ejemplo de uso: contarCiudadesPorInicial($ciudades, 'S') debería retornar 2 (Singapur/Sidney)
// Tu código aquí

function contarCiudadesPorInicial($arr, $inicial) {
    $contador = 0;
    
    foreach ($arr as $ciudad) {
        if (stripos($ciudad, $inicial) === 0) { // Comparar la primera letra
            $contador++;
        }
    }
    return $contador;
}
$inicial = 'M';
$ciudadesConS = contarCiudadesPorInicial($ciudades, $inicial);

echo "<br>Número de ciudades que comienzan con '$inicial': $ciudadesConS\n";
?>