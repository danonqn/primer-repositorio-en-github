<?php
/* Obtener el resto de la división entera a%b de dos números
enteros positivos mediante restas. */
$a = readline("Ingrese un numero: ");
$b = readline("Ingrese un numero: ");
$completada = false;
$auxiliar = $a;
$resultado = 0;
do {
    $auxiliar = $auxiliar - $b;
    if ($auxiliar >= 0) {
        $resultado = $auxiliar;
    } else {
        $completada = true;
    }
} while (!$completada);
echo $a . " % " . $b . " = " . $resultado;
