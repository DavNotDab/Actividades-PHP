<?php

if (isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie('color', $color, time()+3600);
}
else $color = $_COOKIE['color'] ?? 'white';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Fondo</title>
</head>
<body style="background-color: <?php echo $color;?>">

    <h1>Elija el color de fondo</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <label for="color">Color de fondo: </label>
        <input type="color" name="color" id="color" value="<?php echo $color;?>">
        <input type="submit" value="Cambiar">
    </form>

</body>