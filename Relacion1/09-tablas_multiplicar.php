<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body></body>

<h1>Tablas de multiplicar</h1>

    <?php

    $numero = 1;

    echo "<table border = 1>";
    
    for ($i = 1; $i <= 10; $i++) {
        echo "<th>Tabla del $i</th>";
    };

    for ($i = 1; $i <= 10; $i++) {
        
        echo "<tr>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>$i X $j = ".$i*$j."</td>";
        };

        echo "</tr>";
    };

    echo "</table>";


    ?>


</body>
</html>