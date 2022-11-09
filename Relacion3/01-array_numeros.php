<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 1 array de enteros</title>
</head>
<body>
    
    <h1>Array de enteros</h1>

    <?php

        function mostrarArray($numeros) {
            return "<h2>Tus números son [".implode(", ", $numeros)."]</h2>";
        }

        if (empty($_GET["numeros"]))
            echo "<h2>Introduce 8 números.</h2>";  
        else {
            $numeros = str_split($_GET["numeros"]);
            echo mostrarArray($numeros);

            if (count($numeros) != 8) 
                echo "<h1>La longitud del array debe ser de 8</h1>";
            else {
                foreach($numeros as $numero) {
                    if (!is_numeric($numero)) {
                        echo "<h1>Introduce SOLO NÚMEROS</h1>";
                        exit;
                    }
                }

                echo "<h2>La longitud del array es ".count($numeros)."</h2>";

                $ordenado = $numeros;
                sort($ordenado);
                echo "<h2>Ordenados:</h2>".mostrarArray($ordenado);

                if (!empty($_GET["busca"])) {
                    $busca = $_GET["busca"];
                    $encontrado = array_search($busca, $numeros);
                    
                    if ($encontrado) 
                        echo "<h2>Tu búsqueda está en la posición $encontrado </h2>";
                    else
                        echo "<h2>Lo que buscabas no se ha encontrado</h2>";
                
                }
            }
        }

    ?>

</body>
</html>