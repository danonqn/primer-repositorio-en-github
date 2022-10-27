<?php
/* Imprimir los 100 primeros números de Fibonacci. Recuerde que
un número de Fibonacci se calcula como la suma de los dos
anteriores así: 0, 1, 1, 2, 3, 5, 8,13... */
$a = 0;
$b = 1;
echo $a . ", " . $b . ", ";
for ($i = 3; $i <= 100; $i++) {
    $aux = $a + $b;
    $a = $b;
    $b = $aux;
    echo $aux . ", ";
}