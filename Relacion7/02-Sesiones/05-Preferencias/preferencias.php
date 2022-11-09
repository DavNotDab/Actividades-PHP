<?php

$info = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start();
    $info = "Información guardada en la sesión: <br>";
    $preferencias["idioma"] = $_POST["idioma"];
    $preferencias["perfil"] = $_POST["perfil"];
    $preferencias["zona"] = $_POST["zona"];

    $_SESSION["preferencias"] = $preferencias;
}

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar Preferencias</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="contenido">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
            <fieldset>
                <legend>Preferencias</legend>
                <span id="info"><?php echo $info?></span>
                <label for="idioma">Idioma: </label>
                <select name="idioma" id="idioma">
                    <option value="spanish" <?php if(isset($preferencias) && $preferencias["idioma"] == "spanish") echo "selected"?>>Espa&ntilde;ol</option>
                    <option value="english" <?php if(isset($preferencias) && $preferencias["idioma"] == "english") echo "selected"?>>English</option>
                    <option value="french" <?php if(isset($preferencias) && $preferencias["idioma"] == "french") echo "selected"?>>Français</option>
                    <option value="german" <?php if(isset($preferencias) && $preferencias["idioma"] == "german") echo "selected"?>>Deutsch</option>
                </select>
                <br>
                <label for="perfil">Perfil P&uacute;blico: </label>
                <select name="perfil" id="perfil">
                    <option value=si" <?php if(isset($preferencias) && $preferencias["perfil"] == "si") echo "selected"?>>S&iacute;</option>
                    <option value="no" <?php if(isset($preferencias) && $preferencias["perfil"] == "no") echo "selected"?>>No</option>
                </select>
                <br>
                <label for="zona">Zona horaria: </label>
                <select name="zona" id="zona">
                    <option value=GMT-2" <?php if(isset($preferencias) && $preferencias["zona"] == "GMT-2") echo "selected"?>>GMT-2</option>
                    <option value="GMT-1" <?php if(isset($preferencias) && $preferencias["zona"] == "GMT-1") echo "selected"?>>GMT-1</option>
                    <option value="GMT" <?php if(isset($preferencias) && $preferencias["zona"] == "GMT") echo "selected"?>>GMT</option>
                    <option value="GMT+1" <?php if(isset($preferencias) && $preferencias["zona"] == "GMT+1") echo "selected"?>>GMT1</option>
                    <option value=GMT+2" <?php if(isset($preferencias) && $preferencias["zona"] == "GMT+2") echo "selected"?>>GMT2</option>
                </select>
                <br>
                <input type="submit" value="Establecer preferencias" name="guardar" id="guardar">
                <br>
                <a href="mostrar.php">Mostrar preferencias</a>
            </fieldset>
        </form>
    </div>
</body>
</html>