<?php

session_start();
$usuario = $_SESSION['usuario'];

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BIenvenido</title>
</head>
<body>
    <h1>Hola <?= $usuario?>, bienvenido a la web</h1>
    <a href="index.php">Volver a inicio</a>
</body>
</html>
