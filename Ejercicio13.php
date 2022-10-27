<?php
/* Escribir un programa que lea valores enteros hasta que se
introduzca un 0 y calcule la media de los positivos y la media
de los negativos */
$contPos = 0;
$contNeg = 0;
$sumaPos = 0;
$sumaNeg = 0;
do {
    $a = readline("Ingrese un número distinto de cero: ");
    if ($a > 0) {
        $sumaPos += $a;
        $contPos++;
    } elseif ($a < 0) {
        $sumaNeg += $a;
        $contNeg++;
    }
} while ($a != 0);
echo "El promedio de los positivos: " . ($sumaPos / $contPos) . PHP_EOL;
echo "El promedio de los negativos: " . ($sumaNeg / $contNeg);
