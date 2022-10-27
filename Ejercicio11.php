<?php
/* Calcular el factorial de 10 números diferentes cuyos valores se leen. */
for ($h = 1; $h <= 10; $h++) {
    $a = readline("Ingrese un número: ");
    $auxiliar = 1;
    for ($j = 1; $j <= $a; $j++) {
        $auxiliar = $auxiliar * $j;
    }
    echo $a . "! = " . $auxiliar . PHP_EOL;
}
