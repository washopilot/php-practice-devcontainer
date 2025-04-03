<?php
$persona = [
    "nombre" => "Carlos",
    "edad" => 30,
    "ciudad" => "Madrid"
];

// Acceder a un elemento por clave
echo $persona["nombre"]; // Carlos
echo "<br>";

// Añadir un nuevo valor
$persona["profesión"] = "Desarrollador";
echo $persona["profesión"]; // Desarrollador
echo "<br>";

var_dump($persona);
echo "<br>";
echo "<br>";
echo "<br>";

// ----------------------------------

// Array de ejemplo
$numeros = [1, 2, 3, 4, 5];

// Recorrer array con foreach
foreach ($numeros as $numero) {
    echo $numero . "<br>";
}

// Filtrar elementos (ejemplo: números mayores que 3)
$filtrado = array_filter($numeros, fn($num) => $num > 3);
print_r($filtrado); // [4, 5]
echo "<br>";

// Mapear (ejemplo: multiplicar por 2 cada elemento)
$doblados = array_map(fn($num) => $num * 2, $numeros);
print_r($doblados); // [2, 4, 6, 8, 10]
echo "<br>";
