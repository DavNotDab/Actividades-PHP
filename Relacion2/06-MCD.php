<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 6 M&aacute;ximo Com&uacute;n Divisor</title>
</head>
<body>
    
    <h1>Calcular el M&aacute;ximo Com&uacute;n Divisor</h1>

    <?php

    function mcd($a, $b) {
        return ($a % $b) ? mcd($b,$a % $b) : $b;
    }

    if (empty($_GET["n1"]) || empty($_GET["n2"]))
    echo "<h1>Introduce DOS variables</h1>";  
    else {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];

        echo "<h2>Tus números son $n1 y $n2</h2><br>";

        if (!is_numeric($n1) || !is_numeric($n2)) {
            echo "<h1>Introduce DOS NUMEROS</h1>";
        }
        else
            echo "<h2>El MDC de $n1 y $n2 es ".mcd($n1,$n2)."</h2>";
    }

    ?>

</body>
</html>