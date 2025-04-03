<?php
$texto = "Mi correo es ejemplo@dominio.com";
if (preg_match("/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,7}\b/", $texto)) {
    echo "El texto contiene un correo electrónico.<br>";
} else {
    echo "No se encontró un correo electrónico.<br>";
}

// ------------------------------
// Crear un array asociativo
$data = [
    "nombre" => "Carlos",
    "edad" => 30,
    "activo" => true
];

// Convertir a JSON
$json = json_encode($data);
echo $json . "<br>"; // {"nombre":"Carlos","edad":30,"activo":true}

// Convertir JSON a array PHP
$decoded = json_decode($json, true); // true para obtener un array asociativo
echo $decoded["nombre"] . "<br>"; // Carlos
var_dump($json);