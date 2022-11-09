<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo con GET</title>
</head>
<body>
    
    <h1>Intervalo con GET</h1>

    <?php

    if (empty($_GET["n1"]) || empty($_GET["n2"]))
        echo "<h1>Introduce DOS variables</h1>";  
    else {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        echo "<h2>Tus números son $n1 y $n2</h2><br>";

        if (!is_numeric($n1) || !is_numeric($n2)) {
            echo "<h1>Introduce DOS NUMEROS</h1>";
        }
        else {
            if ($n1 > $n2)
                echo "<h2>El primer número debe ser menor que el segundo</h2>";
            elseif ($n1 == $n2)
                echo "<h2>Ambos números son iguales. No hay ninguno en medio</h2>";
            elseif ($n2 - $n1 == 1)
                echo "<h2>Un número va detrás del otro. No hay ningún número en medio</h2>";
            else {
                echo "<h2>El intevalo entre los dos números es:</h2>";
                do {
                    $n1++;
                    echo "<h2>$n1</h2>";
                } while ($n1 < $n2-1);
            }
        }
    }


    ?>


</body>
</html>