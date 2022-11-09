<?php
session_start();
if (isset($_SESSION['contador'])) {
    $_SESSION['contador']++;
    $frase = " has visitado esta página ".$_SESSION['contador']." veces";
} else {
    $frase = " por primera vez";
    $_SESSION['contador'] = 1;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hola <?= $frase?></h1>
    <a href="index.php">Volver a visitar la web</a>
</body>
</html>
