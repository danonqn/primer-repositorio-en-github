<?php
/* Escribir un programa que lea números enteros de teclado hasta que
encuentre uno que cumpla las siguientes condiciones:  
• Múltiplo de 2.  
• No múltiplo de 5.  
• Mayor que 100.  
• Menor que 10.000. */
do {
    $a=readline("Ingrese un número: ");
} while (!($a % 2 == 0 && $a % 5 != 0 && $a > 100 && $a < 10_000));
echo $a;