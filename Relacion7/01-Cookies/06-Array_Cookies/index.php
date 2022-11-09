<?php

function sacarFecha(): string {
    setlocale(LC_TIME,"Spanish");
    $dia = strftime("%A %d de %B del %Y ");
    $hora = date("H:i:s");
    return $dia." a las ".$hora;
}
$veces = "<h3>Bienvenido por primera vez </h3>";
$ultima = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["borrar"])) {
        if(isset($_SERVER["HTTP_COOKIE"])) {
            $cookies = explode(";", $_SERVER["HTTP_COOKIE"]);
            foreach($cookies as $cookie) {
                $partes = explode("=", $cookie);
                $nombre = trim($partes[0]);
                setcookie($nombre, "", time()-1000);
            }
            setcookie("contador", 1);
            setcookie("ultima[0]", sacarFecha());
        }
    } else {
    header("Location: carrito.php");
    }
}
else {
    if(isset($_COOKIE["contador"])){
        $contador = (int)$_COOKIE["contador"];
        $contador ++;
        setcookie("ultima[$contador]", sacarFecha());
        $ultima = $_COOKIE["ultima"];
        $veces = "<h3>Usted ha visitado esta p&aacute;gina $contador veces</h3>";
        setcookie("contador", $contador);
    }
    else{
        $contador = 1;
        setcookie("contador", $contador);
        setcookie("ultima[0]", sacarFecha());
        $ultima = $_COOKIE["ultima"];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aceptar Cookies</title>
</head>
<body style="text-align: center">

    <h1>CONTROL DE VISITAS A LA P&Aacute;GINA CON FECHAS</h1>

    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
        <input type="submit" name="borrar" value="Borrar cookie">
        <input type="submit" name="actualizar" value="Actualizar página">
    </form>

    <div class="azul">
        <p><?php echo $veces;?> </p>
        <p>Últimas visitas: </p>
        <?php
            foreach ($ultima as $key => $value) {
                echo "<p>$value </p>";
            }
        ?>
    </div>

</body>