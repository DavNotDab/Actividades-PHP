<?php

if (isset($_COOKIE["idioma"]) && $_COOKIE["idioma"] == "english") {
    header("Location: English.php");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento espa&ntilde;ol</title>
</head>
<body>
    <p>Seleccione Idioma:</p>
    <form action="Cookie_Idioma.php" method="post">
        <label for="spanish">Espa&ntilde;ol</label>
        <input type="radio" id="spanish" value="spanish" name="idioma" >
        <label for="english">English</label>
        <input type="radio" id="english" value="english" name="idioma">
        <input type="submit" value="Cambiar idioma">
    </form>

    <hr>

    <p>Hola como est&aacute;s</p>

    </body>
</html>
