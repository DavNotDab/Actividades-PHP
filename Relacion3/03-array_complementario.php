<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 3 array complementario</title>
</head>
<body>
    
    <h1>Array de 0 y 1 y su complementario</h1>

    <?php

        function complementario($array) {
            $resultado = array();

            foreach ($array as $indice) {
                $indice ? array_push($resultado, "0") : array_push($resultado, "1");  
            }
            return $resultado;
        } 

        $array = array();

        for ($i = 0; $i < 20; $i++) {
            array_push($array, random_int(0,1));
        }

        echo "<h2>Array inicial: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".implode(" ",$array)."</h2>";
        echo "<h2>Complementario: ".implode(" ",complementario($array))."</h2>";
    ?>

</body>
</html>