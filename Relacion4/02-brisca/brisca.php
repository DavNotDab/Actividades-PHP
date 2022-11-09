
<?php

function crearBaraja() : array {
    $baraja = [];
    $dir = opendir("imagenes");

    while ($archivo = readdir($dir)) {
        if ($archivo != "." && $archivo != "..")
            $baraja[] = $archivo;
    }
    shuffle($baraja);
    return $baraja;
}

function repartirCartas(&$baraja) : array{
    $cartasJugador1 = [];
    $cartasJugador2 = [];

    for ($j = 0; $j < 3; $j++) {
        $cartasJugador1[] = array_pop($baraja);
        $cartasJugador2[] = array_pop($baraja);
    }

    return array($cartasJugador1, $cartasJugador2);
}

function sacarCarta(&$baraja) : string{
    return array_pop($baraja);
}

function generarBaza(&$baraja) : array{
    $bazaJugador = [];
    for ($i = 0; $i < 10; $i++) {
        $bazaJugador[] = sacarCarta($baraja);
    }
    return $bazaJugador;
}

function calcularPuntos($baza) : int {
    $puntaje = array(1 => 11, 3 => 10, 10 => 2, 11 => 3, 12 => 4);
    $puntos = 0;
    $baza2 = [];
    foreach($baza as $carta) {
        $baza2[] = preg_replace("@[a-z_.]@", "", $carta);
    }
    foreach($baza2 as $carta) {
        if(in_array($carta, array_keys($puntaje))) {
            $puntos += $puntaje[$carta];
        }
    }
    return $puntos;
}

$baraja = crearBaraja();
$cartas = repartirCartas($baraja);

$cartasJugador1 = $cartas[0];
$cartasJugador2 = $cartas[1];

$bazaJugador1 = generarBaza($baraja);
$bazaJugador2 = generarBaza($baraja);
