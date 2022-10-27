<?php
/* Realizar la operación de potenciación (ab), de dos valores enteros
positivos, con multiplicaciones. */
$a = readline("Ingrese un número: ");
$b = readline("Ingrese otro número: ");
$resultado = $a;
for ($i = 1; $i < $b; $i++) {
    $resultado = $resultado * $a;
}
echo $a . "^" . $b . " = " . $resultado;
