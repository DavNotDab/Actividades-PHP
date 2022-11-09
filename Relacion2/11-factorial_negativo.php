<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 11 factorial con excepci&oacute;n</title>
</head>
<body>
    
    <h1>Funci&oacute;n factorial 2</h1>

    <?php

        function factorial($n1) {
            try {
                if ($n1 >= 0) {
                    $total = 1;
                    for ($i = 1; $i <= $n1; $i++){
                        $total *= $i;
                    }
                    return "<h2>El factorial de $n1 es $total</h2>";
                }
                else 
                    throw new Exception("<h2>El parámetro no puede ser un número negativo</h2>");
            }
            catch (Exception $e) {
                echo "<h1>ERROR</h1>".$e->getMessage();
            }
        }

        if (empty($_GET["n1"]))
            echo "<h2>Introduce un número.</h2>";  
        else {
            $n1 = $_GET["n1"];
            echo "<h2>Tu número es $n1</h2>";

            if (!is_numeric($n1)) 
                echo "<h1>Introduce UN NÚMERO</h1>";
            else
                echo factorial($n1);
        }

    ?>

</body>
</html>