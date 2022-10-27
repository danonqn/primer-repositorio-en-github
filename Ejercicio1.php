<?php
/* Hacer los algoritmos que calculen el promedio de una serie de notas hasta que se
ingrese una nota negativa, utilizar las tres estructuras repetitivas.
¿Cuál no se puede utilizar? */
$nota = readline("Ingrese una nota: ");
$suma = 0;
$cantidad = 0;
do {
    $suma = $suma + $nota;
    $cantidad++;
    $nota = readline("Ingrese una nota: ");
} while ($nota > -1);
$promedio = $suma / $cantidad;
echo $promedio . PHP_EOL;

$nota = 0;
$suma = 0;
$cantidad = 0;
while ($nota > -1) {
    $nota = readline("Ingrese una nota: ");
    $cantidad++;
    $suma = $suma + $nota;
}
$suma = $suma - $nota;
$cantidad--;
$promedio = $suma / $cantidad;
echo $promedio . PHP_EOL;
