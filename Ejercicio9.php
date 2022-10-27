<?php
/* Imprimir los números de 1 a N (siendo N un número que se lee)
cada uno con su respectivo factorial. */
$a = readline("Ingrese un número: ");
for ($i = 1; $i <= $a; $i++) {
    echo $i . "! = ";
    $auxiliar = 1;
    for ($j = 1; $j <= $i; $j++) {
        $auxiliar = $auxiliar * $j;
    }
    echo $auxiliar . PHP_EOL;
}
