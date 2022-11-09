<?php
    include_once "coche.php";
    $coche1 = new Coche();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Datos del coche:</h1>

    <ul>
        <li>Marca: <?php echo $coche1->marca ?></li>
        <li>Modelo: <?php echo $coche1->modelo?></li>
        <li>Color: <?php echo $coche1->color?></li>
        <li>Caballos: <?php echo $coche1->caballos?></li>
        <li>Velocidad: <?php echo $coche1->velocidad?></li>
        <li>Plazas: <?php echo $coche1->plazas?></li>
    </ul>

    <h2>Cambiamos el color del coche y lo ponemos amarillo</h2>

    <?php $coche1->color = "Amarillo" ?>

    <p>El nuevo color de mi coche es: <?php echo $coche1->color?></p>

    <h2>Mi coche va a acelerar cuatro veces y frenar una vez</h2>

    <?php
        for ($i = 0; $i < 4; $i++) $coche1->acelerar();
        $coche1->frenar();
    ?>

    <p>&Eacute;sta es ahora la velocidadde mi coche: <?php echo $coche1->velocidad?></p>

    <h2>Creamos un nuevo coche su color ser&aacute; VERDE y el modelo GALLARDO</h2>
    <h1>Datos del nuevo coche:</h1>

    <?php $coche2 = new Coche("Verde", "Ferrari", "Gallardo"); ?>

    <ul>
        <li>Marca: <?php echo $coche2->marca ?></li>
        <li>Modelo: <?php echo $coche2->modelo?></li>
        <li>Color: <?php echo $coche2->color?></li>
        <li>Caballos: <?php echo $coche2->caballos?></li>
        <li>Velocidad: <?php echo $coche2->velocidad?></li>
        <li>Plazas: <?php echo $coche2->plazas?></li>
    </ul>

</body>
</html>

