<?php
$texto = "  Hola Mundo!  ";

// Quitar espacios al principio y al final
echo trim($texto) . "<br>";

// Convertir a minúsculas
echo strtolower($texto) . "<br>";

// Convertir a mayúsculas
echo strtoupper($texto) . "<br>";

// Reemplazar texto
echo str_replace("Mundo", "PHP", $texto) . "<br>"; // "Hola PHP!"

// Substring
echo substr($texto, 6, 5) . "<br>"; // Mundo