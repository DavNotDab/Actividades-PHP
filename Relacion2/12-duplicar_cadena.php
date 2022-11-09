<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 12 duplicar cadena</title>
</head>
<body>
    
    <h1>Funci&oacute;n duplicar cadena</h1>

    <?php

        function duplicarCadena($cadena) : string {
            $cadena = str_split($cadena);
            $resultado = "";
            foreach($cadena as $caracter) {
                $resultado .= str_repeat($caracter, 2);
            }
            return $resultado;
        }

        if (empty($_GET["cadena"]))
            echo "<h2>Introduce una cadena de caracteres.</h2>";  
        else {
            $cadena = strval($_GET["cadena"]);
            echo "<h2>Tu cadena es $cadena</h2>";
            echo "<h2> Tu cadena duplicada: ".duplicarCadena($cadena)."</h2>";
        }

    ?>

</body>
</html>