<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4 funcion potencia</title>
</head>
<body>
    
    <h1>Funcion potencia</h1>

    <?php

    function potencia($numero, $exp = 2) {
        return $numero**$exp;
    }

    if (empty($_GET["n1"]))
        echo "<h2>Introduce un número.</h2>";  
    elseif (empty($_GET["n2"])) {

        $n1 = $_GET["n1"];
        echo "<h2>Tu número es $n1</h2>";

        if (!is_numeric($n1)) 
            echo "<h1>Introduce UN NÚMERO</h1>";
        else{
            echo "<h2>La potencia de $n1 con exponente 2 es ".potencia($n1)."</h2>";

        }
    }
    else {
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        echo "<h2>Tu número es $n1 y tu exponente $n2</h2>";

        if (!is_numeric($n1) || !is_numeric($n2)) 
            echo "<h1>Introduce DOS NÚMEROS</h1>";
        else{
            echo "<h2>La potencia de $n1 con exponente $n2 es ".potencia($n1, $n2)."</h2>";

        }
    }

    ?>

</body>
</html>
