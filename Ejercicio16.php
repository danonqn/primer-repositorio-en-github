<?php
/* En 1994 el país A tiene una población de 25 millones de habitantes
y el país B de 19.9 millones. Las tasas de crecimiento de la
población son de 2% y 3% respectivamente. Desarrollar un algoritmo
para informar en que año la población del país B supera a la de A. */
$anio = 1994;
$A = 25_000_000;
$B = 19_900_000;
while ($B <= $A) {
    $B = $B * 1.03;
    $A = $A * 1.02;
    $anio++;
}
echo $anio;
