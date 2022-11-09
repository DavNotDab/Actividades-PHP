<?php

if (isset($_COOKIE['usuario'])) {
    $nombre = $_COOKIE['usuario'];
    $cookie = "Hola, $nombre. Bienvenid@ a nuestra página web";
    $valor_cookie = "La cookie <b>usuario</b> tiene el valor <b>$nombre</b>";
} else {
    $cookie = "¡No hay ninguna cookie almacenada!";
    $valor_cookie = "";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['actualizar'])) header("Location: carrito.php");


    $nombre = $_POST['nombre'];
    $duracion = (int) $_POST['duracion'];

    if(isset($_POST["crear"])) {
        if(!isset($_COOKIE["usuario"])){
            if(($_POST['nombre'] == "" || $_POST['duracion'] == "")) {
                $cookie = "¡Datos incompletos!";
            } else {
                setcookie("usuario", $nombre, time() + $duracion);
            }
        }
    }
    else if (isset($_POST["borrar"])) {
        if(isset($_COOKIE["usuario"])) {
            setcookie("usuario", "", time() - 100);
            $valor_cookie = "Cookie borrada";
        }
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

    <h1>CREACI&Oacute;N Y DESTRUCCI&Oacute;N DE COOKIES</h1>

    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method='post'>
        <label for="nombre">Nombre de usuario: </label>
        <input type="text" name="nombre" id="nombre"> <br>
        <label for="duracion">Duraci&oacute;n de cookie (entre 1 y 60 segundos): </label>
        <input type="number" name="duracion" id="duracion" min="1" max="60"> <br>
        <input type="submit" name="crear" value="Crear cookie">
        <input type="submit" name="borrar" value="Borrar cookie">
        <input type="submit" name="actualizar" value="Actualizar página">
    </form>

    <p><?php echo $cookie;?> </p>
    <p><?php echo $valor_cookie;?> </p>

</body>