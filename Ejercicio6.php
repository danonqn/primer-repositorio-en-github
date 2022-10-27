<?php
/* Realizar la división entera a/b de dos valores enteros positivos mediante restas. */
$a = readline("Ingrese un numero: ");
$b = readline("Ingrese un numero: ");
$completada = false;
$auxiliar = $a;
$resultado = 0;
do {
    $auxiliar = $auxiliar - $b;
    if ($auxiliar >= 0) {
        $resultado++;
    } else {
        $completada = true;
    }
} while (!$completada);
echo $a . " / " . $b . " = " . $resultado;