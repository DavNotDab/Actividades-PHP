
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>datos formulario</title>
</head>
<body>

    <?php

        $nombre = $_POST['usuario'];
        $contraseña = $_POST['password'];

        if ($nombre == "usuario" && $contraseña == "1234") {
            header("location:bienvenido.html");
        }
        else {
            header("location:error.html");
        }

        echo "<h2>Sesión iniciada como $nombre</h2>";
        echo "<h2>Tu contraseña es $contraseña</h2>";

    ?>

</body>
</html>