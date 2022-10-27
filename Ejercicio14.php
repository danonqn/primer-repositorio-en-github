<?php
/* Leer 10 valores desde teclado y mostrar la media de los pares
y la media de los impares. Hacer tres versiones, con un bucle:
para, mientras y repetir. Repetir el ejercicio considerando que
el número de valores se le solicita al usuario. */
$cantPar = 0;
$cantImpar = 0;
$sumaPar = 0;
$sumaImpar = 0;
for ($i = 1; $i <= 10; $i++) {
    $a = readline("Ingrese un número: ");
    if ($a % 2 == 0) {
        $cantPar++;
        $sumaPar += $a;
    } else {
        $cantImpar++;
        $sumaImpar += $a;
    }
}
echo "Promedio par: " . ($sumaPar / $cantPar) . PHP_EOL;
echo "Promedio impar: " . ($sumaImpar / $cantImpar) . PHP_EOL;

$cantPar = 0;
$cantImpar = 0;
$sumaPar = 0;
$sumaImpar = 0;
$i = 1;
do {
    $a = readline("Ingrese un número: ");
    if ($a % 2 == 0) {
        $cantPar++;
        $sumaPar += $a;
    } else {
        $cantImpar++;
        $sumaImpar += $a;
    }
    $i++;
} while ($i <= 10);
echo "Promedio par: " . ($sumaPar / $cantPar) . PHP_EOL;
echo "Promedio impar: " . ($sumaImpar / $cantImpar) . PHP_EOL;

$cantPar = 0;
$cantImpar = 0;
$sumaPar = 0;
$sumaImpar = 0;
$i = 1;
while ($i <= 10) {
    $a = readline("Ingrese un número: ");
    if ($a % 2 == 0) {
        $cantPar++;
        $sumaPar += $a;
    } else {
        $cantImpar++;
        $sumaImpar += $a;
    }
    $i++;
}
echo "Promedio par: " . ($sumaPar / $cantPar) . PHP_EOL;
echo "Promedio impar: " . ($sumaImpar / $cantImpar) . PHP_EOL;
