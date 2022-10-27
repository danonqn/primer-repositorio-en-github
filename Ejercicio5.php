<?php
/* Imprimir los números pares desde N (siendo N un número par que se lee)
en forma descendente hasta 2. */
$correcto = false;
while (!$correcto) {
    $N = readline("Ingrese un numero: ");
    if ($N % 2 == 0) {
        $correcto = true;
    } else {
        echo "Error, el numero no es impar" . PHP_EOL;
    }
}
echo "Los numeros pares desde " . $N . " hasta 2 son: " . PHP_EOL;
for ($i = $N; $i > 1; $i--) {
    if ($i % 2 == 0) {
        echo $i . ", ";
    }
}
