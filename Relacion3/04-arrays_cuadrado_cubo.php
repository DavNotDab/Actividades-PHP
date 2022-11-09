<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 4 arrays cuadrado y cubo</title>
</head>
<body>
    
    <h1>Arrays cuadrado y cubo</h1>

    <?php

        function elevarArray($array, $grado = 2) {
            $resultado = array();

            foreach ($array as $indice) {
                array_push($resultado, $indice**$grado);  
            }
            return $resultado;
        } 

        $array = array();

        for ($i = 0; $i < 20; $i++) {
            array_push($array, random_int(0,100));
        }

        $cuadrado = elevarArray($array);
        $cubo = elevarArray($array, 3);

        for ($i = 0; $i < 20; $i++) {
            echo $array[$i]." ".$cuadrado[$i]." ".$cubo[$i]."<br>";
        }

    ?>

</body>
</html>