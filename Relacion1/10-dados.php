<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Tirada de dados</h1>

    <?php

    try {
        $dado1 = random_int(1, 6);
        $dado2 = random_int(1,6);
    } catch (Exception $e) {
    }

    echo "Los resultados son $dado1 y $dado2 <br><br>";

    echo "<img src='$dado1.png' alt='dado1' width='100'>";
    echo "<img src='$dado2.png' alt='dado2' width='100'> <br>";

    
    if ($dado1 == $dado2) {
        echo "Los resultados son iguales: Un $dado1";
    }
    elseif ($dado1 < $dado2) {
        echo "El mayor valor es $dado2";
    }
    else 
        echo "El mayor valor es $dado1";

    ?>

</body>
</html>