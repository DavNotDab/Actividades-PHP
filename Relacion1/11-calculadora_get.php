<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora con GET</title>
</head>
<body>
    
    <h1>Calculadora con GET</h1>

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
            if (empty($_GET["op"]))
                echo "<h2>Introduce la operación deseada en la URL</h2>";
            else {
                $op = $_GET["op"];
                $operaciones = array("suma" => $n1+$n2, "resta" => $n1-$n2, "multiplicacion" => $n1*$n2, "division" => $n1/$n2);

                if (key_exists($op, $operaciones))
                    echo "<h2>El resultado de la $op es $operaciones[$op]</h2>";
                else
                    echo "<h2>Introduce una operacion correcta</h2>";
            }
        }
    }


    ?>

</body>
</html>