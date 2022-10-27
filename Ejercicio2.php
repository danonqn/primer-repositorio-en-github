<?php
/* Realizar la multiplicación de dos números enteros A y B mediante sumas sucesivas,
hacer tres algoritmos con cada estructura repetitiva. */
$A = readline("Ingrese un numero: ");
$B = readline("Ingrese otro numero: ");
$contador = $B;
$resultado = 0;
while ($contador >= 1) {
    $resultado = $resultado + $A;
    $contador--;
}
echo $resultado . PHP_EOL;

$resultado = 0;
$contador = $B;
do {
    $resultado = $resultado + $A;
    $contador--;
} while ($contador >= 1);
echo $resultado . PHP_EOL;

$resultado = 0;
for ($contador = 1; $contador <= $B; $contador++) {
    $resultado = $resultado + $A;
}
echo $resultado . PHP_EOL;