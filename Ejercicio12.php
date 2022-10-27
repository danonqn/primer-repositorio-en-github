<?php
/* Leer 20 números y encontrar el mayor y el menor valor leídos. */

$a = readline("Ingrese un número: ");
$mayor = $a;
$menor = $a;
for ($i = 2; $i <= 20; $i++) {
    $a = readline("Ingrese otro número: ");
    if ($a < $menor) {
        $menor = $a;
    }
    if ($a > $mayor) {
        $mayor = $a;
    }
}
echo "El menor es " . $menor . PHP_EOL;
echo "El mayor es " . $mayor;
