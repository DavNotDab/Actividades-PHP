<?php

// Escribe un programa que resuelva ecuación de segundo grado.


$a = 1;
$b = 1;
$c = 1;

$divisor = (2*$a);
$raiz = sqrt(($b*$b) - (4*$a*$c));


$x1 = (-$b + $raiz)/$divisor;
$x2 = (-$b - $raiz)/$divisor;

echo "Las soluciones son $x1 y $x2";