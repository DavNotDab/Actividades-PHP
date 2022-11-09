<?php

@session_destroy();
@setcookie(session_name(), "", time() - 3600);

$usuarios = ["admin" => "1234", "usuario" => "5678"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["usuario"]) && isset($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = $_POST["password"];
        if (isset($usuarios[$usuario]) && $usuarios[$usuario] == $password) {
            session_start();
            $_SESSION["usuario"] = $usuario;
            header("Location: correcto.php");
        }
        else echo "ERROR DE AUTENTICACIÓN";
    }
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="usuario">Usuario:</label>
        <br/>
        <input type="text" name="usuario" id="usuario"/>
        <br/>
        <label for="password">Contraseña:</label>
        <br/>
        <input type="password" name="password" id="password"/>
        <br/>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
