<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 3 cadena caracteres</title>
</head>
<body>
    
    <h1>Comprobar cadena de caracteres</h1>

    <?php

    function cadena_caracteres($n1) {
        if (is_string($n1)) {
            if (empty($n1)) 
                echo "Este es el relleno porque la cadena está vacia";
            else
                echo strtoupper($n1);
        }
        else
            echo "$n1 no es una cadena de caracteres";
    }

    if (empty($_GET["n1"]))
        echo "<h2>Introduce una cadena de caracteres.</h2>";  
    else {
        $n1 = $_GET["n1"];
        cadena_caracteres($n1);
    }


    ?>

</body>
</html>