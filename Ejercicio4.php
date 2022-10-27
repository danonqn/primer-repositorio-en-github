<?php
/* Imprimir un listado con los números impares desde 1 hasta 999 y seguidamente
otro listado con los números pares desde 2 hasta 1000 */
echo "Numeros impares" . PHP_EOL;
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . ", ";
    }
}
echo PHP_EOL;
echo "Numeros pares" . PHP_EOL;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . ", ";
    }
}
