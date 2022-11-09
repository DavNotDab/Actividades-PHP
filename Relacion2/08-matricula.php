<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 8 matr&iacute;cula v&aacute;lida</title>
</head>
<body>
    
    <h1>Validador de matr&iacute;cula</h1>

    <?php

        function comprobarMatricula($cadena) {
            if (strlen($cadena) != 7) {
                return "La matrícula debe tener 7 caracteres!";
            }
            else {
                $numeros = substr($cadena, 0, 4); //ctype_digit($cadena) devuelve true si todos son digitos
                $letras = substr($cadena, 4, 6);
                foreach(str_split($numeros) as $num) {
                    if (!in_array($num, range(0,9)))
                        return "Los 4 primeros carácteres tienen que ser números!";       
                }
                foreach(str_split($letras) as $letra) {
                    if (!in_array($letra, range("A","Z")))
                        return "Los 3 últimos carácteres deben ser letras mayúsculas!";
                }
                return "La matrícula es correcta.";
            }
        }

        if (empty($_GET["cadena"]))
            echo "<h2>Introduce una cadena de caracteres.</h2>";  
        else {
            $cadena = strval($_GET["cadena"]);
            echo "<h2>Tu matrícula es $cadena</h2>";
            echo "<h2>".comprobarMatricula($cadena)."</h2>";
        }

    ?>

</body>
</html>