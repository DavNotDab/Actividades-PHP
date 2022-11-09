<?php include "brisca.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartas</title>
</head>
<body>
    
    <h1>Brisca</h1>
    
    <h2>Cartas del jugador 1:</h2>
    
    <img src="./imagenes/<?php echo $cartasJugador1[0];?>">
    <img src="./imagenes/<?php echo $cartasJugador1[1];?>">
    <img src="./imagenes/<?php echo $cartasJugador1[2];?>">

    <br><br>
    <h2>Cartas del jugador 2:</h2>

    <img src="./imagenes/<?php echo $cartasJugador2[0];?>">
    <img src="./imagenes/<?php echo $cartasJugador2[1];?>">
    <img src="./imagenes/<?php echo $cartasJugador2[2];?>">

    <br><br>
    <h2>Baza del jugador 1:</h2>

    <?php 
        foreach($bazaJugador1 as $carta)
            echo "<img src='./imagenes/$carta'>";
    ?>
    
    <h1>Puntos jugador 1: <?php echo calcularPuntos($bazaJugador1);?></h1>

    <br><br>
    <h2>Baza del jugador 2:</h2>

    <?php 
        foreach($bazaJugador2 as $carta)
            echo "<img src='./imagenes/$carta'>";
    ?>

    <h1>Puntos jugador 2: <?php echo calcularPuntos($bazaJugador2);?></h1>

</body>
</html>
