<?php

$info = "";
session_start();
$preferencias = $_SESSION["preferencias"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $info = "Información de la sesión eliminada <br>";
    unset($preferencias);
    }
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preferencias Guardadas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenido">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <fieldset>
                <legend>Preferencias</legend>
                <span id="info"><?php echo $info?></span>
                <span id="idioma">Idioma: <?php if(isset($preferencias)) echo $preferencias["idioma"]?></span>
                <br>
                <span id="perfil">Perfil P&uacute;blico: <?php if(isset($preferencias)) echo $preferencias["perfil"]?></span>
                <br>
                <span id="zona">Zona horaria: <?php if(isset($preferencias)) echo $preferencias["zona"]?></span>
                <br>
                <input type="submit" value="Borrar preferencias" name="borrar" id="borrar">
                <br>
                <a href="preferencias.php">Establecer preferencias</a>
            </fieldset>
        </form>
    </div>
</body>
</html>