<?php


if (!isset($_SERVER["PHP_AUTH_USER"]) || ($_SERVER["PHP_AUTH_USER"] != "admin" || $_SERVER["PHP_AUTH_PW"] != "admin")) {
    header("WWW-Authenticate: Basic realm='Acceso restringido'");
    header("Status: 401 Unauthorized");
    header("HTTP/1.0 401 Unauthorized");
    echo "Autentificación incorrecta";
}
else {
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Control usuario por PHP</title>
</head>
<body>
    <h2 style="color: red">Autorizado por PHP</h2>
    <p>Este contenido es solo para usuarios autorizados</p>
    <p>Nombre de usuario: <b><?= $_SERVER["PHP_AUTH_USER"]?></b></p>
    <p>Contrase&ntilde;a: <b><?= $_SERVER["PHP_AUTH_PW"]?></b></p>

</body>
</html>

<?php
}
?>