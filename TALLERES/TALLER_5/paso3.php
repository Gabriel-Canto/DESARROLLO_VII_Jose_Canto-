<?php
// 1. Crear un arreglo de estudiantes con sus calificaciones
$estudiantes = [
    ["nombre" => "Ana", "calificaciones" => [85, 92, 78, 96, 88]],
    ["nombre" => "Juan", "calificaciones" => [75, 84, 91, 79, 86]],
    ["nombre" => "María", "calificaciones" => [92, 95, 89, 97, 93]],
    ["nombre" => "Pedro", "calificaciones" => [70, 72, 78, 75, 77]],
    ["nombre" => "Laura", "calificaciones" => [88, 86, 90, 85, 89]]
];

// 2. Función para calcular el promedio de calificaciones
function calcularPromedio($calificaciones) {
    return array_sum($calificaciones) / count($calificaciones);
}

// 3. Función para asignar una letra de calificación basada en el promedio
function asignarLetraCalificacion($promedio) {
    if ($promedio >= 90) return 'A';
    if ($promedio >= 80) return 'B';
    if ($promedio >= 70) return 'C';
    if ($promedio >= 60) return 'D';
    return 'F';
}

// 4. Procesar y mostrar información de estudiantes
echo "Información de estudiantes:<br>";
foreach ($estudiantes as &$estudiante) {
    $promedio = calcularPromedio($estudiante["calificaciones"]);
    $estudiante["promedio"] = $promedio;
    $estudiante["letra_calificacion"] = asignarLetraCalificacion($promedio);
    
    echo "<br>{$estudiante['nombre']}:<br>";
    echo "  <br>Calificaciones: " . implode(", ", $estudiante["calificaciones"]) . "<br>";
    echo "  <br>Promedio: " . number_format($promedio, 2) . "<br>";
    echo "  <br>Calificación: {$estudiante['letra_calificacion']}<br><br>";
}

// 5. Encontrar al estudiante con el promedio más alto
$mejorEstudiante = array_reduce($estudiantes, function($mejor, $actual) {
    return (!$mejor || $actual["promedio"] > $mejor["promedio"]) ? $actual : $mejor;
});

echo "<br>Estudiante con el promedio más alto: {$mejorEstudiante['nombre']} ({$mejorEstudiante['promedio']})<br>";

// 6. Calcular y mostrar el promedio general de la clase
$promedioGeneral = array_sum(array_column($estudiantes, "promedio")) / count($estudiantes);
echo "<br>Promedio general de la clase: " . number_format($promedioGeneral, 2) . "<br>";

// 7. Contar estudiantes por letra de calificación
$conteoCalificaciones = array_count_values(array_column($estudiantes, "letra_calificacion"));
echo "<br>Distribución de calificaciones:<br>";
foreach ($conteoCalificaciones as $letra => $cantidad) {
    echo "<br>$letra: $cantidad estudiante(s)<br>";
}

// TAREA: Implementa una función que identifique a los estudiantes que necesitan tutoría
// (aquellos con un promedio menor a 75) y otra que liste a los estudiantes de honor
// (aquellos con un promedio de 90 o más).
// Tu código aquí
// 8. Función para identificar estudiantes que necesitan tutoría (promedio menor a 75)
function estudiantesTutoría($estudiantes) {
    $necesitanTutoria = array_filter($estudiantes, function($estudiante) {
        return $estudiante['promedio'] < 75;
    });
    return $necesitanTutoria;
}

// 9. Función para listar estudiantes de honor (promedio de 90 o más)
function estudiantesHonor($estudiantes) {
    $deHonor = array_filter($estudiantes, function($estudiante) {
        return $estudiante['promedio'] >= 90;
    });
    return $deHonor;
}

// 10. Mostrar los estudiantes que necesitan tutoría
$estudiantesTutoría = estudiantesTutoría($estudiantes);
echo "<br>Estudiantes que necesitan tutoría:<br>";
if (count($estudiantesTutoría) > 0) {
    foreach ($estudiantesTutoría as $estudiante) {
        echo "<br>{$estudiante['nombre']} con promedio de {$estudiante['promedio']}<br>";
    }
} else {
    echo "<br>No hay estudiantes que necesiten tutoría.<br>";
}

// 11. Mostrar los estudiantes de honor
$estudiantesHonor = estudiantesHonor($estudiantes);
echo "<br>Estudiantes de honor:<br>";
if (count($estudiantesHonor) > 0) {
    foreach ($estudiantesHonor as $estudiante) {
        echo "<br>{$estudiante['nombre']} con promedio de {$estudiante['promedio']}<br>";
    }
} else {
    echo "<br>No hay estudiantes de honor.<br>";
}
?>