<?php

function sacarFecha(): string {
    setlocale(LC_TIME,"Spanish");
    $dia = strftime("%A %d de %B del %Y ");
    $hora = date("H:i:s");
    return $dia." a las ".$hora;
}

function noCachePHP(): void{
    header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache"); // Sirve para HTTP/1.0 (más antiguo)
}
//noCachePHP();
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Refresh: 10; url=mostrar.php");

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preferencias Guardadas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1><?php echo sacarFecha()?></h1>

    <h3>Con la funcion header() hemos especificado que esta p&aacute;gina no se guarde en cach&eacute;, si no que se llame
    a ella misma desde la p&aacute;gina original cada 10 segundos. Puede comprobarse dej&aacute;ndo la p&aacute;gina sin
    actualizar durante 10 segundos o pulsando sobre Actualizar.</h3>

    <a href="mostrar.php">Actualizar</a>

</body>
</html>