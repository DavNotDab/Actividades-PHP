<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 2 array de 120</title>
</head>
<body>
    
    <h1>Array de 120 valores</h1>

    <?php

        $array = array();

        for ($i = 0; $i < 120; $i++) {
            array_push($array, $i);
        }

        echo implode("<br>",$array);
    ?>

</body>
</html>