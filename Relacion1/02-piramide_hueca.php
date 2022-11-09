<?php

// Escribe un programa que pinte por pantalla una pirámide hueca a base de asteriscos.

$esp = "&nbsp;";
echo str_repeat($esp, 9)."* <br>";
echo str_repeat($esp, 7)."*$esp$esp* <br>";
echo str_repeat($esp, 5)."*$esp$esp$esp$esp$esp$esp* <br>";
echo str_repeat($esp, 3)."*$esp$esp$esp$esp$esp$esp$esp$esp$esp$esp* <br>";
echo str_repeat($esp, 1)."********* <br>";