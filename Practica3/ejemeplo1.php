<?php

//mostrar la suma de numeros del 1 al 100 usando bucle while.

//contador
$i = 1;
$suma = 0;

while($i <= 100){
    // echo $i . "<br>";
    $suma += $i;
    $i++;
}

echo "la suma de todos los numeros es: $suma";