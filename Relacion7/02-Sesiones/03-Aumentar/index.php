<?php

session_start();
if(!isset($_SESSION['numero'])){
    $_SESSION['numero'] = 0;
}
if(isset($_GET['counter']) && $_GET['counter'] == '0'){
    $_SESSION['numero']--;
}
if(isset($_GET['counter']) && $_GET['counter'] == '1'){
    $_SESSION['numero']++;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aumentar Y Disminuir</title>
</head>
<body>
    <h1>El valor es: <?= $_SESSION["numero"]?></h1>
    <a href="index.php?counter=1">Aumentar</a> <br>
    <a href="index.php?counter=0">Disminuir</a> <br>
</body>
</html>
