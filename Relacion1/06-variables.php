<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Tipos de variables</h1>

    <?php

    $pais = "España";
    $habitantes = 47000000;
    $continente = "Europa";

    echo "$pais es ".gettype($pais)."<br>";
    echo "$habitantes es ".gettype($habitantes)."<br>";
    echo "$continente es ".gettype($continente)."<br>";

    ?>



</body>
</html>