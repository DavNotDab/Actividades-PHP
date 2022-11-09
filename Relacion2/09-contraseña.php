<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 9 verificar contraseña</title>
</head>
<body>
    
    <h1>Verificar contrase&ntilde;a</h1>

    <?php
    
        function comprobarContraseña($cadena) {
            if (strlen($cadena) < 6 || strlen($cadena) > 15) {
                return "La matrícula debe tener entre 6 y 15 caracteres!";
            }
            else {
                $mayus = preg_match("+[A-Z]+", $cadena);
                $minus = preg_match("+[a-z]+", $cadena);
                $numero = preg_match("+[0-9]+", $cadena);
                $especial = preg_match("+[\W]+", $cadena);

                return !$mayus ? "<h2>Falta una mayúscula</h2><br>" :
                (!$minus ? "<h2>Falta una minúscula</h2><br>" :
                (!$numero ? "<h2>Falta un número</h2><br>" :
                (!$especial ? "<h2>Falta un caracter especial</h2><br>" :
                "<h2>La contraseña es válida</h2>")));
            }
        }

        if (empty($_GET["cadena"]))
            echo "<h2>Introduce una cadena de caracteres.</h2>";  
        else {
            $cadena = $_GET["cadena"];
            echo "<h2>Tu contraseña es $cadena</h2><br>";
            echo "<h2>".comprobarContraseña($cadena)."</h2>";
        }

    ?>

</body>
</html>