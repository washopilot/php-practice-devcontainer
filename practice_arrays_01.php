<?php
$frutas = ["Manzana", "Plátano", "Naranja", "Fresa"]; // Array indexado

echo $frutas[0]; // Manzana
echo "<br>";

$frutas[] = "kiwwi";
echo $frutas[4];
echo "<br>";

var_dump($frutas);
echo "<br>";
echo "Número de frutas: " . count($frutas) . "<br>";