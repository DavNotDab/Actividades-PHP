<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Emoticonos</h1>

    <?php
        function generaAnimales():array {
            $array = array();
            $longitud = rand(20, 30);
            for ($i = 0; $i < $longitud; $i++) {
                array_push($array, "&#".rand(128000, 128060));
            }
            return $array;
        }

        $animales = generaAnimales();
        $eliminado = array_rand($animales);
        $animales2 = array_diff($animales, array($animales[$eliminado]));

    ?>

    <h3> <?php echo count($animales);?> animales: </h3>
    <h1> <?php echo implode("", $animales)?> </h1>
    
    <h3>Animal a eliminar: <h1><?php echo $animales[$eliminado];?> </h1></h3>

    <h1>Animales restantes: <?php echo count($animales2)."<br>".implode($animales2);?> </h1>

    

</body>
</html>