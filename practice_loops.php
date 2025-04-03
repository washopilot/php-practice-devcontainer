<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Número: $i<br>";
}

$contador = 3;
while ($contador > 0) {
    echo "Cuenta atrás: $contador<br>";
    $contador--;
}

$colores = ["Rojo", "Verde", "Azul"];

foreach ($colores as $color) {
    echo "Color: $color<br>";
}
